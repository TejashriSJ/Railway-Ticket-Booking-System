CREATE TABLE `users` (
  `user_id` int(11)PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL
)

CREATE TABLE `train` (
  `train_no` int(11) PRIMARY KEY NOT NULL,
  `train_name` varchar(50) DEFAULT NULL,
  `sourse` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `arraival_time` time DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `availability_seats` int(150) DEFAULT NULL,
  `ac` int(20) DEFAULT NULL,
  `sl` int(20) DEFAULT NULL,
  `gen` int(20) DEFAULT NULL,
  `fare_ac` int(100) DEFAULT NULL,
  `fare_sl` int(100) DEFAULT NULL,
  `fare_gn` int(100) DEFAULT NULL,
  `date` date DEFAULT NULL
)


CREATE TABLE `ticket` (
  `id` int(11)PRIMARY KEY AUTO_INCREMENT  NOT NULL,
  `user_id` int(150) DEFAULT NULL,
  `train_no` int(150) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
 FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)ON DELETE CASCADE,
 FOREIGN KEY (`train_no`) REFERENCES `train` (`train_no`)ON DELETE CASCADE
)


CREATE TABLE `passenger` (
  `passenger_id` int(11) PRIMARY KEY AUTO_INCREMENT  NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(50) DEFAULT NULL,
  `seat_no` int(150) DEFAULT NULL,
  `reservation_status` varchar(20) DEFAULT NULL,
  `user_id` int(150) DEFAULT NULL,
  `ticket_id` int(150) DEFAULT NULL,
   FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)ON DELETE CASCADE,
   FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`) ON DELETE CASCADE
)

CREATE TABLE `admin` (
  `id` int(11)PRIMARY KEY NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
)

++++++++++++
NOT USED
CREATE TABLE `station` (
  `no` int(11)PRIMARY KEY NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `train_no` int(150) DEFAULT NULL,
  `arraival_time` time DEFAULT NULL,
  `hault` time DEFAULT NULL
) 


