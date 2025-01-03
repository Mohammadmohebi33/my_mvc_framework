<?php 

namespace Mohammad\MvcProject\core;


class Application{

    public static Application $app;
    public static string $ROOT_DIR;
    public Request $request;
    public Router $router;
    public Response $response;
    public Controller $controller;
    

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request , $this->response);
    }


    public function run()
    {
        $this->router->resolve();
    }
}