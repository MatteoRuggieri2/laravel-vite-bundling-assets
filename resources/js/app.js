import './bootstrap';

const title = document.getElementById('title');

title.addEventListener('click', () => {
    alert(`Hai cliccato il titolo "${title.innerText}"!`)
})