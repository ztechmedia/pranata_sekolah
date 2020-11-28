<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubjectTeacher extends CI_Controller
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

    //@desc     show subteachers table
    //@route    GET admin/subteachers
    public function subteachers()
    {
        $data['classes'] = $this->Subject->subclassTotal();
        $this->load->view('admin/subteachers/subteachers', $data);
    }

}