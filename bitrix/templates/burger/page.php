<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle($APPLICATION->GetTitle());

// Определяем какой контент показывать
$page = $APPLICATION->GetCurPage();

switch ($page) {
    case '/menu/':
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/menu_content.php");
        break;
    case '/about/':
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/about_content.php");
        break;
    case '/blog/':
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/blog_content.php");
        break;
    case '/contact/':
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/contact_content.php");
        break;
    case '/elements/':
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/elements_content.php");
        break;
    default:
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/index_content.php");
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>