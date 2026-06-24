const items   = document.querySelectorAll('.sidebar li[data-page]');
const content = document.getElementById('content');
const title   = document.getElementById('page-title');

items.forEach(item => {
    item.addEventListener('click', () => {
        // Retirer active
        document.querySelector('.sidebar .active')?.classList.remove('active');
        item.classList.add('active');

        const page = item.getAttribute('data-page');
        title.innerText = item.innerText.trim();

        // Animation sortie
        content.style.opacity = '0';
        content.style.transform = 'translateY(8px)';

        fetch('/admin/' + page)
            .then(res => res.text())
            .then(html => {
                content.innerHTML = html;
                // Animation entrée
                requestAnimationFrame(() => {
                    content.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
                    content.style.opacity = '1';
                    content.style.transform = 'translateY(0)';
                });
            })
            .catch(() => {
                content.innerHTML = '<p style="padding:30px;color:#718096;">Contenu non disponible.</p>';
                content.style.opacity = '1';
                content.style.transform = 'translateY(0)';
            });
    });
});