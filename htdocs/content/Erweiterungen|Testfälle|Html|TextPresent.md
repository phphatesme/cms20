## Html\TextPresent

Dieser Test prüft, ob ein bestimmter Text in der zu testenden Seite enthalten ist. Wenn der Text nicht existiert, wird ein Fehler gemeldet.

## Parameter
Über den Parameter wird der Suchtext konfiguriert.

* **text** Der Text nach dem in der Seite gesucht werden soll.

## Beispiele
<pre>TextPresentTest:
  TestCase: LiveTest\TestCase\General\Html\TextPresent
    Parameter:
      text: 'Hello Kitty'</pre>

Dieser Test sucht nach dem Vorkommen von "Hello Kitty" in der zu testenden Seite.