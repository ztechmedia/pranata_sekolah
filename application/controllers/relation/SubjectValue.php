<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubjectValue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("BaseModel", "BM");
        $this->load->model("SubjectModel", "Subject");
        $this->load->library('Datatables', 'datatables');
        $this->load->library("form_validation");
        $this->load->helper("utility");
        $this->auth->logged();
    }

    public function values()
    {
        $this->load->view('admin/values/values');
    }

    public function studentSearch($student)
    {
       $students = $this->BM->getLike("students", "name", $student);
       dd($students);
    }
}