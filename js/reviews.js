document.getElementById('review-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(e.target);

    try {
        const response = await fetch('reviews.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.status === 'success') {
            document.getElementById('response-message').style.display = 'block';
            document.getElementById('response-message').innerHTML = `<div class="alert alert-success">${result.message}</div>`;
            e.target.reset();
            loadReviews();
        } else {
            throw new Error(result.message);
        }
    } catch (error) {
        document.getElementById('response-message').style.display = 'block';
        document.getElementById('response-message').innerHTML = `<div class="alert alert-danger">${error.message}</div>`;
    }
});

// Загрузка отзывов при старте
document.addEventListener('DOMContentLoaded', loadReviews);

async function loadReviews() {
    try {
        const response = await fetch('reviews.php');
        const reviews = await response.json();

        const reviewsList = document.getElementById('reviews-list');
        reviewsList.innerHTML = ''; // Очищаем старые отзывы

        reviews.forEach(review => {
            const reviewItem = document.createElement('div');
            reviewItem.className = 'review-item';
            reviewItem.innerHTML = `
                <h4><strong>Имя:</strong> ${review.name}</h4>
                <h4><strong>Отзыв:</strong> ${review.message}</h4>
                <h4><strong>Дата:</strong> ${review.date}</h4>
                <hr>
            `;
            reviewsList.prepend(reviewItem);
        });
    } catch (error) {
        console.error('Ошибка загрузки отзывов:', error);
    }
}
