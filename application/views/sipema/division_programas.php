<div class="row" style="margin-top:20px">
    
    <div class="col-md-offset-3 col-md-6">
        <div class="list-group">

            <?php foreach ($info as $item): ?>
            <a href="<?php echo site_url('sipema/subprograma/'.$item['id'].'/') ?>" class="list-group-item">
                <h4 class="list-group-item-heading"><?php echo $item['nombre'] ?></h4>
                <p class="list-group-item-text">...</p>
            </a>
            <?php endforeach; ?>
            <!-- <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Seguimiento a la evaluación del desempeño operativo</h4>
                <p class="list-group-item-text">...</p>
            </a>
            <a href="<?php //echo site_url('sipema/subprograma/3/') ?>" class="list-group-item active">
                <h4 class="list-group-item-heading">Programas operativos anueles POA's</h4>
                <p class="list-group-item-text">...</p>
            </a> -->
        </div>
    </div>
    
</div>
