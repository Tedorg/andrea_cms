<!-- page-> references alway the current page -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title() ?></title>

</head>

<body class="show">

    <div class="cover"></div>
    <header>
        <div class="header-wrapper">
          
            <nav class="menu">
                <?php foreach ($site->children()->listed() as $subpage): ?>
                    <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
                <?php endforeach; ?>
                <!-- <a id="display"></a> -->
            </nav>
        </div>
         
    </header>
    <main>
        <!-- <h1>
            </*?= $page->title() ?*/>
        </h1> -->