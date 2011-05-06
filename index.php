<?php 
$info = array('GO FUCKING SEE THIS', '', 'see these');
?>
<!doctype html>
<html>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="css/wtf.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js" > </script>

<body>
<?php 

$int = array_rand($info);
echo $info[$int];
?>
    
</body>
</html>

