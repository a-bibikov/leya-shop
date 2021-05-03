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
    <?$APPLICATION->AddHeadScript('/local/templates/leya/assets/js/main.js', true);?>
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
    <?if($APPLICATION->GetCurPage(false) != '/'):?>
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