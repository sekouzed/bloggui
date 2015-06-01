<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css("http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all") ?>
    <?= $this->Html->css("../assets/global/plugins/font-awesome/css/font-awesome.min") ?>
    <?= $this->Html->css("../assets/global/plugins/simple-line-icons/simple-line-icons.min") ?>
    <?= $this->Html->css("../assets/global/plugins/bootstrap/css/bootstrap.min") ?>
    <?= $this->Html->css("../assets/global/plugins/uniform/css/uniform.default") ?>
    <?= $this->Html->css("../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min") ?>

    <?= $this->Html->css("../assets/global/css/components") ?>
    <?= $this->Html->css("../assets/global/css/plugins") ?>
    <?= $this->Html->css("../assets/admin/layout2/css/layout") ?>
    <?= $this->Html->css("../assets/admin/layout2/css/themes/grey") ?>
    <?= $this->Html->css("../assets/admin/layout2/css/custom") ?>

    <?= $this->Html->css('admin') ?>
    <?= $this->Html->css('style') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed">

    <div class="page-header navbar navbar-fixed-top">
        <?= $this->element('author/page-header') ?>
    </div>
    <div class="clearfix"></div>

    <div class="page-container">

		<div class="page-sidebar-wrapper">
            <?= $this->element('author/page-sidebar') ?>
		</div>

		<div class="page-content-wrapper">

			<div class="page-content">

                <div class="col-md-12">

                    <?= $this->Flash->render() ?>

                    <div class="portlet light">
                        <div class="portlet-title">

                            <div class="caption">
                                <i class="icon-action-redo"></i>
                                <span class="caption-subject bold uppercase">
                                    <?= $this->fetch('title') ?>
                                </span>
                                <span class="caption-helper"></span>
                            </div>

                            <div class="actions">
                                <a href="javascript:;" class="btn btn-circle btn-default">
                                    <i class="fa fa-plus"></i> <span class="hidden-480"> New Order </span>
                                </a>
                                <div class="btn-group">
                                    <a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
                                        <i class="fa fa-share"></i> <span class="hidden-480"> Tools </span> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> Export to Excel </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Export to CSV </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Export to XML </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Print Invoices </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="portlet-body">

                            <?= $this->fetch('content') ?>

                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
			</div>
		</div>
	</div>
    <div class="page-footer">
		<div class="page-footer-inner">
			 2014 © Metronic by keenthemes. <a href="" title="" target="_blank">Purchase Metronic!</a>
		</div>
	</div>
    <div class="scroll-to-top"> <i class="icon-arrow-up"></i> </div>

    <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
    <script src="../../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>

    <script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

    <script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="../../assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>

    <script>
        jQuery(document).ready(function() {
           Metronic.init();
           Layout.init();
        });
    </script>
    <!-- END JAVASCRIPTS -->

</body>
</html>
