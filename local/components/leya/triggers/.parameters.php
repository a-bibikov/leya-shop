<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * @var string $componentPath
 * @var string $componentName
 * @var array $arCurrentValues
 * */

$arComponentParameters = [
    // группы в левой части окна
    "GROUPS" => [
        "TRIGGER_1" => [
            "NAME" => "Триггер 1",
            "SORT" => 100,
        ],
        "TRIGGER_2" => [
            "NAME" => "Триггер 2",
            "SORT" => 200,
        ],
        "TRIGGER_3" => [
            "NAME" => "Триггер 3",
            "SORT" => 300,
        ],
    ],
    // поля для ввода параметров в правой части
    "PARAMETERS" => [
        "TRIGGER_1_NAME" => [
            "PARENT" => "TRIGGER_1",
            "NAME" => "Заголовок",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_1_TEXT" => [
            "PARENT" => "TRIGGER_1",
            "NAME" => "Текст",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_1_LINK" => [
            "PARENT" => "TRIGGER_1",
            "NAME" => "Текст ссылки",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_1_ACTION" => [
            "PARENT" => "TRIGGER_1",
            "NAME" => "Ссылка",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],

        "TRIGGER_2_NAME" => [
            "PARENT" => "TRIGGER_2",
            "NAME" => "Заголовок",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_2_TEXT" => [
            "PARENT" => "TRIGGER_2",
            "NAME" => "Текст",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_2_LINK" => [
            "PARENT" => "TRIGGER_2",
            "NAME" => "Текст ссылки",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_2_ACTION" => [
            "PARENT" => "TRIGGER_2",
            "NAME" => "Ссылка",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],

        "TRIGGER_3_NAME" => [
            "PARENT" => "TRIGGER_3",
            "NAME" => "Заголовок",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_3_TEXT" => [
            "PARENT" => "TRIGGER_3",
            "NAME" => "Текст",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_3_LINK" => [
            "PARENT" => "TRIGGER_3",
            "NAME" => "Текст ссылки",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
        "TRIGGER_3_ACTION" => [
            "PARENT" => "TRIGGER_3",
            "NAME" => "Ссылка",
            "TYPE" => "STRING",
            "ADDITIONAL_VALUES" => "N",
        ],
    ]
];