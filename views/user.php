

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POST Form Example</title>
</head>
<body>

    <h2>Submit Form Using POST Method</h2>
    
    <span><?php echo $_ENV['APP_NAME'];?></span>

    <form action="/insert" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
