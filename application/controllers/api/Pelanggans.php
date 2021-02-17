<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Pelanggans extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('pelanggan_model');
  }

  public function pelanggandetail_get()
  {
    $where = '';
    if (null !== $this->get('id_pelanggan')) {
      $pelanggan = $this->get('id_pelanggan');
      $where = "id_pelanggan LIKE '" . $pelanggan . "'" ;
    }
    $data = $this->pelanggan_model->pelanggandetail($where);
    $this->response( [ 'pelangganDetail'=> $data], 200);
  }
}

 ?>
