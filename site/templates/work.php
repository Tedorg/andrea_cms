<?php snippet("header");?>



<div class="content">
<div class="app">
<div id="list"></div>
  <div class="full hide-scroll">
    <ul class="container" style="list-style-type:none">
      <li class="start-item block">

         <div class="start-wrapper">
            <div class="start-text"><p><?=$home->headline()?></p></div>
   <img class="lazyload" data-expand="00" data-sizes="auto"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="data-srcset="<?=$home->image()->srcset("breakpoints")?>" />
</div>
      </li>

      <?php foreach ($projects as $project): ?>
        <?php foreach ($project->images() as $image): ?>





          <li class="item block">
            <div class="wrapper">
              <img class="product hf vertical-center lazyload ratio-container" data-expand="00" data-sizes="auto"src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="data-srcset="<?=$image->srcset("breakpoints")?>" />
             <div class="description"><pre><p> <?=$project->headline()?>
<?php if ($image->hasPrev() or $image->hasNext()): ?>/<?=$image->indexOF() + 1?><?php endif?><?php if ($image->isFirst()): ?><?php if ($project->toggle()->bool()): ?> <span class="orderItems"><input type="button"value="+list" data="<?=$project->headline()?>,<?=$project->number()?>" class="addtolist"> <A HREF="mailto:info@andrearueeger.ch?subject=<?=$project->headline()?>&body=I would like to order this item: <?=$project->headline()?>" style='text-decoration:underline'>Order this</A> <?php endif?></span> <?php if ($project->description()): ?><br><span>  <?=$project->description()?><?php endif?><?php foreach ($project->tags()->split() as $category): ?><?=$category?> | <?php endforeach;?></span ></p></pre>
                </div>
              <?php endif?>

            </div>
          </li>
        <?php endforeach;?>
      <?php endforeach;?>

    </ul>
  </div>
</div>
</div>

<?php snippet("footer");
?>
