<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
        $stmt = $pdo -> query("select * from 4each_keijiban");
        ?>
 
        <header>
            
            <div class="logo"><img src="4eachblog_logo.jpg"></div>
            <div class="headerList">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            
            </div>
        
        </header>
        
        <main>
            <h2>プログラミングに役立つ掲示板　</h2>
            <div class= "content-wrapper">
                <form method="post" action="insert.php" class="contentA">
                    <h3>入力フォーム</h3>
                    <label><p>ハンドルネーム</p></label>
                    <input type="text" class="text" size=35px name="handlename" >
                    
                    <label><p>タイトル</p></label>
                    <input type="text" class="text" size=35px name="title">
                    
                    <label><p>コメント</p></label>
                    <textarea class="text" cols=35 rows=7 name="comments"></textarea>
                    <br>
                    <input type="submit" class="submit" value="投稿する">
                    
                </form>
                
                 <?php 
                foreach($stmt as $row){
                    echo "<div class='contentA'>";
                    echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<p>".$row['comments']."</p>";
                    echo "<p>posted by ". $row['handlename']."</p>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
               
                </div>
            
                <div class="contentB">
                    <div class="side">
                        <h3>人気の記事</h3>
                            <ul>
                                <li>PHPオススメ本</li>
                                <li>PHP MyAdminの使い方</li>
                                <li>今人気のエディタ Top5</li>
                                <li>HTMLの基礎</li>
                            </ul>
                    </div>
                    <div class="side">
                        <h3>オススメリンク</h3>
                            <ul>
                                <li>インターノウス株式会社</li>
                                <li>XAMPPのダウンロード</li>
                                <li>Eclipseのダウンロード</li>
                                <li>Bracketsのダウンロード</li>
                            </ul>
                    </div>
                    <div class="side">
                        <h3>カテゴリ</h3>
                            <ul>
                                <li>HTML</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>javaScript</li>
                            </ul>
                    </div>
            
                </div>
            </div>
        
        
        
        </main>
        
        <footer>
            copyright © internous | 4each blog the which provides A to Z about programming.
        
        </footer>
    
    </body>
    
</html>