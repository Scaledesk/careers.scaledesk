<?php
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 11/9/15
 * Time: 5:51 PM
 */


function asset_url(){
    return base_url().'assets/';
}

function islogin(){
    $ci=CI::get_instance();
    if ($ci->session->has_userdata('user_data')){
        return true;
    }
    return false;
}
function setInformUser(){
    $ci=CI::get_instance();
    $flash_data=$ci->session->flashdata('message');
    unset($flash_data);
    switch(func_get_arg(0)){
        case 'success' : {
            $ci->session->set_flashdata('message',func_get_arg(1));
            break;
        }
        case 'error': {
            $ci->session->set_flashdata('message',func_get_arg(1));
            break;
        }
        default:{
            break;
        }
    }
}
function getInformUser(){
    $ci=CI::get_instance();
    if($ci->session->flashdata('message')){
        return $ci->session->flashdata('message');
    }
}
?>