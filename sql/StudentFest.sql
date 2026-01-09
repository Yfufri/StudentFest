
CREATE TABLE `newsletter` (
  `Id_Utilisateur` int(11) NOT NULL,
  `Mail_Utilisateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`Id_Utilisateur`);

ALTER TABLE `newsletter`
  MODIFY `Id_Utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
