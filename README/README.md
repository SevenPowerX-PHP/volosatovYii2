 # ViDeoSchool Volosatov Evgen
 
    composer require codeception/codeception
    alias cept="./vendor/bin/codecept"
    
 Для Windows в корне проекта (откуда будем запускать тесты) создаем новый bat-файл: cept.bat
    
    
    @echo off
    @setlocal
    set CODECEPT_PATH=vendor/bin/
    "%CODECEPT_PATH%codecept.bat" %*
    @endlocal
    
После чего команда cept, в консоли, должна вернуть help-страницу по Codeception. А если вам хочется запускать cept.bat из любого каталога — посмотрите в сторону директивы PATH.
    
    
    cept bootstrap
    
    Codeception is installed for acceptance, functional, and unit testing
    
    Next steps:
    1. Edit tests/acceptance.suite.yml to set url of your application. Change PhpBrowser to
     WebDriver to enable browser testing
    2. Edit tests/functional.suite.yml to enable a framework module. Remove this file if yo
    u don't use a framework
    3. Create your first acceptance tests using codecept g:cest acceptance First
    4. Write first test in tests/acceptance/FirstCest.php
    5. Run tests using: codecept run
    
    
    cept generate:cept acceptance TestGuestPages
    
 [Тестирование с Сodeception для чайников: 3 вида тестов](https://habr.com/post/329418/)
 