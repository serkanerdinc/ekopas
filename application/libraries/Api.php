<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api
{

    public $api_url = "http://ekopas.site/api/";

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function request($endpoint, $method = "POST", $data = [])
    {
        $client = new \GuzzleHttp\Client();
        if (isset($this->CI->session->userdata("user")["token"])) {
            $data["token"] = $this->CI->session->userdata("user")["token"];
        }

        try {
            if ($method == "POST") {

                $sendData = [
                    'headers' => ['Content-Type' => 'application/json'],
                    'body' => json_encode($data)
                ];

                $res = $client->request($method, $this->api_url . $endpoint, $sendData);

            } else {
                $res = $client->request($method, $this->api_url . $endpoint . "?" . http_build_query($data));
            }

            $res = json_decode($res->getBody(), true);




        } catch (GuzzleHttp\Exception\ClientException $e) {
            $res = $e->getResponse();
            $res = json_decode($res->getBody()->getContents());

            if( isset($res->error) ){
                if ($res->error == "unauthorized") {
                    redirect("/login/logout");
                }
            }
        }

        return $res;
    }


}
