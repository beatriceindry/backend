<?php

/**
 *
 */
class Gaun_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function gaundetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('model_gaun');
    return $query->result();
  }
}

 ?>
