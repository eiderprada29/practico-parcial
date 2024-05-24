<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificaciones</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Ei<span>der</span>.</a>
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu">
            <i class="fa-solid fa-bars" id="menu-open"></i>
            <i class="fa-solid fa-x" id="close-icon"></i>
        </label>
        <ul class="navbar">
            <li><a href="#home" class="active">Inicio</a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#portafolio">Portafolio</a></li>
            <li><a href="#contact">Contactame</a></li>
        </ul>
    </header>
    <script>
        const navbarLinks = document.querySelectorAll('.navbar a');
        navbarLinks.forEach(link => {
            link.addEventListener('click', () => {
                const checkbox = document.getElementById('check');
                checkbox.checked = false;
            });
        });
    </script>
<!----------Seccion inicio------------>
    <section class="home" id="home">
        <div class="home-text">
            <div class="slide">
                <span class="one">Hola</span>
                <span class="two">soy</span>
            </div>
            <h1>Eider Prada</h1>
            <h3>Website<span> Designer</span></h3>
            <p>Explora mi portafolio en línea. Busco desafíos estimulantes y estoy <br> comprometido en ofrecer soluciones innovadoras que cumplen <br> con las necesidades de mis clientes. </p>
            <div class="button-curriculum">
                <a href="#" class="btn">Descargar currículum</a>
            </div>
        </div>
    </section>

<!-----------REDES SOCIALES RAPIDAS------------>
    <section class="feature">
        <div class="content">
            <div class="row-redes">
                <div class="images">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <h4>WhatsApp</h4>
            </div>
            <div class="row-redes">
                <div class="images">
                    <i class="fa-brands fa-pinterest-p"></i>
                </div>
                <h4>Pinterest</h4>
            </div>
            <div class="row-redes">
                <div class="images">
                    <i class="fa-brands fa-github"></i>
                </div>
                <h4>GitHub</h4>
            </div>
            <div class="row-redes">
                <div class="images">
                    <i class="fa-brands fa-youtube"></i>
                </div>
                <h4>Youtube</h4>
            </div>
            <div class="row-redes">
                <div class="images">
                    <i class="fa-brands fa-snapchat"></i>
                </div>
                <h4>Snapchat</h4>
            </div>
        </div>
    </section>
<!----------Seccion de Acerca de--------------->
    <section class="about" id="about">
        <div class="about-img">
            <img src="../parcial-juandiego/imagenes/me_inverso.jpg" alt="">
        </div>

        <div class="about-text">
            <h2>Acerca de<span class="me"> Mí</span></h2>
            <h4>Ingeniero en Sistemas en proceso !</h4>
            <p>¡Hola! Soy Eider Alexander Prada Sanchez, un estudiante de ingenieria de sistemas apasionado/a por los sistemas, los algoritmos y la programación. Aunque no cuento con una amplia experiencia profesional, estoy ansioso por sumergirme en el campo y demostrar mi talento y dedicación. <br>A lo largo de mi trayectoria, he desarrollado habilidades sólidas en la programacion y el diseño basico de un sitio web, lo que me permite abordar proyectos de manera integral y lograr resultados excepcionales.
            </p>
            <a href="#" class="btn-about"><i class="fa-solid fa-eye"></i> Ver más</a>
        </div>
    </section>
    
<!-------Seccion Portafolio--------->
    <section class="portafolio" id="portafolio">
        <div class="main-text">
            <h2>Mí<span> Portafolio</span></h2>
        </div>
        <div class="portafolio-content">
            <div class="row">
                <img src="../parcial-juandiego/imagenes/certificado_google_cloud.jpeg">
            </div>

            <div class="row">
                <img src="../parcial-juandiego/imagenes/certificado_excel.jpeg">
            </div>

            <div class="row">
                <img src="../parcial-juandiego/imagenes/certificado_mentalidad.jpeg">
            </div>

            <div class="row">
                <img src="../parcial-juandiego/imagenes/certificado_transformacion.jpeg">
            </div>
        </div>
    </section>

<!----------Seccion Contactame------------->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contactame<span> Ahora!</span></h2>
            <h4>¿ Tienes Preguntas ?</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="list">
                <li><a href="#"></a> <i class="fa-solid fa-location-dot"></i> Cra 8A # 22 - 54 Girardot - Cundinamarca</li>
                <li><a href="#"></a><i class="fa-solid fa-envelope"></i> eiderprada2914@gmail.com</li>
                <li><a href="#"></a><i class="fa-solid fa-phone"></i> +57 3144241935</li>
                <li><a href="#"></a><i class="fa-solid fa-globe"></i> www.miportfolio.com</li>
            </div>

            <div class="contact-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>

        <div class="contact-form">
            <form action="">
                <input type="name" placeholder="Escribe tu nombre" required>
                <input type="email" placeholder="Escribe tu email" required>
                <input type="name" placeholder="Escribe tu numero telefonico" required>
                <textarea name="" id="" cols="35" rows="10" placeholder="Te puedo ayudar en algo"></textarea>
            </form>
            <a href="#" class="btn-message">Enviar Mensaje <i class="fa-sharp fa-solid fa-paper-plane"></i></a>
        </div>
    </section>

<!-------Seccion Footer------------>
    <footer>
        <div class="footer-box">
            <h3>Servicios</h3>
            <a href="#">Campañas publicitarias</a>
            <a href="#">Asesoramiento</a>
            <a href="#">Tramites legales</a>
            <a href="#">Abogados</a>
        </div>
        <div class="footer-box">
            <h3>Nosotros</h3>
            <a href="#">Nuestra historia</a>
            <a href="#">Política</a>
            <a href="#">Colaboradores</a>
            <a href="#">Terminos</a>
        </div>
        <div class="footer-box">
            <h3>Ayudas</h3>
            <a href="#">FAQ's</a>
            <a href="#">Contactenos</a>
        </div>
        <div class="footer-box">
            <h3>Redes Sociales</h3>
            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
    </footer>
    jdtojewish

    <div class="footer-copy">
        <p>Copyright 2024 por Estudiantes IV Semestre - <span>UNIMINUTO </span>- Ingenieria de Sistemas</p>
    </div>
    <script src="../parcial-juandiego/javascript/script.js"></script>
</body>
</html>