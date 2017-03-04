<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<div class="sell">
  <div class="container">
    <div class="row">
      <div class="left-wrapper">
        <h1>Продажа строительных материалов</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur aliquid quia, et harum maiores voluptates dignissimos vero magni tempore. Eaque totam, et incidunt sit, excepturi aperiam ipsam repellat ad dolores nulla quae placeat iusto consectetur magni repellendus, eos id exercitationem ipsum tempora consequatur quas? Aspernatur harum maxime distinctio recusandae quasi?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur aliquid quia, et harum maiores voluptates dignissimos vero magni tempore. Eaque totam, et incidunt sit, excepturi aperiam ipsam repellat ad dolores nulla quae placeat iusto consectetur magni repellendus, eos id exercitationem ipsum tempora consequatur quas? Aspernatur harum maxime distinctio recusandae quasi?</p>
      </div>
      <div class="right-wrapper">
        <?$APPLICATION->IncludeComponent(
          "bitrix:news",
          ".default",
          Array(
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "Y",
            "AJAX_OPTION_JUMP" => "Y",
            "AJAX_OPTION_SHADOW" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPONENT_TEMPLATE" => ".default",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
            "DETAIL_PAGER_SHOW_ALL" => "N",
            "DETAIL_PAGER_TEMPLATE" => "arrows",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
            "DETAIL_SET_CANONICAL_URL" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PANEL" => "N",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "IBLOCK_ID" => "5",
            "IBLOCK_TYPE" => "news",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "LIST_FIELD_CODE" => array(0=>"",1=>"",),
            "LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "NEWS_COUNT" => "5",
            "NUM_DAYS" => "30",
            "NUM_NEWS" => "20",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_TITLE" => "Новости",
            "PREVIEW_TRUNCATE_LEN" => "",
            "SEF_FOLDER" => "/news/",
            "SEF_MODE" => "Y",
            "SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_ID#/","rss"=>"rss/","rss_section"=>"#SECTION_ID#/rss/",),
            "SET_LAST_MODIFIED" => "N",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "USE_CATEGORIES" => "N",
            "USE_FILTER" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_RATING" => "N",
            "USE_RSS" => "Y",
            "USE_SEARCH" => "N",
            "USE_SHARE" => "N",
            "YANDEX" => "N"
          )
        );?>
      </div>
    </div>
  </div>
</div>

<div class="form-wrapper">
  <?$APPLICATION->IncludeComponent("custom:main.feedback", "feedback_main", Array(
    "EMAIL_TO" => "dvsiteminsk@gmail.com",  // E-mail, на который будет отправлено письмо
      "EVENT_MESSAGE_ID" => array(  // Почтовые шаблоны для отправки письма
        0 => "7",
      ),
      "OK_TEXT" => "Спасибо, ваше сообщение принято.",  // Сообщение, выводимое пользователю после отправки
      "REQUIRED_FIELDS" => array( // Обязательные поля для заполнения
        0 => "NONE",
      ),
      "USE_CAPTCHA" => "N", // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
      "COMPONENT_TEMPLATE" => ".default",
      "EXT_FIELDS" => array(  // Дополнительные поля
        0 => "Телефон",
        1 => "",
      )
    ),
    false
  );?>
</div>

<footer>
  <div class="container">
    <div class="row">
      <h1>Адрес</h1>
      <div class="footer-contacts">
        <a class="footer-logo clearfix" href="/"><img src="/images/logo-terra.png" alt="" class="img-responsive" /></a>
        <p>ООО «Экстерра групп»</p>
        <p>Адрес: 350059, г. Краснодар, ул.Уральская, д.114, помещение 3</p>
        <p>Е-mail: info@exterragroup.ru</p>
        <p>Телефоны: 8 (920) 474 11 11     8 (920) 474 11 11</p>
      </div>
      <div class="footer-menu">
        <?$APPLICATION->IncludeComponent(
        	"bitrix:menu",
        	"bottom_menu",
        	array(
        		"ALLOW_MULTI_SELECT" => "N",
        		"CHILD_MENU_TYPE" => "left",
        		"DELAY" => "N",
        		"MAX_LEVEL" => "2",
        		"MENU_CACHE_GET_VARS" => array(
        		),
        		"MENU_CACHE_TIME" => "3600",
        		"MENU_CACHE_TYPE" => "A",
        		"MENU_CACHE_USE_GROUPS" => "Y",
        		"ROOT_MENU_TYPE" => "bottom",
        		"USE_EXT" => "N",
        		"COMPONENT_TEMPLATE" => "bottom_menu"
        	),
        	false
        );?>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <p>2016 FenixITGroup: Разработка и продвижение сайтов.</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>