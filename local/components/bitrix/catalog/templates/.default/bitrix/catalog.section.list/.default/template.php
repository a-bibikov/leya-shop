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
    <div class="catalog">
        <div class="catalog__sections">
            <?foreach ($arResult["SECTIONS"] as $arSection):?>
                <?
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                ?>
                <div class="catalog__section" id="<?=$this->GetEditAreaId($arSection['ID'])?>">
                    <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="catalog__section-wrap">
                        <div class="catalog__section-image">
                            <img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="<?=$arSection["PICTURE"]["ALT"]?>" title="<?=$arSection["PICTURE"]["TITLE"]?>">
                        </div>
                        <div class="catalog__section-title"><?=$arSection["NAME"]?></div>
                    </a>
                </div>
            <?endforeach?>
        </div>
    </div>
<?printr($arResult)?>