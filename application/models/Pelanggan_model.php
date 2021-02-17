<?php

/**
 *
 */
class Pelanggan_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function pelanggandetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('pelanggan');
    return $query->result();
  }
}

 ?>
