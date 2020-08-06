<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LdvELgZAAAAANd2uF5jlox4tlGQwGNzJyOWfopH';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        // Verified - send email
        if (isset($_POST['name']))
            $name = $_POST['name'];
        if (isset($_POST['email']))
            $email = $_POST['email'];
        if (isset($_POST['message']))
            $message = $_POST['message'];
        if (isset($_POST['subject']))
            $subject = $_POST['subject'];

        $content = "From: $name \n Email: $email \n Message: $message";
        $recipient = "kevin.chao@shianglong";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $message, $mailheader) or die("Error!");
        echo "Email sent!";
    } else {
        // Not verified - show form error
        echo "NO";
    }
}
