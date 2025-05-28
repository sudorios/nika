

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            *{
                margin: 0;
                padding:0;
            }
            body{
                background-color: #006666;
                font-family: arial;
                color: black;
                line-height: 1.6;
            }
            header{
                background-color: black;
                color: white;
                padding: 20px;
                box-shadow:  0 2px 4px rgba(0,0,0,0);
            }
            header p{
                font-size: 18px;
                font-weight: bold;
                display: inline-block;
            }


            
            section{
                background-color: black;
                whidth :85%;
                margin: 30px auto;
                padding: 30px;
                border-radius: 8px;
                box-shadow:  0 4px 10px rgba(0,0,0,1);
            }
            .perfil{
                background-color: black;
                width: 85%;
                margin: 30px auto;
                padding: 30px;
                border-radius: 8px;
                box-shadow:  0 4px 10px rgba(0,0,0,1);

            }
            
           
             .perfil-contenedor{
                color: white;
                display: flex;
                flex-wrap: wrap;
                border-radius: 20px;
                /*object-fit: cover; */
                justify-content: center;
                gap: 30px;
            }
            .perfil-contenedor img {
                width: 250px;
                height: 250px;
                border-radius: 20px;
                box-shadow: 0 4px 10px rgba(0,0,0,1);
                margin-top: 10px; /* Ajusta el valor según lo que necesites */
            }

            .perfil-info{
                max-width: 600px;
                text-align: left;
            }



           






            .titulo-seccion {
                color: white;
                font-size: 24px;
                margin-bottom: 10px;
                text-align: center;
            }





        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title>ING. MUNAYCO</title>
    </head>
    <body>
        <header>
            <p> 960721957 // 0333202021@unjfsc.edu.pe </p>

        </header>
        <section  class="perfil">
            <div class="perfil-contenedor">

                <div class="perfil-imagen">
                    <img src="assets/images/cv/mu.png" alt=""/>
                </div >  
                <div class="perfil-info">
                    <h2 class="perfil-nombre">Munayco Peralta Jorge David </h2> 
                    <p class="perfil-descripcion">
                        Profesional altamente capacitado en el diseño, desarrollo,
                        implementación y gestión de soluciones tecnologicas orientadas 
                        al procesamiento, almacenamiento y transmisión de la información.
                        Poseo una solida formación en ciencias de la computación, programación,
                        arquitectura de computadoras, base de datos, redes, IA y ciberseguridad <br>
                        Profesional capaz de integrar conocimentos técnicos con habilidades analíticas y de gestión para resolver
                        problemas complejos en entornos organizacionales, apoyando la toma de decisiones a travez de sistemas
                        informáticos eficientes, seguros y adaptables a los constantes avances tecnológicos.
                    </p>
                </div>
            </div>
        </section>
        <section>
            <h2 class="titulo-seccion">Estudios Realizados</h2>
            <div class="estudios-contenedor">

            </div>
        </section>
        <section class="experiencia-profesional">
            <h2 class="titulo-seccion">Experiencia Profesional</h2>
            <div class="linea-divisoria"></div>

            <div class="contenedor-experiencias">

        </section>
        <section class="habilidades-tecnicas">
            <h2 class="titulo-seccion">Habilidades Técnicas</h2>
            <div class="linea-divisoria"></div>

            <div class="contenedor-habilidades">

            </div>
        </section>
        <section class="intereses">
            <h2 class="titulo-seccion">Intereses</h2>
            <div class="linea-divisoria"></div>

            <div class="contenedor-intereses">

            </div>
        </section>


    </body>
</html>
