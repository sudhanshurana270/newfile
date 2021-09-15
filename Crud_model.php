<?php
class crud_model extends CI_Model {
  public function getAllProducts(){
    $this->db->get("products");
    }
}
?>