<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$curPage = $APPLICATION->GetCurPage();
?>

<ul id="navigation">
    <li><a href="/" <?=($curPage == '/' || $curPage == '/index.php') ? 'class="active"' : ''?>>home</a></li>
    <li><a href="/menu.php" <?=strpos($curPage, '/menu') !== false ? 'class="active"' : ''?>>Menu</a></li>
    <li><a href="/about.php" <?=strpos($curPage, '/about') !== false ? 'class="active"' : ''?>>About</a></li>
    <li>
        <a href="#" <?=strpos($curPage, '/blog') !== false ? 'class="active"' : ''?>>blog <i class="ti-angle-down"></i></a>
        <ul class="submenu">
            <li><a href="/blog.php">blog</a></li>
            <li><a href="/single-blog.php">single-blog</a></li>
        </ul>
    </li>
    <li>
        <a href="#" <?=strpos($curPage, '/elements') !== false ? 'class="active"' : ''?>>Pages <i class="ti-angle-down"></i></a>
        <ul class="submenu">
            <li><a href="/elements.php">elements</a></li>
        </ul>
    </li>
    <li><a href="/contact.php" <?=strpos($curPage, '/contact') !== false ? 'class="active"' : ''?>>Contact</a></li>
</ul>