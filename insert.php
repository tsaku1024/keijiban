<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments) values('".$_POST['handlename']."' , '".$_POST['title']."' , '".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");
?>

<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォームを作る</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    
   <body>
       <h1>お問い合わせフォーム</h1>
       
       <div class="confirm">
           <p>お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡申し上げます。</p>
       </div>
   </body>
</html>