<script>
// Script to add basic interactivity
const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        alert(`You clicked on: ${e.target.textContent}`);
    });
});
</script>
