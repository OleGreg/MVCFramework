<form action="/<?=get_class($this)?>/update/<?=$params['id']?>" method="post">
    <?php

        foreach($params['input_fields'] as $name => $type)
        {
            if($type == 'textarea')
            {
                $input_name = $name . '_ns';
                echo "Enter a {$name} : <textarea name='{$input_name}' />{$params['row_values'][$name]}</textarea><br>";
            }
            else
            {
                $input_name = $name . '_ns';
                $input_value = $params['row_values'][$name];
                echo "Enter a {$name} : <input name='{$input_name}' type='{$type}' value ='{$input_value}' /><br>";
            }
        }

    ?>
    <input type="submit" name="submit" value="Submit me!" />
</form>
<br>
<br>

<a href = "/<?=get_class($this)?>">Back to <?=get_class($this)?></a>

