<!-- page-> references alway the current page -->
<html lang="en">

<head>
<meta name="googlebot" content="noindex" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="Andrea Rueeger — Urushi artist and lacquer. I make objects and furniture from different materials.">
 <meta name="keywords" content="Furniture, Cups, Plates ">
 <meta name="author" content="Andrea Rueeger">
 <meta name="robots" content="index, follow">
 <meta property="og:image" content="">
 <meta property="og:description" content="Andrea Rueeger — Urushi artist and lacquer. I make objects and furniture from different materials."/>

 <meta property="og:site_name" content="Andrea Rueeger"/>

 <meta property="og:title" content="Andrea Rueeger; Home"/>

 <meta property="og:type" content="website"/>

 <meta property="og:url" content="https:/andrearueeger.ch"/>

    <title><?=$page->title()?></title>
    <?=css(['dist/main.css', '@auto'])?>


</head>

<body class="hide">
    <div class="mainwrapper">
    <div class="cover"></div>
    <header>

        <div class="header-wrapper">

            <nav class="menu">
                 <?=svg('assets/logo/Andrea_Rueeger_Symbol-01.svg')?>
                <?php foreach ($site->children()->listed() as $subpage): ?>
               <a href="<?=$subpage->url()?>" <?php e($subpage->isActive(), ' class="active"')?>><?=$subpage->title()?></a>
                <?php endforeach;?>
                <!-- <a id="display"></a> -->
            </nav>
            <div class="menu-list">
                <a href="#" class="index_button">Index</a>
            </div>
        </div>

    </header>

    <main>
        <div class="landscapemode">
  <div class="start-text">

     <?=svg('assets/logo/Andrea_Rueeger_Symbol-01.svg')?>
  </div>
</div>



        <!-- <h1>
            </*?= $page->title() ?*/>
        </h1> -->