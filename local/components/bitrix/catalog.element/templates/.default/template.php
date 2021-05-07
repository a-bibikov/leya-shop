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
                <div class="product__images-close js-images-close">Закрыть</div>
                <div id="sync1" class="owl-carousel owl-theme product__images-wrap">
                    <div class="product__images-item">
                        <figure class="product__image">
                            <picture>
                                <img src="<?=$image?>" alt="">
                            </picture>
                        </figure>
                        <div class="product__zoom js-images-zoom">
                            <div class="product__zoom-text">Увеличить</div>
                            <figure class="product__zoom-icon">
                                <picture>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/zoom.svg" alt="">
                                </picture>
                            </figure>
                        </div>
                    </div>
                    <?foreach($arResult["PROPERTIES"]["PHOTOES"]["VALUE"] as $photoID):
                        $photo = CFile::GetPath($photoID);
                        ?>
                        <div class="product__images-item js-images-zoom">
                            <figure class="product__image">
                                <picture>
                                    <img src="<?=$photo?>" alt="">
                                </picture>
                            </figure>
                            <div class="product__zoom js-images-zoom">
                                <div class="product__zoom-text">Увеличить</div>
                                <figure class="product__zoom-icon">
                                    <picture>
                                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/zoom.svg" alt="">
                                    </picture>
                                </figure>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
                <div id="sync2" class="owl-carousel owl-theme product__thumbs">
                    <div class="product__thumb">
                        <figure class="product__thumb-image">
                            <picture>
                                <img src="<?=$image?>" alt="">
                            </picture>
                        </figure>
                    </div>
                    <?foreach($arResult["PROPERTIES"]["PHOTOES"]["VALUE"] as $thumbID):
                        $thumb = CFile::GetPath($thumbID);
                    ?>
                    <div class="product__thumb">
                        <figure class="product__thumb-image">
                            <picture>
                                <img src="<?=$thumb?>" alt="">
                            </picture>
                        </figure>
                    </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="product__content">
                <div class="product__content-head">
                    <div class="product__category">
                        <div class="product__category-text">Категория</div>
                        <div class="product__category-title"><a class="product__category-link" href="<?=$arResult["SECTION"]["SECTION_PAGE_URL"]?>"><?=$arResult["SECTION"]["NAME"]?></a></div>
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
                <?if(!empty($arResult["DISPLAY_PROPERTIES"])):?>
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
                <?endif?>
            </div>
        </div>
    </div>
<?printr($arResult);?>