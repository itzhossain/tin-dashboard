<?php
$tin = $_POST['tin'];
$name = $_POST['name'];
$father = $_POST['father'];
$address = $_POST['address'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Print</title>
</head>
<body>

<h2>TIN Certificate (Demo)</h2>

<p><b>TIN:</b> <?php echo $tin; ?></p>
<p><b>Name:</b> <?php echo $name; ?></p>
<p><b>Father:</b> <?php echo $father; ?></p>
<p><b>Address:</b> <?php echo $address; ?></p>

<button onclick="window.print()">🖨️ Print</button>

</body>
</html>