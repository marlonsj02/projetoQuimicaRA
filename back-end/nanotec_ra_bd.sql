-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Nov-2020 às 00:35
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nanotec_ra`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aboutpart1`
--

CREATE TABLE `aboutpart1` (
  `id` int(10) NOT NULL,
  `textoEscalaComprimento` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aboutpart1`
--

INSERT INTO `aboutpart1` (`id`, `textoEscalaComprimento`, `dataCadastro`) VALUES
(1, '<p>Figura - Escalas de comprimento mostrando o contexto nan&ocirc;metro. A escala de comprimento no topo varia de 1m a 10-10m, e ilustra o tamanho da bola de futebol comparada a mol&eacute;cula de fulereno conhecida como buckyball. Para compara&ccedil;&atilde;o, o mundo &eacute; aproximadamente cem milh&otilde;es de vezes maior que a bola de futebol, a qual &eacute; cem milh&otilde;es de vezes maior que a buckyball. Esta se&ccedil;&atilde;o de 10-7nm (100nm) a 10-9nm (1nm) est&aacute; expandida abaixo. A escala de comprimento de interesse para a nanoci&ecirc;ncia e para as nanotecnologias &eacute; de 100nm para baixo at&eacute; a escala at&ocirc;mica &ndash; aproximadamente 0.2nm.<br />\r\n<a href=\"https://www.sltcaucho.org/nanociencia-e-nanotecnologia-marly-jacobi/#single/0\">Fonte: figura</a><br />\r\nacesso 26/03/2020.<br />\r\n<a href=\"https://www.sltcaucho.org/nanociencia-e-nanotecnologia-marly-jacobi/\">Fragmento retirado do site</a><br />\r\nAcesso 26/02/2020.<br />\r\nO Admir&aacute;vel Mundo Nano: Nanoci&ecirc;ncia e Nanotecnologia por Por Marly Maldaner Jacobi</p>\r\n', '2020-11-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aboutpart2`
--

CREATE TABLE `aboutpart2` (
  `id` int(10) NOT NULL,
  `textoRevolucaoNanotec` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aboutpart2`
--

INSERT INTO `aboutpart2` (`id`, `textoRevolucaoNanotec`, `dataCadastro`) VALUES
(1, '                                                          A revolução Nanotecnológica foi iniciada basicamente com a invenção do microscópio de varredura por tunelamento em 1981 (scanning tunneling microscope), através de pesquisadores da International Business Machunes, com o aparecimento das primeiras publicações em nanotecnologia. No entanto, as Previsões do Feynman terem sido em 1959, apenas em 1981 a nanotecnologia se materializou na consolidação da nanociência com uma finalidade útil e lucrativa. Assim sendo a nanotecnologia tem aplicações em várias áreas de pesquisa, como, a eletrônica, informática, medicina, cosméticos, biologia, física, química, entre outrosA nanotecnologia é encontrada nos setores: energéticos (baterias e células); automobilístico (tintas e catalisadores); esportes ( roupas antitranspirantes, equipamentos leves, calçados e instrumentos mais eficientes) Na indústria têxteis (tecidos inteligentes, resistentes a sujeiras e antibacterianas) cosméticos (produtos solares, cremes antienvelhecimento e hidratantes com alto poder hidratante) medicina (administração inteligente de medicamentos e implantes) meio ambiente (tratamentos e remediações de fontes poluidoras) e inúmeras aplicações; pois a nanotecnologia em algum momento estará presente em nossa vida, entraremos em contato com produtos da nano escala, em contrapartida, são muitos benefícios que devemos analisar o seu potencial de riscos e alertar a população consumidora, de acordo com Prof. Frank Quina em sua carta para editoria de Química Nova (2004) “As mesmas características que tornam as nanopartículas interessantes do ponto de vista de aplicação tecnológica, podem ser indesejáveis quando essas são liberadas ao meio ambiente.” (Quina, 2004 p. 1028), portanto fica evidente a preocupação com nova tecnologia produzida a partir da nanociência.                                                        ', '2020-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aboutpart3`
--

CREATE TABLE `aboutpart3` (
  `id` int(10) NOT NULL,
  `textoAlotropicosCarbono` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aboutpart3`
--

INSERT INTO `aboutpart3` (`id`, `textoAlotropicosCarbono`, `dataCadastro`) VALUES
(1, 'Exemplos de alotrópicos do carbono:<br>\r\n                            a) diamante; <br>b) grafite; <br>c) lonsdaleíta; <br>d, e, f) fulerenos; <br>g) carbono\r\n                            amorfo; <br>h) nanotubo de carbono.<br>\r\n                            Fonte: <a href=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Eight_Allotropes_of_Carbon.png/800px-Eight_Allotropes_of_Carbon.png\">upload.wikimedia.org</a>\r\n                            <br>Acesso 20/01/2020', '2020-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `footerpart`
--

CREATE TABLE `footerpart` (
  `id` int(10) NOT NULL,
  `textoComplementar` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `footerpart`
--

INSERT INTO `footerpart` (`id`, `textoComplementar`, `dataCadastro`) VALUES
(1, '                                    “A nanociência e nanotecnologia é tão surpreendente e poderosa que em teoria, devido ao seu alcance como ferramenta nanométrica, é possível reverter um composto tóxico para atóxico, mesmo durante o uso, alterando sua estrutura molecular, e ainda tirar alguma vantagem dessa modificação.”\r\n\r\nEdilson Gomes de Lima\r\n\r\nO avanço da tecnologia permitiu o acesso a diversas ferramentas tecnológicas, principalmente aquelas que outrora era de alto valor econômico, acessível apenas as pessoas de alto poder executivo. Todavia, hoje é possível a todas as pessoas com alto ou baixo poder aquisitivo, o acesso a esses produtos a baixo custo, como por exemplo, smartphones, tablets, celulares, e se compararmos a sua eficiência e valor econômico há alguns anos ficaríamos surpreendidos pela nossa capacidade de aperfeiçoamento e acessibilidade. \r\n\r\nA nanotecnologia está inserida na sociedade há algumas décadas. Muitos indivíduos já têm acesso a vários produtos, mas pouco se sabe sobre este assunto, assim poderíamos disseminar o tema através do uso da própria tecnologia, imagine uma pessoa comprando em uma loja produtos à base de nanotecnologia ou qualquer outro, por exemplo, um produto eletrônico, algo lhe chama atenção! Um determinado aparelho, ao olhar as informações do aparelho surgem diversas dúvidas e curiosidades havendo a necessidade da explicação/orientação de um vendedor, no entanto com os novos recursos tecnológicos, você pode simplesmente apontar a câmera do seu celular para o item que deseja comprar e assim serão exibidos na tela do smartphone a imagem do produto e todas a funções e aplicações do mesmo, elucidando todas as suas dúvidas. Essa nova tecnologia dará todo o suporte necessário, tendo a possibilidade de alterar a cor, forma e mover as estruturas no espaço em 3D com a interação do mundo real e virtual, isto é, realidade aumentada. \r\n\r\nNanoRa é um programa de animações em 3D onde poderão ser visualizadas através de dispositivo eletrônicos imagens de nanotubos e nanopartículas facilitando a compreensão de estudo desses conceitos.\r\n\r\nA Realidade Aumentada possibilita uma inclusão de objetos virtuais em modelagens gráficas tridimensionais (Kirner e Kirner, 2008), onde o ambiente favorece a interação do sujeito com as animações fazendo com que se tornem uma ilusão aos olhos de que o objeto é real. Através da câmera do celular apontado para um marcador redireciona o aparelho a imagem que se projeta em 3 dimensões, para cada animação criada existe um código diferente.\r\nNanotubos e Nanopartículas N&N são partículas subatômicas que são impossíveis de serem observadas a olho nu, com o auxílio e utilização da realidade aumentada (RA) ajudando a observar essas moléculas facilitará a construção do conhecimento melhorando a compreensão e aproximando os alunos dos estudos teóricos para o prático.                                                                                                                                ', '2020-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `headerpart`
--

CREATE TABLE `headerpart` (
  `id` int(10) NOT NULL,
  `tematicaSite` varchar(300) NOT NULL,
  `nomeEducador` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `headerpart`
--

INSERT INTO `headerpart` (`id`, `tematicaSite`, `nomeEducador`, `texto`, `dataCadastro`) VALUES
(1, 'NANOCIÊNCIA E NANOTECNOLOGIA EM REALIDADE AUMENTADA - NANO RA', 'Prof.ª Antônia Roselúcia Corrêa Belmiro', 'Trabalho realizado no Mestrado Profissional em Ensino de Ciências e Matemática – MPECIM com alunos do Ensino Médio', '2020-11-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginadm`
--

CREATE TABLE `loginadm` (
  `id` int(10) NOT NULL,
  `senhaADM` varchar(20) NOT NULL,
  `dataLogin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loginadm`
--

INSERT INTO `loginadm` (`id`, `senhaADM`, `dataLogin`) VALUES
(1, 'santanna20', '2020-11-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicespart`
--

CREATE TABLE `servicespart` (
  `id` int(10) NOT NULL,
  `texto` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servicespart`
--

INSERT INTO `servicespart` (`id`, `texto`, `dataCadastro`) VALUES
(1, '                          Richard Phillips Feynman, o criador do termo nanotecnologia,indicou a manipulação de átomos em escala Nanométrica, isto é, a um bilionésimo de metro, 10-9m. Isso ocorreu em 1959, através de uma palestra intitulada “Há mais espaços lá embaixo”. O “muito pequeno” já era conhecido por muitas gerações, apenas não tinham compreensão, domínio e manipulação da natureza em escala manométrica.                                                                                    ', '2020-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teampart1`
--

CREATE TABLE `teampart1` (
  `id` int(10) NOT NULL,
  `textonanotubosCarb` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teampart1`
--

INSERT INTO `teampart1` (`id`, `textonanotubosCarb`, `dataCadastro`) VALUES
(1, 'Os nanotubos de carbono, NTC (CNT, do inglês carbon nanotube). \r\nEm 1991, o cientista japonês Sumio Iijima descobriu os multi-walled carbon nanotubes.\r\nCilindros ou tubos ocos;\r\nAlótropos do carbono C60;\r\nTamanho: 1nm (10-9m)).\r\nDuros e resistentes; \r\nPropriedades: alta resistência mecânica, alta flexibilidade, características elétricas e térmicas. ', '2020-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teampart2`
--

CREATE TABLE `teampart2` (
  `id` int(10) NOT NULL,
  `textoFulereno` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teampart2`
--

INSERT INTO `teampart2` (`id`, `textoFulereno`, `dataCadastro`) VALUES
(1, '                   Foi chamada pelos pesquisadores de fullerene em homenagem ao arquiteto americano B. Fuller, responsável pela invenção dos domos geodésicos;Em 1985 um grupo de cientistas, Harold Walter Kroto e Richard Errett Smalley, obtiveram uma série de estruturas químicas de carbono, surgindo em maior agrupamento aquelas com 60 átomos de carbono.\r\nO prêmio Nobel de química de 1996 foi agraciado aos Professores Robert F. Curl Jr, Harold W. Kroto e Richard E. Smalley, pela descoberta dos fulerenos “Buckminsterfulereno”.\r\nOs fulerenos constituem uma classe de nanomoléculas esferoidais estáveis;\r\nSendo C60 e C70 os mais abundantes;\r\nPropriedades: supracondutora e óptica; aplicações nas ciências de materiais e biologia.                                                                 ', '2020-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teampart3`
--

CREATE TABLE `teampart3` (
  `id` int(10) NOT NULL,
  `textoGrafeno` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teampart3`
--

INSERT INTO `teampart3` (`id`, `textoGrafeno`, `dataCadastro`) VALUES
(1, 'Material bidimensional com a espessura monoatômica;\r\nIsolado em 2004 - etapas de peeling de um pedaço de grafite - prêmio Nobel de física de 2010 a seus autores, A. Geim e K. Novoselov, da Universidade de Manchester. \r\nAlótropos do carbono;\r\nPropriedades: alta mobilidade eletrônica, e condutividade térmica e resistência mecânica similares às dos nanotubos;                                                                ', '2020-11-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videocounterpart`
--

CREATE TABLE `videocounterpart` (
  `id` int(10) NOT NULL,
  `textoRiscosNanotec` text NOT NULL,
  `dataCadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `videocounterpart`
--

INSERT INTO `videocounterpart` (`id`, `textoRiscosNanotec`, `dataCadastro`) VALUES
(1, 'Vale ressaltar a importância da regulamentação dos nanomateriais perante a ótica dos\r\n                                potenciais de riscos e perigos provenientes do avanço da nanotecnologia;\r\n                                Necessidade de regras e legislação destinada aos produtos que contenham em sua\r\n                                composição substâncias em nanoescala.<br>\r\n                                <a href=\"https://ctb.org.br/wp-content/uploads/2017/10/nanotecnologia.jpg\">Fonte:\r\n                                    AQUI</a>\r\n\r\n                                <br>Acesso em 21/01/2020', '2020-11-04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aboutpart1`
--
ALTER TABLE `aboutpart1`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aboutpart2`
--
ALTER TABLE `aboutpart2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aboutpart3`
--
ALTER TABLE `aboutpart3`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `footerpart`
--
ALTER TABLE `footerpart`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `headerpart`
--
ALTER TABLE `headerpart`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loginadm`
--
ALTER TABLE `loginadm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicespart`
--
ALTER TABLE `servicespart`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teampart1`
--
ALTER TABLE `teampart1`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teampart2`
--
ALTER TABLE `teampart2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teampart3`
--
ALTER TABLE `teampart3`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `videocounterpart`
--
ALTER TABLE `videocounterpart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aboutpart1`
--
ALTER TABLE `aboutpart1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aboutpart2`
--
ALTER TABLE `aboutpart2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aboutpart3`
--
ALTER TABLE `aboutpart3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `footerpart`
--
ALTER TABLE `footerpart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `headerpart`
--
ALTER TABLE `headerpart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `loginadm`
--
ALTER TABLE `loginadm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servicespart`
--
ALTER TABLE `servicespart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `teampart1`
--
ALTER TABLE `teampart1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `teampart2`
--
ALTER TABLE `teampart2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `teampart3`
--
ALTER TABLE `teampart3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `videocounterpart`
--
ALTER TABLE `videocounterpart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
