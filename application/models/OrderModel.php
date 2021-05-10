<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderModel extends CI_Model {
  // Fungsi untuk menampilkan semua data order
	public function view(){
	    return $this->db->get('order')->result();
	  }

	public function view_by($produk){
	    $this->db->where('id', $produk);
	    return $this->db->get('order')->row();
	  }

	public function validation($mode){
    	$this->load->library('form_validation');

		if($mode == "save")
		    $this->form_validation->set_rules('input_produk', 'produk', 'required|max_length[50]');
		  	$this->form_validation->set_rules('input_jumlah', 'jumlah', 'required|max_length[50]');
		  	$this->form_validation->set_rules('input_nama', 'nama', 'required|max_length[50]');
		  	$this->form_validation->set_rules('input_alamat', 'Alamat', 'required');

		if($this->form_validation->run()) // Jika validasi benar
      		return TRUE; // Maka kembalikan hasilnya dengan TRUE
    	else // Jika ada data yang tidak sesuai validasi
      		return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

  public function save(){
    $data = array(
      "produk" => $this->input->post('input_produk'),
      "jumlah" => $this->input->post('input_jumlah'),
      "nama_pemesan" => $this->input->post('input_nama'),
      "alamat_pemesan" => $this->input->post('input_alamat'),
    );
    $this->db->insert('order', $data); // Untuk mengeksekusi perintah update data
  }

   public function delete($alamat_pemesan){
    $this->db->where('alamat_pemesan', $alamat_pemesan);
    $this->db->delete('order'); // Untuk mengeksekusi perintah delete data
  }

   public function edit($status){
    $data = array(
      "status" => $this->input->post('input_status')
    );
    
    $this->db->where('id', $status);
    $this->db->update('order', $data); // Untuk mengeksekusi perintah update data
  }

  public function count(){
    $sql = "SELECT COUNT(id) as jumlah FROM `order`";
    $result = $this->db->query($sql);
    return $result->row()->jumlah;
  }

  public function count1(){
    $sql = "SELECT COUNT(id) as jumlah1 FROM `order` where status = 'Belum Diproses'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah1;
  }

  public function count2(){
    $sql = "SELECT COUNT(id) as jumlah2 FROM `order` where status = 'Sedang Diproses'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah2;
  }

  public function count3(){
    $sql = "SELECT COUNT(id) as jumlah3 FROM `order` where status = 'Pesanan Sampai'";
    $result = $this->db->query($sql);
    return $result->row()->jumlah3;
  }

  public function count_date(){
    $sql = "SELECT COUNT(id) as jumlah_date FROM `order` where tgl < date(now())";
    $result = $this->db->query($sql);
    return $result->row()->jumlah_date;
  }

  public function count_date1(){
    $sql = "SELECT COUNT(id) as jumlah_date1 FROM `order` where date(tgl) = date(now())";
    $result = $this->db->query($sql);
    return $result->row()->jumlah_date1;
  }
}