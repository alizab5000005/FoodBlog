-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 08:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'ali', 'ali@ali.com', '12', '2021-09-18 02:41:37', '2021-09-18 02:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Meat', 'this is meat category', 1, '2021-09-18 16:57:32', '2021-09-18 17:19:32'),
(2, 'Fish', 'thi ', 1, '2021-09-12 11:19:51', '2021-09-12 11:19:51'),
(4, 'Desserts', 'this is desserts', 1, '2021-09-18 18:48:11', '2021-09-18 18:48:11'),
(5, 'Chicken', 'this is chicken category', 1, '2021-09-18 17:36:24', '2021-09-18 17:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `like`, `created_at`, `updated_at`) VALUES
(1, 1, 'jgvlk', 1, '2021-09-18 10:33:53', '2021-09-18 12:35:27'),
(2, 1, '{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}{{$comment->comment}}', NULL, '2021-09-18 10:49:10', '2021-09-18 10:49:10'),
(3, 4, 'Comment on post of id 4', NULL, '2021-09-18 11:51:49', '2021-09-18 11:51:49'),
(4, 4, 'Comment 2 on post of id 4', NULL, '2021-09-18 11:52:25', '2021-09-18 11:52:25'),
(5, 4, 'Comment 3 on post of id 4', NULL, '2021-09-18 12:01:08', '2021-09-18 12:01:08'),
(6, 1, 'comments', NULL, '2021-09-18 10:36:45', '2021-09-18 10:36:45'),
(7, 7, 'yummy meatballs', NULL, '2021-09-18 18:36:47', '2021-09-18 18:36:47'),
(8, 6, 'comment 1', NULL, '2021-09-18 20:59:51', '2021-09-18 20:59:51'),
(9, 6, 'comment 2', NULL, '2021-09-18 21:00:04', '2021-09-18 21:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'some', 'alikhanza84@gmail.com', '0000', 'jkfyky', '2021-09-18 11:53:20', '2021-09-18 11:53:20'),
(2, 'some', 'alikhanza84@gmail.com', '0000', 'srtgse', '2021-09-18 11:54:12', '2021-09-18 11:54:12'),
(3, 'some', 'alikhanza84@gmail.com', '0000', 'se', '2021-09-18 14:19:28', '2021-09-18 14:19:28'),
(4, 'some', 'alikhanza84@gmail.com', '132', 'dxfg', '2021-09-18 14:21:45', '2021-09-18 14:21:45'),
(5, 'some', 'alikhanza84@gmail.com', '0000', 'k', '2021-09-18 14:22:06', '2021-09-18 14:22:06'),
(6, 'new', 'normal@mail.com', '000099', 'n', '2021-09-18 14:23:10', '2021-09-18 14:23:10'),
(7, 'some', 'alikhanza84@gmail.com', '132', 'n', '2021-09-18 14:24:25', '2021-09-18 14:24:25'),
(8, 'new', 'normal@mail.com', '0000', 'ko', '2021-09-18 14:25:22', '2021-09-18 14:25:22'),
(9, 'o', 'k', 'kok', 'k', '2021-09-18 14:26:17', '2021-09-18 14:26:17'),
(10, 'Infinix', 'p', 'o', 'io', '2021-09-18 14:27:14', '2021-09-18 14:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_09_18_022727_create_admins_table', 1),
(3, '2021_09_18_045810_create_posts_table', 2),
(4, '2021_09_18_080448_create_categories_table', 3),
(5, '2021_09_18_032716_create_comments_table', 4),
(6, '2021_09_18_041838_create_messages_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(111) DEFAULT NULL,
  `popular` tinyint(4) DEFAULT 1,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `admin_id`, `category_id`, `body`, `recipes`, `ingredients`, `image`, `likes`, `popular`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Malaysian-style whole fish', 1, 2, 'It’s really worth sourcing a banana leaf for this spectacular Friday Night sea bass dish. Incredible fragrance, amplified flavour and wonderful texture – it’s a real belter!', 'Preheat the oven to 220°C/425°F/gas 7.\r\nWhack the lemongrass against your work surface and remove the tough outer layer. Peel the shallot and ginger, deseed the chillies, then roughly chop everything with the lemongrass. Add to a large pestle and mortar with a good pinch of sea salt and the lime leaves (discard the stalks) and pound to a paste.\r\nToast the peanuts in a large frying pan over a medium heat for 3 minutes, or until golden, then bash half into the paste. Add the tomato purée and fish sauce, finely grate in the lime zest and squeeze in all the juice, then muddle together.\r\nWith a sharp knife, score the sea bass skin at 1cm intervals in a criss-cross fashion, then rub all over with the paste, both inside and out.\r\nGet your banana leaf (if using), or tear off a piece of baking paper five times as long as the fish and fold it in half to give you double thickness. Place the fish in the middle, then fold over to seal the fish snuggly inside. Place on a large baking tray and roast for 25 minutes, or until the flesh is succulent and comes away easily from the bone.\r\nTo make the rice, drizzle the vegetable oil into a saucepan over a medium heat. Crumble in the creamed coconut, then squeeze in the lime juice, throwing in the squeezed lime halves. Tip in the rice and fry for 2 minutes, then pour over 1 mug of boiling water and turn down the heat to low. Cover and cook for 12 minutes, then remove from the heat and allow to steam for a further 3 minutes.\r\nFor the chilli pickle, finely slice the chillies and place in a small bowl with the sugar, vinegar and a pinch of salt, then mix together and leave aside.\r\nNow make the salad. Crack open the coconut and finely grate 50g of flesh into a serving bowl. Halve the sugar snaps and mangetout, finely shred both cabbages and cucumber, then peel and finely slice the mango and add it all to the bowl. Pick in most of the herb leaves, squeeze over the lime juice and toss together.\r\nPop the fish on a serving platter. Roughly crush the remaining peanuts in a pestle and mortar, then scatter over the salad and the fish. Drizzle the fish with the soy sauce and scatter over the remaining salad herbs.\r\nTake the fish, chilli pickle, rice and salad to the table and let everyone help themselves.', '1 stick of lemongrass\r\n1 shallot\r\n5 cm piece of ginger\r\n3 fresh red chillies\r\n6 lime leaves , (fresh or dried)\r\n100 g unsalted peanuts\r\n1 tablespoon tomato purée\r\n2 tablespoons fish sauce\r\n1 lime\r\n1 x 800 g whole sea bass , scaled, gutted, from sustainable sources\r\n1 large banana leaf , optional\r\n1 tablespoon low-salt soy sauce', 'download.jpg', 4, 0, 1, '2021-09-18 12:20:42', '2021-09-18 21:59:14'),
(4, 'Chicken Biryani', 1, 5, 'proident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id estproident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id est', 'Heat oil and fry onions until golden. Add meat, Shan Biryani Mix and stir fry for 5 minutes. Add yogurt and water (Beef/Lamb 4 cups, Chicken 2 cups). Cover and cook on low heat until meat is tender. Add tomatoes and stir fry on high heat until oil begins to separate from the gravy. Then keep aside. Separately: In 15 cups / 3 liters of boiling water, stir in 3 tablespoons of Shan Salt and soaked rice. Boil rice until ¾ cooked. Remove and drain thoroughly. Spread half rice in a pot and pour meat curry. Top with remaining rice. (Sprinkle a pinch of yellow food color if desired). Spread fresh coriander and mint leaves on the rice. Cover and cook on low heat until rice is tender (5-10 minutes). Mix before serving.', 'Himalayan Pink , Salt, Garlic, Ginger, Cumin, Bay Leaf, Brown Cardamom, Cinnamon Carom, Green Cardamom, Clove, Red Chili, Cane Sugar, Coriander, Turmeric, Hydrolyzed Soy Protein, Maltodextrin, Canola Oil, Natural and Artificial Food Flavor, Silicon Dioxide (Anticaking Agent)', '8-pakistan-food-biryani-chicken-750x400.jpg', 1, 1, 1, '2021-09-18 19:09:59', '2021-09-18 17:42:39'),
(5, 'Chicken Karahi', 1, 5, 'v', 'v', 'Chicken, Soybean Oil. Butter, Tomato Pure, Tomato, Green Chili, Salt, Red Chili, Paprika. Brown Cardamom. Coriander, Fenugreek Leaves, Green Cardamom, Cinnamon, Clove, Black Pepper, Cumin, Bay Leaf, Dehydrated Onion, Black Cumin, Carom, Maltodextrin, Hydrolyzed Soy Protein, Ginger Paste, Garlic Paste, Chicken Stock, Sodium Tripolyphosphate', 'images.jpg', NULL, 1, 1, '2021-09-18 15:55:08', '2021-09-18 18:06:55'),
(6, 'Whole roasted trout', 1, 2, 'Simply cooked with delicate fresh herbs, lemon and tomatoes, this whole roasted trout is a real treat', 'Preheat the oven to 180°C/350°F/gas 4.\r\nPeel the onion and finely slice with the tomatoes and lemon. Roughly chop the dill and parsley (stalks and all).\r\nDrizzle a large baking tray with oil, scatter over a third of the sliced tomato, lemon and herbs, then top with the fish, seasoning the cavity and skin with sea salt and black pepper.\r\nStuff the cavity with another third of the sliced tomato, lemon and herbs, then scatter the remaining third over the top – arranging a few tomatoes around the fish. Dot with butter, then drizzle all over with 2 tablespoons of oil and a twist of black pepper.\r\nRoast for 25 minutes, or until just cooked through. Delicious served with samphire.', '1 onion\r\n4 ripe tomatoes\r\n1 lemon\r\n1 bunch of fresh dill , (30g)\r\n1 bunch of fresh parsley , (30g)\r\nolive oil\r\n1 x 1.5kg whole trout , scaled and pin-boned, from sustainable sources\r\n50 g unsalted butter , at room temperature', 'whole-fish-baked-baking-dish-top-view-68595853.jpg', NULL, 1, 1, '2021-09-18 18:26:04', '2021-09-18 18:26:04'),
(7, 'Meatballs', 1, 1, 'These smashing beef meatballs are easy to make and healthy, too. cook in one hour.', 'Peel and finely chop the onion, then trim and pound the chilli in a pestle and mortar (or finely chop, if you prefer).\r\nHeat a splash of oil in a pan over a low heat, add the onion and fry gently for 10 to 15 minutes, or until soft.\r\nTurn the heat up to medium, then add the chilli and tomatoes. Half-fill one of the tomato tins with water, give it a swirl and tip into the pan. Season lightly with sea salt and black pepper and cook gently for 30 minutes, then break up the tomatoes.\r\nWhiz the bread (remove the crusts, if you like) in a food processor until fine, then tip into a large bowl. Add the meat, nutmeg, lemon zest, egg yolk and a good pinch of seasoning. Pick, finely chop and add the sage and rosemary, then mix and scrunch together. Shape into little balls, around the size of a gobstopper.\r\nHeat 3 tablespoons of oil in a large frying pan over a medium-high heat, add the meatballs cook until browned over – be careful not to break them up.\r\nOnce browned, add the meatballs to the tomato sauce, stir carefully to cover, and braise gently for 45 minutes, or until cooked through.\r\nServe each portion scattered with a few raw peas, shavings of pecorino and picked marjoram (if using).', '1 small onion\r\n1 fresh red chilli\r\nolive oil\r\n2 x 400 g tins of quality plum tomatoes\r\n2 slices of stale bread\r\n250 g lean minced beef or higher-welfare veal\r\n250 g lean minced higher-welfare pork\r\n½ teaspoon ground nutmeg\r\n1 lemon\r\n1 large free-range egg yolk\r\n1 sprig of fresh sage\r\n1 sprig of fresh rosemary\r\n1 large handful of garden peas\r\npecorino cheese\r\na few sprigs of fresh marjoram , optional', 'IMG-1668.webp', NULL, 1, 1, '2021-09-18 18:34:24', '2021-09-18 18:34:24'),
(8, 'Special Masala Mutton Karahi', 1, 1, 'Special Masala Mutton Karahi recipe is the main course meal of Pakistani cuisine. It is a spicy gravy dish that is prepared with mutton pieces and all Desi spices. Special Masala Mutton Karahi recipe is a delicious dish that is cooked in a traditional Pakistani style.', 'Boil mutton pieces well until done.\r\n\r\nNow heat oil in a wok and add mutton; fry on high heat until mutton turns to brown colour.\r\n\r\nAdd chopped green chillies and garlic ginger paste. Fry it well for 2 to 3 minutes.\r\n\r\nBlend yogurt a little bit and add to the pan.\r\n\r\nThen add salt and special masala, and fry on fast flame for 2 to 3 minutes.\r\n\r\nAdd fenugreek leaves and whole green chillies and cook until oil appears as a separate layer.\r\n\r\nNow garnish karahi with ginger flakes and serve with hot tandoori naans.\r\n\r\nMutton karahi is ready to serve. Enjoy in today\'s dinner.', 'Mutton – 500 grams (small pieces)\r\nG/Garlic Paste – 2 tbsp\r\nCooking Oil – ½ cup\r\nSpecial masala – 1 tbsp\r\nDry Fenugreek leaves – ½ tsp\r\nYogurt – 250 grams\r\nGinger – 1 inch piece\r\nSalt – as per taste\r\nGreen chillies – 5 pcs\r\nSmall Green chillies – 5 pcs thinly chopped\r\nKashmiri paprika – 125 grams\r\nWhole Red chillies – 125 grams\r\nMace – 1 tsp\r\nLong pepper – 1 tbsp\r\nCumin seeds – 100 grams\r\nStar anise – 3 to 4 pcs\r\nCloves – 5 to 6 pcs\r\nGreen Cardamoms – 8 to 10 pcs\r\nDry Coriander – 4 tbsp pcs', 'special-masala-mutton-karahi_2118.jpg', NULL, 0, 1, '2021-09-18 18:42:07', '2021-09-18 18:42:23'),
(9, 'Apple & berry crumble', 1, 4, 'Give your regular crumble a nutritious flavour boost by using Granola Dust in the topping. It really works', 'Preheat the oven to 190°C/375°F/gas 5.\r\nPeel, core and quarter the apples, then cut into chunks.\r\nPlace the apples in a pan with the sugar and cook over a low heat, stirring occasionally, for 10 minutes, or until slightly softened. Remove from the heat, stir through the frozen berries and leave to cool a little.\r\nMeanwhile, cube the butter and place in a mixing bowl with the flour. Rub together with your fingertips until it resembles breadcrumbs, then stir in the Granola Dust.\r\nTransfer the fruit mixture to a baking dish and sprinkle over the crumble topping.\r\nBake in the oven for 25 to 30 minutes, or until golden and crunchy. Delicious served with a dollop of yoghurt.', '800 g mixed apples , such as bramley, braeburn, cox\r\n4 teaspoons caster sugar\r\n100 g frozen berries\r\n20 g cold unsalted butter\r\n50 g plain flour\r\n75 g Granola Dust\r\nnatural yoghurt , to serve', 'EG9_EP54_Apple-and-Berry-Crumble.jpg', NULL, 0, 1, '2021-09-18 18:52:05', '2021-09-18 18:53:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
