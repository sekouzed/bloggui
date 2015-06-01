<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css("http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all") ?>

    <?= $this->Html->css("../assets/global/plugins/font-awesome/css/font-awesome.min") ?>
    <?= $this->Html->css("../assets/global/plugins/bootstrap/css/bootstrap.min") ?>

    <?= $this->Html->css("../assets/global/plugins/fancybox/source/jquery.fancybox") ?>

    <?= $this->Html->css("../assets/global/css/components") ?>
    <?= $this->Html->css("../assets/frontend/layout/css/style") ?>
    <?= $this->Html->css("../assets/frontend/layout/css/style-responsive") ?>
    <?= $this->Html->css("../assets/frontend/layout/css/themes/red.css") ?>
    <?= $this->Html->css("../assets/frontend/layout/css/custom") ?>

    <?= $this->Html->css('default') ?>
    <?= $this->Html->css('style') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="corporate">

    <div id="wrapper">
        <div class="pre-header">
            <?= $this->element('pre-header') ?>
        </div>

        <div class="header">
            <?= $this->element('header') ?>
        </div>

        <div class="main">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="javascript:;">Blog</a></li>
                    <li class="active">Blog Page</li>
                </ul>

                <?= $this->Flash->render() ?>

                <div class="row margin-bottom-40">
                    <div class="col-md-12 col-sm-12">
                        <h1><?= $this->fetch('title') ?></h1>
                        <div class="content-page">
                            <div class="row">

                                <div class="col-md-9 col-sm-9 blog-posts">

                                    <?= $this->fetch('content') ?>

                                </div>

                                <div class="col-md-3 col-sm-3 blog-sidebar">
                                    <?= $this->element('sidebar') ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="pre-footer">
            <?= $this->element('pre-footer') ?>
        </div>

        <div class="footer">
            <?= $this->element('footer') ?>
        </div>
    </div>
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->

    <script src="../assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

</body>
</html>
