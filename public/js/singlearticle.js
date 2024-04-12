function toggleHeart() {
    var icon = document.getElementById('heart-icon');
    if (icon.classList.contains('fa-heart-o')) {
        icon.classList.remove('fa-heart-o');
        icon.classList.add('fa-heart');
        icon.style.color = 'var(--third-color)';
    } else {
        icon.classList.remove('fa-heart');
        icon.classList.add('fa-heart-o');
        icon.style.color = 'black';
    }
}
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.reply').forEach(item => {
        item.addEventListener('click', event => {
            const parentComment = item.closest('.comment-section');
            const replySection = parentComment.querySelector('.reply-section');
            replySection.style.display = 'block'; // Show reply section
        });
    });

    document.querySelectorAll('.cancel-reply-btn').forEach(item => {
        item.addEventListener('click', event => {
            const replySection = item.closest('.reply-section');
            replySection.style.display = 'none'; // Hide reply section
        });
    });
    document.querySelectorAll('.cvMh7UGw').forEach(item => {
        item.addEventListener('click', event => {
            const articleId = item.dataset.articleId;

            fetch(`/articles/${articleId}/bookmark`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({})
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data.message);
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
        });
    });
});
