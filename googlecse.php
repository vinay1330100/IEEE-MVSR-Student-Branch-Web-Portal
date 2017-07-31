<!--
  copyright (c) 2012 Google inc.

  You are free to copy and use this sample.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<title>
googlecse
</title>
<link href="css/style.css" rel="stylesheet">

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Custom Search Element API Example</title>
    <script src="https://www.google.com/jsapi"></script>
    <script>
  (function() {
    var cx = '002181909605457848474:xoucixk_oj8';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="cse" style="width:50%;">Loading...</div>
  </body>
</html>