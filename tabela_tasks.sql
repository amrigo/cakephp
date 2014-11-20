-- Base de dados
CREATE IF NOT EXISTS DATABASE tarefas;

CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `priority` tinyint(1) DEFAULT '4',
  `datelimit` date DEFAULT NULL,
  `week` int(3) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
