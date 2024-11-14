<div class="b-pf__list b-pf__list--landing row">
    <?php foreach ($data as $item) : ?>
    <div class="b-pf__item grid-6 row animated fadeIn" data-animated-name="fadeIn">
        <div class="b-pf__item__img grid-5">
            <img src="<?= $item['img'] ?>" width="230" height="216" alt="<?= $item['name'] ?>"/>
        </div>
        <div class="b-pf__item__info b-pf__item__info--view_3 grid-7">
            <div class="b-pf__item__name"><?= $item['name'] ?></div>
            <div class="b-pf__item__attrs">
                <?php foreach ($item['attrs'] as $attr) : ?>
                <div class="b-pf__item__attr"><?= $attr ?></div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="b-pf__item__url" onclick="openModal('<?= $item['modal_class'] ?>')">Подробнее</div>
    </div>
    <?php endforeach; ?>
</div>