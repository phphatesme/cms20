## Html\RegExNotPresent

Dieser Test prüft, ob ein regulärer Ausdruck für eine Oder mehrere URLs existiert. Wenn der Ausdruck gefunden wird, schlägt der Test fehl und bricht ab.

## Parameter
Über den Parameter kann der reguläre Ausdruck angegeben werden.

* **regex** der reguläre Ausdruck nach dem gesucht wird.

## Beispiele

Prüfung, dass in einer oder allen Pages NICHT der Text "database * error" erscheint.

<pre>RegExNotPresent:
   TestCase: LiveTest\TestCase\General\Html\RegExNotPresent
     Parameter:
     regex: '#^database.*error$#'</pre>

Diese Konfiguration würde nun beim Auftreten von "database connection error" eine Exception werfen und den Test abbrechen, aber beim Auftreten von "database connection established" nicht anschlagen.