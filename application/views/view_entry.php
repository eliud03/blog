<div class="container">

    <div class="col-md-10 col-md-offset-1">
    <p class="autorFecha"><span class="textAzul"> Author: </span> <?=$entry->author?> &nbsp; <span class="textAzul">Date: </span><?=convertDateTimetoTimeAgo($entry->date)?></p>

    <h2 class="tituloEnt"><em><?=$entry->title?></em></h2>
    <br/>

    <p class="contentEnt"><?=$entry->content?></p>
    <br/>
    <p class="tags"> <span class="textAzul">Tags:</span> <?=tags($entry->tags)?></p>
    <hr />
    <?php if($this->session->userdata('is_logged_in')) : ?>


        <?php echo form_open(base_url().'blog/comment/')?>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?=form_hidden('id_blog', $this->uri->segment(3))?>
                    <label id="contentText">Your comment:<br/></label>
                    <textarea class="form-control textComment" rows="10" id="comment" name="comment" onkeypress="return alfaNumerico(event)"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btm">Publish</button>
            </div>
        </div>

        <br/>

        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors(); ?>
            </div>
        </div>

        <?php echo form_close(); ?>

    <?php endif; ?>
    
    </div>
    
    <div class="col-xs-12">

    <table>
    <?php
        if(!empty($comments)){?>
        <tr>
            <td><h3>Comments</h3></td>
        </tr>

        <?php
            foreach($comments as $comment){
            echo 
                '<tr>
                    <td><h4>'.$comment->author.'</h4></td>
                </tr></table>';
        
            echo 
                '<div class="form-group">
                    <textarea class="form-control textCommView" rows="5" readonly="readonly">'.$comment->comment.'</textarea><br/>
                </div>';

            echo convertDateTimetoTimeAgo($comment->date).'<hr />';
            }
        }else
            echo '<tr>
                    <td><h3>No Comments!</h3></td>
                  </tr></table>';
        ?>
    


    </div>

</div>