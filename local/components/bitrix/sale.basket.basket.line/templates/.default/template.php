<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * @global string $componentPath
 * @global string $templateName
 * @var CBitrixComponentTemplate $this
 */
?>
<a href="/personal/cart/" class="header__cart">
    <figure class="header__cart-icon">
        <picture>
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/cart--light.svg" alt="">
        </picture>
    </figure>
    <?if($arResult["NUM_PRODUCTS"] != 0):?>
        <div class="header__cart-num"><?=$arResult["NUM_PRODUCTS"]?></div>
    <?endif?>
</a>
