  // Wait for the page to fully load
  window.addEventListener('load', function() {
    // Hide loader and overlay
    document.getElementById('loader').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';

    // Remove blur from content
    document.body.classList.add('loaded');
});