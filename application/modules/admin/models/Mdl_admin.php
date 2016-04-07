<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/18/2016
 * Time: 5:08 PM
 */
class Mdl_admin extends CI_model
{
  private $email;
  private $password;
  private $name;
  private $title;
  private $description;
  private $location;
  private $jobType;
  private $education;
  private $experience;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * @param mixed $jobType
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
    }

    /**
     * @return mixed
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param mixed $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }





    public function setData()
        {
            switch (func_get_arg(0)) {

                case "checkUser": {
                    /* print_r(func_get_arg(1));die;*/
                    $this->setEmail(func_get_arg(1));
                    $this->setPassword(func_get_arg(2));
                    break;
                   }
                case "jobs":{
                    /* print_r(func_get_arg(1));die;*/
                    $this->setTitle(func_get_arg(1));
                    $this->setDescription(func_get_arg(2));
                    $this->setLocation(func_get_arg(3));
                    $this->setJobType(func_get_arg(4));
                    $this->setEducation(func_get_arg(5));
                    $this->setExperience(func_get_arg(6));

                    break;
                 }
                default:
                    break;
            }
        }

    public function checkUser()
    {
        if ($data = $this->db->where(array('careers_scaledesk_admin_email' => $this->email))->select('careers_scaledesk_admin_pass,careers_scaledesk_admin_name')->get('careers_scaledesk_admin')->result_array()) {
            /* print_r($data);die;*/
              $this->setName($data[0]['careers_scaledesk_admin_name']);
            if (password_verify($this->password, $data[0]['careers_scaledesk_admin_pass'])){
                /*print_r($data);die;*/
                return true;

            }
            return false;
        }
    }

public function jobs(){
     $data=[
         'jobs_post_title'=>$this->title,
         'jobs_post_description'=>$this->description,
         'jobs_post_location'=>$this->location,
         'jobs_post_jobtype'=>$this->jobType,
         'jobs_post_education'=>$this->education,
         'jobs_post_experience'=>$this->experience,
     ];

    if($this->db->insert('jobs_post',$data)){
        return true;
    }else{
        return false;
    }
   /* print_r($data);die;*/
}
  public  function getPostJobs(){

      return $this->db->get('jobs_post')->result_array();
  }

    public  function update($id){
        $data=[
            'jobs_post_title'=>$this->title,
            'jobs_post_description'=>$this->description,
            'jobs_post_location'=>$this->location,
            'jobs_post_jobtype'=>$this->jobType,
            'jobs_post_education'=>$this->education,
            'jobs_post_experience'=>$this->experience,
        ];

        return $this->db->where('jobs_post_id',$id)->update('jobs_post',$data);
    }
    public  function delete($id){

        return $this->db->where('jobs_post_id',$id)->delete('jobs_post');
    }

    public function getPostJob($id){
        return $this->db->where('jobs_post_id',$id)->get('jobs_post')->result_array();
    }
}