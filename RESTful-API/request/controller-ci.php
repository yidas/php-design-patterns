<?php

/**
 * @author      Nick Tsai <myintaer@gmail.com>
 * @version     1.0.0
 * @filesource  Codeigniter 3
 * @see         https://en.wikipedia.org/wiki/Representational_state_transfer#Relationship_between_URL_and_HTTP_methods
 */
class Resource extends CI_Controller {

    /**
     * RESTful API implement
     */
    public function ajax($resourceID=NULL)
    {   
        /* REST Handler */
        $method = isset($_SERVER['REQUEST_METHOD']) 
            ? $_SERVER['REQUEST_METHOD']
            : 'GET';

        /* Request Data */
        $requestData = [];
        parse_str(file_get_contents("php://input"), $requestData);

        /* Router */
        switch ($method) {
            case 'POST':
                if (!$resourceID) {

                    $this->_store($requestData);
                }
                break;

            case 'PUT':
                if ($resourceID) {

                    $this->_update($requestData, $resourceID);
                }
                break;

            case 'DELETE':
                if ($resourceID) {

                    $this->_delete($resourceID);
                }
                break;

            case 'GET':
            default:
                if ($resourceID) {

                    $this->_show($resourceID);

                } else {

                    $this->_list($requestData);
                }
                break;
        }
    }

    private function _list($requestData)
    {
        
    }

    private function _store($requestData)
    {
        
    }

    private function _show($resourceID)
    {
        
    }

    private function _update($requestData, $resourceID)
    {
        
    }

    private function _delete($resourceID)
    {
        
    }
}

