<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Dress extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('dress_model');
  }

  public function dressdetail_get()
  {
    $where = '';
    if (null !== $this->get('id_model')) {
      $model_dress = $this->get('id_model');
      $where = "id_model LIKE '" . $model_dress . "'" ;
    }
    $data = $this->dress_model->dressdetail($where);
    $this->response( [ 'dressDetail'=> $data], 200);
  }
}

 ?>
