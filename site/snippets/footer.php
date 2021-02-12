<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>


</main >
<footer class="footer">
  <div class="wrapper">
  <p>&copy; <?=date("Y")?> / <?=$site->title()?></p>

  <?php if ($about = page("about")): ?>
    <nav class="social">
      <?php foreach ($about->social()->toStructure() as $social): ?>
        <a href="<?=$social->url()?>"><?=$social->platform()?></a>
      <?php endforeach;?>
    </nav>
  <?php endif;?>
  </div>
</footer>
<?=js("dist/main.js")?>




</div>

</body>

</html>