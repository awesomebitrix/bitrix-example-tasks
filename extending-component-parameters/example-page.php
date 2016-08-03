<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<h2><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"blockexample1",
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => "blockexample1",
		"PATH" => "/include/default.php",
		"header" => "Заголовок 1",
		"text" => "Текст 2",
		"link_title" => "Заголовок кнопки 3",
		"link" => "Ссылка 4"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>