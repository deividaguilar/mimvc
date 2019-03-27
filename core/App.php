<?php
class App
{
    protected $controller = "app\\controllers\\Home";
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->pareseUrl();
        if (file_exists(PATHS['APP'] . "controllers" . DS . "{$url[0]}.php")) {
            $this->controller = "app\\controllers\\$url[0]";
            unset($url[0]);
        }
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($_POST)) {
            $this->params = $_POST;
        } else {
            $this->params = $url ? array_values($url) : $this->params;
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function pareseUrl()
    {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
    }
}
