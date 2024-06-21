<?php

use yii\helpers\Html;

$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index'], 'icon' => 'home'],
    ['label' => 'About', 'url' => ['/site/about'], 'icon' => 'checkbox'],
    ['label' => 'Contact', 'url' => ['/site/contact'], 'icon' => 'ghost'],
];

?>
<aside class="navbar navbar-vertical navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <!-- <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                <h3><b>DJIPAY</b></h3>
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <?php foreach ($menuItems as $item) : ?>
                    <li class="nav-item">
                        <?= Html::a(
                            '<span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <!-- Ikon khusus sesuai dengan item menu -->
                            ' . getMenuItemIcon($item['icon']) . '
                        </svg>
                    </span>
                    <span class="nav-link-title">' . Html::encode($item['label']) . '</span>',
                            $item['url'],
                            ['class' => 'nav-link']
                        ) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php
        function getMenuItemIcon($icon)
        {
            $icons = [
                'home' => '<path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />',
                'checkbox' => '<path d="M9 11l3 3l8 -8" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />',
                'ghost' => '<path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" /><path d="M10 10l.01 0" /><path d="M14 10l.01 0" /><path d="M10 14a3.5 3.5 0 0 0 4 0" />',
            ];

            return $icons[$icon] ?? '';
        }
        ?>
    </div>
</aside>