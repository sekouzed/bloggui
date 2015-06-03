<div class="page-header-inner">
    <div class="page-logo">
        <?= $this->Html->link(
            $this->Html->image('../../assets/admin/layout2/img/logo-default.png',['alt'=>"logo" ,'class' => 'logo-default']),
            '/',['class'=>'','escape'=>false]
        )?>
        <div class="menu-toggler sidebar-toggler"></div>
    </div>
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
    <div class="page-actions">
        <?= $this->Html->link(
            '<i class="icon-action-undo"></i>&nbsp;'.__('Return to site'),
            '/', ['class'=>'btn btn-circle  red','escape'=>false]
        )?>
    </div>
    <div class="page-top">
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <?= $this->Html->image('../../assets/admin/layout2/img/avatar3_small.jpg',['alt'=>"" ,'class' => 'img-circle'])?>
                        <span class="username username-hide-on-mobile">
						    Nick
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <?= $this->Html->link(
                                '<i class="icon-user"></i>&nbsp;'.__('My profil'),
                                ['controller' => 'Users', 'action' => 'profil'],
                                ['class'=>'','escape'=>false]
                            )?>
                        </li>
                        <li>
                            <?= $this->Html->link(
                                '<i class="icon-power"></i>&nbsp;'.__('Log Out'),
                                ['controller' => 'Users', 'action' => 'logout'],
                                ['class'=>'','escape'=>false]
                            )?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>