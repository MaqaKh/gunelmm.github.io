<?php
$to_email = 'info@sudvezi.az';
$subject = 'Sudvezi.az Contact Submission';
$message = $_POST['message'];
$headers = 'From: ' . $_POST['name'] . ' <' . $_POST['email'] . '>' . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to_email, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Error sending email.';
}
?>
