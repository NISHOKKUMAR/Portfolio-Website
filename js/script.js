document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.nav-link');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default link behavior
            const page = this.getAttribute('data-page');

            // Fetch content using AJAX
            fetch(`load_content.php?page=${page}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('content').innerHTML = data; // Update content
                })
                .catch(error => console.error('Error loading page:', error));
        });
    });
});
