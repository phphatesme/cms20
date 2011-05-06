@menu_order=02@
LiveTest verfügt über zwei "Namensräume" für das Testen von Seiten. Der globale Raum wird dazu genutzt Seiten zu definieren, die, wenn nicht anders angegeben, von allen Testfällen geprüft werden sollen. Der lokale Raum ist dazu da Seiten für spezielle Testfälle zu konfigurieren.

Beide Konfigurationen finden in der Testsuite-Konfigurationsdatei statt.

## Globale Seitenverwaltung

Um Seiten im globalen Raum zu registrieren muss das Pages-Tag verwendet werden. Dieses, auf der obersten Yaml-Ebene eingehängt, fügt die Seiten hinzu.

<pre>TestCases:
 TextPresent_body:
  TestCase: LiveTest\TestCase\General\Html\TextPresent
  Parameter:
   text: "unpresent_text"
   
Pages:
 - http://www.phphatesme.com
 - http://www.stern.de</pre>

## Lokale Seitenverwaltung

### Seiten unabhängig vom globalen Space konfigurieren

Um die Seiten pro Test unabhängig vom globalen Namespace zu definieren, muss ebenfalls das Pages-Tag verwendet werden, nur dieses mal wird es auf der Ebene unterhalb des betroffenen Testfalls eingehängt. Diese Verwendung überschreibt alle alle globalen Einstellungen und testet *nur* die neu aufgelisteten Seiten. 

<pre>TestCases:
 TextPresent_body:
  TestCase: LiveTest\TestCase\General\Html\TextPresent
  Parameter:
   text: "unpresent_text"   
  Pages:
   - http://www.phphatesme.com
   - http://www.stern.de</pre>

### globale Seiten pro Testfall verändern

Zusätzlich zu der unabhängigen Definition von zu testenden Webseiten können auch einzelne Seiten des globalen Raums aus bestimmten Testfällen entfernt oder hinzugefügt werden.

<pre>TestCases:
 TextPresent_body:
  TestCase: LiveTest\TestCase\General\Html\TextPresent
  Parameter:
   text: "unpresent_text"
  ExcludePages:
   - http://www.phphatesme.com
  IncludePages 
   - http://www.phmlabs.com
   
Pages:
 - http://www.phphatesme.com
 - http://www.stern.de</pre>