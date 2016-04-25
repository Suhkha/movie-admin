-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2016 a las 05:08:13
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `movie-admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`id`, `name`, `bio`) VALUES
(1, 'Morgan Freeman', 'With an authoritative voice and calm demeanor, this ever popular American actor has grown into one of the most respected figures in modern US cinema. Morgan was born on June 1, 1937 in Memphis, Tennessee, to Mayme Edna (Revere), a teacher, and Morgan Porterfield Freeman, a barber. The young Freeman attended Los Angeles City College before serving several years in the US Air Force as a mechanic between 1955 and 1959. His first dramatic arts exposure was on the stage including appearing in an all-African American production of the exuberant musical Hello, Dolly!.'),
(2, 'Tom Hanks', 'homas Jeffrey Hanks was born in Concord, California, to Janet Marylyn (Frager), a hospital worker, and Amos Mefford Hanks, an itinerant cook. His father had English, and some German, ancestry, while his mother''s family, originally surnamed "Fraga", was entirely Portuguese.'),
(6, 'Brad Pit', 'An actor and producer known as much for his versatility as he is for his handsome face, Golden Globe-winner most widely recognized role may be Tyler Durden in El club de la lucha. But his portrayals of Billy Beane in Moneyball: Rompiendo las reglas, and Rusty Ryan in the remake of Oceans Eleven. Hagan juego and its sequels'),
(7, 'Leonardo DiCaprio', 'Few actors in the world have had a career quite as diverse as Leonardo DiCaprios. DiCaprio has gone from relatively humble beginnings, as a supporting cast member of the sitcom Los problemas crecen and low budget horror movies, such as Critters 3: La venganza, to a major teenage heartthrob in the 1990s, as the hunky lead actor in movies such as Romeo y Julieta de William Shakespeare and Titanic...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors_in_movies`
--

CREATE TABLE IF NOT EXISTS `actors_in_movies` (
  `id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `id_fk_movie` int(7) NOT NULL,
  `id_fk_actor` int(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `actors_in_movies`
--

INSERT INTO `actors_in_movies` (`id`, `id_fk_movie`, `id_fk_actor`) VALUES
(7, 19, 1),
(8, 20, 1),
(9, 20, 6),
(10, 21, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`) VALUES
(19, 'The Shawshank Redemption', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'),
(20, 'Figth Club', 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soap maker, forming an underground fight club that evolves into something much, much more...'),
(21, 'Forrest Gump', 'Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
