// Find all filter buttons
const filterButtons = document.querySelectorAll('.filter-button');

// Add click event listener to each filter button
filterButtons.forEach(button => {
    button.addEventListener('click', function() {
        // Get the selected category
        const category = this.dataset.category;

        // Find all product elements
        const products = document.querySelectorAll('.pro');

        // Remove 'active' class from all buttons
        filterButtons.forEach(button => {
            button.classList.remove('active');
        });

        // Add 'active' class to the clicked button
        this.classList.add('active');

        // Show all products by default
        products.forEach(product => {
            product.style.display = 'block';
        });

        // If a specific category is selected, hide the products with different category and show the selected category
        if (category && category !== 'all') {
            products.forEach(product => {
                if (!product.classList.contains(category)) {
                    product.style.display = 'none';
                }
            });
        }
    });
});
