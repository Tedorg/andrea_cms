<?php snippet("header");?>
<div class="landscapemode">
  <div class="start-text">
    <p><?=$home->headline()?></p>
  </div>
</div>

<div class="content">
<div class="app">
  <div class="full hide-scroll">
    <ul class="hs" style="list-style-type:none">
    <li class="start-item block">
        <div class="start-wrapper">


          <div class="start-text"><p><?=$home->headline()?>
            <?=svg('assets/logo/Andrea_Rueeger_Symbol-01.svg')?>

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
