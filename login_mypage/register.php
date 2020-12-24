<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" href="register.css" type="text/css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>


    <main>
        <form method="post" action="register_confirm.php" enctype="multipart/form-data">
            <h1>会員登録</h1>
            <div class="form-contents">
                <p><span>必須</span>氏名</p>
                <input type="text" class="text" size="40"name="name" required/>
                <p><span>必須</span>メールアドレス</p>
                <input type="text" class="text" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                <p><span>必須</span>パスワード</p>
                <input type="password" size="40" class="text" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required/>
                <p><span>必須</span>パスワード確認</p>
                <input type="password" class="text" name="confirm_password" id="confirm" oninput="ConfirmPassword(this)" required/>
                <p>プロフィール写真</p>
                <input type="hidden" name="max_file_size" value="1000000"/>
                <input type="file" size="40" name="picture" class="picture">
                <p>コメント</p>
                <textarea cols="50" rows="7" class="comment" name="comments"></textarea>
            </div>
            <div class="register">
                <input type="submit" value="登録する" class="button1" size="35"/>
            </div>
        </form>
    </main>

    <footer>
        ©︎2018 InterNous.inc.All rights reserved
    </footer>

    <script>
        function ConfirmPassword(confirm){
            var input1 = password.value;
            var input2 = confirm.value;
            if(input1 != input2) {
            confirm.setCustomValidity("パスワードが一致しません。");
            }else{
            confirm.setCustomValidity('');
            }
        }
    </script>

</body>

</html>
