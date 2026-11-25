<?php
function smtp_read($socket): string
{
    $response = '';
    while (($line = fgets($socket, 515)) !== false) {
        $response .= $line;
        if (isset($line[3]) && $line[3] === ' ') { break; }
    }
    return $response;
}

function smtp_command($socket, string $command, int $expectedCode): bool
{
    fwrite($socket, $command . "\r\n");
    $response = smtp_read($socket);
    return (int) substr($response, 0, 3) === $expectedCode;
}

function send_enquiry_email(array $enquiry, array $config): bool
{
    if (strpos($config['smtp_username'], 'your-email') !== false || strpos($config['smtp_password'], 'your-') !== false) {
        return false;
    }

    $socket = @stream_socket_client('tcp://' . $config['smtp_host'] . ':' . $config['smtp_port'], $errno, $error, 15);
    if (!$socket) { return false; }
    stream_set_timeout($socket, 15);
    $sent = false;

    try {
        if ((int) substr(smtp_read($socket), 0, 3) !== 220 || !smtp_command($socket, 'EHLO wattsintech.com', 250)) { throw new RuntimeException('SMTP handshake failed'); }
        if (!smtp_command($socket, 'STARTTLS', 220) || !stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) { throw new RuntimeException('SMTP TLS failed'); }
        if (!smtp_command($socket, 'EHLO wattsintech.com', 250) || !smtp_command($socket, 'AUTH LOGIN', 334) || !smtp_command($socket, base64_encode($config['smtp_username']), 334) || !smtp_command($socket, base64_encode($config['smtp_password']), 235)) { throw new RuntimeException('SMTP authentication failed'); }
        if (!smtp_command($socket, 'MAIL FROM:<' . $config['from_email'] . '>', 250) || !smtp_command($socket, 'RCPT TO:<' . $config['notification_email'] . '>', 250) || !smtp_command($socket, 'DATA', 354)) { throw new RuntimeException('SMTP recipient failed'); }

        $subject = 'New website enquiry: ' . ($enquiry['service'] ?: 'General enquiry');
        $body = '<h2>New website enquiry</h2><p><strong>Name:</strong> ' . htmlspecialchars($enquiry['name']) . '</p><p><strong>Email:</strong> ' . htmlspecialchars($enquiry['email']) . '</p><p><strong>Phone:</strong> ' . htmlspecialchars($enquiry['phone'] ?: 'Not provided') . '</p><p><strong>Service:</strong> ' . htmlspecialchars($enquiry['service']) . '</p><p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($enquiry['message'])) . '</p>';
        $headers = 'From: ' . $config['from_name'] . ' <' . $config['from_email'] . ">\r\n" . 'Reply-To: ' . $enquiry['email'] . "\r\n" . 'To: ' . $config['notification_email'] . "\r\n" . 'Subject: ' . $subject . "\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=UTF-8\r\n\r\n";
        fwrite($socket, $headers . $body . "\r\n.\r\n");
        $sent = (int) substr(smtp_read($socket), 0, 3) === 250;
        smtp_command($socket, 'QUIT', 221);
    } catch (Throwable $exception) {
        $sent = false;
    }

    fclose($socket);
    return $sent;
}
