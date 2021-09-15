<?php
class Crud extends CI_controller{
    public function index(){
        $data['product_details']=$this->Crud_model->getAllProducts();
        $this->load->view('crud_view',$data);
    }
}
