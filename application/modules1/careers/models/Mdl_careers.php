<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/18/2016
 * Time: 4:29 PM
 */
class Mdl_careers extends CI_model
{

    private $users_name;
    private $experience_date;
    private $experience_months;
    private $experience_years;
    private $company_name;
    private $working;
    private $jobs_post_id;

    /**
     * @return mixed
     */
    public function getExperienceYears()
    {
        return $this->experience_years;
    }

    /**
     * @param mixed $experience_years
     */
    public function setExperienceYears($experience_years)
    {
        $this->experience_years = $experience_years;
    }

    /**
     * @return mixed
     */
    public function getJobsPostId()
    {
        return $this->jobs_post_id;
    }

    /**
     * @param mixed $jobs_post_id
     */
    public function setJobsPostId($jobs_post_id)
    {
        $this->jobs_post_id = $jobs_post_id;
    }

    /**
     * @return mixed
     */
    public function getUsersName()
    {
        return $this->users_name;
    }

    /**
     * @param mixed $users_name
     */
    public function setUsersName($users_name)
    {
        $this->users_name = $users_name;
    }

    /**
     * @return mixed
     */
    public function getExperienceDate()
    {
        return $this->experience_date;
    }

    /**
     * @param mixed $experience_date
     */
    public function setExperienceDate($experience_date)
    {
        $this->experience_date = $experience_date;
    }

    /**
     * @return mixed
     */
    public function getExperienceMonths()
    {
        return $this->experience_months;
    }

    /**
     * @param mixed $experience_months
     */
    public function setExperienceMonths($experience_months)
    {
        $this->experience_months = $experience_months;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }

    /**
     * @return mixed
     */
    public function getWorking()
    {
        return $this->working;
    }

    /**
     * @param mixed $working
     */
    public function setWorking($working)
    {
        $this->working = $working;
    }

    public function setData()
    {
        switch (func_get_arg(0)) {

            case "jobsApply":{
                /* print_r(func_get_arg(1));die;*/
                $this->setUsersName(func_get_arg(1));
                $this->setExperienceYears(func_get_arg(2));
                $this->setExperienceMonths(func_get_arg(3));
                $this->setWorking(func_get_arg(4));
                $this->setCompanyName(func_get_arg(5));
                $this->setJobsPostId(func_get_arg(6));
                break;
            }
            default:
                break;
        }
    }
/*$data['users_name'], $data['exp_years'], $data['exp_months'], $data['working'], $data['company_name'*/
    public  function jobsApply($file){
        $data=[
            'jobs_apply_users_name'=>$this->users_name,
            'jobs_apply_experience_years'=>$this->experience_years,
            'jobs_apply_experience_months'=>$this->experience_months,
            'jobs_apply_company_name'=>$this->company_name,
            'jobs_apply_working'=>$this->working,
            'jobs_post_id'=>$this->jobs_post_id,
            'jobs_post_upload_file'=>$file

        ];

        if($this->db->insert('jobs_apply',$data)){
            return true;
        }else{
            return false;
        }

    }

}


