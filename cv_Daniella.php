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
    background-color: #ffffff;
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


footer{
    background-color: black;
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 12px;
    
}
section{
    background-color: white;
    whidth :85%;
    margin: 30px auto;
    padding: 30px;
    border-radius: 8px;
    box-shadow:  0 4px 10px rgba(0,0,0,1);
}
.perfil{
    background-color: white;
    width: 85%;
    margin: 30px auto;
    padding: 30px;
    border-radius: 8px;
    box-shadow:  0 4px 10px rgba(0,0,0,1);
    
}
.perfil-contenedor{
    display: flex;
    flex-wrap: wrap;
   border-radius: 20px;
   /*object-fit: cover; */
   justify-content: center;
   gap: 30px;
}
.perfil-contenedor img {
    width: 200px;
    height: 250px;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,1);   
    margin-top: 10px; /* Ajusta el valor según lo que necesites */
}

.perfil-info{
    max-width: 600px;
    text-align: left;
}
.estudios h2 {
    text-align: center;
    color: black;
    margin-bottom: 20px;
    font-size: 24px;
}

.estudios-contenedor {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
    padding: 0 20px;
}

.estudio-box {
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    width: 250px;
    text-align: center;
    transition: transform 0.3s ease, background-color 0.3s ease;
   
}

.estudio-box:hover {
    transform: translateY(-5px);
    background-color: black;
    color: yellow;
}

.estudio-box img {
    width: 60%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
    
}

.estudio-box h3 {
    color: black;
    font-size: 18px;
    margin-bottom: 8px;
}

.estudio-box p {
    font-size: 14px;
    color: black;
}

.estudio-box:hover h3,
.estudio-box:hover p {
    color: yellow;
}

.experiencia-profesional {
  padding: 20px;
  font-family: Arial, sans-serif;
}

.titulo-seccion {
  color: black;
  font-size: 24px;
  margin-bottom: 10px;
  text-align: center;
}

.linea-divisoria {
  border-bottom: 1px solid #e0e0e0;
  margin-bottom: 20px;
}

.contenedor-experiencias {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 20px;
}

.tarjeta-experiencia {
  display: flex;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  width: 45%;
  min-width: 300px;
  overflow: hidden;
}

.barra-lateral {
  width: 10px;
  background-color: #000000;
}

.contenido-experiencia {
  padding: 20px;
  flex-grow: 1;
}

.puesto {
    color: #ffcc00;
  font-size: 18px;
  margin: 0 0 5px 0;
}

.empresa {
  font-size: 16px;
  font-weight: normal;
  margin: 0 0 5px 0;
}

.periodo {
  color: #666;
  font-size: 14px;
  margin: 0 0 10px 0;
}

.descripcion {
  font-size: 14px;
  line-height: 1.4;
  margin: 0;
}

/* Para hacer el diseño responsive */
@media (max-width: 768px) {
  .contenedor-experiencias {
    flex-direction: column;
  }
  
  .tarjeta-experiencia {
    width: 100%;
  }
}
.habilidades-tecnicas {
  padding: 20px;
  font-family: Arial, sans-serif;
}

.titulo-seccion {
  color: black;
  font-size: 24px;
  margin-bottom: 10px;
  text-align: center;
}

.linea-divisoria {
  border-bottom: 1px solid #e0e0e0;
  margin-bottom: 30px;
}

.contenedor-habilidades {
  max-width: 800px;
  margin: 0 auto;
}

.habilidad {
  margin-bottom: 25px;
}

.info-habilidad {
  display: flex;
  justify-content: space-between;
  margin-bottom: 8px;
}

.nombre-habilidad {
  font-weight: bold;
  color: black;
  font-size: 16px;
}

.porcentaje {
  color: black;
  font-weight: bold;
}

.barra-progreso {
  background-color: #e0e0e0;
  height: 10px;
  border-radius: 5px;
  overflow: hidden;
}

.progreso {
  height: 100%;
  background: linear-gradient(to right, black, #ffcc00 );
  border-radius: 5px;
}

/* Responsive */
@media (max-width: 768px) {
  .contenedor-habilidades {
    padding: 0 15px;
  }
}

.intereses {
  padding: 20px;
  font-family: Arial, sans-serif;
}

.titulo-seccion {
  color: black;
  font-size: 24px;
  margin-bottom: 10px;
  text-align: center;
}

.linea-divisoria {
  border-bottom: 1px solid black;
  margin-bottom: 25px;
}

.contenedor-intereses {
  max-width: 900px;
  margin: 0 auto;
}

.tarjeta-interes {
  display: flex;
  margin-bottom: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  overflow: hidden;
  padding: 15px;
}

.icono-titulo {
  display: flex;
  align-items: center;
  width: 220px;
  min-width: 220px;
}

.icono {
  font-size: 22px;
  margin-right: 12px;
}

.nombre-interes {
  color: #000000;
  font-size: 16px;
  font-weight: 600;
  margin: 0;
}

.descripcion-interes {
  flex-grow: 1;
  padding-left: 15px;
  border-left: 1px solid #e0e0e0;
}

.descripcion-interes p {
  margin: 0;
  font-size: 14px;
  line-height: 1.5;
  color: #444;
}

/* Responsive */
@media (max-width: 768px) {
  .tarjeta-interes {
    flex-direction: column;
  }
  
  .icono-titulo {
    width: 100%;
    margin-bottom: 10px;
  }
  
  .descripcion-interes {
    padding-left: 0;
    padding-top: 10px;
    border-left: none;
    border-top: 1px solid #e0e0e0;
  }
}

.contacto {
  padding: 20px;
  font-family: Arial, sans-serif;
}

.titulo-seccion {
  color: #000000;
  font-size: 24px;
  margin-bottom: 10px;
  text-align: center;
}

.linea-divisoria {
  border-bottom: 1px solid #e0e0e0;
  margin-bottom: 25px;
}

.contenedor-formulario {
  max-width: 800px;
  margin: 0 auto;
}

.formulario-contacto {
  background-color: #f9f9f9;
  padding: 25px;
  border-radius: 8px;
}

.subtitulo {
  color: #000000;
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: 600;
}

.campo-formulario {
  margin-bottom: 20px;
}

.campo-formulario label {
  display: block;
  margin-bottom: 5px;
  font-weight: 500;
}

.campo-formulario input,
.campo-formulario select,
.campo-formulario textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 14px;
  box-sizing: border-box;
}

.campo-formulario textarea {
  height: 120px;
  resize: vertical;
}

.boton-container {
  text-align: center;
}

.boton-enviar {
  background-color: #000000;
  color: #ffcc00;
  border: none;
  padding: 10px 30px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.boton-enviar:hover {
  background-color: #000000;
}

/* Responsive */
@media (max-width: 768px) {
  .formulario-contacto {
    padding: 15px;
  }
  
  .campo-formulario input,
  .campo-formulario select,
  .campo-formulario textarea {
    font-size: 16px; /* Mejor para móviles */
  }
}

            </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title>ING. DANIELLA MARIN SILVA</title>
    </head>
    <body>
        <header>
            <p> 961368050 // daniellamarin1509@gmail.com </p>
           
        </header>
        <section  class="perfil">
            <div class="perfil-contenedor">

                <div class="perfil-imagen">
                    <img src="assets/images/cv/marin.jpeg" alt=""/>
                </div >  
                <div class="perfil-info">
                    <h2 class="perfil-nombre">Daniella Marin Silva </h2> 
                    <p class="perfil-descripcion">
                        Profesional altamente capacitado en el diseño, desarrollo,
                        implementación y gestión de soluciones tecnologicas orientadas 
                        al procesamiento, almacenamiento y transmisión de la información.
                        Poseo una solida formación en ciencias de la computación, programación,
                        arquitectura de computadoras, base de datos, redes, inteligencia artificial y ciberseguridad <br>
                        Profesional capaz de integrar conocimentos técnicos con habilidades analíticas y de gestión para resolver
                        problemas complejos en entornos organizacionales, apoyando la toma de decisiones a travez de sistemas
                        informáticos eficientes, seguros y adaptables a los constantes avances tecnológicos.
                    </p>
                </div>
            </div>
        </section>
        <section>
            <h2>Estudios Realizados</h2>
            <div class="estudios-contenedor">
                <div class="estudio-box">
                    <img src="assets/images/cv/trp.jpg" alt=""/>
                    <h3>I.E.I.P Tarapaca-Iquitos</h3>
                    <p>Primaria</p>
                    <p>2009- 2014</p>
                </div>
                <div class="estudio-box">
                    <img src="assets/images/cv/smp.jpg" alt=""/>
                    <h3>I.E San Martin de Porras-Huacho </h3>
                    <p>Secundaria</p>
                    <p>2015 - 2019</p>
                </div>
                <div class="estudio-box">
                    <img src="assets/images/cv/unjfsc.jpg" alt=""/>
                    <h3>Universidad Nacional José Faustino Sáchez Carrión</h3>
                    <p>Superior</p>
                    <p>2021 - Actualidad</p>
                </div>
            </div>
        </section>
        <section class="experiencia-profesional">
            <h2 class="titulo-seccion">Experiencia Profesional</h2>
            <div class="linea-divisoria"></div>

            <div class="contenedor-experiencias">
                <div class="tarjeta-experiencia">
                    <div class="barra-lateral"></div>
                    <div class="contenido-experiencia">
                        <h3 class="puesto">Técnicos en ofimática</h3>
                        <h4 class="empresa">JACOPY</h4>
                        <p class="periodo">2024</p>
                        <p class="descripcion">Gestión y automatización de tareas de oficina mediante el uso de herramientas como Microsoft Word, Excel, PowerPoint y Outlook.</p>
                    </div>
                </div>

                <div class="tarjeta-experiencia">
                    <div class="barra-lateral"></div>
                    <div class="contenido-experiencia">
                        <h3 class="puesto">Analista de Datos</h3>
                        <h4 class="empresa">ASIA CORP</h4>
                        <p class="periodo">2025</p>
                        <p class="descripcion">Elaboración de dashboards interactivos en Power BI para la visualización de indicadores clave,
                            facilitando el análisis de datos y la generación de reportes estratégicos.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="habilidades-tecnicas">
            <h2 class="titulo-seccion">Habilidades Técnicas</h2>
            <div class="linea-divisoria"></div>

            <div class="contenedor-habilidades">
                <div class="habilidad">
                    <div class="info-habilidad">
                        <span class="nombre-habilidad">HTML</span>
                        <span class="porcentaje">50%</span>
                    </div>
                    <div class="barra-progreso">
                        <div class="progreso" style="width: 50%"></div>
                    </div>
                </div>

                <div class="habilidad">
                    <div class="info-habilidad">
                        <span class="nombre-habilidad">CSS</span>
                        <span class="porcentaje">65%</span>
                    </div>
                    <div class="barra-progreso">
                        <div class="progreso" style="width: 65%"></div>
                    </div>
                </div>

                <div class="habilidad">
                    <div class="info-habilidad">
                        <span class="nombre-habilidad">Power BI</span>
                        <span class="porcentaje">70%</span>
                    </div>
                    <div class="barra-progreso">
                        <div class="progreso" style="width: 70%"></div>
                    </div>
                </div>
                <div class="habilidad">
                    <div class="info-habilidad">
                        <span class="nombre-habilidad">Python</span>
                        <span class="porcentaje">60%</span>
                    </div>
                    <div class="barra-progreso">
                        <div class="progreso" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="intereses">
            <h2 class="titulo-seccion">Intereses</h2>
            <div class="linea-divisoria"></div>

            <div class="contenedor-intereses">
                <div class="tarjeta-interes">
                    <div class="icono-titulo">
                        <span class="icono">🌐</span>
                        <h3 class="nombre-interes">Idiomas</h3>
                    </div>
                    <div class="descripcion-interes">
                        <p>Me gusta la idea de aprender nuevos idiomas para poder así expandir mi talento a otros paises más desarrollado,
                        aportaria mucho a mi carrera profesional. Actualmente solo hablo español pero estoy aprendiendo el Inglés</p>
                    </div>
                </div>

                <div class="tarjeta-interes">
                    <div class="icono-titulo">
                        <span class="icono"><i class="fas fa-book-open"></i></i></span>
                        <h3 class="nombre-interes">Inteligencia Artificial</h3>
                    </div>
                    <div class="descripcion-interes">
                        <p>Es impresionante los avances en IA y machine learning. Sigo de cerca las nuevas tecnologías y aplico estos conocimientos en proyectos personales.</p>
                    </div>
                </div>

                <div class="tarjeta-interes">
                    <div class="icono-titulo">
                        <span class="icono"><i class="fas fa-shield-alt"></i></span>
                        <h3 class="nombre-interes">Ciberseguridad</h3>
                    </div>
                    <div class="descripcion-interes">
                        <p>Disfruto investigar sobre las nuevas metodologías de seguridad de los datos, aprender los nuevos protocolos de seguridad que implementan empresas reconocidas,
                        la ISO 7001 me parece la más correcta ya que no solo te dice que hacer si no te explica como hacerlo de mnanera detallada</p>
                    </div>
                </div>

                <div class="tarjeta-interes">
                    <div class="icono-titulo">
                        <span class="icono"><i class="fas fa-plane"></i></span>
                        <h3 class="nombre-interes">Viaje</h3>
                    </div>
                    <div class="descripcion-interes">
                        <p>Me interesa mucho conocer muchos paises, para conocer nuevas culturas y aprender del ellas. <br>
                           Viajar no solo significa disfrutar de vacaciones , para mi es aprender nuevas metodologías tecnológicas que implementan las empresas extranjeras, hacer contactos con profesionales de otro nivel.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
       
    </body>
</html>
