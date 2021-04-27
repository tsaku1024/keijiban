<!DOCTYPE html>
<html lang=“ja”>
    <head>
        <meta charset=“UTF-8”>
        <title>4eachblog</title>
        <link rel="stylesheet" type="text/css" href="style.css">
   </head>
    <body>
        <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root","");
            $stmt = $pdo->query("select * from 4each_keijiban");
        
            
        ?>
        <img src="4eachblog_logo.jpg" alt="ロゴ">
        <header>
            <ul class="list">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>
            <div class="main-panel">
                <div class="left">
                    <h1>プログラムに役立つ掲示板</h1>
                    <div class="formbox">
                        <h2>入力フォーム</h2>
                        <form method="post" action="insert.php">
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type="text" class="text" size="35" name="handlename">
                            </div>

                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type="text" class="text" size = "35" name = "title">
                            </div>

                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea cols="70" rows="12" name="comments"></textarea>
                            </div>
                            
                            <div>
                                <input type="submit" class="submit" value="投稿する">
                            </div>
                        </form> 
                    </div> 
                    <?php
                        foreach($stmt as $row){
                            echo '<div class="kiji">';
                                echo "<h3>".$row['title']."</h3>";
                           
                                echo "<div class='contents'>".$row['comments']."</div>";
                                echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                            echo "</div>";
                        }
                    ?> 
                </div>
                <div class="right">
                    <h1>人気の記事</h1>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ</li>
                        <li>HTMKの基礎</li>
                    </ul>
                    <h1>オススメリンク</h1>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                    <h1>カテゴリ</h1>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>
        <footer>
            copyright© internous | 4each blog the which provides A to Z about programming.
        </footer>
    </body>

</html>