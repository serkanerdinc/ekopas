<?php
/**
 * Created by IntelliJ IDEA.
 * User: serkan.erdinc
 * Date: 27.10.2019
 * Time: 00:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Company_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        global $data;
        if($this->input->post())
        {
            $res = $this->api->request("auth/login/","POST", $this->input->post());

            if($res["status"] == true){
                $session["user"] = $res["data"];
                $session["user"]["token"] = $res["data"]["token"];
                $session["user"]["login"] = true;
                $this->session->set_userdata($session);
                redirect("/company/");
            }
            else
            {
                $data["error"] = "Kullanıcı Adı Şifre Hatalı";
            }

        }
        echo $this->c4_smarty->fetch($data["theme"]."/login.tpl", $data);
    }
    public function logout()
    {
        $this->session->unset_userdata("user");
        redirect("/company/login/");
    }
}
