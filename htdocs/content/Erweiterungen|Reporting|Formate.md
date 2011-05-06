## Html

Die wohl am besten geeignete Formatierung eines Testlaufergebnisses ist die Matrixform, welche im HTML-Template besonders gut abgebildet werden kann. Um das Standard-Html-Template zu verwenden muss die Konfiguration wie folgt aussehen:

<pre>Listener:
 Report_Html_File:
  class: LiveTest\Packages\Reporting\Listeners\Report
  parameter:
   format:
    class: LiveTest\Packages\Reporting\Format\Html
   writer:
    class: LiveTest\Packages\Reporting\Writer\File
    parameter:
     filename: logs/example.html</pre>

Diese Einstellung würde ein HTML-Dokument erstellen und es unter <code>logs/example.html</code> ablegen. 

## SimpleList

Um einen einfache textuellen Report zu generieren muss das SimpleList-Format gewählt werden, welches ein menschenlesbares Dokument erstellt.

<pre>     Result Statuses:

     Url        :  http://www.phphatesme.com
     Test       :  TextPresent_body
     Test Class :  LiveTest\TestCase\General\Html\TextPresent
     Status     :  Failed
     Message    :  The given text "unpresent_text" was not found.

     Url        :  http://www.stern.de
     Test       :  TextPresent_body
     Test Class :  LiveTest\TestCase\General\Html\TextPresent
     Status     :  Failed
     Message    :  The given text "unpresent_text" was not found.</pre>

Um eine solche Zusammenfassung zu erstellen muss LiveTest wie folgt konfiguriert werden:

<pre>Listener:
 Report_Html_File:
  class: LiveTest\Packages\Reporting\Listeners\Report
  parameter:
   format:
    class: LiveTest\Packages\Reporting\Format\SimpleList
   writer:
    class: LiveTest\Packages\Reporting\Writer\File
    parameter:
     filename: logs/example.txt</pre>

Durch diese Konfiguration wird eine Textdatei mit dem Namen <code>logs/example.txt</code> erstellt. 

## xUnit

Um LiveTest an den Entwicklungsprozess zu koppeln bietet es sich an das Tool direkt mit einem Continuous-Integration-Server zu verbinden. Diese Verbindung erfolgt auf einfachsten über das xUnit-Format, dass die meisten Testtools nativ sprechen. 

<pre>Listener:
 Report_Html_File:
  class: LiveTest\Packages\Reporting\Listeners\Report
  parameter:
   format:
    class: LiveTest\Packages\Reporting\Format\JUnit
   writer:
    class: LiveTest\Packages\Reporting\Writer\File
    parameter:
     filename: logs/junit.xml</pre>

Über diese Konfiguration wird eine xUnit kompatible Datei mit dem Namen <code>logs/junit.xml</code> erstellt.