<div class="container">
  
   

  <center><p class="msjAlert"><?php echo $this->session->userdata('msj'); ?></p></center>
	
	<form class="form-horizontal" action="<?php echo base_url().'users/register/'; ?>" method="post">
  <div class="form-group">
    <label class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" placeholder="Name" aria-describedby="basic-addon1" required="requiered" onkeypress="return soloLetras(event)">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Username:</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required="requiered" onkeypress="return users(event)">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="requiered" onkeypress="return pass(event)">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required="requiered">
    </div>
  </div>

	<div class="row">
        <label class="col-sm-2 control-label">&nbsp</label>
        <div class="col-sm-10">
            <button type="submit" class="btm">Save</button>
        </div>
    </div>

    <br/>

    <div class="row">
        <div class="col-md-12">
            <?php echo validation_errors(); ?>
        </div>
    </div>

   </form>
</div>