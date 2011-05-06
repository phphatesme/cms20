Error Report (LiveTest Version 0.8.4) 

  Message: The given string (http://localhost/~cbrandt/whitelabel-test/web/) does not represent a valid uri
  File   : /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/lib/Base/Www/Uri.php
  Line   : 13

  Trace  : #0 /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/lib/Base/Www/Uri.php(46): Base\Www\Uri->__construct('http://localhos...')
           #1 /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/LiveTest/TestRun/Properties.php(72): Base\Www\Uri->concatUri('http://localhos...')
           #2 /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/LiveTest/TestRun/Properties.php(57): LiveTest\TestRun\Properties->initTestSets()
           #3 /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/LiveTest/TestRun/Properties.php(153): LiveTest\TestRun\Properties->__construct(Object(LiveTest\Config\TestSuite), Object(Base\Www\Uri))
           #4 /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/LiveTest/Cli/Runner.php(178): LiveTest\TestRun\Properties::createByYamlFile('/Users/cbrandt/...', Object(Base\Www\Uri))
           #5 /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/LiveTest/Cli/Runner.php(201): LiveTest\Cli\Runner->initTestRun()
           #6 /Users/cbrandt/Sites/whitelabel-test/application/commands/testRunner/vendors/livetest/src/runner.php(33): LiveTest\Cli\Runner->run()
           #7 {main}

  Configuration: config

