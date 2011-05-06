## Html\RegExPresent

Dieser Test prüft, ob ein regulärer Ausdruck für eine Oder mehrere URLs existiert. Wenn der Ausdruck NICHT gefunden wird, schlägt der Test fehl und bricht ab.

## Parameter
Über den Parameter kann der reguläre Ausdruck angegeben werden.

* **regex** der reguläre Ausdruck nach dem gesucht wird.

## Beispiele

Prüfung, dass in allen Pages der Text "database * ok" erscheint.

<pre>RegExPresent:
   TestCase: LiveTest\TestCase\General\Html\RegExPresent
   Parameter:
     regex: '#^database.*ok$#'</pre>

Diese Konfiguration würde nun beim Auftreten von "database connection error" eine Exception werfen und den Test abbrechen, aber beim Auftreten von "database connection ok" nicht anschlagen.