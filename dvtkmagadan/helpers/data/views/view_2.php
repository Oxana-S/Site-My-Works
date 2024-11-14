<div class="b-pf__list b-pf__list--view_2 row" id="galleryBlock">
    <?php foreach ($data as $item) : ?>
        <div class="b-pf__item b-pf__item--view_2 row animated zoomIn" data-animated-name="zoomIn">
            <div class="b-pf__item__img--view_2">
                <a href="<?= $item['img_full'] ?>" title="<?= $item['name'] ?>">
                    <img src="<?= $item['img_thumb'] ?>" alt="<?= $item['name'] ?>" class="resp-img"/>
                </a>
            </div>
            <div class="b-pf__item__name--view_2"><?= $item['name'] ?></div>
        </div>
    <?php endforeach; ?>
</div>