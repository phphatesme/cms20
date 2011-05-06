@menu_order=01@

Auf dieser Seite finden Sie alle Informationen bezüglich der neusten Version von LiveTest. Da unser Tools recht häufig neue Features bekommt, sollten sie diese Seite öfters besuchen.

## Releaseplan

Releasepläne werden über den von github bereitgestellte [Issue-Tracker](https://github.com/phphatesme/LiveTest/issues) erstellt.

* [Version 1.0](https://github.com/phphatesme/LiveTest/issues?milestone=6) - Für die Version 1.0 soll eine Webseite existieren und der Beta-Test durchgelaufen sein. (Termin: 10. Mai 2011)

## Aktuelle Version (1.0.0)
* **Bugfixes**
* **IncludePaths** Tag mit dem in der Config zusätzliche include-Pfade für PHP angegeben werden können.
* **MemoryLimit** Tag mit dem in der Config die maximale Speichernutzung für PHP festgelegt werden kann.
* **Hilfe mit Beispiel** Das Beispiel in der Hilfe zeigt zu den Beispiel-Konfigurationsdateien und kann mit Copy&Paste direkt ausgeführt werden.
* **LiveTest in bin** Nach der Installation über Pear kann LiveTest aufgerufen werden, da es sich im Ausführungspfad befindet.

## Versionshistorie
Diese Liste wird erst seit der Version 0.8.3 gepflegt.

### Version 0.9.0
* ** Bugfixes**

### Version 0.8.4
* **W3-Html-Validator** Jan Brinkmanns Implementierung für HTML-Validierung über den W3-Webservice.
* **phmLabs Statistics** Es werden Anzahl der Test und dazugehörige Anzahl der URLs übertragen. 
* **Feedback-Package** Um LiveTest zu verbessern kann ein Error an phmLabs gesendet werden (--feedback).

### Version 0.8.3
* **Annovent** Der Event-Dispatcher wurde auf [Annovent](https://github.com/phmLabs/Annovent) umgestellt.
* **Symfony Universal Class Loader** Umschwenken auf den Class-Loader von Symfony.
* **Zend Framework 2** Update des Zend Frameworks auf die Version 2 (beta).
* **Configuration Error Handling** Spezieller Event für ConfigurationExceptions wurde eingeführt.
* **Bootstrap** Es ist möglich eine Bootstrap-Datei anzugeben.