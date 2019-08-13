-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:33061
-- Generation Time: Aug 13, 2019 at 10:32 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`) VALUES
(1, 'Afghanistan'),
(2, 'Åland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bonaire'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cambodia'),
(39, 'Cameroon'),
(40, 'Canada'),
(41, 'Cape Verde'),
(42, 'Cayman Islands'),
(43, 'Central African Republic'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'China'),
(47, 'Christmas Island'),
(48, 'Cocos (Keeling) Islands'),
(49, 'Colombia'),
(50, 'Comoros'),
(51, 'Congo'),
(52, 'Cook Islands'),
(53, 'Costa Rica'),
(54, 'Côte d\'Ivoire'),
(55, 'Croatia'),
(56, 'Cuba'),
(57, 'Curaçao'),
(58, 'Cyprus'),
(59, 'Czech Republic'),
(60, 'Denmark'),
(61, 'Djibouti'),
(62, 'Dominica'),
(63, 'Dominican Republic'),
(64, 'Ecuador'),
(65, 'Egypt'),
(66, 'El Salvador'),
(67, 'Equatorial Guinea'),
(68, 'Eritrea'),
(69, 'Estonia'),
(70, 'Ethiopia'),
(71, 'Falkland Islands (Malvinas)'),
(72, 'Faroe Islands'),
(73, 'Fiji'),
(74, 'Finland'),
(75, 'France'),
(76, 'French Guiana'),
(77, 'French Polynesia'),
(78, 'French Southern Territories'),
(79, 'Gabon'),
(80, 'Gambia'),
(81, 'Georgia'),
(82, 'Germany'),
(83, 'Ghana'),
(84, 'Gibraltar'),
(85, 'Greece'),
(86, 'Greenland'),
(87, 'Grenada'),
(88, 'Guadeloupe'),
(89, 'Guam'),
(90, 'Guatemala'),
(91, 'Guernsey'),
(92, 'Guinea'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Haiti'),
(96, 'Heard Island and McDonald Islands'),
(97, 'Holy See (Vatican City State)'),
(98, 'Honduras'),
(99, 'Hong Kong'),
(100, 'Hungary'),
(101, 'Iceland'),
(102, 'India'),
(103, 'Indonesia'),
(104, 'Iran'),
(105, 'Iraq'),
(106, 'Ireland'),
(107, 'Isle of Man'),
(108, 'Israel'),
(109, 'Italy'),
(110, 'Jamaica'),
(111, 'Japan'),
(112, 'Jersey'),
(113, 'Jordan'),
(114, 'Kazakhstan'),
(115, 'Kenya'),
(116, 'Kiribati'),
(117, 'Korea'),
(118, 'Kuwait'),
(119, 'Kyrgyzstan'),
(120, 'Lao People\'s Democratic Republic'),
(121, 'Latvia'),
(122, 'Lebanon'),
(123, 'Lesotho'),
(124, 'Liberia'),
(125, 'Libya'),
(126, 'Liechtenstein'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Macao'),
(130, 'Macedonia'),
(131, 'Madagascar'),
(132, 'Malawi'),
(133, 'Malaysia'),
(134, 'Maldives'),
(135, 'Mali'),
(136, 'Malta'),
(137, 'Marshall Islands'),
(138, 'Martinique'),
(139, 'Mauritania'),
(140, 'Mauritius'),
(141, 'Mayotte'),
(142, 'Mexico'),
(143, 'Micronesia'),
(144, 'Moldova'),
(145, 'Monaco'),
(146, 'Mongolia'),
(147, 'Montenegro'),
(148, 'Montserrat'),
(149, 'Morocco'),
(150, 'Mozambique'),
(151, 'Myanmar'),
(152, 'Namibia'),
(153, 'Nauru'),
(154, 'Nepal'),
(155, 'Netherlands'),
(156, 'New Caledonia'),
(157, 'New Zealand'),
(158, 'Nicaragua'),
(159, 'Niger'),
(160, 'Nigeria'),
(161, 'Niue'),
(162, 'Norfolk Island'),
(163, 'Northern Mariana Islands'),
(164, 'Norway'),
(165, 'Oman'),
(166, 'Pakistan'),
(167, 'Palau'),
(168, 'Palestine'),
(169, 'Panama'),
(170, 'Papua New Guinea'),
(171, 'Paraguay'),
(172, 'Peru'),
(173, 'Philippines'),
(174, 'Pitcairn'),
(175, 'Poland'),
(176, 'Portugal'),
(177, 'Puerto Rico'),
(178, 'Qatar'),
(179, 'Réunion'),
(180, 'Romania'),
(181, 'Russian Federation'),
(182, 'Rwanda'),
(183, 'Saint Barthélemy'),
(184, 'Saint Helena'),
(185, 'Saint Kitts and Nevis'),
(186, 'Saint Lucia'),
(187, 'Saint Martin (French part)'),
(188, 'Saint Pierre and Miquelon'),
(189, 'Saint Vincent and the Grenadines'),
(190, 'Samoa'),
(191, 'San Marino'),
(192, 'Sao Tome and Principe'),
(193, 'Saudi Arabia'),
(194, 'Senegal'),
(195, 'Serbia'),
(196, 'Seychelles'),
(197, 'Sierra Leone'),
(198, 'Singapore'),
(199, 'Sint Maarten (Dutch part)'),
(200, 'Slovakia'),
(201, 'Slovenia'),
(202, 'Solomon Islands'),
(203, 'Somalia'),
(204, 'South Africa'),
(205, 'South Georgia and the South Sandwich Islands'),
(206, 'South Sudan'),
(207, 'Spain'),
(208, 'Sri Lanka'),
(209, 'Sudan'),
(210, 'Suriname'),
(211, 'Svalbard and Jan Mayen'),
(212, 'Swaziland'),
(213, 'Sweden'),
(214, 'Switzerland'),
(215, 'Syrian Arab Republic'),
(216, 'Taiwan'),
(217, 'Tajikistan'),
(218, 'Tanzania'),
(219, 'Thailand'),
(220, 'Timor-Leste'),
(221, 'Togo'),
(222, 'Tokelau'),
(223, 'Tonga'),
(224, 'Trinidad and Tobago'),
(225, 'Tunisia'),
(226, 'Turkey'),
(227, 'Turkmenistan'),
(228, 'Turks and Caicos Islands'),
(229, 'Tuvalu'),
(230, 'Uganda'),
(231, 'Ukraine'),
(232, 'United Arab Emirates'),
(233, 'United Kingdom'),
(234, 'United States'),
(235, 'United States Minor Outlying Islands'),
(236, 'Uruguay'),
(237, 'Uzbekistan'),
(238, 'Vanuatu'),
(239, 'Venezuela'),
(240, 'Viet Nam'),
(241, 'Virgin Islands'),
(242, 'Wallis and Futuna'),
(243, 'Western Sahara'),
(244, 'Yemen'),
(245, 'Zambia'),
(246, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `ru`
--

CREATE TABLE `ru` (
  `id` int(11) NOT NULL,
  `en` varchar(1000) NOT NULL,
  `ru` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ru`
--

INSERT INTO `ru` (`id`, `en`, `ru`) VALUES
(1, 'Authorization', 'Авторизация'),
(2, 'Log In', 'Войти'),
(3, 'Sign Up', 'Зарегистрироваться'),
(4, 'Edit Profile', 'Редактировать профиль'),
(5, 'Log out', 'Выйти'),
(6, 'Language', 'Язык'),
(7, 'You have not edited your profile data! Please, try again.', 'Вам не удалось отредактировать свои данные! Попробуйте, пожалуйста, еще раз.'),
(8, 'Email', 'Email'),
(9, 'First Name', 'Имя'),
(10, 'You have entered incorrect first name!', 'Вы ввели некорректное имя!'),
(11, 'Must contain only letters', 'Должно включать в себя только буквы'),
(12, 'Last Name', 'Фамилия'),
(13, 'You have entered incorrect last name!', 'Вы ввели некорректную фамилию!'),
(14, 'You have entered incorrect email!', 'Вы ввели некорректный email!'),
(15, 'For example', 'Например'),
(16, 'Gender', 'Пол'),
(17, 'Date of Birth', 'Дата рождения'),
(18, 'Country', 'Страна'),
(19, 'You have entered incorrect country!', 'Вы ввели некорректную страну!'),
(20, 'Photo', 'Фотография'),
(21, 'You have chosen incorrect file type!', 'Вы выбрали файл некорректного типа!'),
(22, 'You can upload <b>.jpg, .jpeg, .gif, .png</b> files only', 'Вы можете загрузить такие типы файлов <b>.jpg, .jpeg, .gif, .png</b>'),
(23, 'Password', 'Пароль'),
(24, 'You have entered incorrect password!', 'Вы ввели некорректный пароль!'),
(25, 'Must contain 8 or more characters(letters and special(\".\", \"-\", \"_\") character)', 'Должно включать в себя 8 или более символов(букв и специальных символов \".\", \"-\", \"_\")'),
(26, 'Save Profile', 'Сохранить профиль'),
(27, 'Authorization / Registration Form', 'Форма Авторизации / Регистрации'),
(28, 'You have registered <strong>successfully</strong> on the site!', 'Вы успешно зарегистрировались на сайте!'),
(29, 'Please, Sign In', 'Пожалуйста, авторизируйтесь'),
(30, 'Not registered yet?', 'Еще не зарегистрированы?'),
(31, 'Sign Up here', 'Зарегистрируйтесь здесь'),
(32, 'You have entered wrong or password!', 'Вы ввели некорректный email или пароль!'),
(33, 'Sign In', 'Авторизироваться'),
(34, 'Profile information', 'Данные профиля'),
(35, 'You have not registered on the site! Please, try again.', 'Вы не смогли зарегистрироваться на сайте! Попробуйте, пожалуйста, еще раз.'),
(36, 'Please, Register', 'Пожалуйста, зарегистрируйтесь'),
(37, 'Already registered?', 'Уже зарегистрированы?'),
(38, 'Sign In here', 'Авторизируйтесь здесь'),
(39, 'These fields are required.', 'Эти поля являются обязательными для заполнения.'),
(40, 'Male', 'Мужчина'),
(41, 'Female', 'Женщина'),
(42, 'Choose your avatar', 'Выберите свою фотографию'),
(43, 'Confirmation Password', 'Пароль подтверждения'),
(44, 'You have entered wrong confirmation password!', 'Вы ввели не правильный пароль подтверждения!'),
(45, 'Please, enter your password again for confirmation', 'Пожалуйста, введите пароль еще раз для подтверждения'),
(46, 'Enter password', 'Введите пароль'),
(47, 'Enter email', 'Введите email'),
(48, 'Enter first name', 'Введите имя'),
(49, 'Enter last name', 'Введите фамилию'),
(50, 'Enter country', 'Введите страну'),
(51, 'Enter confirmation password', 'Введите пароль подтверждения');

-- --------------------------------------------------------

--
-- Table structure for table `ua`
--

CREATE TABLE `ua` (
  `id` int(11) NOT NULL,
  `en` varchar(1000) NOT NULL,
  `ua` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ua`
--

INSERT INTO `ua` (`id`, `en`, `ua`) VALUES
(1, 'Authorization', 'Авторизація'),
(2, 'Log In', 'Увійти'),
(3, 'Sign Up', 'Зареєструватися'),
(4, 'Edit Profile', 'Редагувати профіль'),
(5, 'Log out', 'Вийти'),
(6, 'Language', 'Мова'),
(7, 'You have not edited your profile data! Please, try again.', 'Вам не вдалося відредагувати свої дані! Спробуйте, будь ласка, ще раз.'),
(8, 'Email', 'Email'),
(9, 'First Name', 'Ім\'я'),
(10, 'You have entered incorrect first name!', 'Ви ввели некоректне ім\'я!'),
(11, 'Must contain only letters', 'Повинно містити лише літери'),
(12, 'Last Name', 'Прізвище'),
(13, 'You have entered incorrect last name!', 'Ви ввели некоректне прізвище!'),
(14, 'You have entered incorrect email!', 'Ви ввели некоректний email!'),
(15, 'For example', 'Для прикладу'),
(16, 'Gender', 'Стать'),
(17, 'Date of Birth', 'Дата народження'),
(18, 'Country', 'Країна'),
(19, 'You have entered incorrect country!', 'Ви ввели некоректну країну!'),
(20, 'Photo', 'Фото'),
(21, 'You have chosen incorrect file type!', 'Ви вибрали файл некоректного типу!'),
(22, 'You can upload <b>.jpg, .jpeg, .gif, .png</b> files only', 'Ви можете завантажити такі типи файлів <b>.jpg, .jpeg, .gif, .png</b>'),
(23, 'Password', 'Пароль'),
(24, 'You have entered incorrect password!', 'Ви ввели некоректний пароль!'),
(25, 'Must contain 8 or more characters(letters and special(\".\", \"-\", \"_\") character)', 'Повинно містити 8 чи більше символів(букв та спеціальних символів \".\", \"-\", \"_\")'),
(26, 'Save Profile', 'Зберегти профайл'),
(27, 'Authorization / Registration Form', 'Форма Авторизації / Реєстрації'),
(28, 'You have registered <strong>successfully</strong> on the site!', 'Ви успішно зареєструвалися на сайті!'),
(29, 'Please, Sign In', 'Будь ласка, авторизуйтесь'),
(30, 'Not registered yet?', 'Ще не зареєстровані?'),
(31, 'Sign Up here', 'Зареєструйтесь тут'),
(32, 'You have entered wrong or password!', 'Ви ввели некоректний email або пароль!'),
(33, 'Sign In', 'Авторизуватися'),
(34, 'Profile information', 'Дані профайлу'),
(35, 'You have not registered on the site! Please, try again.', 'Ви не змогли зареєструватися на сайті! Спробуйте, будь ласка, ще раз.'),
(36, 'Please, Register', 'Будь ласка, зареєструйтесь'),
(37, 'Already registered?', 'Вже зареєстровані?'),
(38, 'Sign In here', 'Авторизуйтесь тут'),
(39, 'These fields are required.', 'Ці поля є обов\'яковими для заповнення.'),
(40, 'Male', 'Чоловік'),
(41, 'Female', 'Жінка'),
(42, 'Choose your avatar', 'Виберіть своє фото'),
(43, 'Confirmation Password', 'Пароль підтвердження'),
(44, 'You have entered wrong confirmation password!', 'Ви ввели не правильний пароль підтвердження!'),
(45, 'Please, enter your password again for confirmation', 'Будь ласка, введіть пароль ще раз для підтвердження'),
(46, 'Enter password', 'Введіть пароль'),
(47, 'Enter email', 'Введіть email'),
(48, 'Enter first name', 'Введіть ім\'я'),
(49, 'Enter last name', 'Введіть прізвище'),
(50, 'Enter country', 'Введіть країну'),
(51, 'Enter confirmation password', 'Введіть пароль підтвердження');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_birth` date DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `gender`, `date_birth`, `country`, `password`, `file`) VALUES
(1, 'Victor', 'Radkevych', 'radvic985@gmail.com', 'male', '1985-08-04', 'Ukraine', '$2y$10$3YXB0Bc0IcDEqftkjT1jcu73d/zDEALg9a62KBs209nJFL8Q2OD1W', 'upload/INOURHANDS.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country` (`country`);

--
-- Indexes for table `ru`
--
ALTER TABLE `ru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `en_2` (`en`),
  ADD KEY `en` (`en`);

--
-- Indexes for table `ua`
--
ALTER TABLE `ua`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `en_2` (`en`),
  ADD KEY `en` (`en`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `ru`
--
ALTER TABLE `ru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ua`
--
ALTER TABLE `ua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
