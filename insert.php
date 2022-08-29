<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=php_lesson01; host=localhost;", "root", "");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."', '".$_POST['mail']."', '".$_POST['age']."', '".$_POST['comments']."');");

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=yes"
    />
    <title>お問い合わせフォームを作る</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style2.css" />
  </head>
  <body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
      <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。</p>
    </div>
    
    <a class="button1" href="index.html">トップ</a>
  </body>
</html>
