<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Penuliss extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('penulis_model');
  }

  public function penulisdetail_get()
  {
    $data = $this->penulis_model->penulisdetail();
    $this->response( ['penulisDetail'=> $data], 200);
  }
}

 ?>
