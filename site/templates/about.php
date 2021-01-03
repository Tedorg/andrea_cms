

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
       <p><?=$page->address()->kt()?>
          <?=$page->email()->kt()?>
          <?=$page->phone()->kt()?></p>
          </div>
  </article>
  <article class="item">
        <form name="ShoppingList">
    <fieldset>
        <legend>Shopping cart</legend>
        <label>Item: <input type="text" name="name"></label>
        <label>Quantity: <input type="text" name="data"></label>

        <input type="button" value="Save"   onclick="SaveItem()">
        <input type="button" value="Update" onclick="ModifyItem()">
        <input type="button" value="Delete" onclick="RemoveItem()">
    </fieldset>
    <div id="items_table">
        <h2>Shopping List</h2>
        <table id="list"></table>
        <label><input type="button" value="Clear" onclick="ClearAll()">
        * Delete all items</label>
    </div>
</form>
    </article>







</div>

</div>
</div>
</main>


<?php
snippet("footer");
?>






