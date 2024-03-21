<?php
namespace src\routes;

class Router{
    private $url = ["Pages", "home"];
    private $controller;
    private $method = "index";

    public function routes()
    {
        if(isset($_GET['url']))
        {
            $this->url = explode('/',$_GET['url']);

            if($this->url[0])
            {
            
                $this->controller = 'src\\controllers\\'.ucfirst($this->url[0])."Controller";


                if( isset($this->url[1]))
                {
                    if(method_exists($this->controller, $this->url[1]))
                    {
                        $this->method = $this->url[1];
                    }
                }

                try{
                $response = call_user_func_array(array(new $this->controller, $this->method), $this->url);

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
                
            $response = call_user_func_array(array(new $this->controller, $this->method), $this->url);
        }
    }

}

?>