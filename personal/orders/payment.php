<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформление заказа");

$APPLICATION->IncludeComponent(
	"bitrix:sale.order.payment",
	"",
Array()
);