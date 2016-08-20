DROP TABLE IF EXISTS wcf1_bnettool_tournament_game;
CREATE TABLE wcf1_bnettool_tournament_game (
  gameID int(11) NOT NULL,
  tournamentID  int(2) DEFAULT 1,   
  gameName varchar(35) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  oppenent1 int(11) DEFAULT NULL,
  oppenent2 int(11) DEFAULT NULL,
  points1 int(11) DEFAULT NULL,
  points2 int(11) DEFAULT NULL,
  time int(11) DEFAULT NULL,
  state int(11)  DEFAULT 1,
  comment text CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
);

DROP TABLE IF EXISTS wcf1_bnettool_playerdata;
CREATE TABLE wcf1_bnettool_playerdata (
  charID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  charname varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  realmname varchar(30)  NOT NULL,
  class int(3) DEFAULT NULL,
  race int(3) DEFAULT NULL,
  faction int(3) DEFAULT NULL,
  gender int(3) NOT NULL,
  level int(3) DEFAULT NULL,
  avatar text ,
  userID int(11) NOT NULL,
  primaryRole tinyint(4) DEFAULT NULL,
  secondaryRole tinyint(4) DEFAULT NULL,
  isMain tinyint(4) DEFAULT NULL,
  rank tinyint(4) NOT NULL DEFAULT '15',
  achievementPoints int(11) NOT NULL DEFAULT '0',
  state tinyint(1) NOT NULL DEFAULT '1'
);

DROP TABLE IF EXISTS wcf1_bnettool_battlepets;
CREATE TABLE wcf1_bnettool_battlepets (
  petID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name_en_GB varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  name_de_DE varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  name_fr_FR varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  name_ru_RU varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  name_es_ES varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  name_pt_PT varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  name_pl_PL varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  name_it_IT varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  icon varchar(120)  NOT NULL,
  typeId int(6) DEFAULT NULL,
  canBattle int(3) DEFAULT 1,
);

DROP TABLE IF EXISTS wcf1_bnettool_tournaments;
CREATE TABLE wcf1_bnettool_tournaments (
  tournamentID int(11) NOT NULL,
  state int(2) DEFAULT 1,
  comment text CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
);

DROP TABLE IF EXISTS wcf1_bnettool_tournament_attandance;
CREATE TABLE wcf1_bnettool_tournament_attandance (
  attandanceID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tournamentID  int(2) DEFAULT 1,
  charID int(11) NOT NULL,
  userID int(11) NOT NULL,
  petIDs text CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  date int(11) DEFAULT NULL,
  points1 int(11) DEFAULT NULL,
  state int(2) DEFAULT 1,
  comment text CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
);

DROP TABLE IF EXISTS wcf1_bnettool_token;
CREATE TABLE wcf1_bnettool_token (
  price  int(11)  NOT NULL,
  low24  int(11)  NOT NULL,
  high24 int(11)  NOT NULL,
  time   int(11) NOT NULL PRIMARY KEY
);

INSERT INTO wcf1_bnettool_tournament_game (gameID, tournamentID, gameName, oppenent1, oppenent2, points1, points2, time, state, comment) VALUES
(2, 1, 'wcf.page.bnetTool.gruppeA', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(4, 1, 'wcf.page.bnetTool.gruppeA', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(5, 1, 'wcf.page.bnetTool.gruppeA', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(6, 1, 'wcf.page.bnetTool.gruppeA', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(7, 1, 'wcf.page.bnetTool.gruppeA', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(8, 1, 'wcf.page.bnetTool.gruppeA', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(9, 1, 'wcf.page.bnetTool.gruppeA', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(10, 1, 'wcf.page.bnetTool.gruppeB', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(11, 1, 'wcf.page.bnetTool.gruppeB', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(12, 1, 'wcf.page.bnetTool.gruppeB', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(13, 1, 'wcf.page.bnetTool.gruppeB', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(14, 1, 'wcf.page.bnetTool.gruppeB', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(15, 1, 'wcf.page.bnetTool.gruppeB', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(16, 1, 'wcf.page.bnetTool.gruppeB', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(17, 1, 'wcf.page.bnetTool.gruppeC', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(18, 1, 'wcf.page.bnetTool.gruppeC', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(19, 1, 'wcf.page.bnetTool.gruppeC', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(20, 1, 'wcf.page.bnetTool.gruppeC', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(21, 1, 'wcf.page.bnetTool.gruppeC', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(22, 1, 'wcf.page.bnetTool.gruppeC', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(23, 1, 'wcf.page.bnetTool.gruppeC', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(24, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(25, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(26, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(27, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(28, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(29, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(30, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(31, 1, 'wcf.page.bnetTool.gruppeD', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(32, 1, 'wcf.page.bnetTool.gruppeE', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(33, 1, 'wcf.page.bnetTool.gruppeE', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(34, 1, 'wcf.page.bnetTool.gruppeE', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(35, 1, 'wcf.page.bnetTool.gruppeE', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(36, 1, 'wcf.page.bnetTool.gruppeE', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(37, 1, 'wcf.page.bnetTool.gruppeE', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(38, 1, 'wcf.page.bnetTool.gruppeF', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(39, 1, 'wcf.page.bnetTool.gruppeF', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(40, 1, 'wcf.page.bnetTool.gruppeF', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(41, 1, 'wcf.page.bnetTool.gruppeF', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(42, 1, 'wcf.page.bnetTool.gruppeF', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(43, 1, 'wcf.page.bnetTool.gruppeF', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(44, 1, 'wcf.page.bnetTool.gruppeG', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(45, 1, 'wcf.page.bnetTool.gruppeG', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(46, 1, 'wcf.page.bnetTool.gruppeG', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(47, 1, 'wcf.page.bnetTool.gruppeG', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(48, 1, 'wcf.page.bnetTool.gruppeG', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(49, 1, 'wcf.page.bnetTool.gruppeG', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(50, 1, 'wcf.page.bnetTool.gruppeH', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(51, 1, 'wcf.page.bnetTool.gruppeH', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(52, 1, 'wcf.page.bnetTool.gruppeH', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(53, 1, 'wcf.page.bnetTool.gruppeH', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(54, 1, 'wcf.page.bnetTool.gruppeH', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(55, 1, 'wcf.page.bnetTool.gruppeH', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(56, 1, 'wcf.page.bnetTool.gruppeH', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(57, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(58, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(59, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(60, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(61, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(62, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(63, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(64, 1, 'wcf.page.bnetTool.achtelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(65, 1, 'wcf.page.bnetTool.viertelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(66, 1, 'wcf.page.bnetTool.viertelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(67, 1, 'wcf.page.bnetTool.viertelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(68, 1, 'wcf.page.bnetTool.viertelfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(69, 1, 'wcf.page.bnetTool.halbfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(70, 1, 'wcf.page.bnetTool.halbfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(71, 1, 'wcf.page.bnetTool.finale', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(72, 1, 'wcf.page.bnetTool.kleinesfinale', NULL, NULL, NULL, NULL, NULL, 1, NULL);             