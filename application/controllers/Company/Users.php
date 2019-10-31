<?php
/**
 * Created by IntelliJ IDEA.
 * User: serkan.erdinc
 * Date: 27.10.2019
 * Time: 00:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Company_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    public function list($type="")
    {
        global $data;

        echo $this->c4_smarty->fetch($data["theme"]."/users.tpl", $data);
    }

    public function detail($user_id="")
    {
        global $data;

        echo $this->c4_smarty->fetch($data["theme"]."/user_detail.tpl", $data);
    }

    public function scores($user_id="")
    {
        global $data;

        echo $this->c4_smarty->fetch($data["theme"]."/scores.tpl", $data);
    }
    public function scoredetail($score_id="")
    {
        global $data;

        echo $this->c4_smarty->fetch($data["theme"]."/score_detail.tpl", $data);
    }
    public function newscore()
    {
        global $data;

        echo $this->c4_smarty->fetch($data["theme"]."/score_detail.tpl", $data);
    }





}
