## Http\ExpectedStatusCode

Dieser Testfall überprüft, ob der zurückgegebene [Http-Statuscode](http://de.wikipedia.org/wiki/HTTP-Statuscode) dem erwarteten entspricht.

## Parameter 

* **statusCode** Der zu erwartende Status-Code

## Beispiele
Überprüfung, ob der zurückgegebene Statuscode 404 (Not Found) ist.
<pre>TestCases:
 HttpStatusCodeTest:
  TestCase: LiveTest\TestCase\General\Http\ExpectedStatusCode
  Parameter:
   statusCode: 404</pre>