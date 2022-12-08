<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $API_KEY = "TOKEN";//Bot xabar yuboradigan tokeni
    $admin = 1744385138;//Qaysi odamga jo'natiladigan ID

    $text = urlencode("Xabar keldi.\nYuboruvchi ismi: $name\nEmail | TG username: $email\nMavzu: $subject\nXabari: $message");
    $url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
    file_get_contents($url);
?>