<?php $current_url = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], "/")); ?>
<?php $current_folder = substr($current_url, strrpos($current_url, "/") + 1); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php print $page_title; ?></title>

        <link rel="stylesheet" href="../common/css/style.css" type="text/css">
        <link rel="shortcut icon" href="../images/favicon.ico" />

        <!--[if IE7]>
                <link rel="stylesheet" href="../common/css/ie7.css" type="text/css">
        <![endif]-->
        
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
        <div id="page">
            <div id="header">
                <div id="sidebar">
                    <a href="../" id="logo">
                        <img src="../images/logo.gif" alt="LOGO"></a>
                    <div id="navigation">
                        <ul>
                            <li>
                                <a href="../" class="transition">Home</a>
                            </li>
                            <li class="menu <?php $current_folder == 'menu' ? print 'selected'  : print ''; ?>">
                                <a href="../menu" class="transition">Menu</a>
                                <div class="sub">
                                    <a href="../menu?menu=1">Sushi</a> 
                                    <a href="../menu?menu=2" class="last-child">BBbop</a>
                                </div>
                                <span></span>
                            </li>
<!--                            <li <?php $current_folder == 'review' ? print "class='selected'"  : print ''; ?>>
                                <a href="../review" class="transition">Review</a>
                            </li>-->
                            <li>

                            </li>
                            <li class="last <?php $current_folder == 'about' ? print 'selected'  : print ''; ?>">
                                <a href="../about" class="transition">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!--id="header"-->