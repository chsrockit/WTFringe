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
    <title>What the fuck should I watch tonight?</title>
  <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/wtf.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js" ></script>
<script type="text/javascript" src="js/wtf.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23181668-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </head>
  <body class="wtf">
    <h1 id="wtf">
	<?$int = array_rand($info);
	echo $info[$int];?>
	</h1>
    <div id="event">
      <h2 id="eventtitle"><?echo $json_object[0]->event_desc;?></a></h2>
      <div id="eventinfo">
        <p id="eventdescription"><?echo $json_object[0]->event_info;?></p>
        <dl>
        <dt>Where</dt><dd id="venue"><?echo $json_object[0]->venue_desc;?></dd>
        <dt>When</dt><dd id="time"><?echo $json_object[0]->start_time_hhmm;?></dd>
        <dl>
      </div>
    </div>
    <ul class="nav">
    <li><a id="expanddescription" href="#">I want to read the fucking description</a></li>
    <li><a href="">I don't want to fucking see that</a></li>
    </ul>
    <div id="profanity"><a href="/splash_site/profanity.html">I don't fucking like profanity</a></div>
    <div id="fuckers">This site was fucking made by <a href="http://github.com/chsrockit/" target="_blank">chsrockit!</a> at <a href="http://www.culturehackscotland.com" target="_blank">chs11</a>.</div>
  </body>
</html>
