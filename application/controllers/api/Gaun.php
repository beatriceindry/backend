<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Gaun extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('gaun_model');
  }

  public function gaundetail_get()
  {
    $where = '';
    if (null !== $this->get('id_model')) {
      $model_gaun = $this->get('id_model');
      $where = "id_model LIKE '" . $model_gaun . "'" ;
    }
    $data = $this->gaun_model->gaundetail($where);
    $this->response( [ 'gaunDetail'=> $data], 200);
  }
}

 ?>
