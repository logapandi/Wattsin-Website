<?php

// ==========================================
// WATTSIN TECHNOLOGIES - CONTACT FORM
// PHPMailer SMTP EMAIL INTEGRATION
// ==========================================

header('Content-Type: application/json; charset=UTF-8');

// Only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);

    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);

    exit;
}


// ==========================================
// PHPMailer Files
// ==========================================



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../includes/mail/Exception.php';
require_once __DIR__ . '/../includes/mail/PHPMailer.php';
require_once __DIR__ . '/../includes/mail/SMTP.php';

// ==========================================
// SMTP CONFIGURATION
// ==========================================

// Replace with your actual email credentials

$smtpHost = 'smtp.gmail.com';

$smtpUsername = 'clicsoniccbe@gmail.com';

$smtpPassword = 'wtkhwldigwaydnt';

$smtpPort = 587;


// Email where enquiries should be received
$adminEmail = 'clicsoniccbe@gmail.com';

$companyName = 'Wattsin Technologies';


// ==========================================
// INPUT VALIDATION
// ==========================================

$name = trim($_POST['name'] ?? '');

$email = trim($_POST['email'] ?? '');

$phone = trim($_POST['phone'] ?? '');

$service = trim($_POST['service'] ?? '');

$message = trim($_POST['message'] ?? '');

$website = trim($_POST['website'] ?? '');


// Honeypot spam protection
if ($website !== '') {
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your enquiry.'
    ]);

    exit;
}


// Required fields validation
if (
    $name === '' ||
    $email === '' ||
    $service === '' ||
    $message === ''
) {
    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields.'
    ]);

    exit;
}


// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address.'
    ]);

    exit;
}


// Length validation
if (
    strlen($name) > 150 ||
    strlen($email) > 254 ||
    strlen($phone) > 30 ||
    strlen($service) > 150 ||
    strlen($message) > 5000
) {

    http_response_code(422);

    echo json_encode([
        'success' => false,
        'message' => 'Some form fields exceed the allowed length.'
    ]);

    exit;
}


// ==========================================
// SEND EMAIL
// ==========================================

$mail = new PHPMailer(true);

try {

    // SMTP Settings
    $mail->isSMTP();

    $mail->Host = $smtpHost;

    $mail->SMTPAuth = true;

    $mail->Username = $smtpUsername;

    $mail->Password = $smtpPassword;

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = $smtpPort;

    $mail->CharSet = 'UTF-8';


    // Sender Details
    $mail->setFrom(
        $smtpUsername,
        $companyName . ' Website'
    );


    // Receiver Details
    $mail->addAddress(
        $adminEmail,
        $companyName
    );


    // Reply to customer
    $mail->addReplyTo(
        $email,
        $name
    );


    // Email Subject
    $mail->isHTML(true);

    $mail->Subject = 'New Website Enquiry - ' . $service;


    // Secure HTML output
    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

    $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

    $safePhone = htmlspecialchars($phone ?: 'Not provided', ENT_QUOTES, 'UTF-8');

    $safeService = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');

    $safeMessage = nl2br(
        htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
    );


    // Email Template
    $mail->Body = '

    <div style="font-family:Arial,sans-serif;background:#f4f6f9;padding:25px;">

        <div style="max-width:650px;margin:auto;background:#ffffff;border-radius:10px;overflow:hidden;">

            <div style="background:#0B1F3A;padding:25px;text-align:center;">

                <h2 style="color:#ffffff;margin:0;">
                    Wattsin Technologies
                </h2>

                <p style="color:#F58220;margin:8px 0 0;">
                    New Website Enquiry
                </p>

            </div>

            <div style="padding:30px;">

                <h3 style="color:#0B1F3A;margin-top:0;">
                    Customer Enquiry Details
                </h3>

                <table width="100%" cellpadding="12" cellspacing="0"
                       style="border-collapse:collapse;font-size:14px;">

                    <tr>
                        <td style="background:#f4f6f9;font-weight:bold;width:35%;">
                            Full Name
                        </td>
                        <td>' . $safeName . '</td>
                    </tr>

                    <tr>
                        <td style="background:#f4f6f9;font-weight:bold;">
                            Email Address
                        </td>
                        <td>' . $safeEmail . '</td>
                    </tr>

                    <tr>
                        <td style="background:#f4f6f9;font-weight:bold;">
                            Phone Number
                        </td>
                        <td>' . $safePhone . '</td>
                    </tr>

                    <tr>
                        <td style="background:#f4f6f9;font-weight:bold;">
                            Service Required
                        </td>
                        <td>' . $safeService . '</td>
                    </tr>

                    <tr>
                        <td style="background:#f4f6f9;font-weight:bold;">
                            Project Details
                        </td>
                        <td>' . $safeMessage . '</td>
                    </tr>

                </table>

                <p style="margin-top:25px;color:#777;font-size:12px;">
                    This enquiry was submitted through the Wattsin Technologies website.
                </p>

            </div>

        </div>

    </div>

    ';


    // Plain text fallback
    $mail->AltBody =
        "New Website Enquiry\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Service: $service\n" .
        "Message: $message";


    // Send Email
    $mail->send();


    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your enquiry has been submitted successfully. We will contact you soon.'
    ]);

    exit;


} catch (Exception $e) {

    error_log('Wattsin Enquiry Mail Error: ' . $mail->ErrorInfo);

    http_response_code(500);

    echo json_encode([
        'success' => false,
        'message' => 'Unable to send your enquiry right now. Please try again later.'
    ]);

    exit;

}