<?php

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('template');
        $this->load->model('home_model');
    }

    public function index() {
        $data['datas'] = $this->home_model->getAll();
        $this->template->display('home',$data);
    }

    public function add() {
        $this->template->display('add');
    }

    function save(){
        $this->form_validation->set_rules('name','Name','required');
        if($this->form_validation->run() === TRUE) {
            $data = array(
                'name' => $this->input->post('name'),
            );
            $this->home_model->save($data);
            redirect('home');
        }else{
            $this->template->display('home/add');
        }
    }

}