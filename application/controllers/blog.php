<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {
        public function __construct(){
                parent::__construct();
                $this->load->model('blog_model');              
        }
       
        public function index(){
                $data['entries'] = $this->blog_model->getEntries();

                $titulo = "Homepage Blog";

                $this->load->view('Plantillas/header');
                $this->load->view('show_entries', $data);
                $this->load->view('Plantillas/footer');
        }
        
        public function entry(){
                login_site();

                $titulo = "New Entry";

                $this->load->view('Plantillas/header');
                $this->load->view('new_entry');
                $this->load->view('Plantillas/footer');
        }

        public function insert_entry(){
                login_site();
                $titleP = preg_replace('([^A-Za-z0-9 ()@#$%&*-.,:;_+])', '', $this->input->post('title'));
                $usernameP = preg_replace('([^A-Za-z0-9 ()@#$%&*-.,:;_+])', '', $this->session->userdata('username'));
                $contentP = preg_replace('([^A-Za-z0-9 ()@#$%&*-.,:;_+])', '', $this->input->post('content'));
                $tagsP = preg_replace('([^A-Za-z0-9 ()@#$%&*-.,:;_+])', '', $this->input->post('tags'));
                $entry = array(
                        'permalink'  => permalink($titleP),
                        'author' => $usernameP,
                        'title' => $titleP,
                        'content' => $contentP,
                        'date' => date('Y-m-d H:i:s'),
                        'tags' => $tagsP
                        );             
                $this->blog_model->insert('entries', $entry);
                redirect(base_url());
        }

        public function view(){
                $entry_id = $this->uri->segment(3);
                $data['entry'] = $this->blog_model->getEntry($entry_id);
                $data['comments'] = $this->blog_model->getComments($entry_id);

                $titulo = "View Entry";

                $this->load->view('Plantillas/header');
                $this->load->view('view_entry', $data);
                $this->load->view('Plantillas/footer');
        }
        public function comment(){
                $id_blog = $this->input->post('id_blog');

                $authorP = preg_replace('([^A-Za-z0-9 ()@#$%&*-.,:;_+])', '', $this->session->userdata('username'));
                $commentP = preg_replace('([^A-Za-z0-9 ()@#$%&*-.,:;_+])', '', $this->input->post('comment'));

                $comment = array(
                        'id_blog' => $id_blog,
                        'author' => $authorP,
                        'comment' => $commentP,
                        'date' => date('Y-m-d H:i:s')
                        );
                $this->blog_model->insert('comments', $comment);
                redirect(base_url().'blog/view/'.$id_blog);
        }

}

