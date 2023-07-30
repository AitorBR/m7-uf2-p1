MIEMBROS: Aitor Burruezo, Oriol Poncelas.
La principal idea de PowerDot es crear una aplicación web online para poder crear presentaciones de diapositivas a partir de una sintaxis de código.
El patrón de PowerDot se basa en el MVC, modelo, vista y controlador. Dicha arquitectura separa los datos de la aplicación, la interfaz del cliente y la lógica de control. 
Dentro del modelo existen dos clases; el objeto portada que almacenará el titulo, subtitulo y el cover (información de la presentación). Seguidamente, el objeto presentación que almacenará los datos referentes al diseño de la presentación. 
El controlador se encargará de cargar la vista al usuario y de “parsear” los datos introducidos donde serán enviados a la vista.
Finalmente, el apartado de la vista existen 3 clases diferentes;
- La vista principal donde el usuario podrá indicar la creación de las presentaciones.
- Vista donde se generarán las presentaciones.
- Vista de generar todas las presentaciones en una sola ventana.
 
Una vez nos encontremos en la página principal nos mostrará las instrucciones de PowerDot. Remarcar que no estamos limitados a una forma de generar la presentación. Podremos generarla indicando los atributos iniciales, existiendo la posibilidad de generar presentaciones únicamente con un título, subtítulo o un cover. Importante, que todos los formatos tienen que contener el carácter de final de línea “>>>”.

EXPLICACIÓN DE ATRIBUTOS:

= Título 
== Subtítulo
[cover] Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
>>>

El usuario podrá escoger su diseño de presentación, entre los diferentes posibilidades que nos ofrecen: 
 
Cambiar el color del título y subtítulo:
- Rojo
- Verde
- Azul

Fuentes:
- Arial
- Verdana

Posición del texto:
- Izquierda
- Centro
- Derecha

 
Para la creación de PowerDot nos han surgido bastantes dificultades. En primer lugar, nos ha costado entender un poco la mecánica de traspasar los datos entre las diferentes clases de PHP. Seguidamente, de la funcionalidad de Composer y de su configuración. 
Un problema grave que hemos tenido, ha sido el hecho de mostrar las siguientes diapositivas una vez mostrada la primera. El origen del error era que cada vez que el usuario daba clic en el botón de “Adelante” y “Atrás” se llamaba así mismo, es decir a la vista de la presentación. De esta manera, el “array” donde se guardaban todos los datos se encontraba vacío. Para solventar dicho problema que tiene su lógica, era llamar al controlador cada vez que itera cada presentación hacia delante y atrás.

Consideremos que de los requisitos que se han pedido en la práctica mayoritariamente los hemos podido resolver excepto el cambio automático de las presentaciones:
- El formato del código está orientado al usuario y es de fácil interpretación para la creación de las diapositivas. 
- El servidor permite validar la correcta sintaxis y en caso de que la validación no sea satisfactoria se le informará al usuario sobre la línea incorrecta. 
- Generación de los objetos presentación y portada.
- El usuario podrá navegar hacia delante y atrás. Además de controlar el movimiento en la primera y última presentación (no puede irse hacia atrás en la 1a presentación y en la última hacia delante).
- Accesible a mostrar todas las diapositivas en una y viceversa y al inicio donde resetea toda la información.
- Numeración de las diapositivas. La primera diapositiva será la primera que añada el usuario en el apartado habilitado para escribir e irá iterando de arriba abajo. Dónde la última que esté escrita será la última en mostrarse.
- Diseño personalizado en las presentaciones; colores, fuentes y posiciones aplicado a todas las presentaciones.
 
Ampliaciones y mejoras, podríamos a ver implementado varias funciones cómo;
- A la hora de mostrar todas las presentaciones que al clicar en una cualquiera derive solamente a esa presentación.
- A la hora de ir pasando las presentaciones, que se cambie haciendo un deslizamiento horizontal con el ratón de izquierda a derecha o viceversa. 
- Optimización del código.
- Alguna mejora visual con el CSS.

IMPORTANTE:
Hemos probado de añadir nuestro proyecto en Vagrant y únicamente nos ha ejecutado index.php pero luego a la hora de dirigirse a otra ventana nos da el error conforme no encuentra la ubicación de la ruta. Hemos probado en ambdos PC's Windows/Mac y nos ha funcionado correctamente. Si te da algún tipo de error no habría problemas en enseñartelo en persona.
 
CONCLUSIÓN ORIOL
Durante los primeros días teníamos los conceptos y conocimientos muy dispersos, poco a poco hemos ido entendiendo un poco más las opciones que va ofreciendo PHP. Como mejora el código se tendría que haber comenzado desde una estructuración más simple y no tan rebuscada como hemos realizado. Durante los días hemos ido puliendo un poco más el código y separando en clases para su facilidad a la hora de ser legible y entendible. Finalmente, la mayoría de cosas se han implementado y están funcionando.
 
CONCLUSIÓN AITOR
Al inicio, hemos tenido muchos problemas porque no entendíamos bien como funcionaba PHP, por culpa de esto, hemos ido arrastrando errores en el código y una organización bastante nefasta del mismo, lo cual nos ha hecho retrasarnos mucho. Día a día hemos ido mirando cosas, descubriendo problemas y cómo hacer las cosas mejor. Finalmente hemos podido sacar el proyecto adelante, la organización del código no ha sido la mejor pero hemos conseguido que todo funcione.
 
REFERENCIAS:
https://quejox.gitlab.io/materialsweb/curs21_22/daw_m07desenvolupamentwebservidor/apunts.html
https://campus.copernic.cat/pluginfile.php/154594/mod_resource/content/4/QuestionariDemo_s4_SOLUCIO.html
https://www.php.net/manual/es/reserved.variables.session.php
https://academy.leewayweb.com/que-es-composer/
https://styde.net/instalacion-de-composer/
