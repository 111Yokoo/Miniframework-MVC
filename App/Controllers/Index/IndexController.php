<?php
namespace App\Controllers\Index;
use App\Models\Exemplo;
use Twig\Environment;

//Renderizar as páginas e passar dados
class IndexController{
    private $twig;
    
    public function __construct(Environment $twig) {
        $this->twig = $twig;
    }
    public function index() {
        echo $this->twig->render('index.twig', ['variavel' => 'valor']);
    }
}
?>