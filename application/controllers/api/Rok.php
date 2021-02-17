<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Rok extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('rok_model');
  }

  public function rokdetail_get()
  {
    $where = '';
    if (null !== $this->get('id_model')) {
      $model_rok = $this->get('id_model');
      $where = "id_model LIKE '" . $model_rok . "'" ;
    }
    $data = $this->rok_model->rokdetail($where);
    $this->response( [ 'rokDetail'=> $data], 200);
  }
}

 ?>
