<?php

/**
 *
 */
class Rok_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function rokdetail($where='')
  {
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('model_rok');
    return $query->result();
  }
}

 ?>
