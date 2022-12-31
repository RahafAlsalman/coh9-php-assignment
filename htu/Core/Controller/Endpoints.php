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

 

        function transactions()
        {

                try {
              
                        $Transaction = new Transaction;
                        $Transactions = $Transaction->get_all();
                        if (empty($Transactions)) {
                                throw new \Exception('No Transactions were found!');
                        }
                        $this->response_schema['body'] = $Transaction->get_all();
                        $this->response_schema['message_code'] = "Transactions_collected_successfuly";
                } catch (\Exception $error) {
                        $this->response_schema['success'] = false;
                        $this->response_schema['message_code'] = $error->getMessage();
                        $this->http_code = 404;
                }
        }

        function transactions_create()
        {
                self::check_if_empty($this->request_body);
              //creat for ite 
                try {
                        
                        $Transactions= new Transaction;
                        $Transactions->create($this->request_body);
                        $this->response_schema['message_code'] = "item_created_successfuly";
                } catch (\Exception $error) {
                        $this->response_schema['message_code'] = "item_was_not_created";
                        $this->http_code = 421;
                }
        }
        function item() {
        $item= new Item;
        $current_item=$item->get_by_id($_POST('id'));
        $current_item->quantity=$current_item->stock_availabel_quntity->$this->request_body['quantity'];
        $item->update($current_item);
        }
        function index() {
                $item= new Item;
                $current_item=$item->get_by_id($_POST('id'));
                $price=$current_item->selling_price;
        
        }
}

