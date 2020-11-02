<div class="shop-product-area section fix">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="shop-sidebar fix">
					<!-- single-sidebar start -->
					<div class="sin-shop-sidebar shop-category">
						<h2>Категории</h2>
						<ul>
							<li><a href="/catalog">Все товары</a></li>
							<li><a href="/catalog/rings">Кольца</a></li>
							<li><a href="/catalog/earrings">Серьги</a></li>
							<li><a href="/catalog/necklaces">Ожерелья/цепи</a></li>
							<li><a href="/catalog/bracelets">Браслеты</a></li>
						</ul>
					</div>
					<!-- single-sidebar end -->
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
				<?php if (empty($list)): ?>
                <p>Пока товаров в категории "Серьги" не имеются.</p>
            	<?php else: ?>
					<div class="shop-products">
						<!-- Single Product -->
						<?php foreach ($list as $val): ?>	
						<div class="single-list-product col-sm-12">
							<div class="list-pro-image">
								<a href="/post/<?php echo $val['id']; ?>">
									<img src="/public/materials/<?php echo $val['id']; ?>.jpg" alt="" />
								</a>
							</div>
							<div class="list-pro-des fix">
								<a class="pro-name" href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a>
								
								<h4 class="list-pro-price"><span class="new"><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб.</span></h4>
								<p><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></p>
							</div>
							
						</div>
						<?php endforeach; ?>
						<!-- Pagination -->
						<div class="pagination">
							<?php echo $pagination;	?>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- Shop Product Area End -->	