<?php

/**
 *
 */
class Kain_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function kaindetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('kain');
    return $query->result();
  }
}

 ?>
