<div class="featured-product section fix"><!--start Featured Product Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2>Новинки</h2>
				<div class="underline"></div>
			</div>
			<?php if (empty($list)): ?>
                <p>Ни одного товара нет</p>
            <?php else: ?>
				<div class="col-sm-12">
					<div class="feature-pro-slider owl-carousel"><!-- Featured slider Area Start -->
						<?php foreach ($list as $val): ?>							
								<!-- Single Product Start -->
								<div class="product-item fix">
									<div class="product-img-hover">
										<!-- Product image -->
										<a href="/post/<?php echo $val['id']; ?>" class="pro-image fix"><img src="/public/materials/<?php echo $val['id']; ?>.jpg" alt="featured" /></a>
									</div>
									<div class="pro-name-price-ratting">
										<!-- Product Name -->
										<div class="pro-name">
											<a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a>
										</div>
										<!-- Product Price -->
										<div class="pro-price fix">
											<p><span class="new"><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб.</span></p>
										</div>
									</div>
								</div><!-- Single Product End -->
							<?php endforeach; ?>
					</div><!-- Featured slider Area End -->
				</div>
			<?php endif; ?>
			
			<!-- БРАСЛЕТЫ -->

			<div class="section-title">
				<h2>Браслеты</h2>
				<div class="underline"></div>
			</div>
			<?php if (empty($bracelets)): ?>
                <p>Пока товаров в категории "Браслеты" не имеются.</p>
            <?php else: ?>
				<div class="col-sm-12">
					<div class="feature-pro-slider owl-carousel"><!-- Featured slider Area Start -->
						<?php foreach ($bracelets as $val): ?>							
								<!-- Single Product Start -->
								<div class="product-item fix">
									<div class="product-img-hover">
										<!-- Product image -->
										<a href="/post/<?php echo $val['id']; ?>" class="pro-image fix"><img src="/public/materials/<?php echo $val['id']; ?>.jpg" alt="featured" /></a>
									</div>
									<div class="pro-name-price-ratting">
										<!-- Product Name -->
										<div class="pro-name">
											<a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a>
										</div>
										<!-- Product Price -->
										<div class="pro-price fix">
											<p><span class="new"><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб.</span></p>
										</div>
									</div>
								</div><!-- Single Product End -->
							<?php endforeach; ?>
					</div><!-- Featured slider Area End -->
				</div>
			<?php endif; ?>
			
			<!-- СЕРЁЖКИ -->

			<div class="section-title">
				<h2>Серьги</h2>
				<div class="underline"></div>
			</div>
			<?php if (empty($earrings)): ?>
                <p>Пока товаров в категории "Серьги" не имеются.</p>
            <?php else: ?>
				<div class="col-sm-12">
					<div class="feature-pro-slider owl-carousel"><!-- Featured slider Area Start -->
						<?php foreach ($earrings as $val): ?>							
								<!-- Single Product Start -->
								<div class="product-item fix">
									<div class="product-img-hover">
										<!-- Product image -->
										<a href="/post/<?php echo $val['id']; ?>" class="pro-image fix"><img src="/public/materials/<?php echo $val['id']; ?>.jpg" alt="featured" /></a>
									</div>
									<div class="pro-name-price-ratting">
										<!-- Product Name -->
										<div class="pro-name">
											<a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a>
										</div>
										<!-- Product Price -->
										<div class="pro-price fix">
											<p><span class="new"><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб.</span></p>
										</div>
									</div>
								</div><!-- Single Product End -->
							<?php endforeach; ?>
					</div><!-- Featured slider Area End -->
				</div>
			<?php endif; ?>
			
			<!-- КОЛЬЦА -->

			<div class="section-title">
				<h2>Кольца</h2>
				<div class="underline"></div>
			</div>
			<?php if (empty($rings)): ?>
                <p>Пока товаров в категории "Кольца" не имеются.</p>
            <?php else: ?>
				<div class="col-sm-12">
					<div class="feature-pro-slider owl-carousel"><!-- Featured slider Area Start -->
						<?php foreach ($rings as $val): ?>							
								<!-- Single Product Start -->
								<div class="product-item fix">
									<div class="product-img-hover">
										<!-- Product image -->
										<a href="/post/<?php echo $val['id']; ?>" class="pro-image fix"><img src="/public/materials/<?php echo $val['id']; ?>.jpg" alt="featured" /></a>
									</div>
									<div class="pro-name-price-ratting">
										<!-- Product Name -->
										<div class="pro-name">
											<a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a>
										</div>
										<!-- Product Price -->
										<div class="pro-price fix">
											<p><span class="new"><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб.</span></p>
										</div>
									</div>
								</div><!-- Single Product End -->
							<?php endforeach; ?>
					</div><!-- Featured slider Area End -->
				</div>
			<?php endif; ?>
			
			<!-- ЦЕПИ -->

			<div class="section-title">
				<h2>Цепи/ожерелья</h2>
				<div class="underline"></div>
			</div>
			<?php if (empty($necklaces)): ?>
                <p>Пока товаров в категории "Цепи/ожерелья" не имеются.</p>
            <?php else: ?>
				<div class="col-sm-12">
					<div class="feature-pro-slider owl-carousel"><!-- Featured slider Area Start -->
						<?php foreach ($necklaces as $val): ?>							
								<!-- Single Product Start -->
								<div class="product-item fix">
									<div class="product-img-hover">
										<!-- Product image -->
										<a href="/post/<?php echo $val['id']; ?>" class="pro-image fix"><img src="/public/materials/<?php echo $val['id']; ?>.jpg" alt="featured" /></a>
									</div>
									<div class="pro-name-price-ratting">
										<!-- Product Name -->
										<div class="pro-name">
											<a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a>
										</div>
										<!-- Product Price -->
										<div class="pro-price fix">
											<p><span class="new"><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб.</span></p>
										</div>
									</div>
								</div><!-- Single Product End -->
							<?php endforeach; ?>
					</div><!-- Featured slider Area End -->
				</div>
            <?php endif; ?>
		</div>
	</div>
</div><!--End Featured Product Area-->