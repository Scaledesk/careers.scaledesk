<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/18/2016
 * Time: 4:28 PM
 */
class Careers extends MX_Controller
{


    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();
        $this->load->model('Mdl_careers');
        $this->load->model('admin/Mdl_admin');

    }

    function index()
    {
        $data['jobs'] = $this->Mdl_admin->getPostJobs();
        $this->load->view('header');
        $this->load->view('index', $data);
        $this->load->view('footer');
    }

    function jobApply()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {



            /* echo $file;
             print_r($data);die;*/


            $ci = CI::get_instance();
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'docx|doc|dot|docb|dotm|dotx|docm';
            $config['max_size'] = 2000;
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            $_FILES['uploadfile']['name'];
            if (!$ci->upload->do_upload('uploadfile')) {
                $error = array('error' => $ci->upload->display_errors());
                setInformUser('error', $error['error'] . ' please import  file formate only');
                redirect(base_url('careers/jobApply'));
            } else {
                $data = array('upload_data' => $ci->upload->data());

                $file = $data['upload_data']['file_name'];

                $data = $this->input->post();
                   /*echo $file;
                print_r($data); die;*/
                $this->Mdl_careers->setData('jobsApply', $data['users_name'], $data['exp_years'], $data['exp_months'], $data['working'], $data['company_name'],1);
                if ($this->Mdl_careers->jobsApply($file)) {
                    setInformUser('success', ' Successfully Completed Job Applications.');
                    redirect(base_url('careers/jobApply'));

                }else{
                    setInformUser('error', 'Some Error occurred. Please try again.');
                    redirect(base_url('careers/jobApply'));
                }
            }

        }else {
            $this->load->view('header');
            $this->load->view('applyform');
            $this->load->view('footer');
        }

    }
}