<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->SetTitle("Меню");?>

<div class="bradcam_area breadcam_bg overlay">
    <h3>Меню</h3>
</div>

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
        
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list", 
            "menu_items", 
            array(
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "menu_iblock_id",
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600"
            ),
            false
        );?>
    </div>
</div>