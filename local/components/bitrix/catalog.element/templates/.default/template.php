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
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$image = $arResult["DETAIL_PICTURE"]["SRC"];
if(empty($arResult["DETAIL_PICTURE"]["SRC"])) {
    $image = $arResult["PREVIEW_PICTURE"]["SRC"];
}
?>
    <div class="product">
        <div class="product__wrap">
            <div class="product__images">
                <div class="product__images-wrap">
                    <div class="product__images-item">
                        <figure class="product__image">
                            <picture>
                                <img src="<?=$image?>" alt="">
                            </picture>
                        </figure>
                    </div>
                </div>
                <div class="product__thumbs">
                    <div class="product__thumb">
                        <figure class="product__thumb-image">
                            <picture>
                                <img src="<?=$image?>" alt="">
                            </picture>
                        </figure>
                    </div>
                    <div class="product__thumb">
                        <figure class="product__thumb-image">
                            <picture>
                                <img src="https://leya-shop.ru/upload/iblock/7f1/7f140cbfcd70189fbbabef2696585a9b.jpg" alt="">
                            </picture>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="product__content">
                <div class="product__content-head">
                    <div class="product__category">
                        <div class="product__category-text">Категория</div>
                        <div class="product__category-title">ALIZE PUFFY</div>
                    </div>
                    <div class="product__price">
                        <?if(!empty($arResult["PRICES"]["WHOLESALE_PRICE"]["PRINT_VALUE"])):?>
                            <div class="product__price-base">
                                <div class="product__price-base-title">Розничная цена</div>
                                <span class="value"><?=$arResult["PRICES"]["BASE_PRICE"]["PRINT_VALUE"]?></span>
                            </div>
                            <div class="product__price-values">
                                <div class="product__price-wholesale-title">Оптовая цена</div>
                                <div class="product__price-value">
                                    <?if(!empty($arResult["MIN_PRICE"]["DISCOUNT_DIFF"])):?>
                                        <span class="product__price-old"><s><?=$arResult["PRICES"]["WHOLESALE_PRICE"]["PRINT_VALUE"]?></s></span>
                                    <?endif?>
                                    <span class="product__price-current"><?=$arResult["PRICES"]["WHOLESALE_PRICE"]["PRINT_DISCOUNT_VALUE"]?></span>
                                </div>
                            </div>
                        <?else:?>
                            <div class="product__price-value">
                                <?if(!empty($arResult["MIN_PRICE"]["DISCOUNT_DIFF"])):?>
                                    <span class="product__price-old"><s><?=$arResult["MIN_PRICE"]["PRINT_VALUE"]?></s></span>
                                <?endif?>
                                <span class="product__price-current"><?=$arResult["MIN_PRICE"]["PRINT_DISCOUNT_VALUE"]?></span>
                            </div>
                        <?endif?>
                    </div>
                    <div class="product__actions">
                        <a href="<?=$arResult["BUY_URL"]?>" class="product__action">Купить</a>
                    </div>
                </div>
                <div class="product__info">
                    <div class="product__info-title">Информация</div>
                    <div class="product__info-list">
                        <?foreach ($arResult["DISPLAY_PROPERTIES"] as $arProperty):?>
                            <div class="product__info-item">
                                <div class="product__info-prop"><?=$arProperty["NAME"]?>:</div>
                                <div class="product__info-value"><?=$arProperty["DISPLAY_VALUE"]?></div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?printr($arResult);?>