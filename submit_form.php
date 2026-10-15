<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = getenv('CONTACT_EMAIL') ?: 'admin@example.com'; // set CONTACT_EMAIL on the server
    $subject = 'Новое сообщение с формы обратной связи';
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "Спасибо за ваше сообщение! Мы свяжемся с вами в ближайшее время.";
    } else {
        echo "К сожалению, произошла ошибка. Попробуйте снова.";
    }
} else {
    echo "Доступ запрещен.";
}
?>