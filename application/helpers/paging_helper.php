<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 function init_pagination($uri,$total_rows,$per_page=20,$segment=4){
       $ci =& get_instance();
	   
	   
		$config['full_tag_open'] 			= 	"<ul class='pagination pagination-split pull-right'>";
		$config['full_tag_close'] 			= 	"</ul>";
		$config['num_tag_open'] 			= 	'<li>';
		$config['num_tag_close'] 			= 	'</li>';
		$config['cur_tag_open'] 			= 	"<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] 			= 	"</a></li>";
		$config['next_tag_open'] 			= 	"<li>";
		$config['next_tagl_close'] 			= 	"</li>";
		$config['prev_tag_open'] 			= 	"<li>";
		$config['prev_tagl_close'] 			= 	"</li>";
		$config['first_tag_open'] 			= 	"<li>";
		$config['first_tagl_close'] 		= 	"</li>";
		$config['last_tag_open'] 			= 	"<li>";
		$config['last_tagl_close'] 			= 	"</li>";
		$config['first_link'] 				= 	'<i class="fa fa-angle-left"></i>';
		$config['last_link'] 				= 	'<i class="fa fa-angle-right"></i>';
		$config['prev_link'] 				= 	'<i class="fa fa-angle-left"></i>';
		$config['next_link'] 				= 	'<i class="fa fa-angle-right"></i>';
		$config['per_page']          		= 	$per_page;
		$config['uri_segment']       		= 	$segment;
		$config['base_url']          		= 	base_url().$uri;
		$config['total_rows']        		= 	$total_rows;
	   
	   if( !$ci->uri->segment($segment) ){
			$config['page'] = 1;
		}else{
			$config['page'] = $ci->uri->segment($segment);
		}
	   
       $config['use_page_numbers']  = TRUE;
 
       $ci->pagination->initialize($config);
       return $config;    
   } 
?>