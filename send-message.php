<?php

if ((isset($_POST['name'])) && (isset($_POST['email']) && $_POST['content'] != "") && $_POST['url'] == "") {
    $to = 'damian.bronczyk@gmail.com';
    $subject = 'Nowa wiadomość ze strony';
    $message = '
        <html>
            <head>
                <title>New message</title>
            </head>
            <body>
                <p><strong>Name:</strong> ' . $_POST['name'] . '</p>
                <p><strong>Email:</strong> ' . $_POST['email'] . '</p>
                <p><strong>Message:</strong> ' . $_POST['content'] . '</p>
            </body>
        </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Hire ME! <hire@dbronczyk.pl>\r\n";
    mail($to, $subject, $message, $headers);

    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}

?>


