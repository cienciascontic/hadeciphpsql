<b>=== SOBRE ESTE REPOSITORIO ====</b><br>
Este repositorio guarda los archivos para el sitio del Hackatón Desafíos Científicos (HADECI) y funciona bajo PHP/MySQL.

<b>=== DESCRIPCIÓN GENERAL DEL SITIO WEB ===</b><br>
El sitio tiene el objetivo de cubrir la gestión del evento que se realiza una vez al año: información sobre el evento; inscripción al mismo y gestión de la información (qué estudiantes se inscribieron, de qué escuela son, quién fue el docente que los inscribió, los datos de la escuela, cuáles fueron los adultos que se inscribieron, qué rol desempeñaron, a qué institución representan, cómo están conformados los equipos de los estudiantes, etc., etc.)
Sería muy largo explicar acá todo lo que el sistema podría hacer y para tener una mejor idea de cómo funciona el hackatón, en la home hay un enlace a un "Manual del hackatón" muy completo.

<b>=== ORGANIZACIÓN DEL SITIO ===</b><br>
El sitio contiene una parte informativa (index.php) sobre el evento y dos botones que linkean a partes específicas del sistema, a saber:<br>

1. Botón "Inscribirse"<br>
Va a un formulario donde los usuarios ingresarán los datos para inscribirse al evento. Este formulario por ahora tiene apenas dos campos porque la inscripción siempre se realizó a través de un Google Forms. La idea es que sea un formulario customizado donde ya haya datos pre-poblados (por ejemplo que los que quieran inscribirse puedan seleccionar la escuela desde un combo box y que el ingreso de datos de una escuela sea solamente en caso de que la escuela no esté en la base de datos). El formulario de inscripción lo desarrollaré una vez que finalice con el módulo de consultas.<br>

2. Botón "Login"<br>
Permite a los usuarios autorizados loguearse a un módulo de consultas. Una vez que el usuario está logueado al módulo de consultas (consultas.php) puede elegir entre realizar diferentes tipos de consultas. Los usuarios se crean a través de la página registro.php (que no tiene link desde la home) y la idea es que se utilice el día anterior al evento para crear los usuarios necesarios y luego se deshabilite durante el evento.<br>

<b>=== MÓDULO DE CONSULTAS ===</b><br>
El módulo de consultas está implementado en PHP y MySQL y utiliza los datos reales del evento pasado (este repositorio NO incluye la base de datos, por razones obvias de seguridad y porque además GitHubPages no soporta PHP).
Desde el módulo de consultas, por ahora, se pueden realizar tres tipos de consultas:
* Estudiantes por docente (al ingresar el DNI del <b>docente</b>, se muestran todos los estudiantes que dicho docente registró para el evento (y de los cuales es responsable)
* Estudiantes por grupo (al ingresar el nombre de un <b>grupo</b>, se muestran los datos de los estudiantes que componen ese grupo (nombre, apellido, DNI) y quién es el tutor asignado (nombre y DNI).
* Desafíos por nombre (al ingresar el nombre del desafío, se muestra en qué consiste el desafío que deberá resolver ese grupo de estudiantes, qué estudiantes componen el grupo y quién es el tutor asignado a ese grupo).<br>
En el futuro se implementarán otro tipo de consultas ya que la base de datos está compuesta de doce tablas.

3. Proceso de registro de usuarios para consultas<br>
Genera un usuario que pueda acceder al módulo de consultas. Por ahora, la idea es que ese usuario sea parte del staff pero probablemente eso cambie porque una de las funcionalidades pretendidas es que el docente, cuando llega al evento, pueda registrar a sus estudiantes ingresando su DNI en una tablet o en su propio teléfono. Todavía no está claro desde el lado de la logística cómo será ese proceso en el evento en 2019, con lo cual, por ahora seguiremos bajo este esquema. Ésta es una de las razones por las cuales la creación de usuarios a través de registro.php no tiene condiciones adecuadas de seguridad (más allá de que controla a través del sessionid que no se pueda acceder directamente a la página consultas.php).<br>

===<b> A MODO DE CIERRE ===</b><br>
Todas las páginas están vinculadas entre sí (salvo la de registro.php) y más allá de incorporar algunas consultas más, el próximo paso será cómo ingresar nuevos datos a la base desde el sitio (alta de estudiantes, docentes, escuelas, etc.). Eso será principalmente desde el formulario de inscripción (inscripcion.php).
