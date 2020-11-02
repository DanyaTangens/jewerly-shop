<section class="product-page page fix"><!--Start Product Details Area-->
	<div class="container">
		<div class="row">
            <div class="col-sm-6">
                <div class="shop-details">
                    <img src="/public/materials/<?php echo $data['id']; ?>.jpg" alt="qq" class="postImg">
                </div>
            </div>
			<div class="col-sm-6">
				<div class="shop-details">
					<!-- Product Name -->
					<h2><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h2>
					<h3><?php echo htmlspecialchars($data['price'], ENT_QUOTES); ?> руб.</h3>
					<h6>Описание:</h6>
					<p><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></p>
				</div>
			</div>
			<div class="col-md-12 fix">
			<div class="section-title">
				<h2>Цепи/ожерелья</h2>
				<div class="underline"></div>
			</div>
			<?php if (empty($recommend)): ?>
                <p>Пока товаров нет.</p>
            <?php else: ?>
				<div class="col-sm-12">
					<div class="feature-pro-slider owl-carousel"><!-- Featured slider Area Start -->
						<?php foreach ($recommend as $val): ?>							
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
		</div>
	</div>
</section><!--End Product Details Area-->