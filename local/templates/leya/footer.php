<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<div class="footer">
    <div class="wrap">
        <div class="footer__wrap">
            <div class="footer__left">
                <div class="footer__inner">
                    <div class="footer__logo">
                        <figure class="footer__logo-name">
                            <picture>
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo-light.svg" alt="">
                            </picture>
                        </figure>
                        <div class="footer__logo-description">Мы предлагаем самые продаваемые модели, с которыми Ваш магазин будет в прибыли. С нами вы забудете, что такое товарные остатки. А если товар вам не понравится, то мы готовы вернуть деньги.</div>
                    </div>
                    <div class="footer__personal">
                        <figure class="footer__personal-icon">
                            <picture>
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/person--light.svg" alt="">
                            </picture>
                        </figure>
                        <div class="footer__personal-links">
                            <div class="footer__personal-item">
                                <a href="#" class="footer__personal-link">Регистрация</a>
                            </div>
                            <div class="footer__personal-item">
                                <a href="#" class="footer__personal-link">Вход</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__alt">
                        <div class="footer__alt-list">
                            <div class="footer__alt-item">
                                <a href="#" class="footer__alt-link">Политика конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__right">
                <div class="footer__inner">
                    <div class="footer__menu">
                        <div class="footer__menu-block">
                            <a href="/catalog/" class="footer__menu-link">Каталог</a>
                            <div class="footer__menu-list">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:catalog.main",
                                    "footer__catalog",
                                    array(
                                        "IBLOCK_TYPE" => "catalog",
                                        "IBLOCK_URL" => "",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_GROUPS" => "Y"
                                    ),
                                    false
                                );?>
                            </div>
                        </div>
                        <div class="footer__menu-block">
                            <a href="/optovikam/" class="footer__menu-link">Оптовикам</a>
                            <div class="footer__menu-list">
                                <div class="footer__menu-item">
                                    <a href="/optovikam/sposoby-oplaty/" class="footer__menu-item-link">Способы оплаты</a>
                                </div>
                                <div class="footer__menu-item">
                                    <a href="/optovikam/dostavka-zakazov/" class="footer__menu-item-link">Доставка заказов</a>
                                </div>
                                <div class="footer__menu-item">
                                    <a href="/optovikam/obmen-i-vozvrat/" class="footer__menu-item-link">Обмен и возврат</a>
                                </div>
                                <div class="footer__menu-item">
                                    <a href="/optovikam/obrazets-dogovora/" class="footer__menu-item-link">Образец договора</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__menu-block">
                            <a href="/o-kompanii/" class="footer__menu-link">О компании</a>
                            <div class="footer__menu-list">
                                <div class="footer__menu-item">
                                    <a href="/o-kompanii/kontakty/" class="footer__menu-item-link">Контакты</a>
                                </div>
                                <div class="footer__menu-item">
                                    <a href="/o-kompanii/rekvizity/" class="footer__menu-item-link">Реквизиты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__contacts">
                        <div class="footer__contacts-block">
                            <div class="footer__phone">
                                <a href="#" class="footer__phone-link">
                                    <span class="footer__phone-text">+7 913 901 47 57</span>
                                    <figure class="footer__phone-icon">
                                        <picture>
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/phone--colored.svg" alt="">
                                        </picture>
                                    </figure>
                                </a>
                            </div>
                            <div class="footer__email">
                                <a href="mailto:shapki54.com@yandex.ru" class="footer__email-link">shapki54.com@yandex.ru</a>
                            </div>
                            <div class="footer__payments">
                                <div class="footer__payment">
                                    <figure class="footer__payment-icon">
                                        <picture>
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/visa.svg" alt="">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="footer__payment">
                                    <figure class="footer__payment-icon">
                                        <picture>
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/mastercard.svg" alt="">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="footer__payment">
                                    <figure class="footer__payment-icon">
                                        <picture>
                                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/mir.svg" alt="">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="footer__social">
                            <div class="footer__social-list">
                                <div class="footer__social-item">
                                    <a href="//www.facebook.com/leyashapki/" class="footer__social-link">
                                        <figure class="footer__social-icon">
                                            <picture>
                                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/fb.svg" alt="">
                                            </picture>
                                        </figure>
                                    </a>
                                </div>
                                <div class="footer__social-item">
                                    <a href="//www.instagram.com/leya_shapki/" class="footer__social-link">
                                        <figure class="footer__social-icon">
                                            <picture>
                                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/ig.svg" alt="">
                                            </picture>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bottom">
                        <div class="footer__copyright">2017–2021 © leya-shop.ru – Копирование материалов с сайта возможно только с письменного разрешения администрации сайта leya-shop.ru</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>