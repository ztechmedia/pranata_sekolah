<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubjectClass extends CI_Controller
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

    //@desc     show subclass table
    //@route    GET admin/subclass
    public function subclass()
    {
        $data['classes'] = $this->BM->getALl("class");
        $this->load->view('admin/subclass/subclass', $data);
    }

    //@desc     edit subclass table
    //@route    GET admin/subclass/:classId/edit
    public function edit($id)
    {
        $semester = $this->BM->getFirst("semesters");
        $data['semesterName'] = $semester->semester_name;
        $data['smClass'] = ".sm-".$semester->id;
        $data['smId'] = $semester->id;
        $data['semesters'] = $this->BM->getALl("semesters");
        $data['subjects'] = $this->BM->getAll("subjects");
        $data['class'] = $this->BM->getById("class", $id);
        $this->load->view('admin/subclass/edit', $data);
    }

    //@desc     check class & semester subjects
    //@route    GET admin/subclass/:classId/:semesterId/edit
    public function checkClassSubjects($classId, $smId)
    {   
        $subjects = $this->BM->getWhere("subclass", ['class_id' => $classId, 'semester_id' => $smId])->result();
        appJson([
            "subjects" => $subjects
        ]);
    }

    //@desc     list class & semester subjects
    //@route    GET admin/subclass/:classId/sublist
    public function subclassList($classId)
    {   
        $sublist = $this->Subject->subclassList($classId);
        $newSub = [];
        foreach ($sublist as $sub) {
            $sname = $sub->semester_name;
            $newSub[$sname][] = $sub->subject_name;
        }
        $data['sublist'] = $newSub;
        $this->load->view("admin/subclass/sublist", $data);
    }

    //@desc     add class & semester subjects
    //@route    GET admin/subclass/add
    public function addSubclass()
    {   
        $obj = fileGetContent();
        $data = [
            "class_id" => $obj->classId,
            "semester_id" => $obj->smId,
            "subject_id" => $obj->subId
        ];
        
        $subclass = $this->BM->create("subclass", $data);
        if($subclass) {
            appJson([
                "success" => true,
                "message" => "Berhasil menambahkan mata pelajaran ke dalam Kelas"
            ]);
        }
    }
}