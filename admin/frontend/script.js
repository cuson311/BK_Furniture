// Get all list items in the sidebar
const listItems = document.querySelectorAll('.admin-sidebar .list-group-item');

// Add click event listener to each list item
listItems.forEach(item => {
    item.addEventListener('click', () => {
        // Remove active class from all list items
        listItems.forEach(li => li.classList.remove('active'));

        // Add active class to the clicked list item
        item.classList.add('active');
    });
});
