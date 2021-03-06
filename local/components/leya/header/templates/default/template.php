<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die()?>
<?if($APPLICATION->GetCurPage(false) == '/') {
    $main_page = 'main_page';
}
?>
<div class="header <?=$main_page?>">
    <div class="wrap">
        <div class="header__wrap">
            <?if($APPLICATION->GetCurPage(false) == '/'):?>
                <div class="header__logo">
                    <figure class="header__logo-name">
                        <picture>
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo-light.svg" alt="">
                        </picture>
                    </figure>
                    <div class="header__logo-description">Оптово-розничный интернет-магазин пряжи и головных уборов</div>
                </div>
            <?else:?>
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <figure class="header__logo-name">
                            <picture>
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo-light.svg" alt="">
                            </picture>
                        </figure>
                    </a>
                    <div class="header__logo-description">Оптово-розничный интернет-магазин пряжи и головных уборов</div>
                </div>
            <?endif?>
            <div class="header__actions">
                <a href="/catalog/" class="header__action">Каталог</a>
            </div>
            <div class="header__contacts">
                <a href="#" class="header__phone">
                    <div class="header__phone-number">+7 913 901 4757</div>
                    <figure class="header__phone-icon">
                        <picture>
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/phone.svg" alt="">
                        </picture>
                    </figure>
                </a>
            </div>
            <div class="header__personal">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket.line",
                    "",
                    array(
                    ),
                    false
                );?>
            </div>
            <div class="header__menu js-menu-show">
                <figure class="header__menu-icon">
                    <picture>
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/menu.svg" alt="">
                    </picture>
                </figure>
                <div class="header__menu-text">Меню</div>
            </div>
        </div>
    </div>
</div>