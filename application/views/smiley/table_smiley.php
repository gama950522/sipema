<div class="container">

    <textarea></textarea>
    <?php //echo $smiley_table; ?>
</div>
<table class="table">
    <?php
    //$images_svg = scandir('public/images/svg');
// //echo json_encode($images_svg);
    //foreach ($smiley_table as $image) 
    //{
    echo count($smiley_table);

    for ($j = 0; $j < count($smiley_table); $j++)
    {
        echo '<tr>';
        for ($i = 0; $i < 23; $i++)
        {
            if ($j >= count($smiley_table))
            {
                echo 'salio cuando j valia' . $j;
                break;
            }

            echo '<td>';
            echo $smiley_table[$j] . ' + ' . $j;
            echo '</td>';
            $j++;
        }
        if ($j >= count($smiley_table))
        {
            echo 'salio cuando j valia' . $j;
            break;
        }
        echo '<td>';
        echo $smiley_table[$j] . '+' . $j;
        echo '</td>';
        echo '</tr>';
    }
    ?>
</table>