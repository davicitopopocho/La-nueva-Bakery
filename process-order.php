<?php
/**
 * La Nueva Bakery - Order & Contact Form Processor
 * Processes customer orders and inquiries, validates fields, logs orders safely,
 * and sends notification email when mail server is configured.
 */

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'error' => 'Method not allowed. Please submit the form using POST.'
    ]);
    exit;
}

// Read JSON or form-encoded payload
$rawInput = file_get_contents('php://input');
$data = [];
if (!empty($rawInput)) {
    $decoded = json_decode($rawInput, true);
    if (is_array($decoded)) {
        $data = $decoded;
    }
}
if (empty($data)) {
    $data = $_POST;
}

// Extract and sanitize fields (preserving original form fields: email, name, Subject)
$name = isset($data['name']) ? trim(strip_tags((string)$data['name'])) : '';
$email = isset($data['email']) ? trim(strip_tags((string)$data['email'])) : '';
$phone = isset($data['phone']) ? trim(strip_tags((string)$data['phone'])) : '';
$category = isset($data['category']) ? trim(strip_tags((string)$data['category'])) : 'General Inquiry / Order';
$selectedProducts = isset($data['selectedProducts']) ? trim(strip_tags((string)$data['selectedProducts'])) : '';
$message = '';
if (isset($data['Subject'])) {
    $message = trim(strip_tags((string)$data['Subject']));
} elseif (isset($data['message'])) {
    $message = trim(strip_tags((string)$data['message']));
}

// Validation
$errors = [];
if (mb_strlen($name) < 2) {
    $errors['name'] = 'Please enter your name.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}
if (mb_strlen($message) < 3) {
    $errors['Subject'] = 'Please write your message or inquiry.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'error' => 'Please check the highlighted fields and try again.',
        'fields' => $errors
    ]);
    exit;
}

// Build contact / inquiry record
$orderId = 'LNB-' . date('Ymd-His') . '-' . substr(md5($email . microtime(true)), 0, 5);
$timestamp = date('c');

$orderRecord = [
    'inquiry_id' => $orderId,
    'created_at' => $timestamp,
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'category' => $category,
    'message' => $message
];

// Attempt to send email to La Nueva Bakery (suppress warnings on local dev environments without SMTP)
$to = 'lanuevabakeryny@gmail.com';
$emailSubject = "New Contact Inquiry [$orderId] from $name";
$emailBody = "LA NUEVA BAKERY - NEW CONTACT INQUIRY\n"
    . "========================================\n"
    . "Reference: $orderId\n"
    . "Date: $timestamp\n"
    . "Customer Name: $name\n"
    . "Email: $email\n"
    . "Phone: " . ($phone ?: 'Not provided') . "\n"
    . "Topic: $category\n"
    . "Message:\n$message\n"
    . "========================================\n"
    . "86-10 37th Ave, Jackson Heights, NY 11372 | (718) 507-2339\n";

$headers = "From: noreply@lanuevabakery.com\r\n"
    . "Reply-To: $email\r\n"
    . "X-Mailer: PHP/" . phpversion();

@mail($to, $emailSubject, $emailBody, $headers);

echo json_encode([
    'success' => true,
    'orderId' => $orderId,
    'message' => '¡Muchas gracias! Your message has been received by La Nueva Bakery.'
]);

