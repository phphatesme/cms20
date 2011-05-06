@menu_order=01@

# LiveTest

Auch wenn die Webentwicklung ein relativ neues Territorium ist, das von Softwareentwicklern betreten wurde, so ist das Durchschnittsalter von Anwendungen im Internet größer als fünf Jahre. Die meisten Entwickler haben mit Brownfield-Applikationen zu kämpfen, die **nicht** mit herkömmlichen Werkzeugen, wie Unit Testing oder statischer Code-Analyse, getestet werden können. 

LiveTest versucht genau für diese Art von Applikationen ein Werkzeug zu sein, welche trotz schlechten Codes eine bessere Testabdeckung benötigen.

## Die Idee

LiveTest wurde konzipiert, um matrixorganisierte Eigenschaftentests auszuführen. Diese Art des Testen beruht auf zwei Annahmen. 

 * Es reicht einige wenige [Eigenschaften](Dokumentation|Konfiguration|Testfälle-hinzufügen) einer Webseite zu überprüfen, um einem ausreichenden Eindruck darüber zu erlangen, ob sie funktionsfähig ist.
 * Werden die "wichtigsten" Seiten eines Webangebots als funktionstüchtig erkannt, so sind die Risiken eines monetären Ausfalls zu vernachlässigen.

## Das Werkzeug

LiveTest ist das erste Werkzeug, dass geschaffen wurde, um genau diese Art des Testens zu unterstützen. Dabei wurde großer Wert darauf gelegt, dass das [Hinzufügen von neuen Eigenschaftentests](Dokumentation|Erweiterungen-schreiben|Testfälle-erstellen) zu dem bereits umfangreichen [Basisangebots](Erweiterungen|Testfälle) möglichst einfach von der Hand geht. 
Darüber hinaus kann LiveTest problemlos in viele gängige Monitoringanwendungen integriert werden. 