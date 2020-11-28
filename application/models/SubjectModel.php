<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubjectModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function subclassList($classId)
    {
        return $this->db
                ->select("a.*, b.subject_name, c.classname, d.semester_name")
                ->from("subclass AS a")
                ->join("subjects AS b", "a.subject_id = b.id")
                ->join("class AS c", "a.class_id = c.id")
                ->join("semesters AS d", "a.semester_id = d.id")
                ->where("a.class_id", $classId)
                ->get()
                ->result();
    }
}
