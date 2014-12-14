About this textfilter
***********************************

[![Build Status](https://travis-ci.org/tija14/textFilterCyrillic.svg?branch=master)](https://travis-ci.org/tija14/textFilterCyrillic)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tija14/textFilterCyrillic/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tija14/textFilterCyrillic/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/tija14/textFilterCyrillic/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/tija14/textFilterCyrillic/?branch=master)


This textfilter is for transforming
latin characters into crylic characters.
It is integrated into Anax-MVC.

####How to integrate:

Start by downloading the package and install it using composer.
The following line is needed in composer.json
```javascript
require : "tija/cyrilic-textfilter": "dev-master"
```
In index.php you need set the controller you want to use:

```php
$di->set('TranslatorController', function() use ($di) { 
    $controller = new Phpmvc\Comment\TranslatorController(); 
    $controller->setDI($di); 
    return $controller; 
}); 
```
Inside the router you will need the following code: 
```php
$app->dispatcher->forward([
        'controller' => 'translator',
        'action'     => 'add',
	]);
```
	
Last but not least you will need to copy the template(translator.tpl.php) into
app/view/comment and then your ready to go.

Try how it works in testFilter.php