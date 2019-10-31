<?php
class Company_Controller extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        global $data;
        $data["theme"]      = "company";
        $data["api_url"]    = "/api/";
        $data["controller"] = $this->router->fetch_class();
        $data["method"]     = $this->router->fetch_method();
        if($this->session->userdata('user')["login"])
        {
            $data["user"] = $this->session->userdata("user");
        }
        if($data["controller"]=="login" && $data["method"]!="logout" && $this->session->userdata('user')["login"])
        {
            redirect("/company/");
        }

        if($data["controller"]!="login" && !$this->session->userdata('user')["login"])
        {
            redirect("/company/login");
        }

    }

}
