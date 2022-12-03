CREATE TABLE
  `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(25) DEFAULT 'NULL',
    `password` varchar(30) DEFAULT 'NULL',
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `status` varchar(255) DEFAULT NULL,
    `joined_jam` varchar(30) DEFAULT 'No Jam''s',
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8mb4

CREATE TABLE
  `jam` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(30) DEFAULT NULL,
    `descr` varchar(250) DEFAULT NULL,
    `winner` varchar(25) DEFAULT 'No One (Yet)',
    `thumb` varchar(100) DEFAULT NULL,
    `num_of_devs` int(10) unsigned DEFAULT 0,
    `prize` varchar(30) DEFAULT NULL,
    `days` int(3) DEFAULT 3,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

INSERT INTO
  users (username, password)
VALUES
  ('admin', 'cecar');

INSERT INTO
  users (username, password)
VALUES
  ('archuser555', 'youcantguessmypass');

INSERT INTO
  jam (name, days, descr, thumb, prize)
VALUES
  (
    'Draid Jam 1#',
    7,
    'A Game Jam Where You Should Make A Gam With 100% Rust And Vulkan',
    'https://imgur.com/draid_thumb',
    '10.000 XP At 6wrni Server'
  );