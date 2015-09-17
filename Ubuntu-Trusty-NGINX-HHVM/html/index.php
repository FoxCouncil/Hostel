<?PHP
date_default_timezone_set('UTC');
?><!doctype html>
<html>
  <head>
    <title>FoxCouncil/Hostel - Ubuntu-Trusty-NGINX-HHVM</title>
    <style>
      body { font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif; background-color: #000; color: #EEE; }
      h2 { margin-top: 0px; margin-bottom: 0px; }
      a:link, a:visited, a:active { color: #F00; text-decoration: none; }
      a:hover { text-decoration: underline; }
    </style>
  </head>
  <body>
    <h1>It's working!</h1>

    <h2>NGINX VER: <?PHP echo `/usr/sbin/nginx -v 2>&1`; ?></h2>
    <h2>HHVM VER: <?PHP echo HHVM_VERSION; ?></h2>

    <h3>Foxes Love You</h3>

    <h4>Current Server Time: <pre><?PHP echo date('r'); ?></pre></h4>
    <h5>
      <a href="https://github.com/FoxCouncil/Hostel" target="_blank">FoxCouncil/Hostel</a>
      <span> - </span>
      <a href="https://github.com/FoxCouncil/Hostel/blob/master/Ubuntu-Trusty-NGINX-HHVM/Vagrantfile">Ubuntu-Trusty-NGINX-HHVM</a>
    </h5>
  </body>
</html>
