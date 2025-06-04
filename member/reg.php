<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'?>
    <main>
        <h1>會員註冊</h1>
        <form action="">
            <div>
                <label for="name">使用者名稱</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">電子郵件</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div>
                <label for="acc">帳號</label>
                <input type="text" id="acc" name="acc" required>
            </div>
            <div>
                <label for="pw">密碼</label>
                <input type="password" id="pw" name="pw" required>
            </div>
            <div>
                <label for="birthday">生日</label>
                <input type="date" id="birthday" name="birthday" required>
            </div>
            <div>
                <button type="submit">註冊</button>
                <button type="reset">重置</button>
            </div>
        </form>
    </main>
    <?php include 'footer.php'?>

</body>
</html>