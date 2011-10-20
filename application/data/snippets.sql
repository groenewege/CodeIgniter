CREATE TABLE `ci_snippets` (
  `id` smallint(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `info` text NOT NULL,
  `type` varchar(15) NOT NULL DEFAULT 'input',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `ci_snippets` (`id`, `code`, `value`, `info`, `type`)
VALUES
  (1, 'meta_title', 'CodeIgniter', 'website title', 'input'),
  (2, 'meta_description', 'CodeIgniter boilerplate website', 'website description', 'input'),
  (3, 'meta_keywords', 'code, igniter', 'website keywords', 'input'),
  (4, 'email', 'gunther@groenewege.com', 'email address', 'input');

