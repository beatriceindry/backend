<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Kebaya extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('kebaya_model');
  }

  public function kebayadetail_get()
  {
    $where = '';
    if (null !== $this->get('id_model')) {
      $model_kebaya = $this->get('id_model');
      $where = "id_model LIKE '" . $model_kebaya . "'" ;
    }
    $data = $this->kebaya_model->kebayadetail($where);
    $this->response( [ 'kebayaDetail'=> $data], 200);
  }
}

 ?>
