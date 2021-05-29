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
            <div class="sections__info">
                <div class="sections__info-title"><?=$arResult["SECTION_TITLE"]?></div>
                <div class="sections__info-text"><?=$arResult["SECTION_INFO"]?></div>
            </div>
            <div class="sections__list">
                <?foreach ($arResult["SECTIONS"] as $arSection):?>
                <div class="sections__item">
                    <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="sections__item-link">
                        <figure class="sections__item-figure">
                            <picture>
                                <img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="">
                            </picture>
                        </figure>
                    </a>
                    <div class="sections__item-info">
                        <div class="sections__item-title"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></div>
                        <div class="sections__item-text"><?=$arSection["DESCRIPTION"]?></div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>
<?//printr($arResult)?>
