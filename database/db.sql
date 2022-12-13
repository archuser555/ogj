CREATE TABLE
  `users` (
    `id` int(10),
    `username` varchar(25) DEFAULT 'NULL',
    `password` varchar(100) DEFAULT 'NULL',
    `email` varchar(100) DEFAULT 'NULL',
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `status` varchar(255) DEFAULT NULL,
    `joined_jam` varchar(30) DEFAULT 'No Jam''s',
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8mb4;

CREATE TABLE
  `jam` (
    `id` int(10),
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
  users (id, username, password)
VALUES
  (1, 'admin', '5e8bb73c19ba7f4e33e437ab9777874f');

INSERT INTO
  users (id, username, password)
VALUES
  (2, 'archuser555', '461753eb0fe0efa397403e5a9489a938');
insert into
  `jam` (
    `created_at`,
    `days`,
    `descr`,
    `id`,
    `name`,
    `num_of_devs`,
    `prize`,
    `thumb`,
    `winner`
  )
values
  (
    '2022-12-10 15:53:01',
    7,
    'A Game Jam Where You Should Make A Gam With 100% Rust And Vulkan',
    1,
    'Draid Jam 1#',
    0,
    '1$, Sent via PayPal',
    './thumbs/draid.jpg',
    'No One (Yet)'
  );

insert into
  `jam` (
    `created_at`,
    `days`,
    `descr`,
    `id`,
    `name`,
    `num_of_devs`,
    `prize`,
    `thumb`,
    `winner`
  )
values
  (
    '2022-12-10 18:01:26',
    0,
    'a Sucks game jam',
    2,
    'Sucks Jam 1#',
    0,
    'You will be sucks',
    './thumbs/sucks.jpg',
    'No One (Yet)'
  );