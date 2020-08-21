<?php 

class Transaksi extends CI_controller{

    public function index(){

        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil 
        AND tr.id_customer = cs.id_customer AND cs.id_customer = '$customer'  ORDER BY id_rental DESC")->result();

        $this->load->view('templates_customer/header');
        $this->load->view('customer/transaksi', $data);
        $this->load->view('templates_customer/footer');

    }

    public function pembayaran($id){
        
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil = mb.id_mobil 
        AND tr.id_customer = cs.id_customer AND tr.id_rental = '$id'  ORDER BY id_rental DESC")->result();
        
        $this->load->view('templates_customer/header');
        $this->load->view('customer/pembayaran', $data);
        $this->load->view('templates_customer/footer');
    }

    public function pembayaran_aksi(){
        $id = $this->input->post('id_rental');
        $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
        if($bukti_pembayaran){
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'pdf|jpg|png|jpeg|tiff';;

                $this->load->library('upload',$config);
                if($this->upload->do_upload('bukti_pembayaran')){
                    $bukti_pembayaran = $this->upload->data('file_name');
                    $this->db->set('bukti_pembayaran',$bukti_pembayaran);
                }else{
                    echo $this->uploud->display_errors();
                }
            }
        $data = array(
            'bukti_pembayaran' => $bukti_pembayaran
        );

        $where = array(
            'id_rental' => $id 
        );

        $this->rental_model->update_data('transaksi', $data , $where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Data Berhasil di Update
        </div>');
        redirect('customer/transaksi');
                     
    }
}

?>