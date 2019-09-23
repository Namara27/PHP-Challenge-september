<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulier</title>
</head>
<body>
<form action="opdracht4.php" method="post">
    <label>Voeg toe:</label>
    <input type="text" name="lijst">
    <input type="submit" name="knop" value="Verstuur">

</form>
</body>
</html>

<?php
echo "<ul>"."<li>" . $_POST['lijst'] . "</li>"."</ul>"."<br>";
?>
