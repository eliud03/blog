<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('permalink'))
{
        function permalink($title){    
                return str_replace(" ", "-", strtolower($title));
        }
}

//validara si el usuario esta logueado y si no, lo enviara al formulario para que lo haga
if ( ! function_exists('login_site')){
        function login_site(){ 
                $CI =& get_instance();         
                if(!$CI->session->userdata('is_logged_in'))
                        redirect(base_url().'users/signin');
        }
}

//realizar una separacion de cada tag

if ( ! function_exists('tags')){
        function tags($tags){          
                $tags = explode(',', $tags);
                foreach ($tags as $t)
                        echo '<u>'.$t.'</u> ';                 
        }
}

//crear unas fechas mas presentables.

if ( ! function_exists('convertDateTimetoTimeAgo')){
        function convertDateTimetoTimeAgo($datetime){          
                $date = str_replace("-", "", substr($datetime, 0, 10));
                $time = str_replace(":", "", substr($datetime, 11, 5));
                //Fecha estilo TimeAgo
                return "<script>document.write(moment('$date$time', 'YYYYMMDDHHmm').fromNow());</script>";             
        }
}