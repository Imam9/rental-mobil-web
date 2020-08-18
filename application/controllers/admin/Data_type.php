<?php

class Data_type extends CI_Controller{
    
    public function index(){
        $data['type'] = $this->rental_model->get_data('type')->result();
        //  $data['type'] artinya data yang di inisialisasi ke view
        //sedangkan get_data['type']  = type merupakan nama dari sebuah table
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_type', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_type(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_type');
        $this->load->view('templates_admin/footer');
    }
    
    public function tambah_type_aksi(){
         $this->_rules();

         if($this->form_validation->run() == FALSE){
             $this->tambah_type();
         }else{
             $kode_type = $this->input->post('kode_type');
             $nama_type = $this->input->post('nama_type');

             $data = array(
                 'kode_type' => $kode_type,
                 'nama_type' => $nama_type
             );

             $this->rental_model->insert_data($data,'type');
             $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
             <strong>Success!</strong> Data Type Berhasil Di Tambahkan
            </div>');
             redirect('admin/data_type');
         }
    }

    public function update_type($id){
        $where = array('id_type'=> $id);
        $data['type'] = $this->db->query("SELECT * FROM type WHERE id_type = '$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_type', $data);
        $this->load->view('templates_admin/footer');

    }

    public function update_type_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_type();
        }else{
            $id = $this->input->post('id_type');
            $kode_type = $this->input->post('kode_type');
            $nama_type = $this->input->post('nama_type');

            $data = array(
                'kode_type' => $kode_type,
                'nama_type' => $nama_type
            );

            $where = array(
                'id_type' => $id
            );

            $this->rental_model->update_data('type', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Data Type Berhasil Di Update
            </div>');
            redirect('admin/data_type');
            
           
        }
    }

    public function delete_type($id){
        $where = array(
            'id_type' => $id
        );
        $this->rental_model->delete_data($where, 'type');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Data Type Berhasil Di Update
        </div>');
        redirect('admin/data_type');
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
        $this->form_validation->set_rules('nama_type','Nama Type', 'required');
    }
}

?>