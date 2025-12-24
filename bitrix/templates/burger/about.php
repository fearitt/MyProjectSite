<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->SetTitle("О нас");?>

<div class="bradcam_area breadcam_bg_1 overlay">
    <h3>О нас</h3>
</div>

<div class="about_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about_thumb2">
                    <div class="img_1">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/about/1.png" alt="">
                    </div>
                    <div class="img_2">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/about/2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>О нас</span>
                        <h3>Лучшие бургеры<br>в вашем городе</h3>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "PATH" => "/include/about_text.php"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>