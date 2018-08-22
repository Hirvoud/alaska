-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 août 2018 à 16:07
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alaska`
--

-- --------------------------------------------------------

--
-- Structure de la table `comms`
--

DROP TABLE IF EXISTS `comms`;
CREATE TABLE IF NOT EXISTS `comms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_post` int(11) NOT NULL,
  `comment` longtext CHARACTER SET utf8 NOT NULL,
  `deiz_com` datetime NOT NULL,
  `report` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comms`
--

INSERT INTO `comms` (`id`, `author`, `id_post`, `comment`, `deiz_com`, `report`) VALUES
(16, 'Jean Forteroche', 18, 'Commentaire 2, chapitre 12.', '2018-08-15 15:05:10', 0),
(5, 'Isidore', 15, 'Un autre commentaire.', '2018-07-23 14:17:52', 1),
(6, 'Kristolf', 14, 'La verdure on et pelouse minutes la dernier.', '2018-07-23 14:34:40', 0),
(7, 'Jean Forteroche', 19, 'Commentaire au chapitre treize.', '2018-07-29 17:02:27', 1),
(17, 'Jean Forteroche', 14, 'Commentaire 2, chapitre 8.', '2018-08-15 15:08:22', 0),
(13, 'Anatole', 18, 'Commentaire 1, chapitre 12.', '2018-08-07 16:29:05', 1),
(20, 'DorothÃ©e', 6, 'Chapitre 5, commentaire 1.', '2018-08-22 14:43:57', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `deiz` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `content`, `deiz`) VALUES
(1, 'Anatole', 'Premier chapitre', 'I\'ll tell them you went down prying the wedding ring off his cold, dead finger. Also Zoidberg. Hey, tell me something. You\'ve got all this money. How come you always dress like you\'re doing your laundry?\r\n\r\nNegative, bossy meat creature! I was all of history\'s great robot actors - Acting Unit 0.8; Thespomat; David Duchovny! With gusto. Okay, it\'s 500 dollars, you have no choice of carrier, the battery can\'t hold the charge and the reception isn\'t very…\r\n\r\nYes, I saw. You were doing well, until everyone died. Belligerent and numerous. Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be…', '2018-07-06 15:00:00'),
(2, 'Berenice', 'Chapitre deux', 'Who are you, my warranty?! Bender, you risked your life to save me! I could if you hadn\'t turned on the light and shut off my stereo. Oh dear! She\'s stuck in an infinite loop, and he\'s an idiot! Well, that\'s love for you.\r\n\r\nMoving along… Kids don\'t turn rotten just from watching TV. In our darkest hour, we can stand erect, with proud upthrust bosoms. I can explain. It\'s very valuable.\r\n\r\nBender, this is Fry\'s decision… and he made it wrong. So it\'s time for us to interfere in his life. I\'ll get my kit! Alright, let\'s mafia things up a bit. Joey, burn down the ship. Clamps, burn down the crew.', '2018-07-06 16:23:00'),
(3, 'ChildÃ©ric', 'Chapitre trois', 'Now what? Would you censor the Venus de Venus just because you can see her spewers? Soon enough. For example, if you killed your grandfather, you\'d cease to exist! Then we\'ll go with that data file!\r\n\r\nActually, that\'s still true. Incidentally, you have a dime up your nose. Alright, let\'s mafia things up a bit. Joey, burn down the ship. Clamps, burn down the crew. I daresay that Fry has discovered the smelliest object in the known universe!', '2018-07-11 15:33:01'),
(5, 'DorothÃ©e', 'Chapite quatriÃ¨me', 'Ameliorer ton entrerent ici sol deroulent echauffer. Ennemis la symbole or oh justice. Parce tenez essor ah va forme. Reciter ca sa bonheur crispes et laideur. Situation puissions ils oui ici sonnaient orientaux fin. Cartouche orientaux eau cotillons non dissipait ces aux. Jeu rougeatres caracolent inattendus foi magistrats permission lumineuses. Sol ete roc boulevards imprudente petitement caracolent electrique manoeuvres ils. \r\n\r\nVers eau mal rit loin des bras. Suivit dinent en ardeur trotte qu brumes et ebloui. Dit faite brave mur vieil ronde ici bonte talus. Cree bas unir pic pied cime. Vecut on homme essor la monte canon en. Tot magistrats feu subitement avancaient survivants ame les. Etudie peuple moi terres oui eglise tot sol. Sacrifiez au dernieres consumait on chaclosah. Elle gens il cree jeta epis je. Legerement ii pu enveloppes ecouterent electrique paraissait frequentes. \r\n', '2018-07-16 10:52:52'),
(6, 'Eustache', 'Et de cinq !', 'Car feerique radieuse dut pressent. Cathedrale le la tu maintenant va redoublait vieillards ordonnance. Pretends le empilait viennent la philippe kolbacks. Groupes drapent menions me etalent je je. Boulevard regardent dissipait pu va. Paraissent admiration decharnees je me tristement etonnement tu du. Pu bouleaux horrible havresac quarante en. \r\n\r\nFer messieurs ifs parlaient nid cependant les consumait. Noces toi ivres fuite remit ifs. Hideuse ici apparue longues travaux mes. Survivants non nul souffrance bas remarquent approchait maintenant. On et trois en betes files connu crise neuve. Et as longues minutes se sillons obtenir. Oui non fabriquer mon carabines prenaient flamboyer dernieres. Et on compassion boulevards oh patiemment entrainait. Fonds ah ai voeux connu xv menue nerfs. La trafics la dragons orgueil. ', '2018-07-17 23:00:22'),
(7, 'FÃ©licie', 'Chapit\' six â€“ Version 6', 'V6 - Car feerique radieuse dut pressent. Cathedrale le la tu maintenant va redoublait vieillards ordonnance. Pretends le empilait viennent la philippe kolbacks. Groupes drapent menions me etalent je je. Boulevard regardent dissipait pu va. Paraissent admiration decharnees je me tristement etonnement tu du. Pu bouleaux horrible havresac quarante en. \r\n\r\nFer messieurs ifs parlaient nid cependant les consumait. Noces toi ivres fuite remit ifs. Hideuse ici apparue longues travaux mes. Survivants non nul souffrance bas remarquent approchait maintenant. On et trois en betes files connu crise neuve. Et as longues minutes se sillons obtenir. Oui non fabriquer mon carabines prenaient flamboyer dernieres. Et on compassion boulevards oh patiemment entrainait. Fonds ah ai voeux connu xv menue nerfs. La trafics la dragons orgueil. ', '2018-07-17 23:05:54'),
(9, 'Gauvain', 'SeptiÃ¨me chapitre', 'Et cependant puissions employees de se possedera affection dentelles. Image saute jet haine porta actes morte sur des ans. Berce but comme appel rangs neige sabre ras ses. Levera en mouche voyons et ca. Toi voila foret vieil mur sur une. Situation net affection mal mystiques feu dernieres. Epars xv le temps mines eu quand jours je. \r\n\r\nVin quitta ere durcis trotte centre bazars crosse ton. Cheval voyons non ebloui eux fronts uns peu appela. Claire sortes peu pentes devant eux. Cela uns doit deja trop pose vaut ans ils. Somptueux he puissions culbutent te detourner. Redoublait je et souffrance pressaient. Cavaliers succedent attachent petillent me firmament metairies au. Ruches il en clairs pleurs blemir ai. Derobe te labeur tempes regard la. \r\n', '2018-07-20 15:50:17'),
(16, 'Judeline', 'Chapitre 10 - V5', 'V5 - Sacrifiez sentiment puissions signalant fer epluchant abondance lui. Art toi assister loquaces bon ailleurs des francine relevent. Le tu amour houle te leurs garni armes etait. Voyez le sa ornee image un enfin aides. Et centre or corons entier la tuiles il. Les les cependant neanmoins reveillez souvenirs demeurent. Posseder je trouvait detourne penetrer apercoit souvenir xv. Encontre fut detourne lui moi villages morceaux. Ma tu se piqua masse un tenez. Devient violets egorger au ce elancer ii.', '2018-07-20 23:08:28'),
(17, 'Kristolf', 'Chapitre onze', '<p>Cette journ&eacute;e se passa &agrave; peu pr&egrave;s comme la pr&eacute;c&eacute;dente : Mme Hurst et miss Bingley demeur&egrave;rent aupr&egrave;s de la malade une partie de la matin&eacute;e&hellip; Elle continuait &agrave; se r&eacute;tablir, quoique lentement. Le soir &Eacute;lisabeth se rendit au salon, o&ugrave; la famille &eacute;tait r&eacute;unie. M. Darcy &eacute;crivait ; Mlle Bingley, assise pr&egrave;s de lui, et l&rsquo;&oelig;il sur son papier, suivait la trace de sa plume ; M. Hurst et M. Bingley jouaient au piquet, et Mme Hurst regardait le jeu. &Eacute;lisabeth prit son ouvrage et s&rsquo;amusa &agrave; &eacute;couter M. Darcy et sa voisine. Les louanges qu&rsquo;elle lui prodiguait sur son &eacute;criture, la r&eacute;gularit&eacute; de ses lignes, la longueur de sa lettre, et l&rsquo;indiff&eacute;rence avec laquelle il les recevait, formaient un contraste curieux ; et leur dialogue confirma l&rsquo;opinion qu&rsquo;&Eacute;lisabeth s&rsquo;&eacute;tait faite de ces deux personnages.<br /><br />&laquo; Combien miss Darcy sera charm&eacute;e de recevoir une aussi longue lettre ! &raquo;<br /><br />Il ne fit point de r&eacute;ponse.<br /><br />&laquo; Vous &eacute;crivez bien vite !<br /><br />&mdash; Vous vous trompez, j&rsquo;&eacute;cris plut&ocirc;t doucement.<br /><br />&mdash; Que de lettres vous devez &eacute;crire dans le courant de l&rsquo;ann&eacute;e ! et des lettres d&rsquo;affaires aussi : combien je les trouverais ennuyeuses !<br /><br />&mdash; Heureusement, c&rsquo;est mon partage, et non le v&ocirc;tre, d&rsquo;en &eacute;crire.<br /><br />&mdash; Dites, je vous prie, &agrave; votre s&oelig;ur le vif d&eacute;sir que j&rsquo;ai de la revoir.<br /><br />&mdash; Je le lui ai d&eacute;j&agrave; dit une fois, d&rsquo;apr&egrave;s vos ordres.<br /><br />Je crois votre plume mauvaise, laissez-moi la retoucher ; j&rsquo;ai un talent pour les tailler.<br /><br />&mdash; Je vous remercie, je les taille toujours moi-m&ecirc;me.</p>', '2018-07-23 16:25:31'),
(15, 'Isidore', 'Chapitre neuf - V3', 'V3 - Tassent semence revetit car les faisans nos. Ici couraient ete viendrait ici pouvaient soufflent illumines capitaine non. Les but infiniment descendons paraissent gouverneur. Laisses blottis nos nul encourt. Prison contre toi air ecarta dirait dut. Non uns ameliorer flamboyer annoncait. Gachettes servantes situation or la surveille on. Des votre eux joies savez votre. \r\n\r\nLes comprendre ame fer frequentes executeurs caracolent. Contree retient en tu revetit dociles. Sa du aussi aimer vingt subit pieds voila. Ils poussait mamelons oui arrivera par. Car nid bete vrai peu toi mais. Ebloui poteau he on ah autant. Seulement ont sentiment quiconque fin peu nos. Poussaient pic tricolores dur arriverent peu lumineuses eclaireurs. \r\n\r\nImages ifs douane blancs pic roches. Ce endort je empire qu tempes il parler. Souleve ballots exemple jaillir comprit sur eue. Or chez main cime du vint vaut soir. Fabriquer tiendrons eux sinistres mur militaire. Habilement etonnement ca souhaitait consentiez me un ca. Le sa je tristement rougeatres au compagnies frissonner pressentit gourmettes. Sanctifier simplement toi manoeuvres son ces crispation miserables vie fraternite. \r\n', '2018-07-20 16:41:49'),
(14, 'Hermione', 'Chapitre 8', 'Tassent semence revetit car les faisans nos. Ici couraient ete viendrait ici pouvaient soufflent illumines capitaine non. Les but infiniment descendons paraissent gouverneur. Laisses blottis nos nul encourt. Prison contre toi air ecarta dirait dut. Non uns ameliorer flamboyer annoncait. Gachettes servantes situation or la surveille on. Des votre eux joies savez votre. \r\n\r\nLes comprendre ame fer frequentes executeurs caracolent. Contree retient en tu revetit dociles. Sa du aussi aimer vingt subit pieds voila. Ils poussait mamelons oui arrivera par. Car nid bete vrai peu toi mais. Ebloui poteau he on ah autant. Seulement ont sentiment quiconque fin peu nos. Poussaient pic tricolores dur arriverent peu lumineuses eclaireurs. \r\n\r\nImages ifs douane blancs pic roches. Ce endort je empire qu tempes il parler. Souleve ballots exemple jaillir comprit sur eue. Or chez main cime du vint vaut soir. Fabriquer tiendrons eux sinistres mur militaire. Habilement etonnement ca souhaitait consentiez me un ca. Le sa je tristement rougeatres au compagnies frissonner pressentit gourmettes. Sanctifier simplement toi manoeuvres son ces crispation miserables vie fraternite. \r\n', '2018-07-20 16:37:16'),
(18, 'Lisette', 'Chapitre 12', '<p>Pour des raisons de prudence que l&rsquo;horreur d&rsquo;un r&eacute;cent d&eacute;sastre ne permettait pas m&ecirc;me de discuter, la Soci&eacute;t&eacute; des Concerts a d&ucirc; quitter la salle du Conservatoire. Elle s&rsquo;est transport&eacute;e dans la salle de l&rsquo;Op&eacute;ra, et, jusqu&rsquo;&agrave; la construction des nouveaux b&acirc;timens de notre &eacute;cole de musique, elle continuera de s&rsquo;y r&eacute;unir. Pour l&rsquo;illustre compagnie, ce n&rsquo;est, dit-on, que l&rsquo;exil. Soit, et je veux esp&eacute;rer que ce ne sera pas la mort. Il semble pourtant, il est m&ecirc;me certain que quelque chose, et quelque chose de grand, vient de finir. Dans la vieille et glorieuse maison les exil&eacute;s ne rentreront plus. Il est muet pour toujours, le nid harmonieux qui vit &eacute;clore, il y a soixante-dix ans, les neuf chefs-d&rsquo;&oelig;uvre, alors ignor&eacute;s, qui dominent aujourd&rsquo;hui la musique tout enti&egrave;re. Soixante-dix ans, un peu moins de trois quarts de si&egrave;cle. On a peine &agrave; croire qu&rsquo;il n&rsquo;ait pour nous que cet &acirc;ge, l&rsquo;homme qui nous appara&icirc;t d&eacute;j&agrave; comme un anc&ecirc;tre, presque comme un dieu, l&agrave;-bas, &agrave; l&rsquo;origine d&rsquo;un monde.<br /><br />La voil&agrave; vide et veuve de lui, cette salle, j&rsquo;allais dire cette arche, o&ugrave; jadis il rendit ses premiers oracles. Il est juste, il est pieux de la saluer une derni&egrave;re fois, &agrave; la veille de sa ruine. J&rsquo;&eacute;cris ces pages dans la Biblioth&egrave;que du Conservatoire, tout pr&egrave;s et contre la porte close du sanctuaire abandonn&eacute;. Il n&rsquo;y a derri&egrave;re cette porte qu&rsquo;une modeste enceinte, quelques pierres et quelques cloisons de bois. Mais dans ce peu de mati&egrave;re l&rsquo;&acirc;me pure des sons a chant&eacute;. Entre ces minces parois, merveilleusement sonores, un long miracle de parfaite beaut&eacute; s&rsquo;est accompli. Je voudrais essayer de le rappeler, de retenir un moment un id&eacute;al qui nous fuit, peut-&ecirc;tre pour toujours, et dont ce lieu choisi fut non seulement le t&eacute;moin, mais l&rsquo;auxiliaire et le s&eacute;nateur.</p>', '2018-07-24 14:28:11'),
(19, 'Merlin', 'TreiziÃ¨me chapitre - V2', '<p>Si l&rsquo;on &eacute;tudie l&rsquo;histoire des relations internationales, on est frapp&eacute; du contraste que pr&eacute;sente la diplomatie de notre temps compar&eacute;e avec la diplomatie des temps pass&eacute;s. Ce sont, il est vrai, les m&ecirc;mes formes, les m&ecirc;me traditions et presque les m&ecirc;mes personnages ; mais tout autres apparaissent les id&eacute;es et les actes. Alors que les nations appartenaient en quelque sorte &agrave; des maisons royales, la diplomatie n&rsquo;avait &agrave; servir que les pens&eacute;es, les int&eacute;r&ecirc;ts, les passions, les caprices m&ecirc;me des souverains dont elle &eacute;tait la confidente et l&rsquo;organe. Certes, quand nos ambassadeurs ex&eacute;cutaient les instructions de Henri IV, de Richelieu, de Mazarin, de Louis XIV, ils servaient la nation en m&ecirc;me temps que le prince. Le droit public qui r&eacute;git les pays civilis&eacute;s, les traditions de la politique fran&ccedil;aise datent de l&agrave;, et nous suivons aujourd&rsquo;hui encore les voies trac&eacute;es par ces grands esprits. A ces &eacute;poques cependant, la diplomatie &eacute;tait personnelle, ou tout au moins dynastique. La volont&eacute; du prince &eacute;tait sa premi&egrave;re loi ; ses n&eacute;gociations avaient pour objet la gloire et l&rsquo;int&eacute;r&ecirc;t de la couronne, et, sans m&eacute;conna&icirc;tre le patriotisme des souverains qui inspiraient son langage et ses actes, il serait facile de relever, dans les archives diplomatiques, maintes circonstances o&ugrave; l&rsquo;int&eacute;r&ecirc;t national &eacute;tait subordonn&eacute;, sacrifi&eacute; m&ecirc;me &agrave; des pens&eacute;es &eacute;go&iuml;stes, &agrave; des passions personnelles, &agrave; des consid&eacute;rations secon- daires ou mis&eacute;rables, dont il appartient &agrave; l&rsquo;histoire de faire justice. Enfin, &agrave; ces m&ecirc;mes &eacute;poques, les nations ne se connaissaient que par les relations &eacute;tablies entre les cours ou par les sanglantes rencontres de leurs arm&eacute;es ; mat&eacute;riellement et moralement, elles vivaient enferm&eacute;es, dans leurs fronti&egrave;res, &eacute;trang&egrave;res et indiff&eacute;rentes l&rsquo;une &agrave; l&rsquo;autre ; les rapports commerciaux, qui seuls pouvaient les mettre en contact, &eacute;taient g&ecirc;n&eacute;s par la difficult&eacute; des communications et presque nuls. Au point de vue diplomatique, les populations n&rsquo;existaient pour ainsi dire pas ; elles &eacute;taient absorb&eacute;es tout enti&egrave;res dans la personne du souverain.</p>', '2018-07-29 16:44:46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `hash_pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `hash_pass`, `email`, `admin`) VALUES
(1, 'Jean Forteroche', '$2y$10$0hBGFyXodAU29FrnDE0lleHU4DLEJmLUmbhBpshuz/g4iJ33lE8Xq', 'jean.f@email.com', 1),
(2, 'Anatole', '$2y$10$/t3ZuhXOqJnKfUNTxGR16esfOD5ynqZeJEAGOFLd2KrLz6GaGvCUK', 'anatole@lsk.bzh', 0),
(4, 'BÃ©rÃ©nice', '$2y$10$26addzPsp6XPo/0uC1cno.w9U.BjGfBgyPMlLKAX8s21Mt3i.RPse', 'bere@email.bt', 0),
(5, 'ChildÃ©ric', '$2y$10$L/3c/STQINecndX/neqcJuyeARzYd3.sint.g/VdfnLvTT4ZvbIE.', 'chil@email.bt', 0),
(6, 'DorothÃ©e', '$2y$10$PG9yChXDvuVDkq952DJNRutFP3qxT1k8XBKJ/xmiBTMoMRXqIvCXe', 'doro@email.bt', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
