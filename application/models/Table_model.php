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
                'field' => 'pa',
                'label' => 'Personnel Area',
                'rules' => 'required'
            ],
            [
                'field' => 'formattedname',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }

    public function search()
    {
    }

    public function getall()
    {
        $query = $this->db->query('SELECT * FROM oa');
        return $query->result();
    }

    public function getallsearch()
    {
        $query = $this->db->query('SELECT * FROM oa');
        return $query->result();
    }
}
