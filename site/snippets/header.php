<!-- page-> references alway the current page -->
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <title><?=$page->title()?></title>
    <?=css(['dist/main.css', '@auto'])?>


</head>
  <div class="modal js-modal" >
    <div class="modal-image">
      <svg viewBox="0 0 32 32" style="fill:#48DB71"><path d="M1 14 L5 10 L13 18 L27 4 L31 8 L13 26 z"></path></svg>
    </div>
    <h1>Nice job!</h1>
    <table id="merklist"></table>
    <p>To dismiss click the button below</p>
     <button class="tomail" >mail this list</button>
    <button class="js-close">Dismiss</button>
            </div>
<body class="hide">
    <div class="cover"></div>
    <header>

        <div class="header-wrapper">

            <nav class="menu">
                <?php foreach ($site->children()->listed() as $subpage): ?>
               <a href="<?=$subpage->url()?>" <?php e($subpage->isActive(), ' class="active"')?>><?=$subpage->title()?></a>
                <?php endforeach;?>
                <!-- <a id="display"></a> -->
            </nav>
            <div class="menu-list">
                <button class="js-open btn-open is-active">List</button>
            </div>
        </div>

    </header>

    <main>



        <!-- <h1>
            </*?= $page->title() ?*/>
        </h1> -->