<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Courses Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
        }
        header img {
            max-width: 150px;
        }
        nav {
            background-color: #333;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .grid-layout {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }
        .banner img {
            width: 100%;
            max-width: 800px;
            grid-column: span 3;
        }
        .section {
            margin: 40px 0;
        }
        .section h2 {
            text-align: center;
            color: #333;
            grid-column: span 3;
        }
        .testimonio {
            text-align: center;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }
        .testimonio img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .contact-info {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            grid-column: span 3;
        }
        .contact-info h3 {
            color: #333;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <img src="logo.png" alt="Logo de Cursos de Programación">
        <nav>
            <a href="#inicio">Start</a>
            <a href="#cursos">Courses</a>
            <a href="#testimonios">Testimonials</a>
            <a href="#contacto">Contact</a>
        </nav>
    </header>

    <div class="container">

        <!-- Sección de Bienvenida -->
        <section id="inicio" class="section">
            <div class="grid-layout">
                <h2>Welcome to the Best Programming Courses</h2>
                <p>Learn to program with the best professionals in the sector! Here you will find courses adapted to all levels.</p>
                <div class="banner">
                    <img src="banner.jpg" alt="Estudiar Programación">
                </div>
            </div>
        </section>

        <!-- Sección de Testimonios -->
        <section id="testimonios" class="section">
            <h2>Testimonials from Satisfied Students</h2>
            <div class="grid-layout">
                <div class="testimonio">
                    <img src="testimonio1.jpg" alt="Estudiante Satisfecho">
                    <p>"This course changed my life. Now I am a full-stack developer."</p>
                    <p><strong>- Camilo Torres</strong></p>
                </div>
                <div class="testimonio">
                    <img src="testimonio2.jpg" alt="Estudiante Satisfecho">
                    <p>"The classes are clear and precise. I learned a lot."</p>
                    <p><strong>- Sebastian Beltran</strong></p>
                </div>
                <div class="testimonio">
                    <img src="testimonio3.jpg" alt="Estudiante Satisfecho">
                    <p>"Excellent support and updated content."</p>
                    <p><strong>- Manuel Banoy</strong></p>
                </div>
            </div>
        </section>

        <!-- Sección de Información de Contacto -->
        <section id="contacto" class="section contact-info">
            <h3>Location</h3>
            <p>Programming Development Center, Calle Falsa 123, Ciudad Futura</p>
            <h3>Phone</h3>
            <p>(123) 456-7890</p>
            <h3>Email</h3>
            <p>contacto@cursosprogramacion.com</p>
        </section>

    </div>

    <footer>
        <p>&copy;2024 Programming Courses. All rights reserved.</p>
    </footer>

</body>
</html>