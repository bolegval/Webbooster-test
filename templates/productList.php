<ul class="product__list">
    <?php foreach ($array as $item) : ?> 
        <li class="product__item">
            <article class="card">
                <img src="<?= $item['img'] ?>" alt=<?= $item['name'] ?> class="product__image">
                <a href="#" class="card__link"><?= $item['name'] ?></a>
                <span class="card__price"><?= number_format($item['price'], 0, ',', ' ') ?> &#8381;</span>
                <button class="card__btn btn">Купить</button>
            </article>               
        </li>
    <?php endforeach ?>
</ul>