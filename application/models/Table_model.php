<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table_model extends CI_Model
{
    private $_table = "oa";

    public $startdate;
    public $enddate;
    public $pa;
    public $psa;
    public $costcenter;
    public $organization;
    public $formattedname;

    public function rules()
    {
        return [
            [
                'field' => 'startdate',
                'label' => 'Start Date',
                'rules' => 'required'
            ],
            [
                'field' => 'enddate',
                'label' => 'End Date',
                'rules' => 'required'
            ]
        ];
    }

    public function search($startdate, $enddate, $pa, $psa, $costcenter, $organization, $formattedname)
    {
        // $query = $this->db->like('startdate', $startdate)
        //     ->like('enddate', $enddate)
        //     ->like('pa', $pa)
        //     ->like('psa', $psa)
        //     ->like('costcenter', $costcenter)
        //     ->like('organization', $organization)
        //     ->like('formattedname', $formattedname)
        //     ->get('oa');

        // $query  = "SELECT * FROM OA WHERE `startdate` like" % $startdate % " and `enddate` like" % $enddate % " and  `pa` like" % $pa % " and `psa` like" % $psa % " and `costcenter like" % $costcenter % " and `organization` like" % $organization % " and `formattedname like" % $formattedname % "";

        $query = $this->db->query("SELECT * FROM OA WHERE `enddate >=` , $startdate and `startdate <=` , $enddate and  `pa` like" % $pa % " and `psa` like" % $psa % " and `costcenter like" % $costcenter % " and `organization` like" % $organization % " and `formattedname like" % $formattedname % "");
        echo $query;

        return $query->result_array();
    }

    public function searching($startdate, $enddate)
    {
        $post = $this->input->post();
        $this->startdate = $post["startdate"];
        $this->enddate = $post["enddate"];
        // $this->pa = $post["pa"];
        // $this->psa = $post["psa"];
        // $this->costcenter = $post["costcenter"];
        // $this->organization = $post["organization"];
        // $this->formattedname = $post["formattedname"];

        $this->db->where('enddate >=', $startdate);
        $this->db->where('startdate <=', $enddate);

        // echo $query;

        // return $query->result_array();
        return $this->db->get($this->_table)->result();
    }

    public function getall()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getallsearch()
    {
        return $this->db->get($this->_table)->result();
    }

    public function set($startdate, $enddate)
    {
        // $this->db->select('*');
        $this->db->where('enddate >=', $startdate);
        $this->db->where('startdate <=', $enddate);
        // $this->db->from('oa');
        // $this->db->group_by('id', 'desc');
        // $query = $this->db->get();
        // return $query->result_array($this->_table, $query);
        return $this->db->get($this->_table)->result();
    }
}
