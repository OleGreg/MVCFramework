<?php
//var_dump($params['input_fields']);
//die;
//?>


<form action="/<?=get_class($this)?>/store" method="post">

    <?php

        foreach($params['input_fields'] as $name => $type)
        {
            if($type == 'textarea')
            {
                $inputname = $name . '_ns';
                echo "Enter a {$name} : <textarea name={$inputname} /></textarea><br>";
            }
            else
            {
                $inputname = $name . '_ns';
                echo "Enter a {$name} : <input name={$inputname} type={$type} /><br>";
            }

        }
    ?>

    <input type="submit" name="submit" value="Submit" />
</form>

<a href = "/<?=get_class($this)?>">Back to <?=get_class($this)?></a>

