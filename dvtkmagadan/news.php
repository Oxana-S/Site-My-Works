<!-- news.php  -->
<?php $pageName = 'news';

include("blocks/head.php");
include("blocks/header.php");

?>


</header>
<!-- Верстка Основной части сайта -->
<main>
    <div class="container">
        <!-- Новости -->
        <div class="internal__title" data-aos="fade-right">
            <img src="img/logo-none-text.png" alt="" class=" animate__animated animate__bounceInLeft" />
            <h3 class=" animate__animated animate__bounceInRight">Новости</h3>
        </div>
        <div class="news__content">
            <div class="news__content_list">
                <div class="news__content_list-img animate__animated animate__bounceInRight" data-aos="fade-right">
                    <img src="img/news-img.png" alt="" />
                </div>
                <div class="news__content_list-info animate__animated animate__bounceInLeft" data-aos="fade-left">
                    <h3>Название</h3>
                    <p>Предприятие создано с целью предоставления населению и юридическим лицам услуг по поставке и
                        монтажу спутниковых систем связи. Работа с первым цифровым российским Искусственным Спутником
                        Земли «ЯМАЛ 102», получен ассиметричный доступ в интернет, и к цифровому телевидению. </p>
                    <p>Предприятие создано с целью предоставления населению и юридическим лицам услуг по поставке и
                        монтажу спутниковых систем связи. Работа с первым цифровым российским Искусственным Спутником
                        Земли «ЯМАЛ 102», получен ассиметричный доступ в интернет, и к цифровому телевидению. </p>
                    <p>Предприятие создано с целью предоставления населению и юридическим лицам услуг по поставке и
                        монтажу спутниковых систем связи. Работа с первым цифровым российским Искусственным Спутником
                        Земли «ЯМАЛ 102», получен ассиметричный доступ в интернет, и к цифровому телевидению. </p>
                </div>
            </div>
            <div class="news__content_list">
                <div class="news__content_list-img" data-aos="fade-right">
                    <img src="img/news-img.png" alt="" />
                </div>
                <div class="news__content_list-info" data-aos="fade-left">
                    <h3>Название</h3>
                    <p>Предприятие создано с целью предоставления населению и юридическим лицам услуг по поставке и
                        монтажу спутниковых систем связи. Работа с первым цифровым российским Искусственным Спутником
                        Земли «ЯМАЛ 102», получен ассиметричный доступ в интернет, и к цифровому телевидению. </p>
                    <p>Предприятие создано с целью предоставления населению и юридическим лицам услуг по поставке и
                        монтажу спутниковых систем связи. Работа с первым цифровым российским Искусственным Спутником
                        Земли «ЯМАЛ 102», получен ассиметричный доступ в интернет, и к цифровому телевидению. </p>
                    <p>Предприятие создано с целью предоставления населению и юридическим лицам услуг по поставке и
                        монтажу спутниковых систем связи. Работа с первым цифровым российским Искусственным Спутником
                        Земли «ЯМАЛ 102», получен ассиметричный доступ в интернет, и к цифровому телевидению. </p>
                </div>
            </div>
            <div class="news__content_pagination">
                <ul>
                    <li><a class="news__pagination pagination__active" href="news.php">1</a></li>
                    <li><a class="news__pagination" href="news-2.php">2</a></li>
                    <li><a class="news__pagination" href="news-3.php">3</a></li>
                </ul>
                <a href="news-2.php">Дальше</a>
            </div>
        </div>
    </div>
</main>

<!--Подвал сайта-->
<?php
include("blocks/footer.php");
?>

</body>

</html>