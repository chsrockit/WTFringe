<?php 
$info = array('GO FUCKING SEE THIS','Storm the stage after you fucking watch',' Sit quietly and applaud loudly when you fucking watch',' Stage a competing Fringe show so that no one will fucking watch',' Watch your watch when you fucking watch',' How about you fucking watch',' Why don\'t you fucking watch',' Pick the pockets of those who fucking watch',' Bring a friend to fucking watch',' Steal fucking ideas when you fucking watch');
$randint = rand(3040,3400);
$url = 'http://projects.festivalslab.com/2010/api/v1/listings.json?id=festivals2010_'.(string)$randint;
$json = file_get_contents($url);
$json_object = json_decode($json);
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/wtf.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js" ></script>
    <script type="text/javascript" src="js/wtf.js"></script>
  </head>
  <body class="wtf">
    <h1 id="wtf">
	<?$int = array_rand($info);
	echo $info[$int];?>
	</h1>
    <h2 id="eventtitle"><?echo $json_object[0]->event_desc;?></h2>
    <div id="eventinfo">
      <p id="eventdescription"><?echo $json_object[0]->event_info;?></p>
      <dl>
      <dt>Where</dt><dd id="venue"><?echo $json_object[0]->venue_desc;?></dd>
      <dt>When</dt><dd id="time"><?echo $json_object[0]->start_time_hhmm;?></dd>
      <dl>
    </div>
    <ul>
    <li><a id="expanddescription" href="#">I want to read the fucking description</a></li>
    <li><a href="">I don't want to fucking see that</a></li>
    <li><a href="/splash_site/profanity.html">I don't fucking like profanity</a></li>
    </ul>
  </body>
</html>
