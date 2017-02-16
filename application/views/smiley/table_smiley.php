<div class="container">
<?php //echo parse_smileys($texto, 'http://emojione.com/wp-content/uploads/assets/emojis/' ); ?>
    <textarea name="comment_textarea_alias" id="comment_textarea_alias"></textarea>
    <?php //echo $smiley_table; ?>
    <script type="text/javascript">
    	$(document).ready(function() {
    		$('textarea').on('change', function(event) {
    			// event.preventDefault();
    			// alert('pipi');
    			var text = $(this).text();
    			//alert(text);
    		});
    	});
    </script>
</div>
<table class="table">
    <?php
    //$images_svg = scandir('public/images/svg');
    //echo json_encode($images_svg);
    //foreach ($smiley_table as $image) 
    //{
    //echo count($smiley_table);

    for ($j = 0; $j < count($smiley_table);)
    {
        echo '<tr>';
        for ($i = 0; $i < 24; $i++)
        {
            if ($j >= count($smiley_table))
            {
                echo 'salio cuando j valia' . $j;
                break;
            }

            echo '<td>';
            echo $smiley_table[$j];
            echo '</td>';
            $j++;
        }
        // if ($j >= count($smiley_table))
        // {
        //     echo 'salio cuando j valia' . $j;
        //     break;
        // }
        // echo '<td>';
        // echo $smiley_table[$j] . '+' . $j;
        // echo '</td>';
         echo '</tr>';
    }
    ?>
</table>