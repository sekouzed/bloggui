
<div class="page-sidebar navbar-collapse collapse">

    <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="start active ">
            <?= $this->Html->link(
                '<i class="icon-speedometer"></i>'.
                '<span class="title">'.__('Dashboard').'</span>'.
                '<span class="selected"></span>',
                ['controller' => 'Blogs', 'action' => 'dashboard'],
                ['class'=>'','escape'=>false]
            )?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="icon-frame"></i>'.
                '<span class="title">'.__('Domains').'</span>'.
                '<span class="arrow"></span>',
                'javascript:;',
                ['class'=>'','escape'=>false]
            )?>
            <ul class="sub-menu">
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-list"></i>'.
                        '<span class="title">'.__('List Domains').'</span>',
                        ['controller' => 'Domains', 'action' => 'index'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-plus"></i>'.
                        '<span class="title">'.__('New Domain').'</span>',
                        ['controller' => 'Domains', 'action' => 'add'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
            </ul>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="icon-book-open"></i>'.
                '<span class="title">'.__('Blogs').'</span>',
                ['controller' => 'Blogs', 'action' => 'index'],
                ['class'=>'','escape'=>false]
            )?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="icon-tag"></i>'.
                '<span class="title">'.__('Rubrics').'</span>',
                ['controller' => 'Rubrics', 'action' => 'index'],
                ['class'=>'','escape'=>false]
            )?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="icon-note"></i>'.
                '<span class="title">'.__('Posts').'</span>',
                ['controller' => 'Posts', 'action' => 'index'],
                ['class'=>'','escape'=>false]
            )?>
        </li>
        <li class="last">
            <?= $this->Html->link(
                '<i class="icon-users"></i>'.
                '<span class="title">'.__('Users').'</span>'.
                '<span class="arrow"></span>',
                'javascript:;',
                ['class'=>'','escape'=>false]
            )?>
            <ul class="sub-menu">
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-list"></i>'.
                        '<span class="title">'.__('List Users').'</span>',
                        ['controller' => 'Users', 'action' => 'index'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-plus"></i>'.
                        '<span class="title">'.__('New User').'</span>',
                        ['controller' => 'Users', 'action' => 'add'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
            </ul>
        </li>

    </ul>
    <!-- END SIDEBAR MENU -->
</div>