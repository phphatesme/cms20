## Html\ValidMarkup

Dieser Test prüft, ob das HTML der zu testenden Seiten zulässig ist. 
Der Test wird auf jede URL angewendet.

## Parameter
* **validatorUri** Optionaler Parameter der die URI für die Prüfung beinhaltet. Wenn der Parameter nicht gesetzt ist, wird 'http://validator.w3.org/check' zur Prüfung genutzt.

## Beispiele
<pre>ValidMarkup:
  TestCase: LiveTest\TestCase\General\Html\ValidMarkup</pre>

Diese Konfiguration wird einfach das HTML aller zu testenden Seiten auf Zulässigkeit bei w3.org prüfen.

<pre>ValidMarkup:
  TestCase: LiveTest\TestCase\General\Html\ValidMarkup
    Parameter:
      validatorUri: 'http://my.validator.service.com/test'</pre>

Diese Konfiguration würde nun abweichend von der Standard-URI die Prüfung des HTML auf my.validator.service.com ausführen.
