<?php
include_once __DIR__ . '/../config.php';
$currentPageId = 21;
ob_start();
?>
<section>
  <ul id="biblio" class="ul-disc">
    <li>Alfaro, C. (2006). <i>Las ideas de Póllya en la resolución de problemas</i>. Escuela Matemáticas. Universidad Nacional. España. Recuperado el 15 de marzo de 2023, de https://core.ac.uk/download/pdf/333874968.pdf</li>
    <li>Ascencio P., C. (2016). <i>Adecuación de la Planeación Didáctica como Herramienta Docente en un Modelo Universitario Orientado al Aprendizaje</i>. REICE. Revista Iberoamericana sobre Calidad, Eficacia y Cambio en Educación, 14(3), 109-130. ISSN. Recuperado el 1 de marzo de 2023, de https://www.redalyc.org/articulo.oa?id=55146042006</li>
    <li>Ávila, A., R. & Diez, M. (2008). <i>Didáctica de las Ciencias Sociales, currículo escolar y formación del profesorado: la didáctica de las Ciencias Sociales en los nuevos planes de estudio</i>. Recuperado el 16 de marzo de 2023, de http://didactica-ciencias-sociales.org/publicaciones_archivos/2008-jaen-libro.pdf</li>
    <li>Brown, H. D. & Lee, H. (2015). <i>Teaching by Principles. An Interactive Approach to Language Pedagogy</i>. Fourth Edition. USA: Pearson.</li>
    <li>Nava Mota D., C. (2023). <i>Del enfoque comunicativo a la perspectiva accional</i>. Recuperado el 21 de marzo de 2023, de https://vimeo.com/809596922</li>
    <li>Díaz Barriga, A. (2013). <i>Guía para la elaboración de una secuencia didáctica</i>. México. Ed. Comunidad de conocimiento. Recuperado el 15 marzo de 2023, de http://www.setse.org.mx/ReformaEducativa/Rumbo%20a%20la%20Primera%20Evaluaci%C3%B3n/Factores%20de%20Evaluaci%C3%B3n/Pr%C3%A1ctica%20Profesional/Gu%C3%ADa-secuencias-didacticas_Angel%20D%C3%ADaz.pdf</li>
    <li>Díaz Barriga A., F. & Hernández R., G. (2010). <i>Estrategias docentes para un aprendizaje significativo. Una interpretación constructivista</i>. CDMX: Mc Graw Hill.</li>
    <li>Gomes D., A., Hortas, M. & de Alba, N. (Editores). (2019). <i>Enseñar y aprender didáctica de las ciencias sociales: la formación del profesorado desde una perspectiva sociocrítica</i>. Recuperado el 16 de marzo de 2023, de http://didactica-ciencias-sociales.org/wp-content/uploads/2020/03/e-book_simposio_vf_01_20202_compressed.pdf</li>
    <li>Haro del Real, F. J. (1994). <i>Cartas descriptivas ¿Para qué?</i>. Sinéctica, 4, 1-7</li>
    <li>Larsen-Freeman, D. y Anderson, M. (2011). <i>Techniques & Principles in Language Teaching</i>. Third Edition. China: Oxford University Press.</li>
    <li>Lomas, C. (2017). <i>El aprendizaje escolar de competencias comunicativas</i>: pp.25-46. En: <i>El poder de las palabras. Enseñanza del lenguaje, educación democrática y ética de la comunicación</i>. CDMX: Santillana.</li>
    <li>Martínez, S. (2007). <i>¿Qué significa aprender a través de la acción?</i> En <i>La enseñanza del español como lengua extranjera en Quebec</i>. (Actas del CEDELEQ II, 10-13 de mayo de 2007). Montréal: Université de Montréal.</li>
    <li>Monereo, C. (2000). <i>El asesoramiento en el ámbito de las estrategias de aprendizaje</i>. En: <i>Estrategias de aprendizaje</i>. España: Visor pp. 15-62.</li>
    <li>Murillo, F. J., Martínez G., C. y Hernández C., R. (2011). <i>Decálogo para una enseñanza eficaz</i>. REICE. Revista Iberoamericana sobre Calidad, Eficacia y Cambio en Educación, 9(1), 6-27.</li>
    <li>Revenga, A. (2010). <i>Las relaciones entre la filosofía y didáctica</i>: pp. 11-35. En: <i>Didáctica de la filosofía</i>. Barcelona: GRAÓ.</li>
    <li>Sicilia, C, A. & Delgado N., M. (2002). <i>Qué son los estilos de enseñanza. Aproximación desde una perspectiva ecológica</i>: pp. 27-49. En: A. Sicilia y M. Delgado (autores). <i>Educación Física y Estilos de enseñanza</i>. Barcelona: INDE.</li>
    <li>SEP. (2013). <i>Guía para la instrumentación didáctica de los programas de estudio para la formación y desarrollo de competencias profesionales</i>. Recuperado el 15 de marzo de 2023, de http://www.itesca.edu.mx/</li>
    <li>Soletic, A. (2018). <i>Didáctica de las disciplinas: Ciencias Sociales</i>. Recuperado el 16 de marzo de 2023, de https://red.infd.edu.ar/wp-content/uploads/2020/05/Didactica_de_las_disciplinas_Ciencias_Sociales.pdf</li>
    <li>Suárez y López-Guazo, L., (1996). <i>Enseñanza de la Metodología de la ciencia en el Bachillerato</i>. Perfiles Educativos, XVIII (73). Recuperado el 15 de marzo de 2023, de: https://www.redalyc.org/articulo.oa?id=13207304</li>
    <li>Torres, J. (1998). <i>Elaboración de unidades didácticas integrales</i>: pp. 220-264. En: <i>Globalización e interdisciplinariedad: el currículum integrado</i>, Madrid: Morata.</li>
    <li>Torres, J. (2012). <i>Planeación y organización de la clase</i>: pp. 79-174. En: <i>Didáctica de la Educación Física</i>, 3a ed. CDMX: Trillas.</li>
    <li>Zavala V. (2005). <i>La práctica educativa. Cómo enseñar</i>. Barcelona: GRAÓ.</li>
  </ul>
</section>
<?php
$content = ob_get_clean();
include BASE_PATH . '/include/templateContent.php';
?>