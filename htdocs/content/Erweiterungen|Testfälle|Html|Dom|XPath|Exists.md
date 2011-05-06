## Html\Dom\XPath\Exists
Dieser Testfall prüft auf die Existenz einer oder mehrer [XPath-Ausdrücke](http://de.wikipedia.org/wiki/XPath). Der Test schlägt fehl und bricht ab, sobald der erste der zu prüfenden Pfade nicht existiert.

## Parameter
Dieser Testfall kann zwei Parameter bekommen. Beide sind optional, wobei einer der beiden gefüllt sein muss. 

* **xpath** mit diesem Parameter gibt man einen einzelnen XPath-Ausdruck an, auf den die Seite geprüft werden soll.
* **xpaths** sollte die Seite gegen mehr als einen XPath-Ausdruck geprüft werden, so kann über diesen Parameter eine Liste mit Ausdrücken definiert werden. 

## Beispiele

Prüfung, ob die Pfade <code>/html</code> und <code>/html/body</code> existieren.
<pre>TestCases:
 Xpaths:
  TestCase: LiveTest\TestCase\General\Html\Dom\XPath\Exists
  Parameter:
   xpaths:
    - /html
    - /html/body</pre>

Prüfung, ob der Pfad <code>/html</code> existiert.
<pre>TestCases:
 Xpath:
  TestCase: LiveTest\TestCase\General\Html\Dom\XPath\Exists
   Parameter:
    xpath: /html</pre>