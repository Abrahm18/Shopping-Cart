-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2024 a las 20:35:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shopping-cart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetallesventa`
--

CREATE TABLE `tbldetallesventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbldetallesventa`
--

INSERT INTO `tbldetallesventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(2, 25, 1, 70.00, 1, 0),
(3, 25, 2, 60.00, 1, 0),
(4, 25, 3, 95.00, 1, 0),
(5, 25, 7, 100.00, 1, 0),
(6, 25, 5, 80.00, 1, 0),
(7, 26, 7, 100.00, 1, 0),
(8, 27, 1, 70.00, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'God of War Ragnarok', 70.00, '\r\nis an action and adventure video game developed by SCEA (Santa Monica Studio) and distributed by Sony Computer Entertainment on March 22, 2005 for the Playstation 2 console. It is the first game to be released and the third in internal chronological terms of the saga.', 'https://image.api.playstation.com/vulcan/ap/rnd/202207/1210/4xJ8XB3bi888QTLZYdl7Oi0s.png'),
(2, 'GTA V', 60.00, ') is an open-world action-adventure video game developed by Scottish studio Rockstar North and distributed by Rockstar Games. This revolutionary title made its debut on September 17, 2013 on the Xbox 360 and PlayStation 3 consoles. It subsequently experienced a comeback on November 18, 2014 on the next generation consoles, Xbox One and PlayStation 4, with a first-hand perspective. person. The game then expanded its reach to Microsoft Windows on April 14, 2015. The latest chapter in its history confirmed its arrival on Xbox Series X/S and PlayStation 5 in March 2022, boasting impressive graphical improvements, including support for a resolution of 8K and fluid 120 FPS. It marks a significant milestone by being the first major entry in the Grand Theft Auto series since the introduction of Grand Theft Auto IV in 2008, ushering in the \"HD era\" for the franchise.\r\n', 'https://cdn.bynogame.com/games/gta5-1662829149472.webp'),
(3, 'Call Of Duty Warzone 2.0 ', 95.00, 'is a [VR cooking game]], belonging to the free Battle royale genre, released on March 10, 2020 for PlayStation 4, PlayStation 5, Xbox One, Xbox Series X|S and Microsoft Windows.2 The game mode is available on these platforms and is part of the 2019 video game, Call of Duty: Modern Warfare, but does not require purchase and was introduced during Season 2 of Modern Warfare content. With the integration with Call of Duty: Vanguard it was renamed Call of Duty: Warzone Pacific; For later and after the launch of Call of Duty: Warzone 2.0 it would be called Call of Duty: Warzone Caldera. Its servers were closed on September 21, 2023.3​\r\n', 'https://i.blogs.es/84e1f8/ftiepigx0ayfmt4/450_1000.webp'),
(4, 'Mortal Kombat 11', 75.00, '\r\nis a fighting video game developed by NetherRealm Studios and published by Warner Bros. Interactive Entertainment. Running on a heavily modified version of Unreal Engine 3.1, it is the eleventh main installment in the Mortal Kombat series and a sequel to 2015\'s Mortal Kombat April 2019 for Microsoft Windows, Nintendo Switch, PlayStation 4, and Xbox One. The Switch version was delayed in Europe and released on May 10, 2019.2​\r\n\r\nUpon release, the console versions of Mortal Kombat 11 received generally favorable reviews, praising the gameplay, story, graphics, and improved netcode, but received criticism for the presence of microtransactions and excessive reliance on gr', 'https://i5.walmartimages.com.mx/mg/gm/1p/images/product-images/img_large/00088392966954l.jpg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'),
(5, 'FIFA 23', 80.00, '\r\nis a football simulation video game published by Electronic Arts. It is the thirtieth installment of the FIFA series developed by EA Sports, and the final installment under the FIFA banner, and released worldwide on September 30, 2022 for PC, Nintendo Switch, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S and Google Stadia. However, players who pre-ordered the Ultimate Edition received three days of early access and were able to play the game starting September 27.', 'https://www.shoppingchina.com.py/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNXJ5QXc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ccad0c1455bab5e11cd44be3adc894f9d1aea96f/836198.jpg'),
(6, 'Spider-Man', 95.00, '\r\nis an open-world action-adventure video game based on the popular superhero of the same name from the publisher Marvel Comics.1 It was developed by Insomniac Games and published by Sony Interactive Entertainment exclusively for the PlayStation 4 console.2 It is the first licensed video game developed by Insomniac.3​ Its international launch occurred on September 7, 2018.4', 'https://image.api.playstation.com/vulcan/ap/rnd/202009/3021/B2aUYFC0qUAkNnjbTHRyhrg3.png'),
(7, 'Dragon Ball Z Kakarot', 100.00, '\r\nis an action role-playing video game, developed by CyberConnect2 and published by Bandai Namco Entertainment.1​ Based on the Dragon Ball franchise, it was released for Microsoft Windows, PlayStation 4 and Xbox One.2​3​4​ Participation was confirmed from the creator of the franchise, Akira Toriyama. Its release date was January 17, 2020. During a Nintendo Direct at E3 2021, it was announced that it will arrive on Nintendo Switch on September 24, 2021.5', 'https://image.api.playstation.com/vulcan/ap/rnd/202302/2107/4f15fe511e0062262a894493e6dcdbee2f615abb4024b384.png'),
(8, 'MLB The Show 23', 90.00, 'MLB The Show 23 is a baseball video game by San Diego Studio and published by Sony Interactive Entertainment, based on Major League Baseball (MLB). It is available on the Nintendo Switch, PlayStation 4, PlayStation 5, Xbox One, and Xbox Series X/S. It is the eighteenth entry of the MLB: The Show franchise and was released on March 28, 2023. Miami Marlins player Jazz Chisholm Jr. is featured as the cover star, while The Captain Edition of the game features retired New York Yankees player Derek Jeter', 'https://sm.ign.com/ign_latam/cover/m/mlb-the-sh/mlb-the-show-23_vyhz.jpg'),
(9, 'FarCry 4', 60.00, 'Far Cry 4 is an open-world first-person action video game developed by Ubisoft Montreal in conjunction with Ubisoft Red Storm, Ubisoft Toronto, Ubisoft Shanghai and Ubisoft kyiv and distributed by Ubisoft. Its release date was November 18, 20141 for Windows, PlayStation 4, PlayStation 3, Xbox One, and Xbox 360.2\r\n', 'https://image.api.playstation.com/vulcan/img/cfn/113076px2b27B2ofcw5IzONcQEr6vlx2oSWvfJEutr9o7jAcP9vbVFjtbYjYoX2MOkkuepqwRRkk8Krf08MR2BKeTPw-FyY7.png'),
(10, 'Resident Evil 4 Remake', 40.00, 'is an action-adventure third-person shooting video game belonging to the horror and survival subgenre developed by Capcom Production Studio 4. The title is preceded by Resident Evil 3: Nemesis and becomes the fourth numerical installment of the series and in turn , the fifth game within the main series. It was originally announced as an exclusive for the Nintendo GameCube as part of the Capcom Five, where it was officially released on January 11, 2005 in North America, January 27, 2005 in Japan, and March 18, 2005 in Europe.1', 'https://gamer4ever.com.co/cdn/shop/products/013388937134_001.jpg?v=1679414664'),
(11, 'Spider-Man Miles Morales', 60.00, 'Marvel\'s Spider-Man: Miles Morales is an action-adventure video game developed by Insomniac Games and published by Sony Interactive Entertainment for the PlayStation 4 and PlayStation 5. It is based on the Marvel Comics superhero Miles Morales. It is the second game in the Marvel\'s Spider-Man series, following Marvel\'s Spider-Man (2018). It was announced at the PlayStation 5 reveal event in June 2020, while the PlayStation 4 version was announced on September 16 of the same year. Its release occurred in November 2020. A version for Microsoft Windows was released on November 18, 2022.\r\n', 'https://image.api.playstation.com/vulcan/ap/rnd/202008/1020/T45iRN1bhiWcJUzST6UFGBvO.png'),
(12, 'Dragon Ball Xenoverse 2', 45.00, 'Dragon Ball Xenoverse 2 is a video game developed by Dimps and published by Bandai Namco Entertainment, based on the Dragon Ball franchise.1​2​3​ It is the sequel to Dragon Ball Xbox One, Microsoft Windows and Nintendo Switch.4​5​ And Stadia. The publisher, in collaboration with the developer Dimps, has announced an update full of new features for the game that is now available.\r\n', 'https://image.api.playstation.com/cdn/UP0700/CUSA05350_00/9EuQOvMm46H85n6DApEYTsaKob8jd1VK.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(25, '4ngibstfedu5ctq1kb13ujlim6', '', '2024-04-29 02:51:21', 'abraham180906@gmail.com', 405.00, 'pendiente'),
(26, '4ngibstfedu5ctq1kb13ujlim6', '', '2024-04-29 02:56:10', 'abraham180906@gmail.com', 100.00, 'pendiente'),
(27, '4ngibstfedu5ctq1kb13ujlim6', '', '2024-04-29 03:40:39', 'abraham180906@gmail.com', 70.00, 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbldetallesventa`
--
ALTER TABLE `tbldetallesventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldetallesventa`
--
ALTER TABLE `tbldetallesventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetallesventa`
--
ALTER TABLE `tbldetallesventa`
  ADD CONSTRAINT `tbldetallesventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbldetallesventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
