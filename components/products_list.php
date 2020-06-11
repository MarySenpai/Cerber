	<main>
		<section class="catalog">
			<div class="container">
				<ul class="categories">
					<?php if ($_GET['category_id'] == '1'): ?>
						<li><a class="category_select" href="<?= $url_category ?>1">Камеры видеонаблюдения</a></li>
					<?php else: ?>
						<li><a href="<?= $url_category ?>1">Камеры видеонаблюдения</a></li>
					<?php endif; ?>
					<?php if ($_GET['category_id'] == '2'): ?>
						<li><a class="category_select" href="<?= $url_category ?>2">Wi-Fi роутеры</a></li>
					<?php else: ?>
						<li><a href="<?= $url_category ?>2">Wi-Fi роутеры</a></li>
					<?php endif; ?>
					<?php if ($_GET['category_id'] == '3'): ?>
						<li><a class="category_select" href="<?= $url_category ?>3">Системы умного дома</a></li>
					<?php else: ?>
						<li><a href="<?= $url_category ?>3">Системы умного дома</a></li>
					<?php endif; ?>
				</ul>
			<ul class="products_list">
				<li>
					<a class="product_card" href="<?= $url_product ?>1">
					<img src="/img/placeholder.png">
					<h2><?= $title ?></h2>
					<p><?= $desc ?></p>
					</a>
				</li>
				<li>
					<a class="product_card" href="<?= $url_product ?>2">
					<img src="/img/placeholder.png">
					<h2><?= $title ?></h2>
					<p><?= $desc ?></p>
					</a>					
				</li>
				<li>
					<a class="product_card" href="<?= $url_product ?>3">
					<img src="/img/placeholder.png">
					<h2><?= $title ?></h2>
					<p><?= $desc ?></p>
					</a>					
				</li>
				<li>
					<a class="product_card" href="<?= $url_product ?>4">
					<img src="/img/placeholder.png">
					<h2><?= $title ?></h2>
					<p><?= $desc ?></p>
					</a>					
				</li>
			</ul>
			</div>
		</section>
	</main>