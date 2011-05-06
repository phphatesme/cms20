@category=erweiterung@
Da die Erstellung von eigenen Testfällen die häufigste Erweiterung von LiveTest sein sollte, wurde versucht dieser Schritt so einfach wie möglich zu gestalten. Dabei lag der Fokus auf einer simplen Schnittstelle, die bei Bedarf problemlos erweitert werden kann. Im folgenden wollen wir die Erstellung eines eigenen Testfalles anhand der Prüfung auf maximale Ladedauer einer Webseite erklären. 

## Grundgerüst
Testfälle sind einfache PHP-Klassen, die eines definiertes Interface implementieren. Diese beschriebene Schnittstelle wurde denkbar einfach gehalten und besteht lediglich aus einer öffentlichen Methode. 
<pre>interface TestCase
{
  public function test(Response $response, Uri $uri);
}</pre>
Der erste Parameter dieser Methode ist die HTTP-Response, die vorher vom System erstellt wurde. Diese beinhaltet alle benötigten Informationen über die Kommunikation mit der Webseite, die im zweiten Parameter <code>$uri</code> hinterlegt ist. Attribute der Response sind beispielsweise die Dauer des Webseitenabrufs oder der HTML-Inhalt (die Webseite selbst) der Antwort.
Wir implementieren nun eine Klasse mit dem Namen <code>MaxLoadTime</code> welche den Einstiegspunkt darstellt.
<pre>class MaxLoadTime implements TestCase
{
  public function test(Response $response, Uri $uri)
  {
  }
}</pre>
In unserem Beispiel brauchen wir nur den <code>$response</code> Parameter, da dieser bereits die für uns relavante **Dauer des Abrufe** bereitstellt. Unsere Methode bekommt nun also eine weitere Zeile Code:
<pre>$loadTimeInSeconds = $response->getDuration()</pre>
Diesen müssen wir nur noch auswerten und mit dem im System hinterlegten Maximalwert vergleichen. 
## Ergebnisrückgabe
Um LiveTest das Ergebnis mitzuteilen, wurde ein Weg über Exceptions gewählt. Dieses Vorgehen ist an [PHPUnit](http://www.phpunit.de) angelehnt. Sollte ein Test also fehlschlagen, so wird eine definierte Exception ([LiveTest\TestCase\Exception](https://github.com/phphatesme/LiveTest/blob/master/src/LiveTest/TestCase/Exception.php)) geworfen, die dem System bekannt ist und weiterverarbeitet werden kann. Auf unseren Testfall angewendet sieht dies wie folgt aus:
<pre>if( $loadTimeInSeconds > 5 ) 
{
  throw new \LiveTest\TestCase\Exception('The maximal time to load was exceeded');
}</pre>
Der Test würde nun fehlschlagen, sobald die zu testende Webseite eine Antwortzeit besitzt, die mehr als fünf Sekunden beträgt.
## Parametrisierung
Natürlich ist es schlechter Programmierstil Konstanten oder Parameter wie die maximale Dauer des Abrufs hart in den Code zu schreiben. Aus diesem Grund verfügen Testfälle über die Möglichkeit parametrisiert zu werden. 
Für dieses Bestücken von extern mit Informationen wurde die init()-Methode geschaffen. Diese wird von außen mit allen im Config-File definierten Werten gefüllt. Dabei wurde das Konzept der [Named Parameters](http://en.wikipedia.org/wiki/Named_parameter) eingeführt.
<pre>public function init($maxTimeToLoadInSeconds = 5)
{
  $this->maxTimeToLoadInSeconds = $maxTimeToLoadInSeconds;
}</pre>
Nun kann der optionale Parameter <code>maxTimeToLoadInSeconds</code> in den Konfigurations-Dateien genutzt werden. Um einen Parameter verpflichtend zu machen, muss einfach der PHP-Default-Value entfernt werden. Auch hier wurde besonderer Wert darauf gelegt, dass die von PHP bekannten Konzepte eingehalten werden.

## Verortung
Der erstellte Testfall sollte in einer definierten Verzeichnis/Namespace-Struktur abgelegt sein. Aus diesem Grund muss der [PSR-0-Standard](http://groups.google.com/group/php-standards/web/psr-0-final-proposal) eingehalten werden, welcher Lokalisierung und Namespace zusammenbringt. Ein einfaches Beispiel hierzu wäre eine Klasse <code>\LiveTest\Report\Writer\File</code> die unter <code>LiveTest\Report\Writer\File.php</code> gefunden werden muss. 
Befolgt man diesen Standard, so muss nur das Verzeichnis, in dem sich die Basis des Namespaces befindet in der [Konfigurationsdatei eingetragen](Erste-Schritte|Konfiguration|Packages-hinzufügen) werden.