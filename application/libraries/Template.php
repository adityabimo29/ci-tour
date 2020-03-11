<?php


class Template {

    protected $CI;

    public function __construct(){
        $this->CI =& get_instance();
    }

    public function display($content,$data = null){
        $newData['_content'] = $this->CI->load->view($content,$data,TRUE);
        $this->CI->load->view('admin/template.php',$newData);
    }
}