<?php
// ---------- MAIL SEND LOGIC ----------
$message_sent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $to = "dakshithsathishkumar@.com";  // <<< BRO - un email id podu

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $subject = "New Portfolio Contact Message";
    $body = "Name: $name\nEmail: $email\nMessage: $msg";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $message_sent = true;
    } else {
        $message_sent = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e9eef3;
            padding: 50px;
        }

        .container {
            max-width: 450px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color:#333;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #005ec4;
        }

        .success {
            text-align: center;
            color: green;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .error {
            text-align: center;
            color: red;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>

</head>
<body>

<div class="container">

<?php if ($message_sent): ?>
    
    <p class="success">✔ Message Sent Successfully!</p>

<?php else: ?>

    <h2>Contact Me</h2>

    <form action="" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>
    </form>

<?php endif; ?>

</div>

</body>
</html>
