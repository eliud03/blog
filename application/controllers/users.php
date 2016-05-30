<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller{
        public function __construct(){
                parent::__construct();
                $this->load->model('blog_model');
        }
        public function signin(){
                $this->load->view('Plantillas/header');
                $this->load->view('signin');
                $this->load->view('Plantillas/footer');
        }
        public function signup(){
                $this->load->view('Plantillas/header');
                $this->load->view('signup');
                $this->load->view('Plantillas/footer');
        }
        public function register(){
                $name = $this->input->post('name');
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $email = $this->input->post('email');
                $user = array(
                        'name' => $name,
                        'username' => $username,
                        'password' => md5($password),
                        'email' => $email
                        );
               

                        if($this->blog_model->validate_user($username)){
                                $mensaje = "The username exists";
                                $msj = array('msj' => $mensaje);
                                $this->session->set_userdata($msj);
                                redirect(base_url().'users/signup');
                        }elseif($this->blog_model->validate_email($email)){
                                $mensaje = "The email exists";
                                $msj = array('msj' => $mensaje);
                                $this->session->set_userdata($msj);
                                redirect(base_url().'users/signup');
                        }else{
                                if($this->blog_model->insert('users', $user)){
                                $session = array(
                                        'name' => $name,
                                        'username' => $username,
                                        'is_logged_in' => TRUE,                        
                                        );
                                $this->session->set_userdata('msj', $session);
                                redirect(base_url());
                                }
                        }
                
        }
        public function validate(){            
                $username = $this->input->post('username');
                $password = md5($this->input->post('password'));
                if($user = $this->blog_model->validate_credentials($username, $password)){
                        $session = array(
                                'name' => $user->name,
                                'username' => $username,
                                'is_logged_in' => TRUE,                        
                                );
                        $this->session->set_userdata($session);
                        redirect(base_url());
                }
                else{
                        $this->load->view('signin', array('error'=>TRUE));
                }
        }
        public function logout(){
                if($this->session->userdata('is_logged_in'))
                        $this->session->sess_destroy();        
                redirect(base_url());                  
        }
}