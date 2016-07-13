<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);

// NOTE by default set class for main content "without sidebar"
$APPLICATION->SetPageProperty("maincontentclass", "workarea_nosidebar");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />

	<!--[if lte IE 6]>
	<style type="text/css">

		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/overlay.png', sizingMethod = 'crop');
		}

		div.product-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>images/product-overlay.png', sizingMethod = 'crop');
		}

	</style>
	<![endif]-->

	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="page-wrapper">

		<div id="header">

			<table id="logo">
				<tr>
					<td><a href="<?=SITE_DIR?>" title="<?=GetMessage('CFT_MAIN')?>"><?
$APPLICATION->IncludeFile(
	SITE_DIR."include/company_name.php",
	Array(),
	Array("MODE"=>"html")
);
?></a></td>
				</tr>
			</table>

			<div id="top-menu">
				<div id="top-menu-inner">
<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
	"ROOT_MENU_TYPE" => "top",
	"MAX_LEVEL" => "2",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
				</div>
			</div>

			<div id="top-icons">
				<a href="<?=SITE_DIR?>" class="home-icon" title="<?=GetMessage('CFT_MAIN')?>"></a>
				<a href="<?=SITE_DIR?>contacts/" class="feedback-icon" title="<?=GetMessage('CFT_FEEDBACK')?>"></a>
			</div>

		</div>

		<div id="banner">
			<table id="banner-layout" cellspacing="0">
				<tr>
					<td id="banner-image"><div><img src="<?=SITE_TEMPLATE_PATH?>/images/head.jpg" /></div></td>
					<td id="banner-slogan">
<?
$APPLICATION->IncludeFile(
	SITE_DIR."include/motto.php",
	Array(),
	Array("MODE"=>"html")
);
?>
					</td>
				</tr>
			</table>
			<div id="banner-overlay"></div>
		</div>

		<div id="content">

			<!-- NOTE sidebar include area -->
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				array(
					"AREA_FILE_SHOW" => "sect",
					"AREA_FILE_SUFFIX" => "sidebar",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO",
					"EDIT_TEMPLATE" => "",
					"COMPONENT_TEMPLATE" => ".default",
					"AREA_FILE_RECURSIVE" => "Y"
				),
				false
			);?>

			<div id="<?= $APPLICATION->ShowProperty("maincontentclass") // NOTE use maincontentclass ?>">

				<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>