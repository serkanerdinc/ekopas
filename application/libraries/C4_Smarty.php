<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'third_party/smarty/libs/Smarty.class.php');

class C4_Smarty extends Smarty {

    function fill($data) 
	{
		foreach ($data as $k=>$c)
			{
				$this->assign($k,$c,true);
			}
	}

	function __construct()
	{		
		parent::__construct();


		$this->setTemplateDir(APPPATH.'/views');
		//$this->setTemplateDir(APPPATH.'modules/admin/views/templates');
		$this->setCompileDir(APPPATH.'/views/compiled');
		//$this->setCompileDir(APPPATH.'modules/admin/views/compiled');
		$this->setConfigDir(APPPATH.'/libraries/smarty/configs');
		$this->setCacheDir(APPPATH.'/third_party/smarty/smarty/cache');
			
		$this->assign( 'APPPATH', APPPATH );
		$this->assign( 'BASEPATH', BASEPATH );
		// $this->caching = Smarty::CACHING_LIFETIME_CURRENT; // Does something :)
		if ( method_exists( $this, 'assignByRef') )
		{
			$ci =& get_instance();
			$this->assignByRef("ci", $ci);
		}
		$this->force_compile = true;
		$this->caching = false;
		$this->cache_lifetime = 0;



		//log_message('debug', "Smarty Class Initialized");
	}

	function view($template_name) {
		if (strpos($template_name, '.') === FALSE && strpos($template_name, ':') === FALSE) {
			$template_name .= '.tpl';
		}
		parent::display($template_name);
	}

}

?>