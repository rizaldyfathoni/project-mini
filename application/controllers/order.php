<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class order extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('OrderModel'); // Load orderModel ke controller ini
  }

  public function index(){
    $data['order'] = $this->OrderModel->view();
    $this->load->view('order/index', $data);
  }

  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->OrderModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->OrderModel->save(); // Panggil fungsi save() yang ada di SiswaModel.php
        redirect('order/selesai');
      }
    }
    $this->load->view('order');
  }

  public function form_order(){
    $data['order'] = $this->OrderModel->view();
    $this->load->view('order/form_order', $data);
  }

  public function selesai(){
    $this->load->view('order/selesai');
  }

  public function admin(){
    $data['count'] = $this->OrderModel->count();
    $data['count1'] = $this->OrderModel->count1();
    $data['count2'] = $this->OrderModel->count2();
    $data['count3'] = $this->OrderModel->count3();
    $data['count_date'] = $this->OrderModel->count_date();
    $data['count_date1'] = $this->OrderModel->count_date1();
    $this->load->view('order/admin', $data);
  }

  public function ubah($id){
    if($this->input->post('submit')){ 
        $this->OrderModel->edit($id);
        redirect('order/form_order');
    }
    $data['order'] = $this->OrderModel->view_by($id);
    $this->load->view('order/form_ubah', $data);
  }

  public function hapus($produk){
    $this->OrderModel->delete($produk);
    redirect('order/form_order');
  }
}