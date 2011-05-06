Error Report (LiveTest Version 0.8.4) 

  Message: Unknown tag (DefaultDomain)
  File   : C:\WebSites\LiveTest_nils\src\LiveTest\Config\Parser\Parser.php
  Line   : 55

  Trace  : #0 C:\WebSites\LiveTest_nils\src\LiveTest\TestRun\Properties.php(139): LiveTest\Config\Parser\Parser->parse(Array, Object(LiveTest\Config\TestSuite))
           #1 C:\WebSites\LiveTest_nils\src\LiveTest\Cli\Runner.php(178): LiveTest\TestRun\Properties::createByYamlFile('examples\config...', Object(Base\Www\Uri))
           #2 C:\WebSites\LiveTest_nils\src\LiveTest\Cli\Runner.php(201): LiveTest\Cli\Runner->initTestRun()
           #3 C:\WebSites\LiveTest_nils\src\runner.php(42): LiveTest\Cli\Runner->run()
           #4 {main}

  Configuration: config

