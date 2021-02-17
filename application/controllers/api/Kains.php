<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Kains extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('kain_model');
  }

  public function kaindetail_get()
  {
    $where = '';
    if (null !== $this->get('id_kain')) {
      $kain = $this->get('id_kain');
      $where = "id_kain LIKE '" . $kain . "'" ;
    }
    $data = $this->kain_model->kaindetail($where);
    $this->response( [ 'kainDetail'=> $data], 200);
  }
}

 ?>
