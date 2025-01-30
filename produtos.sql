CREATE DATABASE nossaloja;

USE nossaloja;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `produto` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produtos` (`id`, `produto`, `descricao`, `preco`, `imagem`) VALUES
(1, 'Notebook IdeaPad Gaming', 'O Notebook IdeaPad Gaming oferece desempenho potente, gráficos dedicados e design moderno, ideal para jogos e multitarefas com alta performance.', 3000.00, '1737654897_a1b8798e8f7d46c3b08e.jpg'),
(2, 'Xbox Series X', 'O Xbox Series X é um console potente com gráficos 4K, carregamentos rápidos e acesso a uma vasta biblioteca de jogos pelo Game Pass.', 4000.00, '1737657025_0ed14d0f03416bf0a13c.png'),
(3, 'PS5', 'O PS5 é um console de última geração com gráficos em 4K, carregamentos ultrarrápidos e uma vasta biblioteca de jogos exclusivos.', 4000.00, '1737657450_e118cb11d48e06256bf6.jpg'),
(4, 'Nintendo Switch', 'O Switch é um console híbrido que oferece jogos portáteis e de mesa, com uma vasta biblioteca de títulos divertidos.', 2000.00, '1737657759_0d0d13b9033073ca896e.jpg');

ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;