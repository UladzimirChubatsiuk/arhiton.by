// Показать всплывающее окно
document.getElementById('joinTeamBtn').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('popupForm').style.display = 'flex';
});

// Закрыть всплывающее окно
document.getElementById('closePopup').addEventListener('click', function () {
    document.getElementById('popupForm').style.display = 'none';
});

// Закрыть окно при клике на фон
document.getElementById('popupForm').addEventListener('click', function (e) {
    if (e.target === this) {
        this.style.display = 'none';
    }
});

// Обработчик отправки формы
document.getElementById('teamForm').addEventListener('submit', function (e) {
    e.preventDefault();  // Предотвращаем стандартную отправку формы

    // Собираем данные формы
    var formData = new FormData(this);

    // Отправляем данные с помощью fetch
    fetch('save_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())  // Ожидаем ответ от PHP
    .then(data => {
        console.log(data); // Выводим ответ в консоль для диагностики
        // Если все ок, показываем сообщение об успешной отправке
        document.getElementById('formContent').style.display = 'none';  // Скрыть форму
        document.getElementById('successMessage').style.display = 'block';  // Показать сообщение об успехе
    })
    .catch(error => {
        console.error(error);  // Выводим ошибку в консоль для диагностики
        alert("Произошла ошибка при отправке формы.");
    });
});

// Закрыть сообщение об успешной отправке
document.getElementById('closeMessage').addEventListener('click', function () {
    document.getElementById('popupForm').style.display = 'none';  // Закрыть всплывающее окно
});
