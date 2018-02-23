# Twitch-streamer-lookup

Hi, if you want to make use of this you'll need to get an api key from Twitch (easy enough to acquire and, as of right now, free).  Once you have it, put it outside your document root.  For example, if your root is /var/www/homepage/www then put the key in `/var/www/homepage/keys/twitch_api.php`

That file should look like

```php
<?php 
$api_key = '<whatever your api key is';
```

You may be wondering, is this secure?  To which the answer is... reasonably.  It's pretty good, because to get at your key directly they have to access parts of your filesystem that're not in your document root.  In that sense, it's as secure as your server.  However, you're also transmitting it over TLS, so it's as secure as the TLS you're using.  That *should* be fine, but remember that you're transmitting a permanent token (permanent until you revoke it, of course), so if it's ever revealed they can use it.

It is, however, worth remembering that it's only your Twitch api key.
