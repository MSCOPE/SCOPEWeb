<?php

include_once(APPPATH . "controllers/rest_service.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Widget_v1
 *
 * @author keam
 */
class Widget_v1 extends Rest_service {

    //put your code here
    function __construct() {
        parent::__construct();
        $this->default_format = 'application/json';
        $this->supported_formats = array(
            'json' => 'application/json',
            'html' => 'text/html'
        );
        $this->load->model('widget_v1_model', '', true);
    }

    protected function get() {

        // Get the ID from the request parameters.
        $id = $this->parameters['id'];

        // Initialize the Widget model.
        $this->widget_v1_model->initialize($id);

        // Check to make sure the ID is valid.
        $this->checkWidgetId($id);

        foreach ($this->supported_formats as $format => $type) {

            if ($this->format == $type) {

                $widget = $this->widget_v1_model->get();
                $view_data = Array('dto' => $widget);
                $output = $this->load->view('widget_v1/' . $format, $view_data, true);
                echo $output;
                exit;
            }
        }

        // If the requested format is not supported, then return a HTTP 404 code.
        $error_code = "404";
        $error_message = $error_code . " Unsupported format(s): " . $this->format;
        show_error($error_message, $error_code);
    }
    
    private function checkWidgetId($id) {
        if (empty($id) || !$this->widget_v1_model->isValidWidget()) {
            $error_code = "400";
            $error_message = $error_code . " Invalid widget";
            show_error($error_message, $error_code);
            exit;
        }
    }  

}
