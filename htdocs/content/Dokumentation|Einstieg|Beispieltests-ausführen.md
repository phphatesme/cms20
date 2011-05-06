In diesem Abschnitt wird erklärt, wie das Kommandozeilen-Tool genutzt werden kann, um die im Projekt befindlichen Beispiele auszuführen. Dabei werden kurz die Konzepte erklärt und zwei einfache Tests auf verschiedene Seiten ausgeführt.

## Kommandozeilentool
Nach der erfolgreichen [Installation](Erste-Schritte|Installation) von LiveTest sollten das Kommandozeilentool für sie bereit stehen. Dies können sie einfach prüfen, indem sie <code>LiveTest --version</code> eingeben. Sollte die Ausgabe nicht wie folgt aussehen, versuchen sie die Installation erneut:
<pre>LiveTest x.y.z by Nils Langner & Mike Lohmann</pre>

Um ein Gefühl dafür zu bekommen, was über die Kommandozeile möglich ist, empfehlen wir <code>LiveTest</code> ohne Parameter aufzurufen. Hier sollte nun eine [Liste mit möglichen Parametern](Erste-Schritte|Kommandozeilen-Parameter) erscheinen.

## Testsuites
Ein Testlauf beruht immer auf einer angegebenen Testsuite, die als Gruppe von [Testfällen](Erste-Schritte|Testfälle) und den dazugehörigen URLs zu verstehen ist. Diese Testsuite wird über die Kommandozeile angegeben:

<pre>LiveTest --testsuite examples/testsuite.yml</pre>

## Konfiguration
Die optionale Konfiguration des Testlaufs wird ebenfalls über die Kommandozeile gesteuert:

<pre>LiveTest --testsuite examples/testsuite.yml --config examples/config.yml</pre>