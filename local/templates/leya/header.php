<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <?$APPLICATION->SetAdditionalCSS("/local/templates/leya/assets/css/normalize.min.css", true);?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <script src="https://yastatic.net/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/vendors/owl.carousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>
</head>
<body>
    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>

    <?$APPLICATION->IncludeComponent(
        "leya:header",
        "default",
        array(
        ),
        false
    );?>

    <?if($APPLICATION->GetCurPage(false) == '/'):?>
    <div class="welcome">
        <div class="welcome__wrap">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "banners",
                array(
                    "IBLOCK_TYPE" => "banners",
                    "IBLOCK_URL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_GROUPS" => "Y",
                    "COMPONENT_TEMPLATE" => "banners",
                    "IBLOCK_ID" => "14",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_FILTER" => "N",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "STRICT_SECTION_CHECK" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => ""
                ),
                false
            );?>
            <div class="welcome__meta">
                <div class="welcome__copyright">2017–2021 © leya-shop.ru</div>
                <div class="welcome__social">
                    <div class="welcome__social-title">Следуйте за нами</div>
                    <div class="welcome__social-list">
                        <a href="#" class="welcome__social-item">
                            <figure class="welcome__social-icon">
                                <picture>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/fb.svg" alt="">
                                </picture>
                            </figure>
                        </a>
                        <a href="#" class="welcome__social-item">
                            <figure class="welcome__social-icon">
                                <picture>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/fb.svg" alt="">
                                </picture>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?endif?>

    <?if($APPLICATION->GetCurPage(false) != '/'):?>
    <div class="mainmenu">
        <div class="wrap">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "",
                array(
                ),
                false
            );?>
        </div>
    </div>

    <div class="page__info">
        <div class="wrap">
            <div class="page__info-wrap">
                <div class="breadcrumb">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "",
                        array(
                        ),
                        false
                    );?>
                </div>
                <div class="page__title">
                    <h1 class="page__title-text"><?$APPLICATION->ShowTitle(false)?></h1>
                </div>
                <div class="page__description">
                    <p class="page__description-text"><?$APPLICATION->ShowProperty("description")?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap">
    <?endif?>