<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/18/2016
 * Time: 5:07 PM
 */
class Admin extends MX_Controller
{


    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();
        $this->load->model('Mdl_admin');

    }

    /**
     *
     */
    function index(){
        if (islogin()) {
            $data['active'] = 0;
            $this->load->view('header', $data);
            $this->load->view('index');
            $this->load->view('footer');
            }
        elseif(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){

                  $data=$this->input->post();
               /*print_r($data);die;*/
            $this->Mdl_admin->setData('checkUser',$data['email_id'],$data['password']);
            $data_admin=$this->Mdl_admin->checkUser();
           /* print_r($data_admin);die;*/
            if($data_admin){

                $data=['name'=>$this->Mdl_admin->getName(),'email'=> $this->Mdl_admin->getEmail()
                  ];
                $this->session->set_userdata('user_data',$data);

                setInformUser('success','Login successfully');
                redirect(base_url('admin'));
            }
            else{
                setInformUser('error','Your Username and password do not match. Please try again.');
                redirect(base_url('admin'));
            }

        }
        else{
            $data['active'] = 0;
            $this->load->view('login_header',$data);
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin?logout=1'));
    }
   public function jobs()
   {
       if (islogin()) {
           if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

               $data = $this->input->post();

               $this->Mdl_admin->setData('jobs', $data['title'], $data['description'], $data['location'], $data['jobType'], $data['education'], $data['experience']);
               if ($this->Mdl_admin->jobs()) {
                   setInformUser('success', 'Job Post Successfully.');
                   redirect(base_url('admin'));
               } else {
                   setInformUser('error', 'Some Error occurred. Please try again.');
                   redirect(base_url('admin'));
               }
           } else {
               $data['active'] = 2;
               $this->load->view('header', $data);
               $this->load->view('jobsform');
               $this->load->view('footer');
           }
       } else{
           setInformUser('error', 'Please login at first . Please try again.');
           redirect(base_url('admin'));
       }
   }

    public  function getJobPost(){

        $data['jobs']=$this->Mdl_admin->getPostJobs();
        $data['active'] = 3;
        $this->load->view('header', $data);
        $this->load->view('table',$data);
        $this->load->view('footer');
    }


  public function  update($id){
      if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
           $data=$this->input->post();
           /* print_r($data);die;*/
          $this->Mdl_admin->setData('jobs', $data['title'], $data['description'], $data['location'], $data['jobType'], $data['education'], $data['experience']);

          if ($this->Mdl_admin->update($id)) {
              setInformUser('success', 'Post Jobs successfully Update.');
              redirect(base_url('admin/getJobPost'));
          } else {
              setInformUser('error', 'Some Error occurred. Please try again.');
              redirect(base_url('admin/getJobPost'));
          }
      }
      {
          $data['active'] = 0;
          $data['post']=$this->Mdl_admin->getPostJob($id);
          $this->load->view('header', $data);
          $this->load->view('update',$data);
          $this->load->view('footer');
      }


  }
    public function  delete($id){
        if( $this->Mdl_admin->delete($id)){
            setInformUser('success', 'Post Jobs successfully Delete.');
            redirect(base_url('admin/getJobPost'));
        }
        else{
            setInformUser('error', 'Some Error occurred. Please try again.');
            redirect(base_url('admin/getJobPost'));
        }
    }

    public function jobDetails($id){
        $data['active'] = 0;
        $data['post']=$this->Mdl_admin->getPostJob($id);
        $this->load->view('header', $data);
        $this->load->view('jobDetails',$data);
        $this->load->view('footer');
    }

}