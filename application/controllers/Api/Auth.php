<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends REST_Controller
{
    function __construct() {
        parent::__construct();
    }

    public function login_post()
    {
        $where["Email"] = $this->post("email");
        $where["Password"] = md5($this->post("password"));

        $UserData = UserModel::userLogin($where);


        if (!$UserData) {
            $this->response([
                'status' => false,
                'message' => "Hata Oluştu",
            ], 200);
        } else {
            $this->response([
                'status' => true,
                'data' => $UserData["data"]
            ], 200);
        }


    }

    public function TokenCheck_get()
    {
        $TokenCheck = UserModel::tokenControl($this->get("token"));
        $this->response([
            'status' => $TokenCheck,
        ], 200);
    }

}
