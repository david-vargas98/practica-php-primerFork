<!-- Título: Práctica de HTML5 y CSS - Alumno: Edgar David Vargas Fuentes - Sección: D13 - Asignatura: Programación para internet -->
<!DOCTYPE html>
<html lang="es"> <!-- Idioma español -->
<head>
    <meta charset="UTF-8"> <!-- Codificación UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.html</title> <!-- Título para mostrar en pestaña/ventana de navegador -->
    <link rel="stylesheet" href="style.css"> <!-- Archivo de css a utilizar -->
</head>
<body>
    <header> <!-- Encabezado principa de nombre-->
        <h1>Edgar David Vargas Fuentes</h1>
    </header>
    <main> <!-- Contenido principal -->
        <section id="acerca-de"> <!-- Sección: acerca de mí -->
            <h2>Acerca de mí</h2>
            <p>¡Hola, soy Edgar David Vargas Fuentes! <br> Actualmente soy estudiante de la carrera de ingeniería en informática impartida en la universidad de guadalajara. <br> Es un gusto para mí el poder estar en esta clase de programación para internet, en la cual, estoy seguro que <br> aprenderé bastante, de manera que reforzaré conocimientos y desarrollaré nuevos para poder mejorar más.</p>
        </section>
        <section id="conocimientos"> <!-- Sección: conocimientos -->
            <h2>Conocimientos</h2>
            <p>Mis conocimientos son básicos en los siguientes softwares:</p>
            <ul> <!-- Lista No Ordenada -->
                <li>C</li> <!-- Elementos -->
                <li>C++</li>
                <li>Java</li>
                <li>Phyton</li>
                <li>PHP</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PostgreSQL</li>
                <li>MySQL</li>
                <li>Linux: Debian 11</li>
            </ul>
        </section>
        <section id="fortalezas"> <!-- Sección: fortalezas -->
            <h2>Mis fortalezas</h2>
            <ol> <!-- Lista Ordenada -->
                <li>Capacidad para dar lugar a prioridades y cumplir fechas de entrega</li> <!-- Elementos -->
                <li>Fortaleza emocional y mental para mantener el ánimo ante la adversidad</li>
                <li>Capacidad para la toma de decisiones informadas, basadas en evidencia y hechos</li>
                <li>Análisis de las capacidades propias como ajenas a modo de establecer metodologías a seguir</li>
            </ol>
        </section>
        <section id="proyectos"> <!-- Sección: proyectos -->
            <h2>Proyectos</h2>
            <table> <!-- Tabla de contenido-->
                <tr> <!-- Fila encabezado de la tabla-->
                    <th>Nombre del proyecto</th> <!-- Celda de encabezado -->
                    <th>Lenguaje(s)</th>
                    <th>Descripción</th>
                </tr>
                <tr> <!-- Fila - primer registro o tupla -->
                    <td>Sistema de mezclado con automatas</td> <!-- Celda de datos de la primer fila -->
                    <td>C++ usando POO</td>
                    <td>Se diseñó y usó automatas como base para las entradas y salidas de un sistema de mezclado para tanques agitados automatizado</td>
                </tr>
                <tr> <!-- Fila - segundo registro o tupla -->
                    <td>Red de computadoras</td> <!-- Celda de datos de la segunda fila -->
                    <td>Cisco Packet Tracer</td>
                    <td>Se diseñó y estableció una red entre 3 ciudades mediante el uso de este software de manera que se pudieran realizar llamadas, envisar correos y mandar pings</td>
                </tr>
                <tr> <!-- Fila - tercer registro o tupla -->
                    <td>Base de datos de accidentes de tránsito</td> <!-- Celda de datos de la tercer fila -->
                    <td>PHP, HTML, Bootstrap</td>
                    <td>Se realizó un sistema CRUD en una página web en servidor local para la manipulación de los datos de una base de datos sobre accidentes de tránsito en zonas urbanas y rurales</td>
                </tr>
            </table>
        </section>
        <section id="persona-admiro"> <!-- Sección: persona que admiro -->
            <div class="persona-info">
                <h2>Persona que admiro</h2>
                <p><strong>Victor Manuel Vargas Cuevas</strong> <br> Amado padre que a pesar de las adversidades se procupa y ocupa de su familia <br> sin falta, poniendo sus necesidades como algo secundario y estableciendo sus <br> prioridades en aquellos que ama, siendo el un gran ejemplo de lo que un ser <br> humano debería de aspirar a ser, como todo ser humano tiene sus debilidades y <br> errores cometidos, sin embargo estos no lo definen y sin duda alguna, aprendió <br> de ellos para mejorar aún más.</p>
            </div>
            <div class="persona-imagen">
                <img src="padres.jpg" alt="papá"> <!-- Imagen de la persona -->
            </div>
        </section>
    </main>
    <div class="footer"> <!-- Div con class footer-->
        <section> <!-- Sección de contacto-->
            <h2>Contáctame a través de:</h2>
            <p><strong>Correo electrónico:</strong> edgar981125@live.com.mx</p>
            <p><strong>Teléfono celular:</strong> 3334930677</p>
            <p><strong>GitHub:</strong> edgar-vargas98</p>
        </section>
    </div>
    <div class="nav">
        <a href="index.php">Index</a>
        <a href="formulario.php">Formulario</a>
        <a href="clase.html">Clase BootStrap</a>
    </div>
</body>
</html>