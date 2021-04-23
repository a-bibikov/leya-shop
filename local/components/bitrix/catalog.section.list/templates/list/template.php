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

<div class="catalog__section-list">
    <?foreach ($arResult["SECTIONS"] as $arSection):?>
        <?if($arSection["ELEMENT_CNT"] != 0):?>
        <div class="catalog__section-item">
            <a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a>
            <sup class="catalog__section-count"><?=$arSection["ELEMENT_CNT"]?></sup>
        </div>
        <?endif?>
    <?endforeach;?>
</div>
<?//printr($arResult)?>