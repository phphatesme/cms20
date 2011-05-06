#! /bin/sh
cd /home/langner/www/livetest.phmlabs.com/htdocs/content
git pull
cd /home/langner/www/livetest.phmlabs.com
/usr/local/bin/php create_menu.php
exit 0
