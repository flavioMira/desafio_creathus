-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: catalogo
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filmes`
--

DROP TABLE IF EXISTS `filmes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filmes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filmes`
--

LOCK TABLES `filmes` WRITE;
/*!40000 ALTER TABLE `filmes` DISABLE KEYS */;
INSERT INTO `filmes` VALUES (1,'Parasita','Bong Joon-ho','img/thumbnails/K3YMzs4b7YOrtz6QYyWYta3uY1dW0yk6ujhYl3wf.png','img/backgrounds/En64HuTCOo7KTCt3lv0kvfuFA9k8KuyGR2VmDds4.png','Toda a família de Ki-taek está desempregada, vivendo em um porão sujo e apertado. Por obra do acaso, ele começa a dar aulas de inglês para uma garota de família rica. Fascinados com a vida luxuosa destas pessoas, pai, mãe e filhos bolam um plano para se infiltrar também na abastada família, um a um. No entanto, os segredos e mentiras necessários à ascensão social cobram o seu preço.','Drama',2019,165,'2023-02-19 02:56:13','2023-02-19 02:56:13'),(2,'Mulher-Maravilha','Patty Jenkins','img/thumbnails/jJX9TCQiarfmfuncMX6p9v9wbVx7bB9kwptUlaLZ.jpg','img/backgrounds/0PXgBNnHo9MqgB0vOKTDr1Vmth6nMt6LQJPrZZbh.png','Treinada desde cedo para ser uma guerreira imbatível, Diana Prince nunca saiu da paradisíaca ilha em que é reconhecida como princesa das Amazonas. Quando o piloto Steve Trevor sofre um acidente e cai em uma praia do local, ela descobre que uma guerra sem precedentes está se espalhando pelo mundo e decide deixar seu lar certa de que pode parar o conflito. Lutando para acabar com a guerra, Diana percebe o alcance de seus poderes e sua verdadeira missão na Terra.','Ação/Aventura',2017,181,'2023-02-19 03:03:41','2023-02-19 03:03:41'),(3,'Liga da Justiça','Zack Snyder','img/thumbnails/SwdeBmL4UO9y8SXT6sQP4FFWSJ43s2KoyRsBCsZM.jpg','img/backgrounds/jBoFyMcooByucSPWMkguvijbRfLlutdYhxKDPBQy.jpg','Impulsionado pela restauração de sua fé na humanidade e inspirado pelo ato altruísta do Superman, Bruce Wayne convoca sua nova aliada Diana Prince para o combate contra um inimigo ainda maior, recém-despertado. Juntos, Batman e Mulher-Maravilha buscam e recrutam com agilidade um time de meta-humanos, mas mesmo com a formação da liga de heróis sem precedentes, pode ser tarde demais para salvar o planeta de um catastrófico ataque.','Ação/Aventura',2017,185,'2023-02-19 03:06:59','2023-02-19 03:06:59'),(4,'Gênio Indomável','Gus Van Sant','img/thumbnails/ZCppREIzNnwZOTRfs4EXQsOwoMfnkvgXVfjYbxZE.png','img/backgrounds/I2lPaBYh7vQiOcOxkTRagPmTvSlt2PUby93meLRD.png','Will é um rapaz brilhante e tem um grande talento para a matemática, mas trabalha como faxineiro em uma famosa universidade. O psicólogo Sean Maguire o ajuda a formar sua identidade e lidar com as emoções, direcionando-o na vida.','Drama/Romance',1997,166,'2023-02-19 03:08:50','2023-02-19 03:08:50'),(5,'Tempos Modernos','Charles Chapplin','img/thumbnails/ByXznjI8uKyn9yQhrhqJhqBDVkqkjXITnGLO5QVQ.jpg','img/backgrounds/6zxCJWrjWNr9wJ3Sa7n0VHguMiobYWfyrou10ZSg.jpg','O icónico Vagabundo está empregado em uma fábrica, onde as máquinas inevitável e completamente o dominam e vários percalços o levam para a prisão. Entre suas passagens pela prisão, ele conhece e faz amizade com uma garota órfã. Ambos, juntos e separados, tentam lidar com as dificuldades da vida moderna, o Vagabundo trabalhando como garçom e, eventualmente, um artista.','Comédia/Romance',1936,77,'2023-02-19 03:14:26','2023-02-19 03:14:26'),(6,'O Poderoso Chefão','Francis Ford Coppola','img/thumbnails/3Nk701a4Id4Kaww6U7FsqmZLnvoKwOQbLbvkLZsk.jpg','img/backgrounds/05Si4bmEGFO10NQvuiMafFom4iVnYWZxIZBSNUVj.jpg','Uma família mafiosa luta para estabelecer sua supremacia nos Estados Unidos depois da Segunda Guerra Mundial. Uma tentativa de assassinato deixa o chefão Vito Corleone incapacitado e força os filhos Michael e Sonny a assumir os negócios.','Crime/Drama',1972,180,'2023-02-19 03:17:49','2023-02-19 03:17:49'),(7,'O Poderoso Chefão 2','Francis Ford Coppola','img/thumbnails/3f5eoZY9qAaDeRk6J5tDm8JevHEZ3VQqTkjKb2gw.jpg','img/backgrounds/N2psyx564ZFpI3srd6hnSfyFUR0aYS9t4Pf0PxAK.jpg','Depois da máfia matar sua família, o jovem Vito foge da sua cidade na Sicília e vai para os Estados Unidos. Lá, ele assassina Black Hand Fanucci, que exigia dos comerciantes uma parte dos seus ganhos. Com a morte de Fanucci, o poder de Vito cresce, mas sua família é o que mais importa para ele. Morando agora no Lago Tahoe, Michael planeja fazer incursões em Las Vegas e Havana com negócios ligados ao lazer, mas descobre que aliados como Hyman Roth estão tentando matá-lo.','Crime/Drama',1974,402,'2023-02-19 03:20:00','2023-02-19 03:20:00'),(8,'O Poderoso Chefão 3','Francis Ford Coppola','img/thumbnails/Aj8K0m80iYcmdEGXzW7P1U4J3wQ2Cmyx0xjoFXJG.jpg','img/backgrounds/wd3WBuQV9DjjT7A1qaIcFDMXqTCKbIDlCOfLBlR3.png','The Godfather Part III é um filme americano de 1990, dirigido por Francis Ford Coppola e com roteiro baseado em livro de Mario Puzo. O roteiro insere versões para recontar e interligar de forma fictícia eventos reais, tais como a súbita morte do Papa João Paulo I e o escândalo do Banco Ambrosiano.','Crime/Drama',1990,170,'2023-02-19 03:22:39','2023-02-19 03:22:39'),(9,'2001 - Uma Odisseia no Espaço','Stanley Kubrick','img/thumbnails/VhvpAn3wpd6tedBsfKANXYYYYNv7Ny0PHeFy3CT5.png','img/backgrounds/SRdStglFb8G63SM6eWidKGpOUcEfLQTGFPR9gHUa.jpg','Uma estrutura imponente preta fornece uma conexão entre o passado e o futuro nesta adaptação enigmática de um conto reverenciado de ficção científica do autor Arthur C. Clarke. Quando o Dr. Dave Bowman e outros astronautas são enviados para uma misteriosa missão, os chips de seus computadores começam a mostrar um comportamento estranho, levando a um tenso confronto entre homem e máquina que resulta em uma viagem alucinante no espaço e no tempo.','Aventura',1968,139,'2023-02-19 03:25:55','2023-02-19 03:25:55'),(10,'Faça a Coisa Certa','Spike Lee','img/thumbnails/B4jHPlNaHt2kAAECc1IA64NW7em6v1Y2KiVG6AZ3.png','img/backgrounds/p2CeZcPHnBaJ2ArZBbMdlgWgZ5H6Hs5bcJ3Ehhx7.jpg','Salvatore \"Sal\" Fragione é dono de uma pizzaria italiana no Brooklyn que tem uma parede cheia de nomes de artistas famosos. Um dos moradores do bairro, Buggin\' Out, fica indignado ao ver que na parede só há nomes de artistas italianos. Ele acha que um estabelecimento localizado no Brooklyn deveria ter o nome de atores afrodescendentes, mas Sal não concorda. A parede se torna, então, motivo de ódio para Buggin\' Out e outros moradores do bairro.','Drama/Comédia',1989,120,'2023-02-19 03:29:22','2023-02-19 03:29:22'),(11,'A Vida é Bela','Roberto Benigni','img/thumbnails/nOzhaSwG6VoaDQz8pCi54bWUF4S4M4QVBDq4Jly4.jpg','img/backgrounds/sfoS7fbDkDNAkixuHGEItxUaQUsszlDW6gW1mXvj.jpg','Durante a Segunda Guerra Mundial na Itália, o judeu Guido e seu filho Giosué são levados para um campo de concentração nazista. Afastado da mulher, ele precisa usar sua imaginação para fazer o menino acreditar que estão participando de uma grande brincadeira, com o intuito de protegê-lo do terror e da violência ao redor.','Drama/Gerra',1999,116,'2023-02-19 03:31:53','2023-02-19 03:31:53'),(12,'Cidade de Deus','Fernando Meirelles','img/thumbnails/VWTvqg4wvFTwdgTV9HCdE5dTdIHqegA8rkDzuTYP.jpg','img/backgrounds/eYm4vM5rth4OAYyQ54mkNw701e5sWgED9gpcxWts.jpg','Buscapé é um jovem pobre, negro e sensível, que cresce em um universo de muita violência. Ele vive na Cidade de Deus, favela carioca conhecida por ser um dos locais mais violentos do Rio. Amedrontado com a possibilidade de se tornar um bandido, Buscapé é salvo de seu destino por causa de seu talento como fotógrafo, o qual permite que siga carreira na profissão. É por meio de seu olhar atrás da câmera que ele analisa o dia a dia da favela em que vive, onde a violência aparenta ser infinita.','Drama/Crime',1999,130,'2023-02-19 03:34:24','2023-02-19 03:34:24'),(13,'Corra!','Jordan Peele','img/thumbnails/4vkrhIQ5IPHvMw0zUq3Hxr0Z66yTRrNRz6rveNV8.jpg','img/backgrounds/TNqOqoA4RPU5e8oYQAQ1T8dG4lq5FvViZa7F2pf2.jpg','Chris é um jovem fotógrafo negro que está prestes a conhecer os pais de Rose, sua namorada caucasiana. Na luxuosa propriedade dos pais dela, Chris percebe que a família esconde algo muito perturbador.','Terror',2017,104,'2023-02-19 03:38:02','2023-02-19 03:38:02'),(14,'O Iluminado','Stanley Kubrick','img/thumbnails/kvriBjJZ1CHtT7zO7E70OeTz5anQfYBpoEl85qzA.jpg','img/backgrounds/UqbDxRcIM5KuvWvAiW0IdkCGhazv2SkI5rWjuQAE.jpg','Jack Torrance se torna caseiro de inverno do isolado Hotel Overlook, nas montanhas do Colorado, na esperança de curar seu bloqueio de escritor. Ele se instala com a esposa Wendy e o filho Danny, que é atormentando por premonições. Jack não consegue escrever e as visões de Danny se tornam mais perturbadoras. O escritor descobre os segredos sombrios do hotel e começa a se transformar em um maníaco homicida, aterrorizando sua família.','Terror',1980,206,'2023-02-19 03:40:26','2023-02-19 03:40:26'),(15,'Túmulo dos Vagalumes','Isao Takahata','img/thumbnails/lA9tQnz0FTNKj3aB3Igcqjio8OQFD78oijrKtkM8.jpg','img/backgrounds/nA1Kspde5qrY9nXQBFrwImnr9cpBwTl98qmyLaUi.jpg','Os irmão Setsuko e Seita vivem no Japão em meio a Segunda Guerra Mundial. Após a morte da mãe em um bombardeio e a convocação do pai para a Guerra, eles vão morar com alguns parentes. Insatisfeitos, saem da cidade e acabam em um abrigo na floresta.','Guerra/Drama',1988,129,'2023-02-19 03:43:31','2023-02-19 03:43:31'),(16,'Star Wars Episódio I – A Ameaça Fantasma','George Lucas','img/thumbnails/df46frc8DT3MX4aCxrEFCc8YgNu8KFLPtaONNR37.jpg','img/backgrounds/m4pp5JCjudFNSasALvLqqR7WMco8otgaPk6IvjjG.jpg','Obi-Wan e seu mentor embarcam em uma perigosa aventura na tentativa de salvar o planeta das garras de Darth Sidious. Durante a viagem, eles conhecem um habilidoso menino e decidem treiná-lo para se tornar um Jedi. Mas o tempo irá revelar que as coisas nem sempre são o que aparentam ser.','Ficção',1999,136,'2023-02-19 03:52:51','2023-02-19 03:52:51'),(17,'Star Wars Episódio 2 – Ataque dos Clones','George Lucas','img/thumbnails/CKGozSzfbF6cdDwi33gtzj9jU1nCqfBYRxUibURn.jpg','img/backgrounds/kYgpi3lUmDhmtGWSdLxs7990tNd8OPwnxeSsFER6.jpg','Tentado por promessas de poder, Anakin Skywalker se aproxima de Darth Sidious e participa de um plano para acabar com os Cavaleiros Jedi.','Ficção',2002,142,'2023-02-19 03:54:40','2023-02-19 03:54:40'),(18,'Star Wars Episódio 3 – A Vingança dos Sith','George Lucas','img/thumbnails/GnscExpzBLUXPK2Gi9v5uG7vyuzUXOXdWBKnP6Xa.jpg','img/backgrounds/ljXtkXHTyeQ260KvsCocJY4JTR9Q7YuDy9fnPKlR.jpg','As Guerras Clônicas estão em pleno andamento e Anakin Skywalker mantém um elo de lealdade com Palpatine, ao mesmo tempo em que luta para que seu casamento com Padmé Amidala não seja afetado por esta situação. Seduzido por promessas de poder, Anakin se aproxima cada vez mais de Darth Sidious até se tornar o temível Darth Vader. Juntos eles tramam um plano para aniquilar de uma vez por todas com os cavaleiros jedi.','Ficção',2005,140,'2023-02-19 03:57:42','2023-02-19 03:57:42'),(19,'Coringa','Todd Phillips','img/thumbnails/p8Rtnay0sPi9LzBxuz9ABJm7fAplQ8faxwJO0ksf.png','img/backgrounds/9G5C2oxI011dJ7HN4r9gupsEpgQEsd4jIW3D1r7b.jpg','Isolado, intimidado e desconsiderado pela sociedade, o fracassado comediante Arthur Fleck inicia seu caminho como uma mente criminosa após assassinar três homens em pleno metrô. Sua ação inicia um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.','Drama',2019,122,'2023-02-19 04:00:17','2023-02-19 04:00:17'),(20,'A Teoria de Tudo','James Marsh','img/thumbnails/F1DwxVFs0eLjXUkBX6HYK5cprjrVblFYTaYeEyWn.jpg','img/backgrounds/WtID5gRB7j51sXz0cgAEzljG914qP8lhSD59WVKM.jpg','Baseado na história de Stephen Hawking, o filme expõe como o astrofísico fez descobertas relevantes para o mundo da ciência, inclusive relacionadas ao tempo. Também retrata seu romance com Jane Wilde, uma estudante de Cambridge que viria a se tornar sua esposa. Aos 21 anos de idade, Hawking descobriu que sofria de uma doença motora degenerativa, mas isso não o impediu de se tornar um dos maiores cientistas da atualidade.','Drama',2014,123,'2023-02-19 04:04:07','2023-02-19 04:04:07'),(21,'Uma Mente Brilhante','Ron Howard','img/thumbnails/BVXDOvZS0Ynt935RDBAYRTrjjI35J14VUMiXDsUc.jpg','img/backgrounds/6m0MJ69eLb5uxVwnKa9UeEyVPsyHj3Akkdi8VJOB.jpg','John Forbes Nash Jr. é reconhecido como gênio da matemática aos 21 anos. Cedo, casa-se com uma bela mulher, mas logo começa a dar sinais de esquizofrenia. Após anos de luta contra a doença, ele acaba ganhando o prêmio Nobel.','Drama',2001,135,'2023-02-19 04:06:36','2023-02-19 04:06:36'),(22,'O predestinado','Michael Spierig','img/thumbnails/kkzRlRbMks5Y62rb76YOaPrqZxrLH8erjdWlORP1.jpg','img/backgrounds/MzNPhRYsqf9nfzLlVeRQ6RSDx1HoHsHsWOMFqcpl.jpg','Um agente precisa viajar no tempo para impedir a ação de um criminoso responsável por um ataque que mata milhares de pessoas.','Ficção',2014,97,'2023-02-19 04:09:05','2023-02-19 04:09:05'),(23,'Tenet','Christopher Nolan','img/thumbnails/ttJbPCNpv8BkIExn8oOyd0N6sv33gXDpKmFMh063.jpg','img/backgrounds/MQVIXwPea3SwGqxC5fE8puJaNstX5Ki0RHUdDKRl.jpg','Um agente secreto embarca em uma missão perigosa para evitar o início da Terceira Guerra Mundial.','Ficção',2020,150,'2023-02-19 04:11:38','2023-02-19 04:11:38'),(24,'Interestelar','Christopher Nolan','img/thumbnails/o99koFORfrIVwAhmdflHQB7UwjYMk4h1sfwMyqPI.jpg','img/backgrounds/Q2wsRjGhwpHLiLHYya6FDx7jZvtjPlfSQW4t8E59.jpg','As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.','Ficção',2014,169,'2023-02-19 04:14:02','2023-02-19 04:14:02');
/*!40000 ALTER TABLE `filmes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (16,'2014_10_12_000000_create_users_table',1),(17,'2014_10_12_100000_create_password_resets_table',1),(18,'2019_08_19_000000_create_failed_jobs_table',1),(19,'2019_12_14_000001_create_personal_access_tokens_table',1),(20,'2023_02_15_180233_create_filmes_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `nacionality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_uf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `telphone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Flávio','Mira','1993-12-13',NULL,NULL,NULL,'M',1,'71989262615','flaviomira13@gmail.com',NULL,'$2y$10$agrXdw0bL2LLVdKCzGN56uW6T6aDGNRtZZt0JvnOx2UmYqu/BBktK',NULL,'2023-02-19 02:48:20','2023-02-19 02:48:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'catalogo'
--

--
-- Dumping routines for database 'catalogo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-18 23:10:27
