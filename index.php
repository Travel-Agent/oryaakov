<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>אור יעקב - מורה לגיטרה בתל אביב</title>
  <meta name="description" content="אור יעקב, מורה מקצועי, סבלני, צעיר ואנרגטי לגיטרה. מקבל מתחילים, מתקדמים וכל מי שבוער לו לדעת לנגן. מלמד במרכז תל אביב ונותן תמיד שעה מלאה. 100 שח לשיעור" />
  <meta name="Content-Type" content="text/html; charset=UTF-8" />
  <meta property="og:url" content="http://www.oryaakov.co.il/" />
  <meta property="og:type" content="musician" />
  <meta property="og:image" content="http://www.oryaakov.co.il/thumb.jpg" />
  <meta property="og:title" content="אור יעקב - מורה לגיטרה בתל אביב" />
  <meta property="fb:admins" content="100000351692437,672812932" />
  <meta name="author" content="Yoav Matchulsky, yoav@matchulsky.com" />

  <link href="fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />  
  <link href="style.css" rel="stylesheet" type="text/css" />  
  
  <script type="text/javascript" src="jquery-1.6.1.min.js"></script>
  <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript">
  $(function () {
    $('.video').fancybox({
      'type' : 'iframe',
      'width' : 700,
      'height' : 436
    });

    $(window).bind('resize', function () {
      var wrapper = $('#wrapper');
      var top = ($(window).height() - wrapper.height()) / 2;
      wrapper.css('top', top);
    }).resize();
  });
  </script>

	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24629845-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript';
	ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
	'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
		})();

	</script>

  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=251716358172621";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div id="wrapper">
    <img src="oryaakov.png" class="logo" alt="אור יעקב" />
    <img src="guitar-teacher-in-tel-aviv.png" class="slogan" alt="מורה
לגיטרה בתל אביב" />  
    <p class="content">
      מורה מקצועי, סבלני, צעיר ואנרגטי מקבל מתחילים, מתקדמים וכל מי שבוער לו לדעת לנגן. נתחיל מהכרת הגיטרה, טכניקות פריטה אצבעות\מפרט, אקורדים, יסודות מוזיקליים בסיסיים והפקת צליל נכונה, נעבור דרך הרמוניה ותיאוריה, פיתוח יכולות אלתור, שיפור הטכניקה וגיוון יכולות הסולו ונגיע עד בחירת מגברים ואפקטים, שיפור שרשרת הסאונד, השתלבות כגיטריסט בהרכב והקלטה נכונה של גיטרות. מלמד במרכז תל אביב ונותן תמיד שעה מלאה (לא 45 דקות, לא 50 דקות ולא נעליים). <strong>100 ש"ח לשיעור.</strong>
    </p>
    <ul class="links">
      <li><address><span class="telephone">054-4999612</span></address></li> |
      <li><a href="mailto:oryaakov@gmail.com" onclick="_gaq.push(['_trackEvent', 'links', 'click', 'mail']);">דוא"ל</a></li> |
      <li><a href="http://www.youtube.com/embed/xg0gHRlP6hc?autoplay=1" class="video" onclick="_gaq.push(['_trackEvent', 'links', 'click', 'video']);">וידיאו</a></li> |
      <li><a href="http://www.facebook.com/people/Or-Yaakov/100000351692437" target="_blank"  onclick="_gaq.push(['_trackEvent', 'links', 'click', 'facebook']);">פייסבוק</a></li>
    </ul>

    <div class="social-buttons">
      <div class="facebook-like-wrapper">
        <div class="fb-like" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
      </div>

      <div class="google-plus-wrapper">
        <g:plusone size="small"></g:plusone>
      </div>
    </div>

  </div>
</body>
</html>
