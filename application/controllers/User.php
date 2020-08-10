<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("table_model");
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['cari'] = $this->table_model->getall();

        $searching = $this->table_model;
        $validation = $this->form_validation;
        $validation->set_rules($searching->rules());

        $this->form_validation->set_rules('startdate', 'Start Date', 'trim|required');
        $this->form_validation->set_rules('enddate', 'End Date', 'trim|required');
        $startdate = $this->input->get('startdate', TRUE);
        $enddate = $this->input->get('enddate', TRUE);
        // $startdate = $this->input->post('startdate', true);
        // $enddate = $this->input->post('enddate', true);

        // if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
        // } else {
        $searching->set($startdate, $enddate);
        // echo json_encode($searching);
        // }
    }

    public function search()
    {
        $data['title'] = 'Searching';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $search = $this->table_model;
        $validation = $this->form_validation;
        $validation->set_rules($search->rules());

        $startdate = $this->input->post('startdate');
        $enddate = $this->input->post('enddate');

        if ($validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/search', $data);
            $this->load->view('templates/footer');
        } else {
            $search->searching($startdate, $enddate);
        }

        // $startdate = $this->input->post('startdate');
        // $enddate = $this->input->post('enddate');
        // $pa = $this->input->post('pa');
        // $psa = $this->input->post('psa');
        // $costcenter = $this->input->post('costcenter');
        // $organization = $this->input->post('organization');
        // $formattedname = $this->input->post('formattedname');

        // if ($this->input->post('submit')) {
        //     $this->table_model->search($startdate, $enddate, $pa, $psa, $costcenter, $organization, $formattedname);
        // } else {
        //     echo "error";
        // }
    }
}
