<?php 

class Transaksi extends CI_Controller{

    public function index(){
        
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pembayaran($id){

        $where = array(
            'id_rental' => $id
        );

        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental = '$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cek_pembayaran(){
        $id = $this->input->post('id_rental');
        $status_pembayaran  = $this->input->post('status_pembayaran');


        $data =  array(
            'status_pembayaran' => $status_pembayaran
        );

        $where = array(
            'id_rental' => $id
        );

        $this->rental_model->update_data('transaksi', $data, $where);
        redirect('admin/transaksi');
    }

    public function download_pembayaran($id){
        $this->load->helper('download');
        $filepembayaran = $this->rental_model->downloadpembayaran($id);
        $file = 'assets/upload/'.$filepembayaran['bukti_pembayaran'];
        force_download($file, NULL);
    }


    public function transaksi_selesai($id){
        $where = array(
            'id_rental' => $id
        );

        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental = '$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function transaksi_selesai_aksi(){
        $id = $this->input->post('id_rental');
        $id_mobil = $this->input->post('id_mobil');
        $tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
        $status_rental = $this->input->post('status_rental');
        $status_pengembalian = $this->input->post('status_pengembalian');
        $tanggal_kembali = $this->input->post('tanggal_kembali');
        $denda = $this->input->post('denda');

        $x = strtotime($tanggal_pengembalian);
        $y = strtotime($tanggal_kembali);

        $selisih_denda = abs($x - $y)/(60*60*24);
        $total_denda = $selisih_denda * $denda;

        $data = array(
            'tanggal_pengembalian' => $tanggal_pengembalian,
            'status_rental' => $status_rental,
            'status_pengembalian' => $status_pengembalian,
            'total_denda' => $total_denda
        );

        $data1 = array(
            'status' => "1"
        );
        
        $where1 = array(
            'id_mobil' => $id_mobil
        );

        $where =  array(
            'id_rental' => $id
        );


        $this->rental_model->update_data('mobil', $data1, $where1);
        $this->rental_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Transaksi Berhasil
        </div>');
        redirect('admin/transaksi');
    }

    public function transaksi_batal($id){
        $where = array(
            'id_rental' => $id
        );

        $data = $this->rental_model->get_where($where, 'transaksi')->row();
      

        $where2 = array(
            'id_mobil' => $data->id_mobil
        );
        
        $data2 = array(
            'status' => '1'
        );

        $this->rental_model->update_data('mobil', $data2, $where2);
        $this->rental_model->delete_data($where, 'transaksi');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Data Berhasil di Batalkan
        </div>');
        redirect('admin/transaksi');
    }
}
?>