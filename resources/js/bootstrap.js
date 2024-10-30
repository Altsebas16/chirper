// Asegúrate de que Bootstrap CSS esté cargado en el proyecto (usa el siguiente enlace en tu HTML):
// <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

// Crear el contenedor principal con clases de Bootstrap
const container = document.createElement('div');
container.classList.add('container', 'd-flex', 'justify-content-center', 'align-items-center', 'vh-100', 'flex-column');

// Crear el logo de Laravel
const logo = document.createElement('img');
logo.src = 'https://laravel.com/img/logomark.min.svg';
logo.alt = 'Laravel Logo';
logo.classList.add('img-fluid', 'mb-4');
logo.style.width = '150px'; // Ajusta el tamaño del logo si es necesario

// Crear el título de bienvenida
const title = document.createElement('h1');
title.textContent = 'Welcome to Laravel';
title.classList.add('display-4', 'text-secondary', 'text-center');

// Añadir el logo y el título al contenedor
container.appendChild(logo);
container.appendChild(title);

// Añadir el contenedor al body del documento
document.body.appendChild(container);
