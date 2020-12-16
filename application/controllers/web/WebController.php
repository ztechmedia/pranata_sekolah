<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("BaseModel", "BM");
        $this->load->helper("utility_helper");
    }

	public function home()
	{
        $data['view'] = "web/home";
        $year = date('Y');
        $month = date('m');
        $data['agenda'] = $this->db->query("
            SELECT id, title, DAY(date) AS day, MONTH(date) AS month 
                FROM agenda
                WHERE YEAR(date) = '$year'
                ORDER BY created_at desc
                LIMIT 5
        ")->result();
        $this->load->view('template/web/app', $data);
    }

    public function vimission()
    {
        $data['vimission'] = $this->BM->getById("vision_mission", 1);
        $data['view'] = "web/vimission";
        $this->load->view('template/web/app', $data);
    }

    public function history()
    {
        $data['history'] = $this->BM->getById("history", 1)->description;
        $data['view'] = "web/history";
        $this->load->view('template/web/app', $data);
    }

    public function agenda()
    {
        $data['agendas'] = $this->db->query("
            SELECT id, title, DAY(date) AS day, MONTH(date) AS month 
                FROM agenda
                ORDER BY created_at desc
        ")->result();
        $data['view'] = "web/agenda";
        $this->load->view('template/web/app', $data);
    }

    public function readAgenda($agendaId)
    {
        $data['agenda'] = $this->db->query("
            SELECT title, description, DAY(date) AS day, MONTH(date) AS month 
                FROM agenda
                WHERE id = '$agendaId'
        ")->row();
        $data['view'] = "web/read-agenda";
        $this->load->view('template/web/app', $data);
    }
    
}
