<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//DE" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>LiveTest</title>
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<script type="text/javascript" charset="utf-8" src="/js/jqtouch/jquery.1.4.4.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-463885-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="wrap">
     <div id="phmlabslogo">
        <img src="/img/logoGrunerPhmLabs.png"/>
    </div>
    <a href="/">
        <div id="logo" class="logo">
    </div>
    </a>
     <a href="/Dokumentation/Installation.html">
        <div id="installation" class="installation">
    </div>
    </a>

<div class="content">
    <ul class="menu level1">
        <?php $subMenu = renderMenu( $menu, 0 ); ?>
    </ul>
    <ul class="menu level2">
        <?php $subSubMenu = renderMenu( $subMenu, 1 ); ?>
    </ul>
    <ul class="menu level3">
        <?php renderMenu( $subSubMenu, 2 ); ?>
    </ul>
</div>
<div id="mainColumn" class="content">
  <?php echo $content->getHtml(); ?>

  <div id="comments">
  <div id="disqus_thread"></div>
  <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'livetest'; // required: replace example with your forum shortname

    // The following are highly recommended additional parameters. Remove the slashes in front to use.
    // var disqus_identifier = 'unique_dynamic_id_1234';
    // var disqus_url = 'http://example.com/permalink-to-page.html';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
</div>
<div id="rightColumn">
    <h3 class="right headline headline3">Inhaltsverzeichnis</h3>
    <div class="boxright">
        <h3 class="headline4"><?php echo str_replace( '-', ' ', $path[count($path)-1] ); ?> </h3>
        <ul class="contentlist">
	    <?php $headlines = $content->getHeadlines(); ?>
            <?php foreach ( $headlines as $headline ): ?>
             <li><a href="#<?php echo $headline; ?>"><?php echo $headline; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
   <div class="border"></div>
       <h3 class="right headline headline3">Statistiken</h3>
         <?php echo renderStatistics(); ?>
    <div class="border"></div>
       <h3 class="right headline headline3">Referenzen</h3>
       <div class="boxright">

        <ul class="boximages">
        <li><img src="/img/referenceexample.png"/></li>
        <li><img src="/img/referenceexample.png"/></li>
        <li><img src="/img/referenceexample.png"/></li>
        <li><img src="/img/referenceexample.png"/></li>
        <li><img src="/img/referenceexample.png"/></li>
        <li><img src="/img/referenceexample.png"/></li>
        </ul>
    </div>
</div>
<div id="footer" class="rounded">
  LiveTest ist frei nutzbar. Ansprechpartner:
  <a class="mail" href="mailto:">Nils Langner</a> (Carl-Petersen-Str. 101b, 20535 Hamburg)  <!-- und </br>
  <a class="mail" href="mailto:">Mike Lohmann</a> (Schulstieg 1, 21714 Hammah) -->
  | <a target="_blank" href="https://github.com/phmLabs-Documentation/LiveTest_German/wiki/<?php echo ($page); ?>/_edit"> edit</a>
</div>
</div>
</body>
</html>
