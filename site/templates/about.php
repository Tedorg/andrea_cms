<?php
/**
 * Templates render the content of your pages.
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page.
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This example templates only echos the field values from the content file and doesn't need any special logic from a controller.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet("header");?>



<main >
<div class="article">
   <div class="wrapper">
    <aside>
      <section>
        <h5>Address</h5>
        <div class="text">
          <?=$page->address()->kt()?>
        </div>
        <br>
      </section>

      <section>
        <h5>Email</h5>
        <div class="text">
          <?=$page->email()->kt()?>
           <?=html::email($page->email())?>
        </div>
      </section>
 <br>
      <section>
        <h5>Phone</h5>
        <div class="text">
          <?=$page->phone()->kt()?>
        </div>
      </section>
 <br>
      <section>
        <h5>On the web</h5>
        <div class="text">
          <ul>
            <?php foreach ($page->social()->toStructure() as $social): ?>
            <li><?=html::a($social->url(), $social->platform())?></li>
            <?php endforeach;?>
          </ul>
        </div>
      </section>

    </aside>
    <br> </br>
    <div class="text">
      <?=$page->text()->kt()?>
    </div>
</div>
</div>
</main>

<?php snippet("footer");
?>
