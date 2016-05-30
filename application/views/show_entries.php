        
<div class="container">
        <?php if (!empty($entries)) : ?>
                <?php foreach($entries as $entry) : ?>
                        <h2><a href="<?=base_url().'blog/view/'.$entry->id?>"><?=$entry->title?></a></h2>
                        
                        <p><span class="textAzul">Author:</span> <?=$entry->author?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="textAzul">Date:</span> <?=convertDateTimetoTimeAgo($entry->date)?></p> <hr />
                <?php endforeach; ?>
        <?php else : ?>
                <h1>No entries</h1>
        <?php endif; ?>

</div>