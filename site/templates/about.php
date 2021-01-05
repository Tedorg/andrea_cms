

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

      </article>

  <article class="item">

  <div class="text">
       <p><?=$page->address()->kt()?><?=$page->email()->kt()?><?=$page->phone()->kt()?></p>
          </div>
  </article>

</div>

</div>
</div>
</main>


<?php
snippet("footer");
?>






