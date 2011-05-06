<?php 
$info = array('GO FUCKING SEE THIS','Storm the stage after you fucking watch','
Sit quietly and applaud loudly when you fucking watch','
Stage a competing Fringe show so that no one will fucking watch','
Watch your watch when you fucking watch','
How about you fucking watch','
Why don\'t you fucking watch','
Pick the pockets of those who fucking watch','
Bring a friend to fucking watch','
Steal fucking ideas when you fucking watch');

$randint = rand(3040,3400);
$url = 'http://projects.festivalslab.com/2010/api/v1/listings.json?id=festivals2010_'.(string)$randint;
$json = file_get_contents($url);
$json_object = json_decode($json);
?>
<!doctype html>
<html>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="css/wtf.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js" > </script>

<body>

<div>
<?php 

$int = array_rand($info);
echo $info[$int];
// echo $json;
echo $json_object[0]->event_code;
echo $json_object[0]->event_code;
echo $json_object[0]->event_code;
echo $json_object[0]->event_code;

?>
</div>    
</body>
</html>

