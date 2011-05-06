## Html\TextNotPresent

Dieser Test prüft, ob ein bestimmter Text in der zu testenden Seite enthalten ist. Wenn der Text existiert, wird ein Fehler gemeldet.

## Parameter
Über den Parameter wird der Text konfiguriert der nicht in der zu testenden Seite enthalten sein darf.

* **text** Der Text nach dem in der Seite gesucht werden soll.

## Beispiele
<pre>TextNotPresentTest:
  TestCase: LiveTest\TestCase\General\Html\TextNotPresent
    Parameter:
      text: 'Hello Kitty'</pre>

Dieser Test sucht nach dem Vorkommen von "Hello Kitty" in der zu testenden Seite und wird einen Fehler werfen, wenn er gefunden wird.