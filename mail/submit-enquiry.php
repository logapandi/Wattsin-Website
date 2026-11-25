<?php
require_once __DIR__ . '/../admin/includes/auth.php';
require_once __DIR__ . '/mailer.php';
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST requests are accepted.']);
    exit;
}

if (!empty($_POST['website'])) {
    echo json_encode(['success' => true, 'message' => 'Thank you. Your enquiry was received.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service = trim($_POST['service'] ?? 'General enquiry');
$message = trim($_POST['message'] ?? '');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please enter your name, a valid email, and your project details.']);
    exit;
}

$enquiries = read_json_file(ENQUIRIES_FILE);
$enquiry = ['id' => bin2hex(random_bytes(12)), 'name' => $name, 'email' => $email, 'phone' => $phone, 'service' => $service, 'message' => $message, 'source' => basename($_SERVER['HTTP_REFERER'] ?? 'website'), 'created_at' => date('c')];
array_unshift($enquiries, $enquiry);
if (!write_json_file(ENQUIRIES_FILE, $enquiries)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'We could not save your enquiry. Please call us directly.']);
    exit;
}

$config = require __DIR__ . '/config.php';
$emailSent = send_enquiry_email($enquiry, $config);
$message = $emailSent ? 'Thank you. Your enquiry has been sent successfully.' : 'Thank you. Your enquiry was received and saved. We will contact you shortly.';
echo json_encode(['success' => true, 'message' => $message, 'email_sent' => $emailSent]);
