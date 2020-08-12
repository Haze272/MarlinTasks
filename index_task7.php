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
                    
                    /*
                    error_reporting(E_ALL);

                    $driver = 'mysql';
                    $host =  'localhost';
                    $db_name = 'marlintask';
                    $db_user = 'root';
                    $db_pass = 'root';
                    
                    $dbase = "$driver:host=$host;dbname=$db_name";
                    $pdo = new PDO($dbase, $db_user, $db_pass);

                    */


                    /*
                    $host = 'localhost';
                    $db   = 'marlintask';
                    $user = 'root';
                    $pass = 'root';
                    $charset = 'utf8';

                    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
                    $opt = [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                    ];
                    $pdo = new PDO($dsn, $user, $pass, $opt);    
                    */

                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">


                            <?php

                            $pdo = new PDO("mysql:host=localhost;dbname=marlintask", "root", "root");
                            $sql = "SELECT * FROM staff_data";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            var_dump($stmt->fetchALL(PDO::FETCH_ASSOC));die;
                            



                            /* Это работает не до конца

                            function user() {
                                global $pdo;
                                $stmt = $pdo->query('SELECT justName FROM staff_data WHERE id = 2');
                                $data = $stmt->fetchAll();
                                return $data;
                               }
                               $datas = user();
                               var_dump($datas);

                            */

                            /*

                            $stmt = $pdo->prepare('SELECT justName FROM staff_data WHERE id = 2');
                            $stmt->execute([$_GET['id']]);
                            while ($row = $stmt->fetch(PDO::FETCH_LAZY))
                            {
                                echo $row[0] . "\n";
                                echo $row['justName'] . "\n";
                                echo $row->justName . "\n";
                            };   

                            */
                            ?>

                            
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
