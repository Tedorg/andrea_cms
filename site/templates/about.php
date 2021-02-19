

<?php snippet("header");?>

<div class="helper"></div>

<main >
<div class="about">
<div class="wrapper">


<div class="grid">
  <article class="item">
        <div class="text">
      <p><?=$page->textA()->kt()?></p>
       </div>
    </article>


    <article class="item">
        <div class="text">
      <p><?=$page->textB()->kt()?></p>
       </div>
    </article>

      <article class="item">
        <div class="text">
      <p><?=$page->textC()->kt()?></p>
       </div>
    </article>

      <article class="item">
        <div class="text">
      <p><?=$page->textD()->kt()?></p>
       </div>
    </article>

       <article class="item">
        <div class="text">
      <p><?=$page->textE()->kt()?></p>
       </div>
    </article>



  <article class="item">
  <div class="text">
       <?=$page->address()->kt()?><?=html::email($page->email())?><?=$page->phone()->kt()?>
 <?php foreach ($page->social()->toStructure() as $social): ?>
            <li><?=html::a($social->url(), $social->platform())?></li>
            <?php endforeach?>
          </div>
  </article>

  <article class="item">

<img src="<?=$page->image()->url()?>"/>

  </article>

</div>

</div>
</div>
</main>


<?php
snippet("footer");
?>


