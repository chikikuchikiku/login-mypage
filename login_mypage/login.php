<?php
session_start();
if(isset($_SESSION['id'])) {
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>


    <main>
        <form method="post" action="mypage.php">
            <div class="form-contents">
                <div class="mail">
                    <p>メールアドレス</p>
                    <input type="text" class="formbox" size="40" value="<?php if(isset($_COOKIE['login_keep'])){echo $_COOKIE['mail'];} ?>" name="mail">
                </div>

                <div class="password">
                    <p>パスワード</p>
                    <input type="password" size="40" class="formbox" value="<?php if(isset($_COOKIE['login_keep'])){echo $_COOKIE['password'];} ?>" name="password">
                </div>
            </div>

            <div class="login_check">
                <p><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep"
                <?php if(isset($_COOKIE['login_keep'])){echo "checked='checked'";} ?>>ログイン状態を保持する</p>
            </div>
            <div class="login_button">
                <input type="submit" class="submit_button" size="35" value="ログイン">
            </div>
        </form>
    </main>

    <footer>
        ©︎2018 InterNous.inc.All rights reserved
    </footer>
</body>

</html>
