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
<div class="sections">
    <div class="wrap">
        <div class="sections__wrap">
            <div class="sections__list">
                <?foreach ($arResult["SECTIONS"] as $arSection):?>
                    <?if($arSection["ELEMENT_CNT"] != 0):?>
                    <div class="sections__item">
                        <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="sections__item-link">
                            <figure class="sections__item-figure">
                                <picture>
                                    <?if(empty($arSection["PICTURE"]["SRC"])):?>
                                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/empty.svg" alt="" class="catalog__item-image">
                                    <?else:?>
                                        <img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="">
                                    <?endif?>
                                </picture>
                            </figure>
                        </a>
                        <div class="sections__item-info">
                            <div class="sections__item-title">
                                <a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a>
                                <sup class="sections__item-count"><?=$arSection["ELEMENT_CNT"]?></sup>
                            </div>
                            <div class="sections__item-text"><?=$arSection["DESCRIPTION"]?></div>
                        </div>
                    </div>
                    <?endif?>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>
<?//printr($arResult)?>