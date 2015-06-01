
<div class="page-sidebar navbar-collapse collapse">

    <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="start active ">
            <?= $this->Html->link(
                '<i class="icon-speedometer"></i>'.
                '<span class="title">'.__('Dashboard').'</span>'.
                '<span class="selected"></span>',
                ['controller' => 'syndics', 'action' => 'dashboard'],
                ['class'=>'','escape'=>false]
            )?>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="icon-note"></i>'.
                '<span class="title">'.__('Posts').'</span>'.
                '<span class="arrow"></span>',
                'javascript:;',
                ['class'=>'','escape'=>false]
            )?>
            <ul class="sub-menu">
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-list"></i>'.
                        '<span class="title">'.__('List Posts').'</span>',
                        ['controller' => 'Posts', 'action' => 'index'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-plus"></i>'.
                        '<span class="title">'.__('New Post').'</span>',
                        ['controller' => 'Posts', 'action' => 'add'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
            </ul>
        </li>
        <li>
            <?= $this->Html->link(
                '<i class="icon-tag"></i>'.
                '<span class="title">'.__('Rubrics').'</span>'.
                '<span class="arrow"></span>',
                'javascript:;',
                ['class'=>'','escape'=>false]
            )?>
            <ul class="sub-menu">
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-list"></i>'.
                        '<span class="title">'.__('List Rubrics').'</span>',
                        ['controller' => 'Rubrics', 'action' => 'index'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
                <li>
                    <?= $this->Html->link(
                        '<i class="icon-plus"></i>'.
                        '<span class="title">'.__('New Rubric').'</span>',
                        ['controller' => 'Rubrics', 'action' => 'add'],
                        ['class'=>'','escape'=>false]
                    )?>
                </li>
            </ul>
        </li>
        <li class="last">
            <?= $this->Html->link(
                '<i class="icon-settings"></i>'.
                '<span class="title">'.__('Params').'</span>',
                ['controller' => 'syndics', 'action' => 'dashboard'],
                ['class'=>'','escape'=>false]
            )?>
        </li>
    </ul>
</div>