<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sihirbaz extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('admin/Database_Model');
    }

	public function index()
	{
	    $query = $this->db->get('ayarlar');
        $data['ayar'] = $query->result();

	    $query = $this->db->get('kategoriler');
        $data['kategori'] = $query->result();
        $data["katsayi"] = $query->num_rows();

        $query = $this->db->get('alt_kategoriler');
        $data['altkategori'] = $query->result();

        if($this->session->kullanici_data['id']){
            $k_id = $this->session->kullanici_data['id'];
            $query = $this->Database_Model->sepet_listesi_sorgusu($k_id);
            $data['sepetsayi'] = $query->num_rows();
            $data['headersepet'] = $query->result();
        }else{
            $data['sepetsayi'] = 0;
        }

        $query = $this->Database_Model->sihirbaz("işlemci");
        $data['islemci'] = $query->result();
        $query = $this->Database_Model->sihirbaz("anakart");
        $data['anakart'] = $query->result();
        $query = $this->Database_Model->sihirbaz("bellek");
        $data['bellek'] = $query->result();
        $query = $this->Database_Model->sihirbaz("hdd");
        $data['hdd'] = $query->result();
        $query = $this->Database_Model->sihirbaz("ssd");
        $data['ssd'] = $query->result();
        $query = $this->Database_Model->sihirbaz("kasa");
        $data['kasa'] = $query->result();
        $query = $this->Database_Model->sihirbaz("güç kaynağı");
        $data['kaynak'] = $query->result();
        $query = $this->Database_Model->sihirbaz("monitor");
        $data['monitor'] = $query->result();
        $query = $this->Database_Model->sihirbaz("optik sürücü");
        $data['optik'] = $query->result();
        $query = $this->Database_Model->sihirbaz("ekran kartı");
        $data['gpu'] = $query->result();

		$this->load->view('header',$data);
		$this->load->view('pcsihirbaz');
		$this->load->view('footer');
	}

    public function sepeteekle(){
        if(!$this->session->userdata('kullanici_data')){
            $this->session->set_flashdata("sepet","Kayıt Ekleme İşlemi Başarı ile Gerçekleştirildi");
            redirect(base_url().'home/login');
        }
        $data=array(
            'urun_id'=>$this->input->post('islemci'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('anakart'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('gpu'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('bellek'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('hdd'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('ssd'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('kasa'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('kaynak'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('monitor'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        $data=array(
            'urun_id'=>$this->input->post('optik'),
            'kullanici_id'=>$this->session->kullanici_data['id']
        ) ;
        $this->Database_Model->insert_data("sepetteki_urunler",$data);
        redirect(base_url()."home/sepet/");
    }


}
