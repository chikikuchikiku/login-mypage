<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf8">
    <title>マイページ登録</title>
    <link rel="stylesheet" href="register_confirm.css" type="text/css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>

    <main>
        <div class="confirm">
            <h1>会員登録 確認</h1>
            <p class="message">こちらの内容で登録しても宜しいでしょうか？</p>

            <div class="form-contents">
                <p>氏名 : <?php echo $_POST['name']; ?></p>
                <p>メール : <?php echo $_POST['mail']; ?></p>
                <p>パスワード : <?php echo $_POST['password']; ?></p>
                <p>プロフィール写真 : <?php echo $_FILES['picture']['name']; ?></p>
                <p>コメント : <?php echo $_POST['comments']; ?></p>
            </div>

            <div class="register-confirm">
                <div class="modoru_button">
                    <a href="register.php">戻って修正する</a>
                </div>
                <div class="submit">
                    <form action="register_insert.php" method="post">
                        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                        <input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
                        <input type="hidden" value="<?php echo $_POST['comments']; ?>"
                        name="comments">
                        <input type="submit" value="登録する" class="button2"/>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        copyright ©︎ internous | 4each blog the which provides A to Z about programing.
    </footer>

</body>

</html>
