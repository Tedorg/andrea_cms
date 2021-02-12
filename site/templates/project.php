<?php snippet("header");?>

<p><?=$page->text()?></p>
<ul class="gallery">
    <?php foreach ($page->images() as $image): ?>
        <li>

            <?=$image->lazysrcset("default")?>


        </li>


    <?php endforeach;?>
		</ul>

<?php snippet("footer");
?>
