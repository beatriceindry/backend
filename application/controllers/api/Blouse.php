<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Blouse extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('blouse_model');
  }

  public function blousedetail_get()
  {
    $where = '';
    if (null !== $this->get('id_model')) {
      $model_blouse = $this->get('id_model');
      $where = "id_model LIKE '" . $model_blouse . "'" ;
    }
    $data = $this->blouse_model->blousedetail($where);
    $this->response( [ 'blouseDetail'=> $data], 200);
  }
}

 ?>
