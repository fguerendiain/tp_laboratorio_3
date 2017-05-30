<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require 'vendor/autoload.php';
    require 'clases/AccesoDatos.php';
    require 'clases/cd.php';

    $app = new \Slim\App;
    $app->get('/hello/{name}', function (Request $request, Response $response) {
        $name = $request->getAttribute('name');
        $response->getBody()->write("Hello, $name");

        return $response;
    });

    //PARA TRAER
    $app->get('/', function (Request $request, Response $response) {
        $response = $response->withJson(cd::TraerTodoLosCds());
        return $response;
    });

    //PARA AGREGAR
    $app->post('/', function (Request $request, Response $response) {
        
        $cd_data = $request->getParsedBody();

        $cdaux = new cd();
            $cdaux->id = filter_var($cd_data['id'], FILTER_SANITIZE_STRING);
            $cdaux->titulo = filter_var($cd_data['titulo'], FILTER_SANITIZE_STRING);
            $cdaux->cantante = filter_var($cd_data['cantante'], FILTER_SANITIZE_STRING);
            $cdaux->año = filter_var($cd_data['año'], FILTER_SANITIZE_STRING);
            $cdaux->InsertarElCd();

        $response->getBody()->write("Se cargo el CD");

        return $response;
    });

    //PARA BORRAR
    $app->delete('/', function (Request $request, Response $response) {

        $cd_data = $request->getParsedBody();
        $cdaux = new cd();
        $cdaux->id = filter_var($cd_data['id'], FILTER_SANITIZE_STRING);
        $cdaux->BorrarCd();

        $response->getBody()->write('BORRAR');
        return $response;
    });

    //PRA MODIFICAR
    $app->put('/', function (Request $request, Response $response) {

        $cd_data = $request->getParsedBody();
        $cdaux = new cd();
            $cdaux->id = filter_var($cd_data['id'], FILTER_SANITIZE_STRING);
            $cdaux->titulo = filter_var($cd_data['titulo'], FILTER_SANITIZE_STRING);
            $cdaux->cantante = filter_var($cd_data['cantante'], FILTER_SANITIZE_STRING);
            $cdaux->año = filter_var($cd_data['año'], FILTER_SANITIZE_STRING);

        
        $response->getBody()->write("MODIFICAR");
        return $response;
    });


    $app->run();

?>