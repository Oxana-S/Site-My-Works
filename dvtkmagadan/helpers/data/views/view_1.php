<div class="b-pf__list b-pf__list--landing row">
    <?php foreach ($data as $item) : ?>
    <div class="b-pf__item grid-6 row animated fadeIn" data-animated-name="fadeIn">
        <div class="b-pf__item__img grid-5">
            <img src="<?= $item['img'] ?>" width="229" height="359" alt="<?= $item['name'] ?>"/>
        </div>
        <div class="b-pf__item__info grid-7">
            <div class="b-pf__item__name"><?= $item['name'] ?></div>
            <div class="b-pf__item__attrs">
                <?php foreach ($item['attrs'] as $attr) : ?>
                <div class="b-pf__item__attr"><?= $attr ?></div>
                <?php endforeach ?>
            </div>
        </div>
        <?php if (isset($item['url'])) : ?>
        <div class="b-pf__item__url" onclick="openSite('<?= $item['url'] ?>')">Посмотреть LP полностью</div>
        <?php endif ?>
    </div>
    <?php endforeach; ?>
</div>