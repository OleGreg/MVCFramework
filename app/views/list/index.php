<ul>

    <?php foreach($params as $the_item) : ?>

        <li>

            <?php foreach($the_item as $name => $value) : ?>

               <?php if($name != 'id' && $name != 'active' && $name != 'user_id' && is_string($name)) : ?>

                    <?="<strong>" . $name . "</strong>: " . $value . "<br>" ?>

                <?php endif; ?>

            <?php endforeach; ?>

        </li>

        <a href="/<?=get_class($this)?>/edit/<?php echo $the_item["id"]; ?>">Edit</a>
        <a href="/<?=get_class($this)?>/remove/<?php echo $the_item["id"]; ?>">Delete</a>

        <br>
        <br>

    <?php endforeach; ?>

</ul>

<a href="/<?=get_class($this)?>/add">Add an item</a>

<br>
<br>

<a href="/<?=get_class($this)?>/removeAll">Remove all items</a>

<br>
<br>

