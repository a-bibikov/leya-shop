<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogProductsViewedComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
?>
<div class="catalog__item">
    <figure class="catalog__item-figure">
        <picture>
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/products/1.jpg" alt="" class="catalog__item-image">
        </picture>
    </figure>
    <div class="catalog__item-info">
        <div class="catalog__item-title">Пряжа Alize Puffy color 5857</div>
    </div>
    <div class="catalog__item-actions">
        <div class="catalog__item-price">
            <div class="catalog__item-oldprice"><s>4900 ₽</s></div>
            <div class="catalog__item-curprice">5900 ₽</div>
        </div>
        <div class="catalog__item-addtocart">В корзину</div>
    </div>
</div>
<?printr($arResult)?>