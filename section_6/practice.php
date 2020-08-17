<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_POST['submit'])) {
      echo 'User input text is: ' . $_POST['textInput'];
    } ?>
    <form action="" method="post">
      <label for="textInput">Enter text:</label>
      <input type="text" id="textInput" name="textInput">
      <input name="submit" type="submit">
    </form>
</body>
</html>