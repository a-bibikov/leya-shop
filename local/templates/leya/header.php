<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <?$APPLICATION->SetAdditionalCSS("/local/templates/leya/assets/css/normalize.min.css", true);?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <script src="https://yastatic.net/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/vendors/owl.carousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>
</head>
<body>
    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>

    <?$APPLICATION->IncludeComponent(
        "leya:header",
        "default",
        array(
        ),
        false
    );?>

    <?if($APPLICATION->GetCurPage(false) == '/'):?>
    <div class="welcome">
        <div class="welcome__wrap">
            <div class="owl-carousel owl-theme welcome__list" id="welcome__slider">
                <div class="item welcome__item">
                    <div class="welcome__item-wrap">
                        <div class="welcome__item-content">
                            <div class="welcome__item-title">Оптовые поставки шапок и головных уборов</div>
                            <div class="welcome__item-text">Сезонная РАСПРОДАЖА головных уборов, успей купить по выгодной цене! Подробности у менеджера по телефону +79139014757</div>
                            <div class="welcome__item-actions">
                                <a href="#" class="welcome__item-action">Получить оптовое предложение</a>
                                <a href="#" class="welcome__item-action light">Каталог</a>
                            </div>
                        </div>
                        <figure class="welcome__item-bg">
                            <picture>
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/welcome/1.jpg" alt="">
                            </picture>
                        </figure>
                    </div>
                </div>
                <div class="item welcome__item">
                    <div class="welcome__item-wrap">
                        <div class="welcome__item-content">
                            <div class="welcome__item-title">Оптовые поставки пряжи и головных уборов</div>
                            <div class="welcome__item-text">Сезонная РАСПРОДАЖА головных уборов, успей купить по выгодной цене! Подробности у менеджера по телефону +79139014757</div>
                            <div class="welcome__item-actions">
                                <a href="#" class="welcome__item-action">Получить оптовое предложение</a>
                                <a href="#" class="welcome__item-action light">Каталог</a>
                            </div>
                        </div>
                        <figure class="welcome__item-bg">
                            <picture>
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/welcome/2.jpg" alt="">
                            </picture>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="welcome__meta">
                <div class="welcome__copyright">2017–2020 © leya-shop.ru</div>
                <div class="welcome__social">
                    <div class="welcome__social-title">Следуйте за нами</div>
                    <div class="welcome__social-list">
                        <a href="#" class="welcome__social-item">
                            <figure class="welcome__social-icon">
                                <picture>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/fb.svg" alt="">
                                </picture>
                            </figure>
                        </a>
                        <a href="#" class="welcome__social-item">
                            <figure class="welcome__social-icon">
                                <picture>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icons/fb.svg" alt="">
                                </picture>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?endif?>

    <?if($APPLICATION->GetCurPage(false) != '/'):?>
    <div class="mainmenu">
        <div class="wrap">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "",
                array(
                ),
                false
            );?>
        </div>
    </div>

    <div class="page__info">
        <div class="wrap">
            <div class="page__info-wrap">
                <div class="breadcrumb">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "",
                        array(
                        ),
                        false
                    );?>
                </div>
                <div class="page__title">
                    <h1 class="page__title-text"><?$APPLICATION->ShowTitle(false)?></h1>
                </div>
                <div class="page__description">
                    <p class="page__description-text"><?$APPLICATION->ShowProperty("description")?></p>
                </div>
            </div>
        </div>
    </div>
    <?endif?>