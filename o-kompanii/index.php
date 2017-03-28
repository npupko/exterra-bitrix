<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<?$APPLICATION->IncludeComponent(
  "bitrix:breadcrumb",
  "",
  Array(
    "PATH" => "",
    "SITE_ID" => "s1",
    "START_FROM" => "0"
  )
);?>

<h1 class="title title-50px">Только качественные строительные материалы</h1>

<div class="slick f-no-bottom-margin">
  <div><img src="/images/realize/1photo.jpg" alt=""></div>
  <div><img src="/images/realize/2photo.jpg" alt=""></div>
  <div><img src="/images/realize/3photo.jpg" alt=""></div>
  <div><img src="/images/realize/4photo.jpg" alt=""></div>
  <div><img src="/images/realize/5photo.jpg" alt=""></div>
  <div><img src="/images/realize/6photo.jpg" alt=""></div>
</div>



<div class="about-wrapper">
  <div class="l-wrapper"></div>
  <div class="r-wrapper">
    <h4>«Экстерра Групп» – компания, четко ориентированная на продажу потребителям только качественных строительных материалов.</h4>
    <ul>
      <li>
        <span class="about-why">Почему мы? Потому что мы заботимся о Вас, своих клиентах.</span>
        <p>С каждым годом потребители становятся все более требовательными к качеству стройматериалов. И это правильно,
        потому что использование продукции недобросовестных производителей так или иначе оборачивается для
        нерачительного хозяина впустую потраченными усилиями, временем и деньгами. Сегодня существует немало фирм,
        продающих стройматериалы. Выбор лучшей из них может стать сложной задачей. Но именно с ее правильного
        решения и начинается успех стройки.</p>
    </li>
      <li>
        <span class="about-how">Как сделать этот выбор? Ответ на вопрос одновременно и прост, и сложен.</span>
        <p>С одной стороны, у лучшего продавца должны быть только самые качественные строительные материалы.Гарантией
        в этом случае может являться бренд производителя. Поэтому в компании «Экстерра Групп» уважают значение бренда.
        Мы с удовольствием предлагаем вам, к примеру, кирпич ручной формовки компании VANDERSANDEN, композитную
        кровлю Metrobond, IKo и продукцию других известных и уважаемых на рынке производителей строительных
        материалов.</p>
        <p>С другой же стороны, не все качественные материалы изготавливаются только на таких именитых заводах, как
        кирпичный завод «Вандерсанден». Существует немало качественных торговых марок, которые мало известны
        широкому кругу потребителей, но имеют очень хорошую репутацию в своей отрасли. В этом случае гарантом качества
        продаваемых строительных материалов выступает уже имя продавца. Ведь именно он каждый день общается с
        клиентами, работает со спросом и предлагает оптимальные варианты товара в каждой конкретной ситуации.</p>
      </li>
      <li>
        <span class="about-because">«Экстерра Групп» дорожит своей репутацией. Поэтому вы не получите от нас предложение купить
        продукцию сомнительного качества от недобросовестных производителей.</span>
        <p>Кроме того, в штат компании принимаются только профессионалы – люди, знающие свою работу досконально и
        имеющие все необходимые знания и навыки для предельно грамотного ее выполнения.
        Все сотрудники «Экстерра Групп» - эксперты, которые не оставят без ответа любой вопрос, заданный клиентом. Наши
        консультанты помогут вам сориентироваться в многообразии строительных материалов и совершить действительно
        стоящую покупку! </p>
      </li>
    </ul>
  </div>
</div>
<div class="about-ads-wrapper">
  <h1>В ЛИЦЕ КОМПАНИИ « ЭКСТЕРРА ГРУПП» ВЫ ПОЛУЧАЕТЕ:</h1>
  <div class="fix-plates">
    <ul>
      <li><div class="plate-1"></div></li>
      <li><div class="plate-2"></div></li>
      <li><div class="plate-3"></div></li>
      <li><div class="plate-4"></div></li>
      <li><div class="plate-5"></div></li>
    </ul>
  </div>
  <h2>ОБРАЩАЙТЕСЬ К НАМ ПРЯМО СЕЙЧАС, И МЫ ПОСТРОИМ РОДОВОЕ ГНЕЗДО ДЛЯ  ВАШЕЙ СЕМЬИ! </h2>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
