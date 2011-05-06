LiveTest setzt eine PHP-Version größer/gleich 5.3 voraus. Zusätzlich muss das PHP-Cli (Commandline Interface) zur Verfügung stehen.

## Prüfung der Voraussetzungen
LiveTest wird über die Kommandozeile unabhängig von einem Webserver aufgerufen. Daher muss das [PHP-Cli](http://php.net/manual/de/features.commandline.php) instaliert bzw. kompiliert sein. Der einfachste Weg zu prüfen ob CLI verfügbar ist, ist an der Kommandozeile "php" aufzurufen. Auf [[http://www.php-cli.com/]] wird erklärt was CLI ist und wie man es installiert/nutzt, falls es im System noch nicht zur Verfügung steht.

Zusätzlich muss curl installiert sein. [Curl](http://curl.haxx.se/) kann direkt in PHP kompiliert oder über die Paketverwaltung des eingesetzten Betriebssystems installiert werden. Auf Seite [PHP-Curl](http://de2.php.net/manual/en/curl.installation.php) wird gezeigt, wie curl installiert werden kann.

### MacOS
In MacOSX wird das Terminal-Programm getartet und dann an der Kommandozeile
<pre>php --version</pre>
eingegeben.

Das Ergebnis sollte dann so aussehen:
<pre>$ php --version
PHP 5.3.4 (cli) (built: Dec 15 2010 12:15:07) 
Copyright (c) 1997-2010 The PHP Group
Zend Engine v2.3.0, Copyright (c) 1998-2010 Zend Technologies</pre>

### Windows
Unter Windows wird das cmd-Fenster geöffnet und hier dann
<pre>php --version</pre>
eingegeben.

Es kann auch sein, dass PHP nicht im Ausführungspfad liegt. In dem Fall wechselt man einfach in das Verzeichnis in dem PHP installiert ist.

Tip: Nach php.exe suchen.

### Linux
In einer Linux-Distribution sartet man im X11 ein Terminal-Fenster oder wechselt in den Konsolenmodus und gibt dort
<pre>php --version</pre>
ein.

Auch hier kann es sein, dass PHP nicht im Ausführungspfad liegt. In dem Fall einfach:
<pre>whereis php
cd 'Pfad zu PHP' </pre>

Dann kann auch hier über <pre>./php --version</pre> PHP ausgeführt werden, wenn es installiert ist.