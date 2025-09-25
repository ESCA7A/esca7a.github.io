document.addEventListener('DOMContentLoaded', function() {
    const appButtons = document.querySelectorAll('.app-button');

    appButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            const appCard = this.closest('.app-card');
            const appAddress = appCard.querySelector('.app-address').textContent;

            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);

            // Simulate app opening
            window.location.href = appAddress;

            // You can add actual navigation logic here
            // For example: window.location.href = '/app/' + appTitle.toLowerCase();
        });
    });

    // Add hover effects for cards
    const appCards = document.querySelectorAll('.app-card');

    appCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-4px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
