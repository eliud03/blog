<div class="container">
    <?php echo form_open(base_url().'blog/insert_entry/')?>

    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Title:</span>
                <input type="text" name="title" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1" onkeypress="return alfaNumerico(event)">
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label id="contentText">Content:</label>
                <textarea class="form-control" rows="10" id="content" name="content" onkeypress="return alfaNumerico(event)"></textarea>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Tags: (comma separated)</span>
                <input type="text" name="tags" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1" onkeypress="return alfaNumerico(event)">
            </div>
        </div>
    </div>
    
    <br/>

    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btm btn-success">Publish</button>
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