<?php

/**
 *
 */
class Kebaya_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function kebayadetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('model_kebaya');
    return $query->result();
  }
}

 ?>
