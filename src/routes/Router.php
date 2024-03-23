<?php
namespace src\routes;

class Router{
    private $url = ["Pages", "home"];
    private $controller;
    private $method = "index";
    private $params = [];

    public function routes()
    {
        if(isset($_GET['url']))
        {
            $this->url = explode('/',$_GET['url']);

            if($this->url[0])
            {
                
                if(class_exists("src\\controllers\\".ucfirst($this->url[0])."Controller"))
                {
                    $this->controller = 'src\\controllers\\'.ucfirst($this->url[0])."Controller";
                }
                else{
                    $this->controller = "src\\controllers\\PagesController";
                }
               
                if( isset($this->url[1]))
                {
                    if(method_exists($this->controller, $this->url[1]))
                    {
                        $this->method = $this->url[1];
                    }
                }

                if( isset($this->url[2]))
                {
                    array_push($this->params, $this->url[2]);
                }


                try{

                call_user_func_array(array(new $this->controller, $this->method), $this->params);

                }
                catch(\Exception $e)
                {   
                    http_response_code(404);
                    echo json_encode(array('status' => 'success', 'data' => $e->getMessage()), JSON_UNESCAPED_UNICODE);
                }


            }
        
        }
        else
        {
            $this->controller = 'src\\controllers\\'.ucfirst($this->url[0])."Controller";
                
            call_user_func_array(array(new $this->controller, $this->method), $this->url);
        }
    }

}

?>