<?php
namespace Config;
use App\Controllers\Index\IndexController;

// Mapeamento de rotas para controladores
// As rotas são definidas por 'url' => 'NomeDoController@FunçaoDoController'
$rotas = [
    '/' => 'IndexController@index'
];

return $rotas;
?>