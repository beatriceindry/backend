<?php

/**
 *
 */
class Blouse_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function blousedetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('model_blouse');
    return $query->result();
  }
}

 ?>
