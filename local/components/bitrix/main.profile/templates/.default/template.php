<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>
<script type="text/javascript">
    <!--
    var opened_sections = [<?
        $arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"]."_user_profile_open"];
        $arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
        if (strlen($arResult["opened"]) > 0)
        {
            echo "'".implode("', '", explode(",", $arResult["opened"]))."'";
        }
        else
        {
            $arResult["opened"] = "reg";
            echo "'reg'";
        }
        ?>];
    //-->

    var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
</script>

<div class="container">
    <form class="reg__form" method="post" action="<?=$arResult["FORM_TARGET"]?>">
        <?=$arResult["BX_SESSION_CHECK"]?>
        <input type="hidden" name="lang" value="<?=LANG?>" />
        <input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
        <input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />
        <div class="form__block">
            <h3 class="form__block-name">Персональные данные</h3>
            <div class="form__row">
                <div class="form__col">
                    <label for="" class="form__label">Фамилия</label>
                    <input type="text" class="form__input" name="LAST_NAME" value="<?=$arResult["arUser"]["LAST_NAME"]?>" placeholder="">
                </div>
            </div>
            <div class="form__row">
                <div class="form__col">
                    <label for="" class="form__label">Имя</label>
                    <input type="text" class="form__input" name="NAME" value="<?=$arResult["arUser"]["NAME"]?>" placeholder="">
                </div>
                <div class="form__col">
                    <label for="" class="form__label">Отчество</label>
                    <input type="text" class="form__input" name="SECOND_NAME" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" placeholder="">
                </div>
            </div>
        </div>
        <div class="form__block">
            <h3 class="form__block-name">Контактные данные</h3>
            <div class="form__row">
                <div class="form__col">
                    <label for="" class="form__label">Телефон</label>
                    <input type="text" class="form__input" name="PHONE_NUMBER" value="<? echo $arResult["arUser"]["PERSONAL_PHONE"]?>" placeholder="">
                </div>
                <div class="form__col">
                    <label for="" class="form__label">Электронная почта</label>
                    <input type="text" class="form__input" name="EMAIL" value="<? echo $arResult["arUser"]["EMAIL"]?>" placeholder="">
                </div>
            </div>
        </div>
        <div class="form__block">
            <h3 class="form__block-name">Адрес доставки</h3>
            <div class="form__row">
                <div class="form__col">
                    <label for="" class="form__label">Индекс</label>
                    <input type="text" class="form__input" name="PERSONAL_ZIP" value="<? echo $arResult["arUser"]["PERSONAL_ZIP"]?>" placeholder="">
                </div>
                <div class="form__col">
                    <label for="" class="form__label">Город</label>
                    <input type="text" class="form__input" name="PERSONAL_CITY" value="<? echo $arResult["arUser"]["PERSONAL_CITY"]?>" placeholder="">
                </div>1
                <div class="form__col form__col--full">
                    <label for="" class="form__label">Улица, дом, помещение</label>
                    <input type="text" class="form__input" name="PERSONAL_STREET" value="<? echo $arResult["arUser"]["PERSONAL_STREET"]?>" placeholder="">
                </div>
            </div>
        </div>
    <!--    <div class="form__block">-->
    <!--        <h3 class="form__block-name">Сменить пароль</h3>-->
    <!--        <div class="form__row">-->
    <!--            <div class="form__col">-->
    <!--                <label for="" class="form__label">Новый пароль</label>-->
    <!--                <input type="text" class="form__input" name="NEW_PASSWORD" value="" placeholder="">-->
    <!--            </div>-->
    <!--            <div class="form__col">-->
    <!--                <label for="" class="form__label">Повторите пароль</label>-->
    <!--                <input type="text" class="form__input" name="NEW_PASSWORD_CONFIRM" value="" placeholder="">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
        <div class="form__actions">
            <div class="form__submit">
                <input type="submit" name="save" class="action form__button" value="Сохранить">
            </div>
        </div>
    </form>
</div>