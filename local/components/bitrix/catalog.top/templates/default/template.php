<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogTopComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

if (!empty($arResult['ITEMS']))
{
	$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
	$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
	$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM'));
}
?>
<div class="catalog__top">
    <div class="catalog__top-title">Самое популярное</div>
    <div class="catalog__items">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <div class="catalog__item">
                <div class="catalog__item-wrap">
                    <figure class="catalog__item-figure">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="catalog__item-image-link">
                            <picture>
                                <?if(empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/empty.svg" alt="" class="catalog__item-image">
                                <?else:?>
                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="catalog__item-image">
                                <?endif?>
                            </picture>
                        </a>
                    </figure>
                    <div class="catalog__item-info">
                        <div class="catalog__item-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="catalog__item-title-link"><?=$arItem["NAME"]?></a></div>
                    </div>
                    <div class="catalog__item-actions">
                        <div class="catalog__item-price">
                            <?if(!empty($arItem["PRICES"]["WHOLESALE_PRICE"]["PRINT_VALUE"])):?>
                                <div class="catalog__item-oldprice"><s><?=$arItem["PRICES"]["BASE_PRICE"]["PRINT_VALUE"]?></s></div>
                                <div class="catalog__item-curprice"><?=$arItem["PRICES"]["WHOLESALE_PRICE"]["PRINT_DISCOUNT_VALUE"]?></div>
                            <?else:?>
                                <div class="catalog__item-curprice"><?=$arItem["MIN_PRICE"]["PRINT_DISCOUNT_VALUE"]?></div>
                            <?endif?>
                        </div>
                        <a href="<?=$arItem["ADD_URL"]?>" class="catalog__item-addtocart">Купить</a>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>
</div>
<?//printr($arResult["ITEMS"][0])?>