﻿<?php
// Ruta al archivo menu.json
$menuPath = BASE_PATH . '/menu.json';
$menuData = json_decode(file_get_contents($menuPath), true);

// Obtener los arrays de footer, social y legal
$footerMenu = $menuData['footer'];
$socialMenu = $menuData['social'];
$legalText = $menuData['legal'];
?>

<footer id="footer" class="mt-10 text-white">
    <div class="container mx-auto text-darkblue">
        <div class="grid grid-cols-4 py-10">
            <div class="text-center md:mb-0 md:text-left flex items-center">
                <div class="flex items-center">
                    <a href="/">
                        <img src="<?php echo ASSET_URL . '/img/logo.svg' ?>" alt="">
                    </a>
                </div>
                <div class="w-full flex gap-2 mt-7 items-center justify-between">
                </div>
            </div>
            <div class="col-span-2 flex items-center md:mb-0 justify-center">
                <ul class=" flex gap-3 items-center ">
                    <?php foreach ($footerMenu as $menu): ?>
                        <li class="inline-block">
                            <a class="hover:text-yellowown transition-all" href="<?php echo $menu['url']; ?>">
                                <?php echo $menu['nombre']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="flex items-center lg:mb-0 lg:mt-0 justify-end">
                <ul class="flex flex-row gap-4 ">
                    <?php foreach ($socialMenu as $socialItem): ?>
                        <li>
                            <a class="transition-all" href="<?php echo $socialItem['link']; ?>" target="_blank" rel="noopener noreferrer">
                                <img class="invert" src="<?php echo PATH_ICONS . '/' . $socialItem['icon']; ?>" alt="<?php echo $socialItem['icon']; ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="border-t border-border py-7 border-dark">
        <div class="container text-center text-dark mx-auto">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $legalText['texto']; ?></p>
        </div>
    </div>
</footer>