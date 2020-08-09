<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php

                    $array = [
                        [
                            'img' => 'img/demo/authors/sunny.png',
                            'alt' => 'Sunny A.',
                            'name' => 'Sunny A. (UI/UX Expert)',
                            'post' => 'Lead Author',
                            'hrefTwitter'=> 'https://twitter.com/@myplaneticket',
                            'twitterName' => '@myplaneticket',
                            'hrefBoostrap' => 'https://wrapbootstrap.com/user/myorange',
                            'justName' => 'Sunny'
                        ],
                        [
                            'img' => 'img/demo/authors/josh.png',
                            'alt' => 'Jos K.',
                            'name' => 'Jos K. (ASP.NET Developer)',
                            'post' => 'Partner &amp; Contributor',
                            'hrefTwitter'=> 'https://twitter.com/@atlantez',
                            'twitterName' => '@atlantez',
                            'hrefBoostrap' => 'https://wrapbootstrap.com/user/Walapa',
                            'justName' => 'Jos'
                        ],
                        [
                            'img' => 'img/demo/authors/jovanni.png',
                            'alt' => 'Jovanni Lo',
                            'name' => 'Jovanni L. (PHP Developer)',
                            'post' => 'Partner &amp; Contributor',
                            'hrefTwitter'=> 'https://twitter.com/@lodev09',
                            'twitterName' => '@lodev09',
                            'hrefBoostrap' => 'https://wrapbootstrap.com/user/lodev09',
                            'justName' => 'Jovanni'
                        ],
                        [
                            'img' => 'img/demo/authors/roberto.png',
                            'alt' => 'Jovanni Lo', # again Jovanni Lo?
                            'name' => 'Roberto R. (Rails Developer)',
                            'post' => 'Partner &amp; Contributor',
                            'hrefTwitter'=> 'https://twitter.com/@sildur',
                            'twitterName' => '@sildur',
                            'hrefBoostrap' => 'https://wrapbootstrap.com/user/sildur',
                            'justName' => 'Roberto'
                        ]
                    ];
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php $i = 0; ?>
                            <?php foreach($array as $key => $value): ?>
                                <?php if($i >= 2): ?>
                                    <div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <?php else: ?>    
                                    <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <?php endif; ?> 
                                <?php $i++; ?>       
                                        <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;"> 
                                        <div class="ml-2 mr-3">
                                            <h5 class="m-0">
                                                <?php echo $value['name']; ?>
                                                <small class="m-0 fw-300">
                                                    <?php echo $value['post']; ?>
                                                </small>
                                            </h5>
                                            <a href="<?php echo $value['hrefTwitter']; ?>" class="text-info fs-sm" target="_blank"><?php echo $value['twitterName']; ?></a> -
                                            <a href="<?php echo $value['hrefBoostrap']; ?>" class="text-info fs-sm" target="_blank" title="Contact <?php echo $value['justName']; ?>"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
