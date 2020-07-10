<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ ."/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__."/classes/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

$user->firstName = "Data";
$user->lastName = "Base";

var_dump($user);


/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);
