<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Barang';
        $data['barang'] = $this->m_data->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('barang', $data);
        $this->load->view('templates/footer');
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('jenis_id', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('satuan_id', 'Satuan Barang', 'required');
    }

    public function add()
    {
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Barang";
            $data['jenis'] = $this->m_data->tampil_data('jenis');
            $data['satuan'] = $this->m_data->tampil_data('satuan');

            // Mengenerate ID Barang
            $kode_terakhir = $this->m_data->getMax('barang', 'id_barang');
            $kode_tambah = substr($kode_terakhir, -6, 6);
            $kode_tambah++;
            $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
            $data['id_barang'] = 'B' . $number;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('barang/add', $data);
            $this->load->view('templates/footer');
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('barang', $input);

            if ($insert) {
                set_pesan('data berhasil disimpan');
                redirect('barang');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('barang/add');
            }
        }
    }

    public function getstok($getId)
    {
        $id = encode_php_tags($getId);
        $query = $this->admin->cekStok($id);
        output_json($query);
    }
}