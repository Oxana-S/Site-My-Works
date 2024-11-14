<!-- contact.php  -->
<?php $pageName = 'contact';

include("blocks/head.php");
include("blocks/header.php");

?>


</header>
<!-- Верстка Основной части сайта -->
<main>
    <div class="container">
        <div class="internal__title animate__animated animate__bounceInLeft">
            <img src="img/logo-none-text.png" alt="" />
            <h3>Контакты</h3>
        </div>
        <div class="internal__content">
            <div class="internal__content_contact">
                <div class="content_contact-top animate__animated animate__bounceInLeft" data-aos="fade-right">
                    <h4>Отдел по работе с клиентами:</h4>
                    <p><a href="+74132300100">+7(4132)300-100</a></p>
                    <p class="work__grapchic graphic_border">11:00-19:00 пн-пт</p>
                    <p class="work__grapchic graphic_border">11:00-16:00 сб</p>
                    <p class="work__grapchic graphic_border">Воскресенье - выходной</p>
                    <ul>
                        <li>ул. Берзина д.17 </li>
                        <li>ул. Пролетарская 66 ТЦ «ИДЕЯ» (1 этаж) </li>
                    </ul>
                </div>
                <!-- <div class="content_contact-middle" data-aos="fade-right">
              <h4>Служба технической поддержки:</h4>
              <p><a href="+74132666355">+7(4132)666-355</a></p>
              <p class="work__grapchic">09:00-19:00 пн-пт</p>
              <p class="work__grapchic">11:00-16:00 сб</p>
            </div> -->
                <div class="content_contact-bottom" data-aos="fade-right">
                    <h4>Аварийная служба:</h4>
                    <p class="work__grapchic"><a href="+74132666355">+7(4132)666-355</a></p>
                    <p><a href="+79025086355">+7(902)5086355</a> (Звонки, WhatsApp)</p>
                    <p class="work__grapchic">09:00-22:00 пн-вс</p>
                </div>
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