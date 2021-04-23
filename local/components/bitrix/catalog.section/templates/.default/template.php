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
            <picture>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="catalog__item-image">
            </picture>
        </figure>
        <div class="catalog__item-info">
            <div class="catalog__item-title"><?=$arItem["NAME"]?></div>
        </div>
        <div class="catalog__item-actions">
            <div class="catalog__item-price">
                <!--<div class="catalog__item-oldprice"><s>4900 ₽</s></div>-->
                <div class="catalog__item-curprice"><?=$arItem["MIN_PRICE"]["PRINT_VALUE"]?></div>
            </div>
            <div class="catalog__item-addtocart">В корзину</div>
        </div>
    </div>
<?endforeach;?>
</div>
<div data-pagination-num="<?=$navParams['NavNum']?>">
    <!-- pagination-container -->
    <?=$arResult['NAV_STRING']?>
    <!-- pagination-container -->
</div>
<?//printr($arResult)?>