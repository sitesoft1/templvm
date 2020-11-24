<!DOCTYPE html>
<!--
    Landed by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>History, Vision and Goals - TEMPLVM•ORG</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:image" content="http://templvm.org/images/what_is_templvm.jpg"/>
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/p_main.css" />
        <link rel="stylesheet" href="css/altar.css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>




            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>
            <!-- Go to www.addthis.com/dashboard to customize your tools --> 
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5923f166e4a2d866"></script>
            <script src="http://code.jquery.com/jquery-latest.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    <!-- HTML-код модального окна-->
</html>

<?php
require_once "recaptchalib.php";
//секретный ключ
$secret = "6Lf9YTQUAAAAALR4ec129l2eDEtZFG1bBWpiBCWF";
//ответ
$response = null;
//проверка секретного ключа
$reCaptcha = new ReCaptcha($secret);
 
if (!empty($_POST)) {
 
    //Валидация $_POST['name'] и $_POST['email']
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
 
   // if ($response != null && $response->success && isset($_POST['email'])) {
    if (isset($_POST['email'])) {
        echo '<div class = "send-text">Все хорошо.</div>';
         //Проверка отправилось ли наше поля и не пустые ли они
            $to = 'sergeilunev79@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
            $subject = 'Новый подписчик'; //Загаловок сообщения
            $message = '
                    <html>
                        <head>
                            <title>'.$subject.'</title>
                        </head>
                        <body>
                            <p>У вас новый подписчик:</p>
                            <p>Email подписчика: '.$_POST['email'].'</p>                        
                        </body>
                    </html>'; //Текст нащего сообщения можно использовать HTML теги
            $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
            $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
            mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
            $file=fopen('message.txt','a+');
            fputs($file,$_POST['email'] . PHP_EOL);
            fclose($file);
//Проверка отправилось ли наше поля и не пустые ли они
            $email = $_POST['email'];
            $to = $email; //Почта получателя, через запятую можно указать сколько угодно адресов
            $subject = 'Subscribtion to templvm.com'; //Загаловок сообщения
            $message = '
                    <html>
                        <head>
                            <title>'.$subject.'</title>
                        </head>
                        <body>
                            <p>You have just successfully subscribed to templvm.org</p>                       
                        </body>
                    </html>';
            $headers  = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: TEMPLVM ORG <info@templvm.org>\r\n";
            mail($to, $subject, $message, $headers);
            header("location:index.php");
    } else {
        echo '<div class = "send-text">Kapcha is not true. Go to <a href = "http://templvm.org">home</a> and try again</div>';
    
}
}

?>
