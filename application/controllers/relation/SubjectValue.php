<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubjectValue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("BaseModel", "BM");
        $this->load->model("ValueModel", "Value");
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

    public function subclass($classId, $year)
    {
        $sublist = $this->Value->subclassList($classId, $year);
        $newSub = [];
        foreach ($sublist as $sub) {
            $sname = $sub->semester_name;
            $newSub[$sname][] = [
                "id" => $sub->id,
                "subject_name" => $sub->subject_name,
                "task" => $sub->task ? $sub->task : 0,
                "midtest" => $sub->midtest ? $sub->midtest : 0,
                'endtest' => $sub->endtest ? $sub->endtest : 0
            ];
        }
        $data['sublist'] = $newSub;
        
        $this->load->view("admin/values/subclass", $data);
    }

    public function add($studentId)
    {
        $post = getPost();
        $subclass = $post['subclass_id'];
        $task = $post['task'];
        $midtest = $post['midtest'];
        $endtest = $post['endtest'];
        foreach ($subclass as $id) {
            $data[] = [
                "subclass_id" => $id,
                "student_id" => $studentId,
                "task" => $task[$id][0],
                "midtest" => $midtest[$id][0],
                "endtest" => $endtest[$id][0],
            ];
        }

        $create = $this->BM->createMultiple("student_values", $data);
        if($create) {
            appJson([
                "message" => "Berhasil menyimpan nilai siswa"
            ]);
        }
    }
}