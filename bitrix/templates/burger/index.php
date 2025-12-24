<?php
// Файл /index.php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Burger - Ресторан бургеров");
?>

<?php
// Подключение компонента главной страницы
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "PATH" => "/include/main_slider.php"
    )
);
?>

<div class="best_burgers_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80">
                    <span>Burger Menu</span>
                    <h3>Best Ever Burgers</h3>
                </div>
            </div>
        </div>
        
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "home_burgers",
            array(
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "2", // ID инфоблока с бургерами
                "NEWS_COUNT" => "8",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "SET_TITLE" => "N",
            ),
            false
        );
        ?>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>