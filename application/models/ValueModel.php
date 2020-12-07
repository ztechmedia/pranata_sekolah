<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ValueModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getStudents($column, $value)
    {
        return $this->db
                ->select("a.*, b.classname")
                ->from("students AS a")
                ->join("class AS b", "a.class_id = b.id")
                ->like($column, $value)
                ->order_by('a.name', "asc")
                ->get()
                ->result();
    }

    public function getStudent($studentId)
    {
        return $this->db
                ->select("a.*, b.classname")
                ->from("students AS a")
                ->join("class AS b", "a.class_id = b.id")
                ->where("a.id", $studentId)
                ->order_by('a.name', "asc")
                ->get()
                ->row();
    }
}