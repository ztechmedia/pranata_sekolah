<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubjectValue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("BaseModel", "BM");
        $this->load->model("ValueModel", "Value");
        $this->load->library('Datatables', 'datatables');
        $this->load->library("form_validation");
        $this->load->helper("utility");
        $this->auth->logged();
    }

    public function values()
    {
        $this->load->view('admin/values/values');
    }

    public function studentSearch()
    {
       $obj = fileGetContent();
       $data['students'] = $this->Value->getStudents("name", $obj->student);
       $this->load->view("admin/values/student-list", $data);
    }

    public function studentClasslist($studentId)
    {
        $data['student'] = $this->Value->getStudent($studentId);
        $data['classes'] = $this->BM->getAll("class");
        $this->load->view("admin/values/student-classlist", $data);
    }

    public function setValues($studentId, $classId)
    {
        $data['student'] = $this->Value->getStudent($studentId);
        $data['classId'] = $classId;
        $data['year'] = date("Y");
        $this->load->view("admin/values/setvalues", $data);
    }
}