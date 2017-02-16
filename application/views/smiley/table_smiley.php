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
    for ($j = 0; $j < count($smiley_table); $j++)
    {
        echo '<tr>';
        for ($i = 0; $i < 10; $i++)
        {
        	if ($j >= count($smiley_table)) 
        	{
        		break;
        	}
            echo '<td>';
            echo $smiley_table[$j];
            echo '</td>';
            $j++;
        }
    	echo '</tr>';
    }
    ?>
</table>