const botaoMenu = document.getElementById('button-menu');
const menuLateral = document.getElementById('sidebar');
const menuFechar = document.getElementById('button-fechar');
const botaoTema = document.getElementById('toggle-theme');

botaoMenu.addEventListener('click', () => {
	menuLateral.classList.add('aberto');
});

menuFechar.addEventListener('click', () => {
	menuLateral.classList.remove('aberto');
});

botaoTema.addEventListener('click', () => {
	document.body.classList.toggle('dark-mode');
	if (document.body.classList.contains('dark-mode')) {
		botaoTema.textContent = '☀️';
	}else {
		botaoTema.textContent = '🌙';
	}
});

const easterEgg = ['ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowUp', 'ArrowLeft', 'ArrowRight', 'x', 'b', 'a'];
let digitado = [];

window.addEventListener('keydown', (e) => {
	digitado.push(e.key);
	digitado.splice(-segredo.length - 1, digitado.length - segredo.length);
	if (digitado.join('').includes(segredo.join(''))) {
		alert('MODO GAMER!');
}
});

















