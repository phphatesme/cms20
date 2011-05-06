@category=projekt@
@title=LiveTest@
@menu_display=false@

Viele Webseiten und -Applikationen sind fragil. Niemand traut sich alten Code anzufassen und jedes Deployment geht mit Angst einher. Aus diesem Grund wurde LiveTest geschaffen. Das Testen von untestbaren Applikationen war das Ziel des Tools, welches im Hause [Gruner+Jahr](http://www.guj.de) seinen Ursprung hat. 

## Projektbeschreibung
Um es in einem Satz zu sagen: LiveTest hilft ihnen dabei untestbare Applikationen zu testen. Dies klingt zuerst einmal wie ein Widerspruch in sich, muss es aber nicht sein. Applikationen sind aus verschiedenen Gründen kaum testbar, meist liegt es jedoch dem komplexen, unstrukturierten und erodierten Code, dem die Software zu Grunde liegt. Unit Tests, die wohl die erste Wahl der Softwareentwicklung darstellen, würden in einem solchen Fall klaglos scheitern.

LiveTest geht aber einen anderen Weg. Anstatt die Software verstehen zu wollen und alle Details genau zu kennen, betrachtet man hier die Webseite von außen als Black-Box. Diese Herangehensweise geht davon aus, dass schon ein paar einfache, kontrollierbare Eigenschaften einer Webseite ausreichen, um einen Überblick zu bekommen, ob das Produkt funktioniert oder nicht. LiveTest erhebt nicht den Anspruch herauszufinden, was in einem System kaputt ist, es hilft einem aber dabei zu prüfen, ob das System als Ganzes funktioniert. 

Die einfachen, kontrollierbaren Eigenschaften, die wir mit LiveTest analysieren, können aus einem [breiten Angebot](Erste-Schritte|Testfälle) heraus spezifiziert werden. In den meisten Fällen wir man in einer Testkonfiguration aber Tests wie das Prüfen auf Vorhandensein eines schließenden <html>-Tags oder dem http-Status-Code 200, finden. LiveTest wurde so konzipiert, dass das Erstellen neuer Testszenarien nur ein Minimum an Wissen voraussetzt.  Die Einstieghürde wurde hier bewusst sehr niedrig gewählt, so dass jeder PHP-Entwickler innerhalb weniger Minuten eine Erweiterung erstellen kann. 
Des Weiteren wurde bei LiveTest darauf geachtet, dass man innerhalb kürzester Zeit möglichst viele einzelne Webseiten untersuchen kann. So kann das Tool bis zu 300 Urls auf ihre Korrektheit prüfen und dies jede Minute.