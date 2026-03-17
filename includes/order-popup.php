<div id="popupForm" class="popup-overlay" style="display: none;">
	<div class="popup-content">
		<button type="button" class="close-btn" id="closePopup" aria-label="Закрыть форму">&times;</button>
		<div id="formContent">
			<h2>Оформление заявки</h2>
			<p>Заполните форму, и мы свяжемся с вами для уточнения деталей по изделию, срокам и комплектации.</p>
			<form id="orderForm" action="/process-order.php" method="post">
				<div class="form-group">
					<label for="name">Ваше имя:</label>
					<input type="text" id="name" name="name" placeholder="Введите ваше имя" autocomplete="name" required>
				</div>
				<div class="form-group">
					<label for="phone">Ваш телефон:</label>
					<input type="tel" id="phone" name="phone" placeholder="Введите ваш номер телефона" autocomplete="tel" inputmode="tel" required>
				</div>
				<div class="form-group">
					<label for="product">Выберите ассортимент:</label>
					<select id="product" name="product" required>
						<option value="" disabled selected>Выберите из списка</option>
						<option value="bench">Скамьи</option>
						<option value="trash">Урны</option>
						<option value="vases">Кашпо | Вазоны</option>
						<option value="lights">Уличные светильники</option>
						<option value="campfire_areas">Зоны кострища</option>
						<option value="cabins">Кабинки для переодевания</option>
						<option value="chairs">Шезлонги</option>
					</select>
				</div>
				<div class="popup-honeypot" aria-hidden="true">
					<label for="website">Не заполняйте это поле</label>
					<input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
				</div>
				<div class="popup-consent">
					<label class="popup-consent__label" for="privacyConsent">
						<input type="checkbox" id="privacyConsent" name="privacy_consent" value="1" required>
						<span>Я согласен(а) с обработкой персональных данных и принимаю <a href="/privacy-policy" target="_blank" rel="noopener noreferrer">политику конфиденциальности</a>.</span>
					</label>
				</div>
				<input type="hidden" id="selectedProductName" name="selected_product_name" value="">
				<button type="submit" class="btn btn-special">Отправить заявку</button>
			</form>
		</div>
		<div id="successMessage" style="display: none;">
			<h2>Заявка успешно отправлена</h2>
			<p>Спасибо за обращение. Мы свяжемся с вами в ближайшее время.</p>
			<button id="closeMessage" class="btn btn-special">Закрыть</button>
		</div>
	</div>
</div>
