<?php
/**
 * Created by IntelliJ IDEA.
 * User: serkan.erdinc
 * Date: 27.10.2019
 * Time: 00:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends Company_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        global $data;

        echo $this->c4_smarty->fetch($data["theme"]."/home.tpl", $data);
    }

}
