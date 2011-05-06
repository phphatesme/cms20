@menu_order=01@
LiveTest verfügt bereits über ein umfangreiches Set von Testfällen, aus dem sie ihre Testläufe zusammenstellen können. Eine sinnvolle Konfiguration dieser Tests ist wichtig für die Effizienz des Tools. Aus diesem Grund sollte die Idee hinter LiveTest, die wir in diesem Kapitel mit ein paar Beispielen unterstreichen, klar sein. 

## Aufbau der Konfiguration

Testläufe werden über eine Konfigurationsdatei im [Yaml-Format](http://www.yaml.org/) zusammengestellt, die immer dem gleichen definierten Muster entsprechen. Eine solche Konfiguration könnte wie folgt aussehen:

<pre>TestCases:
 TextPresent_body:
  TestCase: LiveTest\TestCase\General\Html\TextPresent
  Parameter:
   text: "unpresent_text"   
Pages:
 - http://www.phphatesme.com</pre>

Das Tag, das genutzt wird um LiveTest zu sagen, dass nun eine Liste von Testfällen folgt ist das verpflichtende <code>TestCases</code>-Tag. Im Anschluss folgen gleich die auszuführenden Testcases. Diese beginnen mit einem pro Testlauf einmaligen Schlüssel, der selbst gewählt werden kann. Dieser wird im Reporting referenziert, um eine einfache Fehlerfindung zu ermöglichen. Im Anschluss folgt die Testfall selbst. Der hier eingesetzte Wert entspricht dem Namen der Klasse (inkl. Namespace), die diesen Test repräsentiert. Als Abschluss eines einzelnen Testfalles folgen die für diesen Case nötigen Parameter. 

### Weiterführende Links:
* [Liste existierender Testfälle](Erweiterungen|Testfälle)
* [Zu testende Seiten definieren](Dokumentation|Konfiguration|Testseiten-konfigurieren)

## Sinnvolles Testen

Viele Personen, die das erste Mal mit LiveTest in Kontakt kommen und die einfache [Erweiterbarkeit](Dokumentation|Erweiterungen-schreiben) zu schätzen lernen, verfallen ein wenig in "Featuresucht". Schnell hat man sehr komplexe Prüfungen im Auge, die zwar einfach umzusetzen sind aber vielleicht nicht notwendig sind. 

Die Erfahrung hat hier gezeigt, dass es sinnvoll ist zuerst mit ganz einfachen allgemeingültigen Prüfungen zu beginnen. Sollten diese Prüfungen Fehler nicht finden, so muss nachgebessert werden. In vielen Fällen finden diese Basistests aber bereits die meisten Fehler. Hier, wie fast überall, gilt das Paradigma "You ain't gonna need it".

## Beispiele

LiveTest beruht auf dem Konzept, dass eine Webseite funktioniert, sobald einige einfache Eigenschaften erfüllt sind. Im folgenden werden einige dieser Eigenschaften beleuchtet und mit Testfällen geprüft.

### HTTP-Status-Code

LiveTest wurde für die Verwendung im Webkontext erstellt. Aus diesem Grund werden die meisten Tests, die sie durchführen auf HTML-Webseiten beruhen, die über HTTP übertragen werden. Das HTTP-(P)rotokoll kennt mehrere Status, die über einen Erfolg oder Misserfolg berichten. Dabei ist ein Statuscode kleiner 400 ein Zeichen, dass der Server korrekt geantwortet hat. Im Falle eines Serverfehlers oder einer ungültigen Anfrage ist ist ein Code größergleich 400 zu erwarten. Ein einfacher Testfall, der prüft, ob ein "guter" Status zurückkommt sieht wie folgt aus:

<pre>TestCases:
 Good_Http_Status:
  TestCase: LiveTest\TestCase\General\Http\SuccessfulStatusCode</pre>

Hier sei noch zu erwähnen, dass die meisten Webserver die Kontrolle über die Status selbst übernehmen, sobald die verwendete Sprache Fehler auswirft. Ein Servererror (Code >= 500) muss also nicht unbedingt von der Applikation getriggert werden. 

### Schließendes Body-Tag

Viele Applikationen haben die Eigenschaft aufzuhören die Seite zu rendern. In solchen Fällen würde dem Nutzer eine unfertige Webseite angezeigt werden. Sollte dies passieren, so wird sich kein schließendes &lt;body&gt;-Tag auf der Seite befinden, da dies das "letzte" Tag (nur noch vom &lt;html&gt;-Tag gefolgt) auf der Seite ist. Ein Test, der auf dieses Tag lauscht würde wie folgt konfiguriert werden:

<pre>TestCases:
 Body_Tag_Present:
  TestCase: LiveTest\TestCase\General\Html\TextPresent
  Parameter:
   Text: &lt;/body&gt;</pre>

Diese Konfiguration prüft auf simple Weise, ob der *Text* &lt;/body&gt; auf der Seite vorkommt, was in den meisten Fällen bereits ausreichend ist.

### Überprüfung auf Fehlermeldung

Obwohl LiveTest auch für die Überwachung von Produktivseiten eingesetzt werden kann, so wurde es jedoch primär als Entwicklerwerkzeug programmiert. Dies bedeutet, dass es auch während der Entwicklung eingesetzt werden kann/soll. Wo auf dem Produktivsystem alle Fehlermeldungen für den Kunden unterdrückt werden, um nichts über die Interna einer Applikation zu verraten, werden sie im Entwicklungssystem ausgegeben, um dem Programmierer schnelles und direktes Feedback zu geben. Um nach diesen Fehlermelden mit LiveTest zu suchen kann folgende Konfiguration verwendet werden:

<pre>TestCases:
 Error_Msg_Present:
  TestCase: LiveTest\TestCase\General\Html\RegExNotPresent
  Parameter:
   regEx: (Exception|Error:)</pre>

In diesem Fall würde das System prüfen, ob die Html-Webseite auf den regulären Ausdruck <code>(Exception|Error:)</code> matched. Der Test wird fehlschlagen, sobald das Wort "Exception" oder das Wort "Error:" gefunden werden. Diese Indikatoren können natürlich pro Projekt unterschiedlich sein, die von uns gewählten Meldungen sind passen lediglich auf das Standardverhalten von PHP. 

### Existierender XPath

Viele Komponenten einer Webseite sind relevant für die Monetarierung und erhöhen den Wert der Seite. Diese Komponenten können eindeutig über den XPath identifiziert werden. Ein möglicher Test, der gleich konfiguriert wird, wäre die Prüfung auf Existenz eines bestimmtes HTML-Tag, welches für die Werbeauslieferung nötig ist.

<pre>TestCases:
 Ad_Tag_Existing:
  TestCase: LiveTest\TestCase\General\Html\Dom\XPath;
  Parameter:
   xpath: /html/body/top_werbung</pre>

## Empfohlene Basiskonfiguration für HTML-Seiten

Das Grundgerüst und das Verhalten von einfachen HTML-Webseiten ist in den meisten Fällen fast identisch. Aus diesem Grund ist es möglich Standardkonfigurationen zu erstellen, die für fast alle Webseiten bereits eine solide Grundabdeckung ermöglichen. Für HTML-Seiten sieht eine mögliche Basis wie folgt aus:

<pre>TestCases:
 Good_Http_Status:
  TestCase: LiveTest\TestCase\General\Http\SuccessfulStatusCode

 Body_Tag_Present:
  TestCase: LiveTest\TestCase\General\Html\TextPresent
  Parameter:
   Text: </body>

 Error_Msg_Present:
  TestCase: LiveTest\TestCase\General\Html\RegExNotPresent
  Parameter:
   regEx: (Exception|Error:)

 Title_Tag_Existing:
  TestCase: LiveTest\TestCase\General\Html\Dom\XPath;
  Parameter:
   xpath: /html/head/title</pre>
</pre>

Hier werden alle oben beschriebene allgemeingültigen Beispiele kombiniert und eine Prüfung auf ein existierendes Title-Tag, welches aus SEO-Blickwinkeln Relevanz erzeugt, hinzugefügt.