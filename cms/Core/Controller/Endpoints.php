<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Tests;
use Core\Model\Item;
use Core\Model\Transaction;
use Exception;

class Endpoints extends Controller
{
        use Tests;

        protected $request_body;
        protected $http_code = 200;

        protected $response_schema = array(
                "success" => true, // to provide the response status.
                "message_code" => "", // to provide message code for the front-end developer for a better error handling
                "body" => [],
        );

        function __construct()
        {
                $this->request_body = (array) json_decode(file_get_contents("php://input"));
                
        }

        public function render()
        {
                header("Content-Type: application/json"); // changes the header information
                http_response_code($this->http_code); // set the HTTP Code for the response
                echo json_encode($this->response_schema); // convert the data to json format
        }

        function Items()
        {

                try {
                        $item = new Item;
                        $items = $item->get_all();
                        if (empty($items)) {
                                throw new \Exception('No Items were found!');
                        }
                        $this->response_schema['body'] = $items;
                        $this->response_schema['message_code'] = "items_collected_successfuly";
                } catch (\Exception $error) {
                        $this->response_schema['success'] = false;
                        $this->response_schema['message_code'] = $error->getMessage();
                        $this->http_code = 404;
                }
        }

        function items_create()
        {
                self::check_if_empty($this->request_body);
                try {
                        $item = new Item;
                        $item->create($this->request_body);//creat for item
                        $this->response_schema['message_code'] = "item_created_successfuly";
                } catch (\Exception $error) {
                        $this->response_schema['message_code'] = "item_was_not_created";
                        $this->http_code = 421;
                }
        }
}