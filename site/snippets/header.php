<!-- page-> references alway the current page -->
<html lang="en">

<head>
<meta name="googlebot" content="noindex" />
<!-- <meta name="robots" content="index, follow"> -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<meta name="title" content="Urushiwork, Handcrafted Urushiware made in Switzerland.">
<meta name="description" content="Urushicraft, crafted in Switzerland, handmade by Andrea Rüeger. Furniture handmade by Andrea Rüeger.">
<meta name="keywords" content="Urushi, Urushilacquer, Japaneselacquer, Lacquerware, Handcraft, Artisan, Handmadefurniture, Kanna, Kiridashi, Wood, Woodturning, Maki, Fushimi, Fushimi Urushi Kobo, Tomohiro Sato, Urushi Spoons, Japan, Andrea Rueeger, Andrea Rüeger, Rüeger">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="revisit-after" content=" days">
<meta name="author" content="Andrea Rüeger">

<title><?=$page->title()?></title>
    <?=css(['dist/main.css', '@auto'])?>


</head>

<body class="">
    <div class="mainwrapper">
    <div class="blanket show">
  <?=svg('assets/logo/Andrea_Rueeger_Symbol-01.svg')?>
    </div>
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