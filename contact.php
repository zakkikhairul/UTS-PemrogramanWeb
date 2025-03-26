<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "2310631170122@student.unsika.ac.id";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan Anda telah dikirim!";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
