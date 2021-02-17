<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Penjahits extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('penjahit_model');
  }

  public function penjahitdetail_get()
  {
    $data = $this->penjahit_model->penjahitdetail();
    $this->response( [ 'penjahitDetail'=> $data], 200);
  }
}

 ?>
