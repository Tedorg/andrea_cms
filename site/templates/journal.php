<?php snippet("header");?>


<div class="content">
    <div class="index">
<div class="grid">
   <?php foreach ($projects as $project): ?>
    <?php foreach ($project->images() as $image): ?>
      <div class="item">
<div class="container">
  <img class="lazyload"data-sizes="auto" src="" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="data-srcset="<?=$image->srcset('cover')?>" />
  <p><?=$project->headline()?></p>
</div>

      </div>
        <?php endforeach;?>
<?php endforeach;?>
</div>
  </div>
<div class="hs app show">
  <div class="full hide-scroll">
    <ul class="" style="list-style-type:none">
    <li class="start-item block">
        <div class="start-wrapper">


          <div class="start-text"><p><?=$home->headline()?>


          <?=$home->text()?></p> </div>

          <img class="lazyload" data-expand="20" data-sizes="auto"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="data-srcset="<?=$home->image()->srcset("breakpoints")?>" />
        </div>
      </li>
      <?php foreach ($projects as $project): ?>
      <li class="item " data="<?php foreach ($project->tags()->split() as $category): ?> <?=$category?><?php endforeach;?>">
        <div class="wrapper test">
      <img class="<?php if ($project->toggle()->bool()): ?> product <?php endif?> hf vertical-center lazyload ratio-container" data-expand="00" data-sizes="auto"
        src="<?=$project->image()->placeholderUri()?>"
        data-src="<?=$project->image()->url()?>"
        srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
        data-srcset="<?=$project->image()->srcset("breakpoints")?>" />
        <div class="description <?php if ($project->toggle()->bool()): ?> enlarge <?php endif?>">
          <p> <?=$project->headline()?><span><?php if ($project->description()): ?>  <?=$project->description()?><?php endif?></p>
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
