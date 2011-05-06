## Html\Size

Dieser Testfall überprüft, ob die Größe (in Zeichen) eines HTML-Dokuments in einem bestimmten Korridor liegen. Der Test nimmt zwei Parameter min, max entgegen.

## Parameter 
Beide Parameter sind optional, einer von beiden muss aber gesetzt sein.

* **minSize** Bestimmt die untere Grenze der Dokumentengröße
* **maxSize** Bestimmt die obere Grenze der Dokumentengröße

## Beispiele
Überprüfung, ob ein Dokument zwischen 200 und 500 Zeichen besitzt.
<pre>TestCases:
 HtmlSize:
  TestCase: LiveTest\TestCase\General\Html\Size
  Parameter:
   minSize: 200
   maxSize: 500</pre>
Überprüfung, ob ein Dokument maximal 200 Zeichen besitzt.
<pre>TestCases:
 HtmlSize:
  TestCase: LiveTest\TestCase\General\Html\Size
  Parameter:
   maxSize: 200</pre>