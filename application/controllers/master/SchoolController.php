<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SchoolController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("BaseModel", "BM");
        $this->load->library('Datatables', 'datatables');
        $this->load->library("form_validation");
        $this->load->helper("utility");
        $this->auth->logged();
    }

    public function history()
    {
        $data['history'] = $this->BM->getById("history", 1);
        $this->load->view("admin/history/history", $data);
    }

    public function historyUpdate()
    {
        $post = getPost();
        $update = $this->BM->updateById("history", 1, $post);
        if($update) {
            appJson([
                "message" => "Berhasil mengubah sejarah sekolah"
            ]);
        }
    }

    public function vimission()
    {
        $data['vimission'] = $this->BM->getById("vision_mission", 1);
        $this->load->view("admin/vimission/vimission", $data);
    }

    public function updateVimission()
    {
        $post = getPost();
        $update = $this->BM->updateById("vision_mission", 1, $post);
        if($update) {
            appJson([
                "message" => "Berhasil mengubah Visi & Misi sekolah"
            ]);
        }
    }

    public function agenda()
    {
        $this->load->view("admin/agenda/agenda");
    }

    public function agendaTable()
    {
        $students = $this->datatables->setDatatables(
            "agenda",
            [
                "columns" => ['id', 'title', 'date',],
                "searchable" => ["title", "date"],
                "actions" => "admin/actions/edit-delete",
                "delete_message" => [
                    'name' => "Yakin ingin menghapus [title] pada data Murid",
                ]
            ]
        );
        json($students);
    }

    public function create()
    {
        $this->load->view("admin/agenda/create");
    }

    function tinyUpload() {
		$config['upload_path'] = './assets/images/agenda';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')) {
			$this->output->set_header('HTTP/1.0 500 Server Error');
			exit;
		} else {
			$file = $this->upload->data();
			$this->output
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode(['location' => base_url().'assets/images/agenda/'.$file['file_name']]))
				->_display();
			exit;
		}
    }
    
    public function add()
    {
        $post = getPost();
        $data = [
            "title" => $post['title'],
            "date" => revDate($post['date']),
            "slug" => url_title($post['title'], 'dash', true),
            "description" => $post['description'],
            "user_id" => $this->auth->userId
        ];
        $create = $this->BM->create("agenda", $data);
        if($create) {
            appJson([
                "message" => "Berhasil menambah agenda"
            ]);
        }
    }

    public function edit($id)
    {
        $agenda = $this->BM->checkById("agenda", $id);
        $data = [
            "agenda" => $agenda,
        ];
        $this->load->view('admin/agenda/edit', $data);
    }

    public function update($id)
    {
        $post = getPost();
        $data = [
            "title" => $post['title'],
            "date" => revDate($post['date']),
            "slug" => url_title($post['title'], 'dash', true),
            "description" => $post['description'],
            "user_id" => $this->auth->userId
        ];
        $update = $this->BM->updateById("agenda", $id, $data);
        if($update) {
            appJson([
                "message" => "Berhasil mengubah agenda"
            ]);
        }
    }
}