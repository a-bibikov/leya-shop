<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="catalog__sections-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="catalog__section">
            <a href="<?=$arItem["LIST_PAGE_URL"]?>" class="catalog__section-link">
                <figure class="catalog__section-image">
                    <picture>
                        <?if(empty($arItem["PICTURE"]["SRC"])):?>
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/empty.svg" alt="" class="catalog__item-image">
                        <?else:?>
                            <img src="<?=$arItem["PICTURE"]["SRC"]?>" alt="">
                        <?endif?>
                    </picture>
                </figure>
            </a>
            <div class="catalog__section-content">
                <a href="<?=$arItem["LIST_PAGE_URL"]?>" class="catalog__section-title"><?=$arItem["NAME"]?></a>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "list",
                    array(
                        "COMPONENT_TEMPLATE" => "list",
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => $arItem["ID"],
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_CODE" => "",
                        "COUNT_ELEMENTS" => "Y",
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                        "TOP_DEPTH" => "2",
                        "SECTION_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "sectionsFilter",
                        "VIEW_MODE" => "LINE",
                        "SHOW_PARENT_NAME" => "Y",
                        "SECTION_URL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_FILTER" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y"
                    ),
                    false
                );?>
            </div>
        </div>
    <?endforeach?>
</div>
<?//printr($arResult)?>