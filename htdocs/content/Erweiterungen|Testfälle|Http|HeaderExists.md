## Http\HeaderExists

Dieser Test prüft, ob ein bestimmter HTTP-Header von der zu testenden Seite gesendet wird. Dies kann zum Beispiel die Überprüfung der Existenz eines bestimmten Caching-Header sein.

## Parameter
Über den Parameter wird der Name des Headers angegeben.

* **headerName** der Name des HTTP-Headers auf dessen Vorhandensein geprüft wird.

## Beispiele
Diese Beispielkonfiguration überprüft das Vorkommen des HTTP-Headers: Expires

<pre>HeaderExists:
  TestCase: LiveTest\TestCase\General\Http\HeaderExists
    Parameter:
      headerName: 'Expires'
</pre>


## Info:
Momentan kann nur auf das Vorkommen eines HTTP-Headers getestet werden. Es kann auch nur auf die Existenz, aber nicht auf den Wert eines Heiders getestet werden.