const items = document.querySelectorAll('.sidebar li');
const content = document.getElementById('content');
const title = document.getElementById('page-title');

items.forEach(item => {
    item.addEventListener('click', () => {

        document.querySelector('.active').classList.remove('active');
        item.classList.add('active');

        const page = item.getAttribute('data-page');
        title.innerText = item.innerText;

        fetch('/client/' + page)
            .then(res => res.text())
            .then(html => {
                content.innerHTML = html;
            });
    });
});