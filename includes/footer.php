<?php
$extraScripts = $extraScripts ?? '';
?>
			<footer id="gtco-footer" class="gtco-section" role="contentinfo">
				<div class="gtco-container">
					<div class="row row-pb-md">
						<div class="col-md-4 gtco-widget gtco-footer-paragraph">
							<h3>Архитон</h3>
							<p>Мы специализируемся на проектировании и производстве малых архитектурных форм, таких как скамейки, урны, вазоны и другие элементы для благоустройства общественных и частных территорий. Применяя инновационные технологии и качественные материалы, мы создаем стильные и долговечные решения для любого пространства.</p>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-6 gtco-footer-link">
									<h3>Навигация по странице</h3>
									<ul class="gtco-list-link">
										<li><a href="index.php">Главная</a></li>
										<li><a href="about.php">О нас</a></li>
										<li><a href="services.php">Каталог</a></li>
										<li><a href="portfolio.php">Наши работы</a></li>
										<li><a href="contact.php">Контакты</a></li>
									</ul>
								</div>
								<div class="col-md-6 gtco-footer-link">
									<h3>Группы товаров и услуг</h3>
									<ul class="gtco-list-link">
										<li><a href="services.php?category=bench">Диваны и скамьи</a></li>
										<li><a href="services.php?category=trash">Урны</a></li>
										<li><a href="services.php?category=vases">Вазоны</a></li>
										<li><a href="services.php?category=furniture">Садово-парковая мебель</a></li>
										<li><a href="services.php?category=bicycle">Велопарковки</a></li>
										<li><a href="services.php?category=enclosure">Уличные и дорожные ограждения</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4 gtco-footer-subscribe">
							<h3 style="color: white;">Подпишитесь на нашу рассылку и получайте информацию о новинках!</h3>
							<form class="form-inline">
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail3">Email address</label>
									<input type="email" class="form-control" id="" placeholder="Email">
								</div>
								<button type="submit" class="btn btn-primary">Отправить</button>
							</form>
						</div>
					</div>
				</div>
				<div class="gtco-copyright">
					<div class="gtco-container">
						<div class="row">
							<div class="col-md-6 text-left">
								<p><small>&copy; 2024 Все права защищены</small></p>
							</div>
							<div class="col-md-6 text-right">
								<p><small>Ознакомиться с нашими <a href="privacy.php" target="_blank">пользовательским соглашением</a> и <a href="terms.php" target="_blank"> политикой конфиденциальности</a></small></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
		<?= $extraScripts ?>
	</body>
</html>
