<?php
class Api_Controller extends REST_Controller
{
    function __construct($config="rest")
    {
        parent::__construct($config);

        $token = $this->get("token");

        if (!isset($token) || empty($token)) {
            $token = $this->post("token");
        }

        if (!isset($token) || empty($token) || !UserModel::tokenControl($token)) {
            $this->response([
                'status' => false,
                'message' => "Yetkisiz işlem",
                'error' => "unauthorized",
            ], 403);
        }
    }

}
