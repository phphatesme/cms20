@menu_order=01@

LiveTest bringt von Haus aus eine Vielzahl von Testfällen mit. Diese behandeln hauptsächlich die Domäne HTML und HTTP. Falls Sie eine besondere Idee für einen neuen Testfall haben, tragen sie sie doch bitte in unseren [Issue-Tracker](https://github.com/phphatesme/LiveTest_TestCases/issues) ein, damit wir ihn gegebenenfalls in unser Repertoire übernehmen können.

Alternativ können Sie natürlich auch LiveTest von github forken, eigene Testfälle oder Reports erstellen und dann über einen Pull-Request Ihre Ideen nach einem Review zu LiveTest hinzufügen.

## Http
* [ExpectedStatusCode](Erweiterungen|Testfälle|Http|ExpectedStatusCode) - Prüft ob der aktuelle HTTP-Status-Code identisch mit dem erwartetem ist.
* [HeaderExists](Erweiterungen|Testfälle|Http|HeaderExists) - Dieser Testfall prüft auf das Vorhandensein auf spezielle HTTP-Header.
* [LoadTime](Erweiterungen|Testfälle|Http|LoadTime) - Dieser Test prüft, ob die Ladezeit einer Webseite einen bestimmten Wert überschreitet.
* [SuccessfulStatusCode](Erweiterungen|Testfälle|Http|SuccessfulStatusCode) - Prüft den aktuellen HTTP-Status-Code auf Erfolg (<400).   

### Dom

#### XPath
* [Exists](Erweiterungen|Testfälle|Html|Dom|XPath|Exists) - Dieser Testfall prüft auf die Existenz einer oder mehrerer XPath-Ausdrücke. Er wird angewendet auf HTML-Dokumente.
* [Size](Erweiterungen|Testfälle|Html|Dom|XPath|Size) - Überprüfung ob der Inhalt eines über xpath identifizierten Elements in einem betimmten Korridor liegt (min, max).