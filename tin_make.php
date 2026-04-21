<?php
$tin = rand(100000000000,999999999999);
?>

<!DOCTYPE html>
<html>
<head>
<title>TIN Make</title>
</head>
<body style="background:#111; color:white;">

<h2>TIN Make Form</h2>

<form method="POST" action="tin_print.php">

TIN:<br>
<input type="text" name="tin" value="<?php echo $tin; ?>"><br><br>

Name:<br>
<input type="text" name="name"><br><br>

Father Name:<br>
<input type="text" name="father"><br><br>

Address:<br>
<input type="text" name="address"><br><br>

<button type="submit">Submit</button>

</form>

</body>
</html>