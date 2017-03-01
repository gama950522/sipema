<div class="container">
<?php //echo parse_smileys($texto, 'http://emojione.com/wp-content/uploads/assets/emojis/' ); ?>
    <textarea cols="30" rows="10" name="comment_textarea_alias" id="comment_textarea_alias"></textarea>
    <?php //echo $smiley_table; ?>
</div>
<table class="table">
    <?php
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
         echo '</tr>';
    }
    ?>
</table>