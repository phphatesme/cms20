LiveTest wurde von Beginn so konzipiert, das Erweiterungen an allen relevanten Stellen jederzeit möglich sind, ohne den Kern anfassen zu müssen. Dabei wurde das Prinzip _alles ist eine Erweiterung_ verfolgt. Prinzipiell existieren vier Einstiegspunkte an denen Erweiterungen eingehakt werden können. Die am häufigsten genutzte, ist die Möglichkeit eigene Testfälle (Test Cases) zu definieren. Die zweite Möglichkeit mit der Anwendung zu interagieren sind die sogenannten Listener. LiveTest verfügt über ein leichtgewichtiges Event-System, mit dem man über Listener kommunizieren kann. Die dritte Möglichkeit LiveTest zu erweitern ist die Konfigurationsschicht. Keine richtige Erweiterung des Kerns, aber trotzdem relevant ist die Möglichkeit eigene Reporte, also Zusammenfassungen von Testläufen, zu erstellen.

##Testfälle
Eigene Testfälle müssen immer dann erstellt werden, falls das umfangreiche [Basis-Angebot](Erweiterungen|Testfälle) von LiveTest nicht ausreicht. Dabei bringt der Kern bereits out-of-the-box viele Testfälle für HTTP-, HTML- und RSS-Validierung mit, auf dessen Grundlage neue Tests konzipiert werden können. 

### Weiterführende Informationen
* [Erstellen eigener Testfälle](Dokumentation|Erweiterungen-schreiben|Testfälle-erstellen): hier wird erklärt, wie eigene Testfälle konzipiert und erstellt werden können. In dieser Anleitung wird ein einfacher HTML-Testfall programmiert.
* [Servicekatalog aller Testfälle](Erweiterungen|Testfälle): LiveTest wurde von Beginn an so konzipiert, dass einfache Tests, die in den meisten Fällen bereits ausreichend sind um eine Webseite zu testen, im Umfang der Basisinstallation inbegriffen sind.

##Reporting
LiveTest ist bereits mit einer Vielzahl von Standard-Reports ausgestattet, die auf viele Wege versendet oder gespeichert werden können. Sollte man trotzdem die Anforderung haben, einen neuen Report oder Kommunikationsschnittstelle bedienen zu müssen, so kann dies einfach erfüllt werden.

* Reportingsystem 
* Existierende Writer
* Existierende Formate

##Listener
* Eigene Listener erstellen und registrieren
* Standard-Events

##Konfiguration
* Eigene Tags erstellen und registrieren
* Standard-Tags