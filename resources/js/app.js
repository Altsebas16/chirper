// Crear el contenedor usando clases de Bootstrap
const container = document.createElement('div');
container.classList.add('text-center');

// Crear el logo de Laravel
const logo = document.createElement('img');
logo.src = 'https://laravel.com/img/logomark.min.svg';
logo.alt = 'Laravel Logo';
logo.classList.add('img-fluid', 'mb-4');
logo.style.width = '150px'; // Ajusta el tamaño del logo

// Crear el título de bienvenida
const title = document.createElement('h1');
title.textContent = 'Welcome to Laravel';
title.classList.add('display-4', 'text-secondary');

// Añadir el logo y el título al contenedor
container.appendChild(logo);
container.appendChild(title);

// Añadir el contenedor al elemento con id 'app'
document.getElementById('app').appendChild(container);
