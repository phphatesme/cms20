## \Html\Dom\XPath\Size
Dieser Testfall überprüft ob der Inhalt eines über xpath identifizierten Elements in einem betimmten Korridor liegt (min, max). Dabei werden nur die tatsächlichen Inhalte berücksichtigt und nicht Tags, die darunter hängen. Falls man auf eine exakte Länge prüfen will, so wird empfohlen min- und maxSize auf diesen Wert zu setzen.

## Parameter
Über die Parameter wird der xpath definiert, den es zu prüfen gilt und die obere und untere Schranke für die Größe des Elements. Mindestens einer der *Size-Parameter muss gesetzt sein. 

* **xpath** - Der xpath zu den zu überprüfenden Elementen
* **minSize** - Die Minimalgröße in Zeichen, die das Element besitzen darf
* **maxSize** - Die Maximalgröße in Zeichen, die das Element besitzen darf

## Beispiele
<pre>TestCases:
 TextPresent_body:
  TestCase: LiveTest\TestCase\General\Html\Dom\XPath\Size
  Parameter:
   xpath: "/html/head/title"
   minSize: 20
   maxSize: 70</pre>