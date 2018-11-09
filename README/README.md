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
 
 
 Добавляем папку web/assets и делаем commit 
 [В чем разница между .gitignore и .gitkeep?](http://qaru.site/questions/1135/what-are-the-differences-between-gitignore-and-gitkeep)
 .gitkeep является просто заполнителем. Фиктивный файл, поэтому git не забудет о каталоге, так как git отслеживает только файлы.
 
 Если вам нужен пустой каталог и убедитесь, что он остается "чистым" для git, создайте .gitignore, содержащий следующие строки внутри:
 
	 # .gitignore sample 
	 ###################
	 
	 # ignore all files in this dir...
	 *
	 
	 # ... except for this one.
	 !.gitignore
	 
	 
----	 
make sure you have the latest version of the composer-asset-plugin and the config in composer.json:

https://github.com/yiisoft/yii2-app-basic/blob/0c87fab0c3c9d0ada04a85f4982aeffc08b76cc7/composer.json#L33

---
I had the same issue when I updated to the latest composer.json.
The solution: update the config/web.php too. Add

'aliases' => [
  '@bower' => '@vendor/bower-asset',
  '@npm'   => '@vendor/npm-asset',
],
to $config. Like in the config/web.php on master now.



	
	"config": {
	        "process-timeout": 1800,
	        "fxp-asset":{
	            "installer-paths": {
	                "npm-asset-library": "vendor/npm",
	                "bower-asset-library": "vendor/bower"
	            }
	        }
	    },