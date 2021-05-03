<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="mainmenu__wrap">
    <?if (!empty($arResult)):?>
    <ul class="mainmenu__list">
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;
        ?>
            <?if($arItem["ITEM_INDEX"] === 0):?>
                <li class="mainmenu__main"><a href="<?=$arItem["LINK"]?>" class="mainmenu__main-link"><?=$arItem["TEXT"]?></a></li>
            <?elseif($arItem["SELECTED"]):?>
                <li class="mainmenu__item"><a href="<?=$arItem["LINK"]?>" class="mainmenu__link selected"><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li class="mainmenu__item"><a href="<?=$arItem["LINK"]?>" class="mainmenu__link"><?=$arItem["TEXT"]?></a></li>
            <?endif?>
        <?endforeach?>

    </ul>
    <?endif?>
</div>