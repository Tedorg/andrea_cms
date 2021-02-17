<?php snippet("header");?>

<div class="content has_index">
  <div class="index">
<div class="grid">
   <?php foreach ($projects as $project): ?>
    <?php foreach ($project->images() as $image): ?>
      <div class="item">
<div class="container">
  <img class="lazyload"srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="data-srcset="<?=$image->srcset('cover')?>" />
  <p><?=$project->headline()?></p>
</div>

      </div>
        <?php endforeach;?>
<?php endforeach;?>
</div>
  </div>
<div class="hs app show">
  <div class="full hide-scroll">
    <ul class="work  container" style="list-style-type:none">

  <?php foreach ($projects as $project): ?>
    <?php foreach ($project->images() as $image): ?>
      <li class="item " data="<?php foreach ($project->tags()->split() as $category): ?><?=$category?> <?php endforeach;?>">
         <div class="wrapper">
           <img class=" product hf vertical-center lazyload ratio-container" data-expand="200" data-sizes="auto"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="data-srcset="<?=$image->srcset("breakpoints")?>" /><div class="description"><p> <?=$project->headline()?><?php if ($image->hasPrev() or $image->hasNext()): ?> - <?=$image->indexOF() + 1?><?php endif?><?php if ($image->isFirst()): ?><?php if ($project->toggle()->bool()): ?> <span class="orderItems"><A HREF="mailto:info@andrearueeger.ch?subject=<?=$project->headline()?>&body=I would like to order this item: <?=$project->headline()?>" style='text-decoration:underline'>Order this</A><?php endif?></span><?php if ($project->description()): ?><br><span><?=$project->description()?><?php endif?></span ></p>
            </div>
           <?php endif?>
           </div> </li>
        <?php endforeach;?>
<?php endforeach;?>
    </ul>
  </div>
</div>
 </div>
<?php snippet("footer");
?>
