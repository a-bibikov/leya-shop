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
<div class="owl-carousel owl-theme welcome__list" id="welcome__slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="item welcome__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="welcome__item-wrap">
            <div class="welcome__item-content">
                <div class="welcome__item-title"><?=$arItem["NAME"]?></div>
                <div class="welcome__item-text"><?=$arItem["DISPLAY_PROPERTIES"]["SLIDE_TEXT"]["VALUE"]?></div>
                <div class="welcome__item-actions">
                    <?if(!empty($arItem["DISPLAY_PROPERTIES"]["BUTTON_1_TEXT"]["VALUE"]) && !empty($arItem["DISPLAY_PROPERTIES"]["BUTTON_1_LINK"]["VALUE"])):?>
                    <a href="<?=$arItem["DISPLAY_PROPERTIES"]["BUTTON_1_LINK"]["VALUE"]?>" class="welcome__item-action"><?=$arItem["DISPLAY_PROPERTIES"]["BUTTON_1_TEXT"]["VALUE"]?></a>
                    <?endif?>
                    <?if(!empty($arItem["DISPLAY_PROPERTIES"]["BUTTON_2_TEXT"]["VALUE"]) && !empty($arItem["DISPLAY_PROPERTIES"]["BUTTON_2_LINK"]["VALUE"])):?>
                    <a href="<?=$arItem["DISPLAY_PROPERTIES"]["BUTTON_2_LINK"]["VALUE"]?>" class="welcome__item-action light"><?=$arItem["DISPLAY_PROPERTIES"]["BUTTON_2_TEXT"]["VALUE"]?></a>
                    <?endif?>
                </div>
            </div>
            <figure class="welcome__item-bg">
                <picture>
                    <img src="<?=CFile::GetPath($arItem["DISPLAY_PROPERTIES"]["BANNER_BG"]["VALUE"])?>" alt="">
                </picture>
            </figure>
        </div>
    </div>
    <?endforeach;?>
</div>
<?//=printr($arResult)?>