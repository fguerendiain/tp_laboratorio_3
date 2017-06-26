<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require_once './vendor/autoload.php';
//    require_once './resources/UsuarioResource.php';
    require_once './resources/MedicamentoResource.php';
    require_once './resources/VentaResource.php';

    $config['displayErrorDetails'] = true;
    $config['addContentLengthHeader'] = false;

    $app = new \Slim\App(["settings" => $config]);

    //CONFIGURACION DE CORS PARA LA API
    $app->add(function($request, $response, $next){
        $response = $next($request, $response);
        return $response
                ->withHeader('Access-Control-Allow-Origin','*')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type. Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods','GET, POST, PUT, DELETE, OPTIONS')
                ->withHeader('Content-Type','application/json; charset=utf-8');
    });

    $app->group('/usuario', function () {
  //      $this->post('',          \UsuarioResource::class . ':verify');
    });

    $app->group('/medicamento', function () { //ok
        $this->post('',               \MedicamentoResource::class . ':create');
        $this->get('',                \MedicamentoResource::class . ':find'); 
        $this->get('/?laboratorio',   \MedicamentoResource::class . ':get');//?laboratorio=true (Traer Todos los medicamentos ordenados por laboratorio)
        $this->get('/{id}',           \MedicamentoResource::class . ':get');
        $this->delete('/{id}',        \MedicamentoResource::class . ':delete');
    });

    $app->group('/venta', function () { //ok
        $this->get('',           \VentaResource::class . ':find'); 
        $this->post('',          \VentaResource::class . ':create');
        $this->put('/{id}',      \VentaResource::class . ':update');
    });

    $app->run();
?>