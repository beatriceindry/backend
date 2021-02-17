<?php

/**
 *
 */
class Penjahit_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function penjahitdetail()
  {

    $this->db->select('*');
    $query = $this->db->get('penjahit');
    return $query->result();
  }
}

 ?>
