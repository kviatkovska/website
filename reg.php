<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
   <title>Вхід</title>
   <link rel="icon" href="https://img.icons8.com/metro/26/000000/scales.png" type="image/x-icon"/>
   <link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body>
 <?php require "blocks/header.php" ?> 
 <?php require "blocks/menu.php" ?>
<div class="inputtext"><h3>Вхід у систему для адвоката:</h3><br>
<form action="login.php" method="post">		
		<input type="text" name="login" value="" placeholder="Ваш логін*" required><br>
		<input type="text" name="password" value="" placeholder="Ваш пароль*" required><br>
		<input type="submit" value="Увійти">
</form>
</div>
 <?php require "blocks/footer.php" ?>
</body>
</html>