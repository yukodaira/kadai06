<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>アンケート</title>
</head>

<body>
    <div class="menu">
        <h3>>好きな日本酒の種類についてお答えください。</h3>
        <!-- <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul> -->
    </div>
    <!-- <P>※post_confirm.phpにpostで送ってください。</P> -->

    <form action="kadaiwrite.php" method="post">
        お名前: <input type="text" name="namae">
        EMAIL: <input type="text" name="email">
        ご出身: <input type="text" name="birthPlace">
        好きな日本酒: <input type="text" name="RiceWine">
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
</body>

</html>
