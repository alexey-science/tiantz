<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("News");
?><h1>О компании</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"template1", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "News",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/news/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "template1",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_ID#/",
		)
	),
	false
);?><br>
					<!-- <div class="news">
						<a href="" class="news-item">
							<div class="img"><img src="assets/images/content/news-1.jpg" alt=""></div>
							<div class="date"><i class="sprite"></i>25 июля 2015</div>
							<div class="text">Южно-Сахалинский суд </div>
							<div class="text2">Южно-Сахалинский суд ждетсуд жде суд жде суд жде суд жде суд жде суд жде суд жде суд ждесуд ждесуд жде оригинальную жалобу с подлинной подписью от Кадырова</div>
						</a>
						<a href="" class="news-item">
							<div class="img"><img src="assets/images/content/news-1.jpg" alt=""></div>
							<div class="date"><i class="sprite"></i>18 июля 2015</div>
							<div class="text">СМИ: Россия играет для Запада ключевую роль в разрешении кризиса в Сирии </div>
							<div class="text2">Южно-Сахалинский суд ждетсуд жде суд жде суд жде суд жде суд жде суд жде суд жде суд ждесуд ждесуд жде оригинальную жалобу с подлинной подписью от Кадырова</div>
						</a>
						<a href="" class="news-item">
							<div class="img"><img src="assets/images/content/news-1.jpg" alt=""></div>
							<div class="date"><i class="sprite"></i>18 июля 2015</div>
							<div class="text">СМИ: Россия играет для Запада ключевую  </div>
							<div class="text2">СМИ: Россия играет для Запада ключевую роль в разрешении кризиса в Сирии </div>
						</a>
						<a href="" class="news-item">
							<div class="img"><img src="assets/images/content/news-1.jpg" alt=""></div>
							<div class="date"><i class="sprite"></i>18 июля 2015</div>
							<div class="text">СМИ: Россия играет для Запада ключевую роль в разрешении кризиса в Сирии </div>
							<div class="text2">СМИ: Россия играет для Запада ключевую роль в разрешении кризиса в Сирии </div>
						</a>
						<a href="" class="news-item">
							<div class="img"><img src="assets/images/content/news-1.jpg" alt=""></div>
							<div class="date"><i class="sprite"></i>18 июля 2015</div>
							<div class="text">СМИ: Россия играет для Запада ключевую роль в разрешении кризиса в Сирии </div>
							<div class="text2">СМИ: Россия играет для Запада ключевую роль в разрешении кризиса в Сирии </div>
						</a>
						<a href="" class="news-item">

							<div class="date"><i class="sprite"></i>25 июля 2015</div>
							<div class="text">Полиция застрелила злоумышленника, захватившего заложников в ресторане Лос-Анджелеса</div>
							<div class="text2">СМИ: Россия играет для Запада ключевую роль в разрешении кризиса в Сирии </div>
						</a>
					</div>
					<div class="pagination">
						<ul class="pager">
							<li><a class="active" href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#" >...</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
						</ul>
					</div> --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>