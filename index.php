<html>
<head>
<title>Keep accounts</title>
<meta charset="utf-8">
<meta lang="zh-cn">
<link type="text/css" rel="stylesheet" href="css/ui.css">
</head>
<body>
<div class="div_all">
<div class="div_left">
<?php  
	echo "This website is built for keeping accounts.";
?>
<form method="post" action="script.cgi">
  <ul>
    <li><label for=name>Name:</label>
        <input id=name name=name></li>
    <li><label for=email>Email:</label>
        <input id=email name=email type=email></li>
    <li><label for=tel>Telephone:</label> 
        <input id=tel name=tel type=tel></li>
    <li><label for=url>Homepage:</label>
        <input id=url name=url type=url></li>
    <li><label for=bday>Birthday:</label>
        <input id=bday name=bday type=date></li>
  </ul>
</form>
</div>
<div class="div_right">
</div>
</div>
</body>
</html>