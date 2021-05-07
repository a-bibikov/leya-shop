<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:sale.order.payment",
    "",
    Array()
);?>