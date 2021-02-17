<?php

/**
 *
 */
class Dress_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function dressdetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('model_dress');
    return $query->result();
  }
}

 ?>
