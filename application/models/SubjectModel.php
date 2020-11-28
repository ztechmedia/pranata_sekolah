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
                ->order_by('d.semester_name', "asc")
                ->get()
                ->result();
    }

    public function subclassTotal()
    {
        return $this->db
                ->query("
                    SELECT a.id, a.classname, COUNT(b.class_id) AS total_subject 
                        FROM class AS a 
                        LEFT JOIN subclass AS b ON b.class_id = a.id 
                        GROUP BY a.id 
                        ORDER BY a.classname
                ")
                ->result();
    }
}
