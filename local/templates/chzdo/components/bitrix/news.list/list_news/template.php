<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//debug($arResult["ITEMS"]);
?>

<div class="news">
<?foreach($arResult["ITEMS"] as $item):?>
					<a href="<?=$item['DETAIL_PAGE_URL']?>" class="news-item">
						<div class="img"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt=""></div>
						<div class="date"><i class="sprite"></i><?=$item['DISPLAY_ACTIVE_FROM']?></div>
						<div class="text"><?=$item['NAME']?></div>
						<div class="text2"><?=$item['PREVIEW_TEXT']?> </div>
					</a>
					
<?endforeach;?>
<div class="final"><a href="<?=SITE_SERVER_NAME . '/news'?>" class="button"><i class="icon icon-angle-right"></i>все новости</a></div>
</div>