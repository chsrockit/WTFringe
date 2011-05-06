<?php 
$info = array('GO FUCKING SEE THIS', '', 'see these');
?>

<html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js" > </script>

<body>
<?php 

$int = array_rand($info);
echo $info[$int];
?>
    
</body>
</html>

