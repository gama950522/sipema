<!-- <div class="row" style="margin-top:20px">
    
    <div class="col-md-offset-3 col-md-6">
        <div class="list-group">

            <?php //foreach ($info as $item): ?>
            <a href="<?php echo site_url('sipema/subprograma/'.$item['id'].'/') ?>" class="list-group-item">
                <h4 class="list-group-item-heading"><?php echo $item['nombre'] ?></h4>
                <p class="list-group-item-text">...</p>
            </a>
            <?php //endforeach; ?>
        </div>
    </div>
    
</div> -->


<div class="container-fluid">
<section class="col-md-12" style="margin-top: 20px">
    <div class="row">
    <table class="table-normal">
        <tbody>
            <tr>
                <td class="col-md-4 ">
                    <div class="list-group">
                        <h2 class=" list-group-item text-center"><?php echo $categoria->nombre; ?></h2>
                    </div>
                </td>
                <td class="col-md-8">
                <div class="row">
                    <div class="list-group">
                        <?php foreach ($info as $item): ?>
            <a href="<?php echo site_url('sipema/subprograma/'.$item['id'].'/') ?>" class="list-group-item">
                <h4 class="list-group-item-heading"><?php echo $item['nombre'] ?></h4>
                <p class="list-group-item-text">...</p>
            </a>
            <?php endforeach; ?>
                    </div>
                </div>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</section>
</div>
<div class="clearfix"></div>