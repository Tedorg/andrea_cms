<?php snippet("header");?>
<div class="content">
<div class="app">
  <div class="full hide-scroll">
    <ul class="hs" style="list-style-type:none">
      <?php foreach ($projects as $project): ?>
      <li class="item ">
        <div class="wrapper">
      <img class="<?php if ($project->toggle()->bool()): ?> product <?php endif?> hf vertical-center lazyload ratio-container" data-expand="00" data-sizes="auto"
        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
        srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
        data-srcset="<?=$project->image()->srcset("breakpoints")?>" />
        <div class="description <?php if ($project->toggle()->bool()): ?> enlarge <?php endif?>">
          <p> <?=$project->headline()?><span><?php if ($project->description()): ?>  <?=$project->description()?><?php endif?><?php foreach ($project->tags()->split() as $category): ?> | <?=$category?><?php endforeach;?></p>
          </span>
          <br>
        </div>
        </div>
        </li>
            <?php endforeach;?>
    </ul>
  </div>
</div>
 </div>
<?php snippet("footer");
?>
