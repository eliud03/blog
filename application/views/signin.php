<style type="text/css">
    .container{
        background-size: 100% 300% !important;
    }
</style>

<div class="container">
        <?php echo form_open(base_url().'users/validate/')?>

        <div class="row">
                <div class="col-md-12">
                        <div class="input-group">
                            <label>Username:</label>
							<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required="requiered" onkeypress="return users(event)">
                        </div>
                </div>
        </div>
        <br/>
        <div class="row">
                <div class="col-md-12">
                        <div class="input-group">
                            <label>Password:</label>
							<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="requiered" onkeypress="return pass(event)">
                        </div>
                </div>
        </div>
        <br/>
        <div class="row">
                <div class="col-md-12">
                        <button type="submit" class="btm">Log In</button>
                </div>
        </div>

        <br/>

        <div class="row">
                <div class="col-md-12">
                        <?php echo validation_errors(); ?>
                </div>
        </div>

        <?php echo form_close(); ?>

</div>