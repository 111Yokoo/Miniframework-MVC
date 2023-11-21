# Miniframework

Nome do Projeto é um miniframework PHP leve e modular baseado na arquitetura MVC (Model-View-Controller). Projetado para simplicidade e flexibilidade, oferece uma estrutura organizada para o desenvolvimento ágil de aplicações web em PHP.

## Principais Características

- **Arquitetura MVC:** Segue o padrão Model-View-Controller para uma organização clara e modular do código.
  
- **Autoload:** Utiliza um sistema de autoload para carregar automaticamente as classes, facilitando o desenvolvimento e evitando a necessidade de incluir manualmente os arquivos.

- **Twig para Templates:** Integrado com o Twig, um mecanismo de template poderoso e flexível para facilitar a criação de views.

- **Roteamento Dinâmico:** Implementa um sistema de roteamento que permite definir facilmente padrões de URL e associá-los a controladores e métodos específicos.

- **Estrutura de Diretórios Organizada:** Adota uma estrutura de diretórios clara e intuitiva para facilitar a navegação e manutenção do código-fonte.

## Como Usar

1. Clone este repositório.
2. Instale as dependências do Composer usando `composer install`.
3. Configure seu servidor web para apontar para o diretório público.
4. Personalize as rotas e controladores de acordo com as necessidades do seu projeto.
5. Adicione suas views ao diretório apropriado.

Para iniciar o servidor, use o comando `php -S localhost:(porta de sua escolha) -t public` no CMD.

## Dependências

É necessário ter o XAMPP instalado em sua máquina para a utilização do MySQL. A aplicação utiliza extensões com o Font Awesome, Bootstrap e JQuery.

## Exemplos de Código

Veja abaixo um exemplo simples de como criar uma rota:

```php
$rotas = [
    '/' => 'HomeController@index',
    '/sobre' => 'AboutController@index',
    '/contato' => 'ContactController@index',
    // Adicione suas próprias rotas aqui
];
```

## Contato: 
No caso de dúvidas, problemas ou feedback, entre me contato com yokoomatheus@gmail.com.

### Status do Projeto: Terminado.

