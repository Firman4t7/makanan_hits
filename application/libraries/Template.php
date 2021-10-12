<?php
class Template{
    protected $_ci;
    
    public function __construct(){
        $this->_ci = &get_instance();
    }
    
    public function view($content, $data = NULL){

        $data['header'] = $this->_ci->load->view('include/front_header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('include/front_footer', $data, TRUE);
        
        $this->_ci->load->view('landing/home', $data);
    }
}