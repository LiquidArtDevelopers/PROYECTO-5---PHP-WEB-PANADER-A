<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacta con nosotros/as</title>
    <link rel="stylesheet" href="./assets/css/contacto.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="https://profe.webda.eus/contacta-con-nosotros.php"> 

    <?php
    // Metadatos globales
    include './php/includes/metadatos_globales.php'
    ?>

</head>
<body>

    <!-- NAV -->
    <?php
    // es código php
    include './php/includes/nav.php'
    ?>
    

    <main>
        <!-- SECCIÓN FORM -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la sect02</h2>
            </div>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Encabezado h3 del art03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

            <!-- artForm -->
            <article class="artForm">
                <h3>Lorem ipsum dolor sit.</h3>

                <form action="./php/app/gestionForm.php" method="post">

                    <label for="nombre">Nombre *</label>
                    <input type="text" name="" id="nombre" placeholder="* Escribe tu nombre" required minlength="3" maxlength="20">

                    <label for="tel">Teléfono</label>
                    <input type="tel" name="" id="tel" placeholder="Aquí tu teléfono">

                    <label for="email">Email *</label>
                    <input type="email" name="" id="email" placeholder="* Correo electrónico" required>

                    <label for="mensaje">Comentarios</label>
                    <textarea name="" id="mensaje" placeholder="Escribe aquí tu mensaje" minlength="5" maxlength="200"></textarea>

                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                </form>

            </article>
        </section>

        <!-- Sección sect02 -->
        <section class="sect02"> 
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la sect02</h2>
            </div>
            <div class="sect02-content">
                <ul>
                    <li>
                        <a href="tel:+34943123123" title="Llámanos al 943 123 123" target="_blank">
                            <img src="./assets/img/system/call.svg" alt="Llámanos al 943 123 123" title="Llámanos al 943 123 123" width="20" height="20"> 
                            <span>943 123 123</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://api.whatsapp.com/send/?phone=34628749350" title="Escríbenos al whatsapp 600 123 123" target="_blank">
                            <img src="./assets/img/system/logo-whatsapp.svg" alt="Escríbenos al whatsapp 600 123 123" title="Escríbenos al whatsapp 600 123 123" width="20" height="20"> 
                            <span>600 123 123</span>
                        </a>
                    </li>       

                    <li>
                        <a href="mailto:aranaz@gmail.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" target="_blank">
                            <img src="./assets/img/system/mail.svg" alt="Mándanos un correo a la siguiente dirección correo@correo.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" width="20" height="20"> 
                            <span>correo@correo.com</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" target="_blank">
                            <img src="./assets/img/system/location.svg" alt="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" width="20" height="20"> 
                            <span>Paseo Portuetxe 23b<br>413 Donostia</span>
                        </a>
                    </li>

                    
                </ul>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10923.690028247327!2d-2.0104242426659686!3d43.296692429058076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1749486263845!5m2!1ses!2ses" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <?php
    include './php/includes/footer.php'
    ?>

</body>
</html>