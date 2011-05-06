## Http\LoadTime

Dieser Test prüft, ob die Ladezeit einer Webseite einen bestimmten Wert überschreitet. Wenn die Ladezeit überschritten wurde, wird ein Fehler geworfen und im Reporting  angezeigt.

## Parameter
Über die Parameter kann die maximal erlaubte Dauer eines Seitenabrufs definiert werden.

* **maxLoadTime** die Anzahl der Sekunden die eine Site maximal zum Laden benötigen darf


## Beispiele
<pre>LoadTime:
   TestCase: LiveTest\TestCase\General\Http\LoadTime
   Parameter:
     maxLoadTime: 60</pre>