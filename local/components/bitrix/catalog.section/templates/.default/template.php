<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);

if (!empty($arResult['NAV_RESULT']))
{
    $navParams =  array(
        'NavPageCount' => $arResult['NAV_RESULT']->NavPageCount,
        'NavPageNomer' => $arResult['NAV_RESULT']->NavPageNomer,
        'NavNum' => $arResult['NAV_RESULT']->NavNum
    );
}
else
{
    $navParams = array(
        'NavPageCount' => 1,
        'NavPageNomer' => 1,
        'NavNum' => $this->randString()
    );
}
?>
<div data-pagination-num="<?=$navParams['NavNum']?>">
    <!-- pagination-container -->
    <?=$arResult['NAV_STRING']?>
    <!-- pagination-container -->
</div>
<div class="products__list">
<?foreach ($arResult["ITEMS"] as $arItem):?>
    <div class="catalog__item">
        <figure class="catalog__item-figure">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="catalog__item-image-link">
            <picture>
                <?if(empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/empty.svg" alt="" class="catalog__item-image">
                <?else:?>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="catalog__item-image">
                    <?if(!empty($arItem["PROPERTIES"]["PHOTO"]["VALUE"])):?>
                        <? $arItemImage = CFile::GetPath($arItem["PROPERTIES"]["PHOTO"]["VALUE"]); ?>
                        <img src="<?=$arItemImage?>" alt="" class="catalog__item-image alt-image">
                    <?endif?>
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
            <a href="<?=$arItem["ADD_URL"]?>" class="catalog__item-addtocart">В корзину</a>
        </div>
    </div>
<?endforeach;?>
</div>
<div data-pagination-num="<?=$navParams['NavNum']?>">
    <!-- pagination-container -->
    <?=$arResult['NAV_STRING']?>
    <!-- pagination-container -->
</div>
<?//printr($arResult["ITEMS"][0])?>