<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main,
	Bitrix\Main\Localization\Loc,
	Bitrix\Main\Page\Asset;
CJSCore::Init(array('clipboard', 'fx'));

Loc::loadMessages(__FILE__);
?>
<div class="orders">
    <?if($_GET["filter_history"] == 'Y'):?>
        <?$APPLICATION->SetTitle("Выполненные заказы")?>
        <div class="orders__tabs">
            <div class="orders__tab">
                <a href="/personal/orders/" class="orders__tab-link">Текущие заказы</a>
            </div>
            <div class="orders__tab orders__tab--current">
                <a href="/personal/orders/?filter_history=Y" class="orders__tab-link">Выполненные заказы</a>
            </div>
        </div>
    <?else:?>
        <?$APPLICATION->SetTitle("Текущие заказы")?>
        <div class="orders__tabs">
            <div class="orders__tab orders__tab--current">
                <a href="/personal/orders/" class="orders__tab-link">Текущие заказы</a>
            </div>
            <div class="orders__tab">
                <a href="/personal/orders/?filter_history=Y" class="orders__tab-link">Выполненные заказы</a>
            </div>
        </div>
    <?endif?>

    <div class="order__list">
    <?foreach($arResult["ORDERS"] as $arOrder):?>
        <?
            $status = $arOrder["ORDER"]["STATUS_ID"];
            $status_class = "order__item-status";
            switch ($status) {
                case "N":
                    $status_text = "Принят, ожидается оплата";
                    $status_class .= "--general";
                    break;
                case "P":
                    $status_text = "Заказ оплачен";
                    $status_class .= "--payed";
                    break;
                case "F":
                    $status_text = "Заказ выполнен";
                    $status_class .= "--done";
                    break;
                default:
                    $status_text = "";
            }
        ?>
        <div class="order__item">
            <div class="order__item-wrap">
                <div class="order__item-left">
                    <div class="order__item-name">Заказ #<?=$arOrder["ORDER"]["ACCOUNT_NUMBER"]?> от <?=$arOrder["ORDER"]["DATE_INSERT_FORMATED"]?></div>
<!--                    <a href="--><?//=$arOrder["ORDER"]["URL_TO_DETAIL"]?><!--" class="order__item-name">Заказ #--><?//=$arOrder["ORDER"]["ACCOUNT_NUMBER"]?><!-- от --><?//=$arOrder["ORDER"]["DATE_INSERT_FORMATED"]?><!--</a>-->
                    <div class="order__item-status <?=$status_class?>"><?=$status_text?></div>
                </div>
                <div class="order__item-right">
                    <div class="order__item-price"><?=$arOrder["ORDER"]["FORMATED_PRICE"]?></div>
                    <div class="order__item-payment"><?=$arOrder["PAYMENT"][0]["PAY_SYSTEM_NAME"]?></div>
                </div>
            </div>
        </div>
    <?endforeach?>
    </div>
</div>
<?//printr($arResult["ORDERS"])?>
