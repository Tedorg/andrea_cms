<?php snippet("header");?>
<div class="content">
<div class="app">
  <div class="full hide-scroll">
    <ul class="hs">
      <?php foreach ($page->children() as $project): ?>
      <li class="item ">
                 <img class="vertical-center lazyload ratio-container" data-expand="-120"
        src="<?=$project->image()->url()?>"
        data-src="<?=$project->image()->url()?>"
        srcset="<?=$project->image()->srcset("breakpoints")?>" />
        <div class="description">
          <p><b><?=$project->name()?> </b>
          <?php foreach ($project->categories()->split() as $category): ?>
         <span  style="white-space: pre">    </span> <a> <b><?=$category?></b> </a> <span  style="white-space: pre">    </span>
          <?php endforeach;?></p>
          <p><?=$project->text()?></p>
          <br>
        </div>
        </li>
            <?php endforeach;?>
    </ul>
  </div>
</div>
 </div>
<?php snippet("footer");
?>
