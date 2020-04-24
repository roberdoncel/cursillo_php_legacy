-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2017 a las 23:27:39
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `php`
--

CREATE TABLE `php` (
  `Id` int(11) NOT NULL,
  `Nombre` tinytext NOT NULL,
  `Descripcion` text NOT NULL,
  `Keywords` text NOT NULL,
  `InicioEjercicio` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `php`
--

INSERT INTO `php` (`Id`, `Nombre`, `Descripcion`, `Keywords`, `InicioEjercicio`) VALUES
(1, 'ejercicio1.php', 'Ejercicio que muestra \'Adios\' mediante PHP.', 'echo', 1),
(2, 'ejercicio2.php', 'Ejercicio que muestra en pantalla el valor de una pantalla.', 'echo, variables', 1),
(3, 'Ejercicio3.php', 'Ejercicio que concatena 3 variables y las muestra en pantalla', 'echo, variables, concatenación', 1),
(4, 'Ejercicio4.php', 'Ejercicio de suma de variables', 'echo, variables, suma', 1),
(5, 'ejercicio5.php', 'Uso del la estructura if', 'echo, variables, if', 1),
(6, 'ejercicio6.php', 'Uso de la estructura if y multiplicación de variables', 'echo, variables, if, operaciones', 1),
(7, 'ejercicio7.php', 'Uso de la estructura switch.', 'echo, variables, switch', 1),
(8, 'ejercicio8.php', 'Uso del bucle for.', 'echo, variables, for', 1),
(9, 'ejercicio9.php', 'Uso de for combinado con un if', 'echo, variables, for, if', 1),
(10, 'ejercicio10.php', 'Uso de array y un bucle for', 'echo, for, arrays', 1),
(11, 'ejercicio11.php', 'Uso de array_push(). Este método inserta un valor dado al final de un array.', 'array, for, array_push()', 1),
(14, 'ejercicio14.php', 'Uso del bucle for de manera decreciente.', 'echo, for, decreciente', 1),
(15, 'ejercicio15.php', 'Uso del bucle for e if para mostrar todos los números del 99 al 10, Señalando los que terminan en 7', 'echo, for, if, decreciente', 1),
(16, 'ejercicio16.html', 'Formulario en HTML para después validarlo mediante un archivo php', 'HTML, formulario', 1),
(17, 'ejercicio16.php', 'Recoge los datos introducidos en el formulario del ejercicio16.html y lo muestra en pantalla', 'php, formulario, $_POST', 0),
(18, 'ejercicio17.html', 'Formulario de acceso, donde se pide usuario y contraseña. ', 'HTML, formulario', 1),
(19, 'ejercicio17.php', 'Recoge los datos introducidos en el formulario del ejercicio17.html y los compara con los que tiene en un array.\r\nSi concuerdan, da un mensaje de bienvenida. Si no, muestra datos incorrectos', 'php, formulario, $_POST, array', 0),
(20, 'ejercicio18.html', 'Uso de enlaces para pasar información en variables a través del hipervinculo', 'php, variables, enlaces', 1),
(21, 'ejercicio18.php', 'Recoge, usando $_GET, la variable pasada a través del hipervínculo en ejercicio18.html y según su valor, mostramos un color u otro en pantalla', 'php, variables, $_GET', 0),
(22, 'ejercicio18b.html', 'Similar al ejercicio18 pero pasando dos variables en el enlace. ', 'HTML, variables, &, $_GET', 1),
(23, 'ejercicio18b.php', 'Recoge las variables pasadas en ejercicio18b.html y las muestra en pantalla.', 'php, variables, $_GET,&, enlaces', 0),
(24, 'ejercicio19.php', 'Incrusta una variable definida anteriormente en php en el enlace. Para ello concatena en el hipervínculo ?var=<?php echo $clave?>', 'php, variables, echo', 1),
(25, 'ejercicio19s.php', 'Recoge las variables pasadas en ejercicio19.php y las muestra en pantalla', 'php, variables, $_GET', 0),
(26, 'ejercicio20.php', 'Crea enlaces que además contienen una variable con un valor asignado por un bucle for', 'php, variables, enlaces, for', 1),
(27, 'ejercicio20s.php', 'Muestra el valor de la variable pasada en el enlace de ejercicio20.php y muestra un mensaje con el valor del enlace que pinchemos', 'php, variables,enlaces, $_GET', 0),
(28, 'ejercicio21.html', 'Es un ejercicio que consta de tres archivos. En este primero hay un formulario.', 'php, formulario', 1),
(29, 'ejercicio21a.php', 'Recoge los valores introducidos en el formulario de ejercicio21.php y crea un enlace con ellos.', 'php, enlace, variables', 0),
(30, 'ejercicio21b.php', 'Muestra el valor pasado en el enlace creado en ejercicio21.php', 'php, variables', 0),
(31, 'ejercicio22.php', 'Ejercicio donde se usa foreach para mostrar todos los valores de un array. ', 'php, array, foreach', 1),
(32, 'ejercicio24.php', 'Uso del bucle while', 'php, arrays, while', 1),
(33, 'ejercicio26.php', 'Otro uso del bucle while utilizando arrays', 'php, arrays, while', 1),
(34, 'ejercicio27.php', 'Ejercicio que utiliza las funciones. round para redondear un número. strlen nos da el número de caracteres de una cadena de texto y str_replace sirve para sustituir parte de un texto, le pasamos el texto que queremos sustituir y su nuevo valor.', 'php, round, strlen, str_replace', 1),
(35, 'ejercicio28.html', 'Formulario de un ejercicio donde se cogerán las cadenas de texto y se programaran para que muestre la primera letra en mayúsculas, la localidad en minúscula y el país en mayúsculas.\r\n', 'php, strings, mayúsculas, minusculas', 1),
(36, 'ejercicio28.php', 'Recoge los datos introducidos en el formulario y el nombre pone la primera letra en mayúsculas usando ucwords. La localidad la pasa a minúsculas usando strtolower y el país en mayúsculas usando strtoupper.', 'ucwords, strtolower,strtoupper', 0),
(37, 'ejercicio29.php', 'Dado un array muestra el mayor número contenido en ella, usando el método max().', 'php, array, max', 1),
(38, 'ejercicio30.php', 'Uso de funciones pasándoles parámetros', 'php, funciones, parametros', 1),
(39, 'ejercicio31.php', 'Uso de funciones y bucles', 'php, bucles, funciones', 1),
(40, 'ejercicio32.php', 'A partir del país introducidos, te da la capital del país. ', 'php, funciones, switch', 1),
(41, 'ejercicio33.php', 'Conexión a una base de datos llamada pruebas y le hacemos distintas consultas a sus tablas USUARIOS e INFORMES, y lo mostramos en pantalla', 'php, mysql, select, from, where, fetch_assoc', 1),
(42, 'ejercicio34.html', 'Formulario donde introducimos un nombre a buscar en la base de datos.', 'HTML, formulario, mysql', 1),
(43, 'ejercicio34.php', 'Recibe el nombre introducido en el formulario de ejercicio34.html y lo busca en la base de datos. Después muestra el resultado en pantalla.', 'php, mysql, select, where', 0),
(44, 'ejercicio35.html', 'Formulario con dos select, que según nuestra elección los buscará en la base de datos al enviarlo.', 'php, formulario, select, mysql', 1),
(45, 'ejercicio35.php', 'Recoge los datos del select y los usa como filtro para realizar la búsqueda en la base de datos.', 'php, mysql, select', 0),
(46, 'ejercicio36.php', 'Recoge el valor pasado al pinchar un enlace y lo usa para ordenar los resultados de una base de datos con order by. Y ASC si queremos en orden ascendente y DESC si es en descentente', 'php, mysql, order by, asc, desc', 1),
(47, 'ejercicio37.php', 'Uso de la instrucción SQL insert into para añadir nuevos registros.', 'php, mysql, insert into', 1),
(48, 'ejercicio38.html', 'Formulario completo de registro. Estos datos se añadirán posteriormente a una base de datos ', 'HTML, formulario, registro', 1),
(49, 'ejercicio38.php', 'Recoge los datos del formulario de ejercicio38.html y los añade a la base de datos con INSERT INTO    VALUES', 'php, mysql, insert into', 0),
(50, 'ejercicio39.php', 'Elimina registros de la base de datos con la instrucción DELETE FROM', 'php, mysql, delete from', 1),
(51, 'ejercicio40.php', 'Formulario para después borrar el nombre introducido dentro de una base de datos', 'HTML, formulario, delete from', 1),
(52, 'ejercicio40.php', 'Elimina el usuario introducido de la base de datos usando DELETE FROM tabla WHERE', 'php, mysql, delete from', 0),
(53, 'ejercicio41.php', 'Ejercicio para eliminar elementos dinámicamente. Detrás de cada registro se crea un enlace al que se le pasa el valor del id, para en otro php realizar su borrado.', 'php, mysql, enlace, borrar', 1),
(54, 'ejercicio41b.php', 'Recoge la variable pasada mediante el enlace y muestra un mensaje de confirmación de si lo queremos borrar.\r\nA su vez se crea otro enlace con las dos variables, el id del usuario a borrar y la opción pulsada y se pasa a otro php donde se realiza el borrado', 'php, mysql, enlaces, confirmación', 0),
(55, 'ejercicio41c.php', 'Según los valores de las variables recibidas se realiza el borrado del registro o se pasa directamente a la pantalla inicial ejercicio41.php, usando el método header(\'Location:ejercicio41.php\')', 'php, mysql, enlaces, delete, header', 0),
(56, 'ejercicio43.php', 'Formulario con un select con los distintos campos y un input donde pondremos el nuevo valor para que actualice la base de datos', 'HTML, formulario, actualizar datos', 1),
(57, 'ejercicio43.php', 'Recoge los datos del formulario y actualiza los datos de la base de datos. Utiliza UPDATE tabla SET campo=\'valor\'', 'php, mysql, update', 0),
(58, 'ejercicio44.php', 'Muestra la tabla USUARIOS y añade dos enlaces al final, uno para borrar el registro y otro para editar los campos del registro en otros php.', 'php, mysql, enlaces, borrar, editar', 1),
(59, 'ejercicio44b.php', 'Borra el registro elegido con DELETE FROM y después te devuelve a ejercicio44.php', 'php, mysql, delete from, header', 0),
(60, 'ejercicio44f.php', 'Recoge los datos del registro que queremos editar y rellena un formulario con ellos, incrustando en value="<?php echo variable="valor" ?>.\r\nPodemos modificar estos datos y al pulsar en enviar entonces lleva a otro php donde actualiza los datos', 'php, mysql, formulario.', 0),
(61, 'ejercicio44g.php', 'Recoge los datos del formulario y procede a actualizar los campos.\r\nDespués te devuelve a ejercicios44.php', 'php, mysql, update, header', 0),
(62, 'ejercicio45.html', 'Formulario de login donde se pide el usuario y la contraseña. Estos datos serán contrastados en otro php con los datos que hay en una base de datos.', 'HTML, login', 1),
(63, 'ejercicio45.php', 'Recoge los datos del formulario de login. Los usa para buscar si existe registros en la base de datos con ese nombre. Si existe pasa a evaluar si la contraseña coincide con la almacenada en la base de datos. En función de ello muestra un mensaje de bienvenida, de usuario o contraseña incorrecta o que no existe el usuario.', 'php, mysql, select, login', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
