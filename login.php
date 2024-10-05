<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    session_start()
    ?>

        <form action="session.php" method="post">
            <label for="username">USERNAME</label>
            <input type="text" name="username" id="username">
            <label for="password">PASSWORD</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="LOGIN">

        </form>

</body>
</html>