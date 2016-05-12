# CFlashMessages

Class to show flash messages.

Add this to your composer.json file. "require": { "dambuk/cflashmessage": "dev-master" }
Then use composer/packagist to download the package.

Put this in your frontcontroller to get it working.
$di->setShared('flashMessages', function() use ($di){ 
$flashMessages = new \dambuk\FlashMessage\CFlashMessage($di); 
return $flashMessages;
});

In the router you need to add the css-stylesheet flash.css

Example code to show the messages.
$app->router->add('flash', function() use ($app) {

$title = "Flashmeddelanden"; 
$app->theme->setTitle($title); 
$app->theme->addStylesheet('css/flash.css');
$app->flashMessages->addMessage('Congratulations!', 'success'); 
$app->flashMessages->addMessage('Information', 'info'); 
$app->flashMessages->addMessage('Warning!', 'warning');
$app->flashMessages->addMessage('Something went wrong!', 'error');

$app->views->add('me/page', [ 'content' => $app->flashMessages->getFlashMessages(), ]);

});
