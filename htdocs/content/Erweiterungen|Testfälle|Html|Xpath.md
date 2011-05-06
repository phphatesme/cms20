## Html\Xpath

Dieser Test prüft, ob der Inhalt eines DOM-Elements mit einem regulären Ausdruck übereinstimmt. Das Element wird über die Angabe eines Xpath gefunden.

Wenn das Element nicht im DOM gefunden werden kann, der Inhalt eines gefundenen Elements nicht mit dem regulären Ausdruck übereinstimmt oder der DOM-Tree nicht aus dem HTML erzeugt werden kann, wird ein Fehler im Testprotokoll erzeugt. 

## Parameter
* **xPath** Der Pfad zum DOM-Element dessen Inhalt geprüft werden soll
* **regEx** Der reguläre Ausdruck der auf den Inhalt der gefundenen Elemente angewendet werden soll.

## Beispiele
```
XpathContentTest:
  TestCase: LiveTest\TestCase\General\Html\Xpath
  Parameter:
   xPath: /html/body/p
   regEx: '@test.*@'
```

Die Konfiguration überprüft das Vorhandensein von test in dem ersten p-Tag unterhalb von Body. "test is a Test is a Test" würde Matchen. "äst is nearly Test" würde einen Fehler werfen.