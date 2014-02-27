

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL,
  `typename` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `types` (`id`, `typename`) VALUES
(1, 'fulltime'),
(2, 'parttime');

CREATE TABLE IF NOT EXISTS `workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sunday` int(11) NOT NULL,
  `monday` int(11) NOT NULL,
  `tuesday` int(11) NOT NULL,
  `wednesday` int(11) NOT NULL,
  `thusday` int(11) NOT NULL,
  `friday` int(11) NOT NULL,
  `saturday` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


INSERT INTO `workers` (`id`, `name`, `sunday`, `monday`, `tuesday`, `wednesday`, `thusday`, `friday`, `saturday`, `type_id`) VALUES
(1, 'mashpy', 1, 2, 3, 4, 5, 6, 7, 1),
(2, 'monir', 2, 0, 3, 0, 4, 0, 35, 4),
(3, 'monir', 2, 3, 5, 0, 4, 4, 8, 2);
