SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--User table
CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--enter data to user table
INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'user1', 'user1@gmail.com', 1000),
(2, 'user2', 'user2@gmail.com', 2000),
(3, 'user3', 'user3@gmail.com', 3000),
(4, 'user4', 'user4@gmail.com', 4000),
(5, 'user5', 'user5@gmail.com', 5000),
(6, 'user6', 'user6@gmail.com', 6000),
(7, 'user7', 'user7@gmail.com', 7000),
(8, 'user8', 'user8@gmail.com', 8000),
(9, 'user9', 'user9@gmail.com', 9000),
(10, 'user10', 'user10@gmail.com', 10000);
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;