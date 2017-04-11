<div class="row" style="margin-top:20px">
    
    <div class="col-md-offset-3 col-md-6">
        <div class="list-group">

            <?php foreach ($info as $item): ?>
            <a href="<?php echo site_url('sipema/subprograma/'.$item['id'].'/') ?>" class="list-group-item">
                <h4 class="list-group-item-heading"><?php echo $item['nombre'] ?></h4>
                <p class="list-group-item-text">...</p>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    
</div>
