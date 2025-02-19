/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : k2

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 22/01/2025 17:32:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prezime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `e_mail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `korisnicko_ime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lozinka` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for knjige
-- ----------------------------
DROP TABLE IF EXISTS `knjige`;
CREATE TABLE `knjige`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `autor` varchar(200) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NULL DEFAULT NULL,
  `naslov` varchar(200) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NULL DEFAULT NULL,
  `sazetak` text CHARACTER SET utf8 COLLATE utf8_slovenian_ci NULL,
  `protagonist` varchar(200) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NULL DEFAULT NULL,
  `broj_stranica` int NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT 0,
  `godina_izdavanja` varchar(4) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NULL DEFAULT NULL,

  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2703 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci COMMENT = 'InnoDB free: 9216 kB' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of knjige
-- ----------------------------
INSERT INTO `knjige` VALUES (4, 'Rebecca Yarros', 'Četvrto krilo', 'Dobro došli u surovi i elitni svijet vojnog učilišta za jahače zmajeva.
Dvadesetogodišnja Violet Sorrengail trebala je pohađati Kvadrant pisara i živjeti mirnim životom okružena knjigama. Međutim, njezina majka, ujedno nemilosrdna generalica zbora, naredila je Violet da se pridruži stotinama kandidata koji teže završiti po život opasnu obuku i postati elita kraljevstva: jahači zmajeva. 
A kad si sitna, niska i krhka, smrt vreba iza svakog ugla… jer zmajevi se ne združuju s nejakim ljudskim bićima. Spale ih. Kao da joj sve to nije dosta, Violet je trn u oku i prilično poželjna meta svima onima koji zamjeraju njezinoj majci krvavo gušenje pobune protiv kraljevstva. Violet će se morati osloniti na svoju domišljatost da preživi.
Hoće li joj Xaden Riorson, prokleto privlačan momak, a ujedno i potomak obitelji koja prezire njezinu majku, u tome pomoći ili odmoći?
Može li mu uopće vjerovati?
Prijatelji, neprijatelji, ljubavnici. Svi u Vojnom učilištu Basgiath imaju vlastiti cilj. Jer jednom kad si unutra, postoje samo dva izlaza: diploma ili smrt.', 'Violet Sorrengail', '548\r\n', 0, '2023');
INSERT INTO `knjige` VALUES (5, 'Rebecca Yarros', 'Željezni plamen', 'Svi su očekivali da Violet Sorrengail neće preživjeti prvu godinu Vojnog učilišta Basgiath – ni ona sama nije bila sigurna da je u stanju odraditi sve zadatke koji su stavljeni pred nju. Ali Vršidba je bila tek prva nemoguća kušnja… Sad počinje prava obuka, a Violet se već pita kako sačuvati živu glavu. Nije problem samo u tome što je obuka mukotrpna i okrutna, čak ni u tome što je osmišljena da rastegne jahačeve sposobnosti da trpi bol onkraj svih granica – tu je i novi podzapovjednik, kojemu je osobna misija pokazati Violet koliko je točno bespomoćna – i koliko će sve biti lakše ako izda muškarca kojeg voli. Iako je Violetino tijelo slabije i krhkije od ostalih, ona i dalje ima svoj um – i željeznu volju. A vodstvo zaboravlja na najvažniju lekciju koju ju je Basgiath naučio: jahači zmajeva kreiraju vlastita pravila. Dok se događaji izmjenjuju munjevitom brzinom, a okolnosti na Učilištu mijenjaju iz dana u dan, Violet je uvjerena kako je više ništa ne može iznenaditi. Međutim, jedan događaj mogao bi joj promijeniti život iz temelja…', 'Violet Sorrengail', '776\r\n', 0, '2024');
INSERT INTO `knjige` VALUES (12, 'Jorn Lier Horst, Thomas Enger', 'Odbrojavanje', 'POZNATOJ SPORTAŠICI, KOJA JE UPRAVO OBJAVILA INTRIGANTNU BIOGRAFIJU, GUBI SE SVAKI TRAG. NIJE JEDINA… Kad se počnu nizati ubojstva, policijskom inspektoru Alexanderu Blixu jasno je da je slučaj složeniji nego što se čini, i da nemaju posla s ‘običnim’ ubojicom. TKO JE SLJEDEĆI? Novinarka Emma Ramm, koja se inače bavi slavnima, spletom okolnosti postane dijelom krvave slagalice. Ubojica je sve maštovitiji… GDJE JE KRAJ? Žrtve se nižu, jedna za drugom. Hoće li neuhvatljivi psihopat stati na ‘jedinici’? Ili krvava brojalica završava nulom? I tko će biti posljednja žrtva?
PRVI ZAJEDNIČKI ROMAN NAGRAĐIVANIH NORVEŠKIH PISACA KRIMIĆA
Inspektor Alexander Blix i celebrity novinarka Emma Ramm pokušat će razotkriti serijskog ubojicu gladnog publiciteta, u eksplozivnom romanu koji nezaustavljivo osvaja čitatelje i kritiku diljem Europe.', 'Alexander Blix', '338\r\n', 0, '2023');
INSERT INTO `knjige` VALUES (22, 'Hannah Grace', 'Na tankom ledu', 'Anastasia Allen cijeli život marljivo radi kako bi ostvarila svoje snove u umjetničkom klizanju. Uz treninge i studijske obveze, drži se rasporeda koji bi rasplakao i najmotiviranijeg studenta. Uvijek cilja prvo mjesto. Bez iznimke. Ne dopušta zamjene ili prekide u svojem pomno isplaniranom rasporedu. I u njezinu životu nema mjesta za ozbiljnu vezu.
Nathan Hawkins nikad se nije susreo s problemom koji nije mogao riješiti. Kao kapetan hokejaškog tima, on zna da je na njemu sva odgovornost. Požrtvovan je i spreman odreći se svega, čak i svojeg mjesta u ekipi, kako bi zadržao momčad na ledu.
Kada nesporazum natjera dva tima da dijele klizalište, a Anastasijin partner zadobije ozljedu, Nate zamjenjuje hokejaški štap za tajice, a snagu, eksplozivnost i brzinu za eleganciju, okretnost i gracioznost.
Anastasia je sigurna da joj ležerna zabava s Nateom neće izmaknuti čvrsto tlo pod nogama.
Pa ona ionako ne voli hokejaše...', 'Anastasia Allen', '408\r\n', 0, '2023');
INSERT INTO `knjige` VALUES (47, 'Javier Castillo', 'Soul Game', 'Novi eksplozivni triler autorice međunarodnog bestselera, Snježna djevojka - uskoro će postati glavna Netflixova serija!
--
Kada istraživačkoj novinarki Miren Triggs pošalju fotografiju nestale djevojke, to je prvi obećavajući trag u desetljećima dugom neriješenom slučaju koji nastavlja progoniti njezinu obitelj.
Miren je odmah zaintrigirana ovim novim tragom. Može li to biti prvi korak u pronalaženju nestale djevojke - i može li Miren biti ta koja će to učiniti?
Međutim, prije nego što ima priliku slijediti trag, pozvana je da izvijesti o šokantnom ubojstvu. U predgrađu Queensa pronađeno je razapeto tijelo.
Miren je razapeta između zločina iz prošlosti i sadašnjosti. No je li moguće da su ti slučajevi povezani?
I u potrazi za istinom, stavlja li se Miren u vidokrug ubojice?', 'Miren Triggs', '400\r\n', 0, '2020');

-- ----------------------------
-- Table structure for popis zelja
-- ----------------------------
DROP TABLE IF EXISTS `zelja`;
CREATE TABLE `zelja` (

    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `admin_id` INT NOT NULL,         -- ID admina (povezan s tablicom `admin`)
    `knjiga_id` INT NOT NULL,        -- ID knjige (povezan s tablicom `knjige`)
    `status` INT NOT NULL,
    `datum` DATE NOT NULL,
    FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`knjiga_id`) REFERENCES `knjige`(`id`) ON DELETE CASCADE
);

-- ----------------------------
-- Table structure for procitano
-- ----------------------------
DROP TABLE IF EXISTS `procitano`;
CREATE TABLE `procitano` (

    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `admin_id` INT NOT NULL,         -- ID admina (povezan s tablicom `admin`)
    `knjiga_id` INT NOT NULL,        -- ID knjige (povezan s tablicom `knjige`)
    `status` INT NOT NULL,
    `datum` DATE NOT NULL,
    FOREIGN KEY (`admin_id`) REFERENCES `admin`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`knjiga_id`) REFERENCES `knjige`(`id`) ON DELETE CASCADE
);

SET FOREIGN_KEY_CHECKS = 1;
