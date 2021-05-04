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
?>
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
<?printr($arResult["ITEMS"][0])?>