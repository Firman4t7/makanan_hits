<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('detail');
		$this->load->model('m_makanan');
		$this->load->helper('form');
	}

	public function index()
	{

		// $query = $this->db->query("SELECT * FROM makanan");

		// $data['makanan'] = $query->result();

		// $this->load->view('include/front_header');
		// $this->load->view('landing/home');
		// $this->load->view('include/front_footer');


		$tmplmakanan = $this->m_makanan->getDataMkn();


		$data = array('datamkn' => $tmplmakanan );


		$this->template->view('landing/home', $data);
		
	}

	public function detail($id) {

		$editMkn = $this->m_makanan->getDetailMkn($id);

		
		$data = array('makanan' => $editMkn);


		


		$this->detail->view('detail/details',$data);
	}

	public function formeditmkn($id) {


		$editMkn = $this->m_makanan->getTampilmkn($id);

		
		$data = array('makanan' => $editMkn);

		// echo "<prev>";
		// echo print_r($data);
		// echo "<prev>";


		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('admin/form_editmkn',$data);
		$this->load->view('template/admin_footer');

	}

	public function admin() {

		$data['total'] = $this->db->query("SELECT COUNT(*) as total FROM makanan")->row_array();



		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('admin/index',$data);
		$this->load->view('template/admin_footer');
	}


	public function form_makanan() {

		$tampilmkn = $this->m_makanan->getDataMkn();


		$data = array('tampil' => $tampilmkn );

		$this->load->view('template/admin_header');
		$this->load->view('template/admin_sidebar');
		$this->load->view('admin/form_makanan', $data);
		$this->load->view('template/admin_footer');
	}

	public function aksiInsert() {


		$config['upload_path'] = './asset/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['Gambar']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		$this->upload->do_upload('Gambar');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/img/'.$file_name;
		$thumb['new_image'] = './asset/img/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();
		$data = array(
			'nama_makanan' => $this->input->post('nama_makanan'),
			'harga' => $this->input->post('harga'),
			'Gambar' => $file_name,
			'keterangan' => $this->input->post('ket')
			
		);

		//print_r($data);
		$save = $this->m_makanan->inputmkn($data);

		redirect('index.php/Home/form_makanan');

	}


	public function aksiUpdate() {

		$id = $this->input->post('id');
		$config['upload_path'] = './asset/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$new_name = time().$_FILES['Gambar']['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
		//$this->upload->do_upload('Gambar');
		$file_name = $config['file_name'] = $new_name;
		$thumb['image_library'] = 'gd2';
		$thumb['source_image'] = './asset/img/'.$file_name;
		$thumb['new_image'] = './asset/img/thumb/'; // path where you want to save thumnail
		$thumb['create_thumb'] = TRUE;
		$thumb['maintain_ratio'] = TRUE;
		$thumb['width']         = 200;
		$thumb['height']       = 200;
		$this->load->library('image_lib', $thumb);
		$this->image_lib->resize();



		if (!$this->upload->do_upload('Gambar')) {
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array(
				'nama_makanan' => $this->input->post('nama_makanan'),
				'harga' => $this->input->post('harga'),
				'Gambar' => $file_name,
				'keterangan' => $this->input->post('ket')

			);	

		//print_r($data);
			$save = $this->m_makanan->updatemkn($data, $id);

			redirect('index.php/Home/form_makanan');
		}
		


	}
	


	public function aksiHapus($id) {

		$this->m_makanan->deleteMkn($id);
		redirect(base_url('index.php/Home/form_makanan'));
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */