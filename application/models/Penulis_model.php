<?php

/**
 *
 */
class Penulis_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function penulisdetail()
  {

    $this->db->select('*');
    $query = $this->db->get('penulis');
    return $query->result();
  }
}

 ?>
