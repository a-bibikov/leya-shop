<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<div class="wrap">
    <div class="auth__info">
123
        <?
        if ($arResult['AUTHORIZED'])
        {
            echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
            return;
        }

        ShowMessage($arParams["~AUTH_RESULT"]);
        ShowMessage($arResult['ERROR_MESSAGE']);
        ?>
    </div>
    <div class="auth">
        <form name="<?= $arResult['FORM_ID'];?>" method="post" target="_top" action="<?=POST_FORM_ACTION_URI?>"  class="auth__form">
            <div class="form__row">
                <div class="form__col form__col--full">
                    <label for="auth__login" class="form__label">Электронная почта</label>
                    <input type="text" class="form__input" id="auth__login" name="<?=$arResult['FIELDS']['login'];?>" maxlength="255" value="<?=\htmlspecialcharsbx($arResult['LAST_LOGIN']);?>" placeholder="Ваша электронная почта" />
                </div>
            </div>
            <div class="form__row">
                <div class="form__col form__col--full">
                    <label for="auth__pass" class="form__label">Пароль</label>
                    <input type="password" id="auth__pass" maxlength="255" autocomplete="off" name="<?= $arResult['FIELDS']['password'];?>" placeholder="Введите пароль" class="form__input">
                </div>
            </div>
            <div class="auth__form-actions">
                <input type="submit" class="action auth__form-action" name="<?= $arResult['FIELDS']['action'];?>" value="Войти" />
                <a href="<?=$arResult['AUTH_REGISTER_URL']?>" class="auth__form-link">Регистрация?</a>
            </div>
        </form>
        <div class="auth__social">
            <div class="auth__social-block">
                <h2 class="auth__social-title">Или войдите через соцсети</h2>
                <?$APPLICATION->IncludeComponent("ulogin:auth", "social__form", Array(
                    "GROUP_ID" => "",	// Группа клиентов по умолчанию:
                    "LOGIN_AS_EMAIL" => "Y",	// Использовать email в качестве логина
                    "SEND_EMAIL" => "Y",	// Отправлять email администратору при регистрации пользователя
                    "SOCIAL_LINK" => "Y",	// Сохранять ссылку на страницу пользователя в соцсети
                    "ULOGINID1" => "",	// uLogin ID общая форма №1
                    "ULOGINID2" => "",	// uLogin ID общая форма №2
                ),
                    false
                );?>
            </div>
        </div>
    </div>
</div>