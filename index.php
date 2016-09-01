<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Efficientbazaar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="result.php" method="post" enctype="multipart/form-data">
<input type="file" name="filename" id="fileToUpload" required="required">
<select name="process" required="required">
<option>select</option>
  <option value="SORT_DESC">SORT DESC</option>
  <option value="SORT_ASC" selected="selected">SORT ASC</option>
</select>
<select name="method" required="required">
  <option value="id">id</option>
  <option value="Vendor">Vendor</option>
  <option value="Product Name">Product Name</option>
  <option value="Product Code">Product Code</option>
  <option value="unit">unit</option>
  <option value="Vendor">Vendor</option>
  <option value="Weight">Weight</option>
  <option value="price" selected="selected">price</option>
</select>
</select>
<input type="submit" value="Upload CSV" name="submit">
</form>
</body>
</html>
