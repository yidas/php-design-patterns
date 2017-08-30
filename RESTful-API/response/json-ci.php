<?php

/**
 * @author      Nick Tsai <myintaer@gmail.com>
 * @version     1.0.0
 * @filesource  Codeigniter 3
 * @see         https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
 */
class Controller extends CI_Controller {

    public function get($resourceID)
    {
        $response = ['code'=>200];

        try {
            
            $this->load->model('Users_model');
            $user = $this->Users_model->findOne($resourceID);

            if (!$user) {
                
                throw new Exception("User not found", 404);  
            }

            $response['data'] = $user;

        } catch (Exception $e) {
            
            $response['code'] = $e->getCode();
            $response['message'] = $e->getMessage();
        }

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
    }
}
