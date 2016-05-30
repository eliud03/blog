<div class="container" style="background-color: none;">
<div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">
                        <?php
                        if ($this->session->userdata('is_logged_in'))
                                echo 'Hello, '.$this->session->userdata('name').' ('. anchor(base_url()."users/logout/", "logout").')';
                        elseif (!$this->session->userdata('is_logged_in') && ($this->uri->segment(2) == 'signin' || $this->uri->segment(2) == 'validate'))
                                echo anchor(base_url().'users/signup/','Sign Up');
                        else
                                echo anchor(base_url().'users/signin/','Sign In');
                        ?>
                </p>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>/blog/entry/">New Entry</a></li>
                        <li><a href="<?php echo base_url(); ?>">All Entries</a></li>
                </ul>
        </div>
</div>
</div>