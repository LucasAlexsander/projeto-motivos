-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25/01/2019 às 00:52
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Motivos`
--
CREATE DATABASE IF NOT EXISTS `Motivos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Motivos`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cessacao`
--

DROP TABLE IF EXISTS `cessacao`;
CREATE TABLE `cessacao` (
  `id_cessacao` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `conc_final` varchar(255) NOT NULL,
  `prisma_sabi` varchar(255) NOT NULL,
  `reatnb_plenus` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `cessacao`
--

INSERT INTO `cessacao` (`id_cessacao`, `codigo`, `nome`, `conc_final`, `prisma_sabi`, `reatnb_plenus`, `situacao`) VALUES
(1, '02', 'Não comprovação de fé de vida ', 'Forma automática de cessação (SUB) de benefício, usada após 180 dias da data de suspensão do beneficio por não comprovação de fé de vida, conforme disciplina o   item 1.5.5 do Manual de Manutenção de Direitos, Volume I, Orientações Gerais/DMAND, Resolução', '', '', 'O benefício é restabelecido automaticamente pelo sistema central, no motivo 30, após o cadastro da comprovante de fé de vida no PRISMA/SABI.'),
(2, '03', 'Cessação por suspeita de óbito (SIM)', 'Forma automática de cessação (SUB)  de benefício, usada após  a suspensão do benefício  por suspeita óbito, batimento do SIM (Sistema Informação sobre Mortalidade - SUS) com o CMOBEN, face a devida comprovação do óbito.', '', '04 e 28', 'Reativação manualmente, por meio do sistema PLENUS/REATNB pelos motivos elencados na planilha.'),
(3, '04', 'REVBPC não localiz. do beneficiário', 'Forma manual de  cessação  do benefício de prestação continuada, por não localização do beneficiário, usada pela REVBPC (revisão do benefício prestação continuada).', '24', '02, 04 e 28', 'Reativação manualmente, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(4, '05', 'Não apres. de docs. obrigatórios', 'Forma automático de cessação (SUB) do benefício, por falta de documento obrigatório CPF.', '', '', 'O benefício é restabelecido pelo sistema central com a regularização cadastral.'),
(5, '06', 'Não atendimento a convocação do posto', 'Forma manual de cessação de benefício, usada nos casos que após a suspensão no motivo 48 (não atendimento a convocação do posto) não houve manifestação da parte interessada.', '02, 04 e 12', '02, 04 e 28', 'Reativação  manualmente, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(6, '07', 'BPC>2 ANOS – APRENDIZ C/ DEFIC.', 'Forma manual de cessação de benefício, aplicada nos casos em que há o ingresso do menor aprendiz/deficiente (titular do BPC) em atividade remunerada após 2 (dois) anos de recebimento concomitante da remuneração e do benefício, conforme disciplinado na Lei', '', '03', 'A reativação será aplicada apenas para os casos em que a cessação foi realizada indevidamente, com formalização de solicitação por e-mail para a SMAN ou por decisão recursal e judicial, no PLENUS/REATNB motivo 03.'),
(7, '08', 'BENEFÍCIO CONCEDIDO COM CESSAÇÃO NA DIB', 'Forma manual de cessação de benefício, aplicada para o caso de implantação de benefícios sem efeitos financeiros com DCB em sua DIB.', 'em teste', '03', 'A reativação será aplicada apenas para os casos em que a cessação foi realizada indevidamente, com formalização de solicitação por e-mail para a S.MAN ou por decisão recursal e judicial, no PLENUS/REATNB motivo 03.'),
(8, '09', ' DCA ACP2005.33.00.020219-8', 'Forma automática de cessação de benefício por incapacidade, aplicada quando há pedido de reconsideração com agendamento da perícia na data da DCB.', '01 e 03', '01 e 03', 'Reativação manualmente, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(9, '10', 'Cessação por suspeita de óbito', 'Forma manual de cessação de benefício, aplicada quando não há documento oficial do óbito (certidão de óbito), sendo apresentada apenas declaração de falecimento do segurado/ titular de benefício.', '04 ', '02,04 e 28', 'Reativação manualmente, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(10, '11', 'Cessação por não comparecimento ao Censo', 'Era a forma automática do sistema de cessar o benefício, cujo, o segurado/titular não tinha realizado o censo. (Memorando-Circular nº 19 INSS/DIRBEN, 07/04/2006)', '43 e 44', '02 e 04', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Era reativado automaticamente, mas pode ser reativado no PRISMA (MOTIVO 43 ou 44) REATNB/PLENUS (02 ou 04). Caso não consiga reativar  encaminhar email para SMAN detalhando o motivo da reativação co'),
(11, '12', 'Limite Médico', 'Forma automática de cessação de benefício por incapacidade, aplicada quando o perito médico fixa a data da recuperação da capacidade laborativa.', '01, 02, 03, 04, 21, 26 e 31', '01, 02, 03, 04, 21, 21 e 28 ', 'O benefício pode ser restabelecido manualmente por meio dos sistemas: PRISMA/SABI ou REATNB/PLENUS, nos motivos descritos, ou automaticamente nos casos de prorrogação do benefício, face a análise pericial médica.'),
(12, '13', 'Óbito Titular do Benefício', 'Forma de cessar automaticamente (SUB) ou manualmente o benefício, cujo, o titular faleceu. A cessação automática ocorre devido ao batimento do SUB com outros sistema governamentais  e a  manualmente quando óbito é informado na A.P.S com  apresentação da c', '', ' 02, 04, e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(13, '14', 'Ação revisional compartilhada', 'Era a forma manual de cessar o benefício decorrente da ação conjunta que envolveu (auditoria, controle interno e procuradoria em meados de 2007), a qual tinha objetivo de  apurar as irregularidades que restaram após o censo.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativar  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(14, '15', 'Opção Concessão de benefício previdenciário', 'Forma manual de cessação do BPC/benefício de prestação continuada, aplicada quando o beneficiário/titular de BPC faz opção por um benefício previdenciário. Era a forma automática de cessar o benefício de pensão previdenciária, cuja o beneficiário/titular ', ' 02 e 03', ' 02 e 03', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(15, '16', 'Casamento', 'Era a forma automática de cessar o benefício de pensão previdenciária, cuja o beneficiário/titular contrai-se matrimônio. Foi aplicado antes da publicação da Constituição Federal de 05/08/1988.', ' 02, 03 e 04', ' 02, 03, 04 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado em 1988. Para reativar  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(16, '17', 'Reaparecimento do Instituidor', 'Forma manual de cessação de pensão previdenciária, cuja, o instituidor teve a morte presumida decreta pelo juiz de direito, conforme disciplina o Código Civil Brasileiro, artigo 7, mas reapareceu.', '04 e 28', '04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(17, '18', ' Desistência BPC-LOAS pelo titular ', 'Forma manual de cessação  do benefício de prestação continuada, face a manifestação de desistência do titular. Forma manual de  cessação  do benefício de prestação continuada, face a transformação de espécie de BPC (deficiente) para BPC (idoso).', '04 ', '04', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(18, '19', 'Cessação de PA por cessação do instituidor', 'Forma de cessação automática de benefício PA, aplicada  nas situações em que o benefício de origem foi cessado.', '01,04 e 15', '02,04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(19, '20', 'Desistência escrita do titular', 'Forma manual de cessação  de benefício, face a solicitação de desistência do segurado/titular, conforme disciplina: Decreto 3.048/99, . 181-B,  Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015e - Circular nº 27 /DIRBEN/INSS, de 24/01/2015. Forma manual', '', '02, 03, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(20, '21', 'Transformação B 87 em B 88 ', 'Forma manual de  cessação  do benefício de prestação continuada, face a transformação de espécie de BPC (deficiente) para BPC (idoso).', '04', '04', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelo motivo elencado na planilha.'),
(21, '22', 'Prorrogação do benefício Anterior', 'Forma manual de  cessação  do benefício por incapacidade, face a prorrogação do benefício anterior.', '02, 03 e 04', '02, 03, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(22, '23', 'Concessão Aposentadoria para recluso', 'Forma manual de cessação de benefício concedido ou oriundo de pessoa reclusa, face a concessão de aposentadoria ao recluso, conforme disciplina Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015, Art. 528, inciso XIV.', '', '13', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(23, '24', 'Suspenso  64 por mais 6 meses', 'O sistema identifica a acumulação benefícios de espécies (36/94/95)  com benefícios de auxílio-doença/acidente, espécies 31/91 (de doença que lhe tenha dado origem ao 36/94/95) os deixa  pendentes no PLENUS/ LIBDUP(liberação de crítica de duplicidade), o ', '', '38', 'Restabelecido manualmente após a cessação do auxílio-doença/acidente, conforme o disposto no  Art. 338, § da 1º, I Instrução Normativa nº 77/ PRES/INSS, por meio do PRISMA/SABI e REATNB/PLENUS nos motivos descritos na planilha.'),
(24, '25', ' NB transitado JULG/REV. ADM', 'Forma manual de  cessação  de benefício por incapacidade concedido/reativado judicialmente, aplicada quando comprovada pela perícia médica recuperação da capacidade laborativa e o processo transitou em julgado, conforme disciplina  Instrução Normativa nº ', '', '02, 03, 04, 26 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(25, '26', ' Renda per capita  - REVBPC', 'Forma manual de cessação do benefício de prestação continuada, por renda per capita maior ou igual a ¼ de salário mínimo, usada pela REVBPC. ', '24', '02, 04 e 24', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(26, '27', ' PM denegatória  - REVBPC 28 - Transformação para outra espécie', 'Forma manual de  cessação  de BPC/benefício de prestação continuada, concedido/reativado judicialmente, aplicada quando comprovado por meio de perícia médica com laudo de ordem 1 Denegatório (negada)  a recuperação da capacidade  e o processo transitou em', '', '02, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(27, '28', 'Transformação para outra espécie', 'Forma automática de cessação do benefício por incapacidade, face a transformação de espécie (exemplo: 32, 92  e 94).', '', '02, 03, 04, 26 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(28, '29', 'Concessão de outro benefício', 'Forma manual de  cessação de benefício, face a concessão de outro benefício incompatível, conforme disciplina Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015, Art. 528.', '', '02, 03, 04, 26 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(29, '30', 'Constatação de fraude ', 'Forma manual de  cessação de benefício, aplicada para situações em que foi comprovada fraude na  concessão ou manutenção do benefício. A apuração deve obedecer os procedimentos disciplinados  Instrução Normativa nº 77/PRES/INSS, de 21/01/2015. ', '', '02, 03, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(30, '31', 'Irregularidade/Erro Administr. ', 'Forma manual de  cessação de benefício, aplicada para situações em que foi comprovada irregularidade/erro administrativo na  concessão ou manutenção do benefício. A apuração deve obedecer os procedimentos disciplinados  Instrução Normativa nº 77/PRES/INSS', '02, 03 e 04 ', '02, 03, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(31, '32', 'Decisão de Cessação p/ recurso', 'Forma manual de  cessação de benefício, aplicada para situações com acórdão negado provimento a manutenção do benefício.', '02, 03 e 04 ', '02, 03, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(32, '33', 'Decisão Judicial', 'Forma manual de  cessação de benefício, aplicada para situações em que existe uma ordem judicial  determinando a cessação.', '02 e 04 ', '02, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(33, '34', 'Volta ao trabalho', 'Forma manual de  cessação do benefício por incapacidade, aplicada para situações em o segurado/titular volta a exerce atividade laborativa.', '01, 02, 03, 04 e  26 ', '01, 02, 03, 04 e  28 ', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(34, '35', 'Benefício s/ dependente válido', 'Forma automática de cessação da pensão previdenciária, aplicada para situações em que não existe dependente válido para manutenção do benefício.', '04 e 14', '02, 04,  28 e 40', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(35, '36', 'Acumulação indevida de benef.', 'Forma manual de  cessação de benefício, face acumulação incompatível com outro benefício, conforme disciplina Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015, Art. 528.', '34 e 38', '02, 03, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(36, '37', 'BI susp. SISOBI mais de 06 meses ', 'Forma automática (SUB) de cessação de benefício, aplicada para situações em que o benefício está suspenso pelo SISOBI por mais de 06 meses.', '', '02, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(37, '38', 'Cess. de abono permanência em serviço, devido a conces. de aposent.', 'Forma automática de cessação de benefício de abono permanência (extinto em 94), aplicada quando o segurado em gozo de abono permanência solicita a aposentadoria.', '', '02, 04, 13 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(38, '39', 'Não atendimento convocação Inspetoria', 'Era a forma de cessação de benefício para as situações em que o segurado não atendia a convocação da auditoria, após 60 dias.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(39, '40', 'Cess. p/ recuperação total  da capac. laborativa dentro de 5 anos', 'Forma manual de cessação aposentadoria por invalidez, aplicada quando verificada a recuperação da capacidade em perícia médica dentro de cinco, vide Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015, Art. 218.', '02, 03 e 04', '02, 03, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(40, '41', 'Cess. p/ recuperação parcial da capacidade laborativa após 5 anos', 'Forma manual de cessação de aposentadoria por invalidez, aplicada quando o segurado em gozo de benefício de espécies (32 e 92) tem constatado em perícia médica a recuperação parcial da capacidade laborativa,  vide Instrução Normativa nº 77/ PRES/INSS, de ', '02, 03 e 04', '02, 03, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(41, '42', 'Cessação pelo SISOBI', 'Forma automática de cessação (SUB) de benefício, aplicada para situações em que é identificado óbito do segurado/titular.', '', '02, 28, 36 e 37', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(42, '43', 'Cess. de auxílio reclusão por cumprimento de pena, liberdade condicional, inicio de prisão albergue', 'Forma manual de cessação de benefício espécie 25, aplicada nas situações prevista no Artigo 394,  Instrução Normativa nº 77/ PRES/INSS.', '02, 04 e 15', '02, 04, 15 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(43, '44', 'Cess. de auxilio doença por não comparecimento do titular a perícia ', 'Forma automática de cessação de benefício por incapacidade, aplicada nas situações em que o segurado tem perícia agendada e deixa de comparecer.', '01, 02, 04, 11 e 26', '01, 02, 04, 11 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(44, '45', 'Cess. de abono permanência  por emissão de CTS recíproca', 'Forma automática de cessação do abono permanência, aplicada nas situações em que o segurado em gozo de benefício de espécie 48 requere certidão de tempo de serviço ou certidão de tempo de contribuição.', '', '02, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(45, '46', 'Cess. de benef. estatutário por transferência para órgão de origem ', 'Forma manual de cessação de pensão por morte estatutária (Lei no 3.373/58), aplicada para as pensões espécie 22, pois, essas devem ser transferidas para os órgãos de origem. ', '', '02, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(46, '47', 'Cess. de benef. por perda de qualidade de depend. Por cessação de pensão a depend. Preferencial', 'Forma manual de cessação de pensão por morte, aplicada nas situações em que ocorre a perda  qualidade de dependente,face, a concessão de pensão a dependente preferencial.', '', '02, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(47, '48', 'Cess. de benef. no sistema antigo', 'Era a forma automática de cessação de benefício, que foi aplicada os benefícios que estavam cessados no período de migração para PLENUS.', '', '01, 02, 03, 04, 08, 11, 13, 14, 15, 16 e 28', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND'),
(48, '49', 'Óbito informado pela Auditoria', 'Era a forma manual de cessação de benefício e foi usada pela auditoria para benefício, cuja, o titular/segurado havia falecido.', '', '', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND'),
(49, '50', 'Cess. p/ conces. Auxilio funeral', 'Era a forma manual de cessação de benefício para a concessão de auxílio-funeral, aos dependentes ou herdeiros (a partir de de 1º/1/96 o auxílio-funeral foi efetivamente extinto pelo art. 39 do Decreto nº 1.744/95.)', '', '02, 04 e 28', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND'),
(50, '51', 'Cessação pela revisão rural', 'Era a forma manual de cessação resultante de uma operação realizada aproximadamente em 1995/96, onde o servidor  verificava a regularidade da acumulação de benefícios incompatíveis (urbano/rural) e a cessação era aplicada nos casos de irregularidade.', '', '02, 04, 28 e 29', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND'),
(51, '52', 'Erro administrativo informado pela Auditoria', 'Era a forma manual de cessação de benefício para as situações  de erro administrativo detectado pela auditoria, substituído pelo motivo 28/ERRO ADMINISTRATIVO.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(52, '53', 'Fraude informada pela Auditoria', 'Era a forma manual de cessação de benefício para as situações  de fraude detectada pela auditoria, substituído pelo motivo 28/ERRO ADMINISTRATIVO.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(53, '54', 'Limite médico p/ perícia médica', 'Forma automática de cessação de benefício por incapacidade, aplicada quando o perito médico fixa a data da recuperação da capacidade laborativa.', '01, 02, 03, 04 e 26', '01, 02, 03, 04, 28 e 38', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(54, '55', 'Irregular./erro médico pericial', 'Forma de cessação de benefício por incapacidade, aplicada quando é apurada irregularidade ou erro médico pericial.', '', '02, 03, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(55, '56', 'Recuperação de lesão com descaracterização do BI', 'Forma de cessação de benefício por incapacidade, aplicada quando é apurada irregularidade ou erro médico pericial.', '02 e 04', '02, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(56, '57', 'Cess. de auxilio reclusão p/fuga', 'Forma manual de suspensão do auxílio-reclusão, face a fuga do instituidor, conforme disciplina os Artigos 384, inciso IX,  Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015 e Memorando- Circular Nº 16 DIRBEN/INSS , 01/07/2013.', '02, 03, 04', '02, 04, 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha. Atenção aplicado somente para o casos em que a cessação foi cadastrada indevidamente.'),
(57, '58', 'Benef. c/ DCI com + de 60 dias', 'Era uma forma automática de cessação de benefício por incapacidade usada para as situações em benefícios  tinha AXI com + 60 dias sem deferimento da perícia .', '01, 02, 03, 04 e 26', '01, 02, 03, 04 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(58, '59', 'Cess., divergência dados CNIS', 'Era a forma automática de cessação de benefício que apresentavam inconsistência cadastral no CNIS, sendo que esses ficavam pedentes no PLENUS/ IUB (Inclusao de beneficio na lista de pendencia)   \n', '', '02, 03, 04 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(59, '60', 'Cess. benef. fora do cadastro', 'Era uma forma automática de cessação de benefício, usada para os benefícios que estavam cessados no período de migração para SUB.', '', '02, 04 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(60, '61', 'Recusa ao programa de reabilitação profissional', 'Forma manual de cessação de benefícios por incapacidade espécies (31/91) usada quando o segurado recusa- se ao programa de reabilitação profissional, conforme  dsciplina (Artigo 316 e § 3º. Instrução Normativa nº 77/ PRES/INSS e o Memorando- Circular Conj', '01, 02, 03, 04 e 26', '01, 02, 03, 04 e 26', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(61, '62', 'REVBPC N + DEF LON PZ/R > ¼ S ', 'Forma manual de  cessação do pagamento/benefício de prestação continuada, face a perícia médica não constatar deficiência a longo prazo.', '03, 04 e 24', '02, 04, 24 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(62, '63', 'Cessação por falta de digitalização ???  na lista DATAPREV', 'E  63\nCessação DE APOSENTADORIA LEI 9528/97 Material antigo?;;;', '???', '?', '?'),
(63, '64', 'Óbito instituidor aux. Reclusão', 'Forma manual de cessação de benefício de auxílio reclusão, aplicado quando ocorre o óbito do instituidor do benefício, conforme  disciplina Artigo 394, inciso III da Instrução Normativa nº 77/ PRES/INSS.', '', '04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(64, '65', 'Benef. Suspenso + de 6 meses', 'Forma automática (SUB) de cessação de benefício, aplicada para benefícios em situação 37  BI susp. SISOBI mais de 06 meses.', '', '02, 03, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(65, '66', 'Volta ao trabalho em atividade insalubre', 'Forma manual de cessação de benefício de aposentadoria especial (Lei nº 8.213/91), aplicada para situações de volta ao trabalho em atividade insalubre.', '', '02, 03, 04 e 28', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(66, '67', 'Cessação por concessão de B80', 'Forma manual de cessação de benefício por incapacidade, face a concessão de salário-maternidade (Lei no 8.213/91), conforme  disciplina Artigo 313, da Instrução Normativa nº 77/ PRES/INSS.', '01, 02, 03 e 04', '02, 03, 04, 26 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(67, '68', 'Remuneração após a DIB', 'Era a forma manual de cessação de benefício por incapacidade, face a identificação de renumeração no CNIS.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(68, '69', 'Alta médica', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações de alta médica pela auditoria.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(69, '70', 'Retorno voluntário ao trabalho', 'Era a forma manual de cessação de benefício por incapacidade, face ao retorno voluntário ao trabalho usada pela auditoria. (??? “ se enquadra nessa situação atualmente”Forma manual de cessação de benefício por incapacidade, face ao retorno voluntário do s', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(70, '71', 'Erro técnico', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações de  identificação de erro técnico.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(71, '72', 'Não comparecimento', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações em que o segurado não atendia a convocação.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(72, '73', 'Retorno/Permanência atividade condições especiais', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações em que o segurado  retornava/permanência na atividade em condições especiais.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(73, '74', 'Cancelamento por fraude / Auditoria', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações de  cancelamento -  fraude/auditoria.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(74, '75', 'Cancelamento erro administrativo / Auditoria', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações de cancelamneto por erro administrativo/auditória.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(75, '76', 'Cancelamento erro médico/ Auditoria', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações de cancelamneto por erro administrativo médico/auditória.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(76, '77', 'Manutenção irregular PM / Auditorias', 'Era a forma manual de cessação de benefício, usada pela auditória nas situações de cancelamneto por  manutenção irregular Perícia Médica/Auditoria', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(77, '78', 'Cess. B/80 c/ contrato temporário', 'Forma automática (SUB) de cessação de benefício de salário maternidade  (Lei no 8.213/91), conforme  disciplina Artigo 341, da Instrução Normativa nº 77/ PRES/INSS e Parecer nº 675/2012/CONJUR-MPS/CGU/AGU.', '21 e 31', '', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(78, '79', 'Cessação de B80 (120/134dias)', 'Forma automática (SUB) de cessação de benefício de salário maternidade  (Lei no 8.213/91), conforme  disciplina Artigo 343, § 5º a 7º, da Instrução Normativa nº 77/ PRES/INSS e Parecer nº 675/2012/CONJUR-MPS/CGU/AGU.', '21 e 31', '04', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(79, '80', 'Aborto não criminoso', 'Forma automática (SUB) de cessação de benefício de salário maternidade  (Lei no 8.213/91), conforme disciplina Artigo 343, § 4º, da Instrução Normativa nº 77/ PRES/INSS e Parecer nº 675/2012/CONJUR-MPS/CGU/AGU.', '', '', ''),
(80, '81', 'Óbito informado pela REVBPC', 'Forma manual de  cessação de benefício de prestação continuada, face a revisão do benefício de prestação continuada/REVBPC constatar deficiência a longo prazo.', '', '02 e 24', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(81, '82', 'Cessação de B-80 (60 dias)', 'Forma automática (SUB) de cessação de benefício de salário maternidade  (Lei no 8.213/91), conforme  disciplina Artigo 344, § 1º, alínea b, da Instrução Normativa nº 77/ PRES/INSS e Parecer nº 675/2012/CONJUR-MPS/CGU/AGU.', '', '', ''),
(82, '83', 'Cessação de B-80 (30 dias)', 'Forma automática (SUB)l de cessação de benefício por incapacidade, face a concessão de salário-maternidade (Lei no 8.213/91), conforme  disciplina Artigo 344, § 1º, alínea c, da Instrução Normativa nº 77/ PRES/INSS e Parecer nº 675/2012/CONJUR-MPS/CGU/AGU', '', '', ''),
(83, '84', 'Opção por recebimento pelo Ministério do Exército', 'Forma manual de cessação usada para os benefícios de aposentadorias e pensões (espécies 43, 23, 72, 29, 34 e 78), cuja, o segurado/titular opte pelo  recebimento no Ministério do Exército.', '', '02 e 04', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(84, '85', 'Benefício concedido com NIT errado', 'Forma manual de cessação usada para os benefícios concedidos com NIT errado.', '', '', ''),
(85, '86', 'Cess. De B/94 e 95 p/ Parecer Médico Contrário', 'Forma manual de cessação de benefício por incapacidade, por parecer medico contrario B36/B94.', '04', '', 'Constatada a regularidade do benefício esse poderá ser restabelecido manualmente por meio do sistema SABI do motivo elencado na planilha.'),
(86, '87', 'Acumulação Indevida – Rev./03', 'Forma manual de cessação de benefício, face a cessação acumulação indevida de beneficio rev . 2003', '02 e 38', '02 e 34', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(87, '88', 'REVBPC N HA+DEF LONG PZ', 'Forma manual de  cessação de benefício de prestação continuada, face a perícia médica não constatar deficiência a longo prazo.', '24', '', 'Reativação manual, por meio do sistema SABI o no motivo elencado na planilha.'),
(88, '89', 'Cessação Amparo Lei 10559/02.', 'Forma manual de cessação de benefício anistiado LEI 10.559/02 (espécies 58 e 59).', '', '02 e 03', 'Reativação manual, por meio do sistema PLENUS/REATNB nos motivos elencados na planilha.'),
(89, '90', 'Cessação PA por data limite', 'Forma manual de cessação de benefício de Pensão Alimentícia devido a data limite.', '01 e 04', '02 e 04', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(90, '91', 'Revisão de Acórdão', 'Forma manual de cessação de benefício, face a revisão de acórdão.', '', '02', 'Reativação manual, por meio do sistema PLENUS/REATNB nos motivos elencados na planilha.'),
(91, '92', 'Limite indefinido sem concessão de B-32/92', 'Era a forma manual de cessação de benefícios por incapacidade, usado quando a pericia médica informava limite indefinido sem concessão B32/92.', '', '02', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(92, '93', 'Cessação Batimento FUNASA', 'Forma automática de cessação de benefício, derivada do batimento SUB e FUNASA  usada em casos de epidemias.', '04 e 28', '02, 04 e 28', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(93, '94', 'Alta voluntária', 'Forma manual de cessação de benefício por incapacidade, face a solicitação por escrito do segurado de volta voluntária à atividade laborativa.', '01,02 e 26', '01, 02 e 26', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(94, '95', 'Não comparecimento a Reabilitação Profissional', 'Forma manual de cessação de benefícios por incapacidade (espécies 31/91) usada quando o segurado não comparece ao programa de reabilitação profissional, conforme disciplina o Artigo 316 e § 3º. Instrução Normativa nº 77/ PRES/INSS e o Memorando- Circular ', '02 e 38', '', 'Reativação manual, por meio do sistema SABI o no motivo elencado na planilha.'),
(95, '96', 'Transferência para Órgão de Origem - (Lei 8.878/94) ', 'Forma de cessação de benefício, usada em casos de transferência para órgão de origem (Lei 8.878/94), somente para os benefícios concedidos no período 16 de março 1990 e 30 de setembro de 1992.', '', '02 e 03', 'Reativação manual, por meio do sistema PLENUS/REATNB nos motivos elencados na planilha.'),
(96, '97', 'Comprovada Má Fé do beneficiário', 'Forma manual de cessação de benefício, usada quando após as devidas apurações resta comprovada má-fé do segurado/titular (Artigo 569, Instrução Normativa nº 77/ PRES/INSS)', '', '02', 'Reativação manual, por meio do sistema PLENUS/REATNB nos motivos elencados na planilha.'),
(97, '98', 'Cessação por Lei', 'Forma de cessação de benefício, usada  para as espécies 54 e 60 (Leis 10.923/04 e 9.793/99).', '42', '42', 'Reativação manual, por meio dos sistemas PRISMA/SABI ou PLENUS/REATNB nos motivos elencados na planilha.'),
(98, '99', 'Óbito informado pelo Censo (HIPNET)', 'Forma de cessação de benefício, usada  situações óbito informado por ocasião do  censo, confirmado por SP no  HIPNET.', '', '02 e 04', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reativacao`
--

DROP TABLE IF EXISTS `reativacao`;
CREATE TABLE `reativacao` (
  `id_reativacao` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `reativacao`
--

INSERT INTO `reativacao` (`id_reativacao`, `codigo`, `nome`) VALUES
(1, '01', 'Prorrogação de benefício'),
(2, '02', 'Decisão judicial'),
(3, '03', 'Revisão administrativa/recurso'),
(4, '04', 'Cessação ou suspensão indevida'),
(5, '05', 'Reativação de PA por reativação do benefício de origem'),
(6, '06', 'Reativação de benefícios por reativação de dependente'),
(7, '07', 'Inclusão de tutor'),
(8, '08', 'Restabelecimento de emissão de créditos do benefício'),
(9, '09', 'Inclusão de curador'),
(10, '10', 'Inclusão de dependente como novo titular do benefício'),
(11, '11', 'Comparecimento do titular para perícia médica com parecer favorável'),
(12, '12', 'Atendimento do titular à convocação da APS/Inspetoria'),
(13, '13', 'Reativação do Abono de Permanência em Serviço / aux. Reclusão por desistência da aposentadoria'),
(14, '14', 'constatação de incapacidade do dependente titular'),
(15, '15', 'Reativação por apresentação da declaração do cárcere'),
(16, '16', 'Reativação de dependente único que completou 16 anos'),
(17, '17', 'Reativação comandada pela Auditoria por JR/CRPS'),
(18, '18', 'Reativação comandada pela Auditoria por Ação Judicial'),
(19, '19', 'Reativação comandada pela Auditoria por suspensão indevida'),
(20, '20', 'Reativação por TBM comandada para benefício suspenso pelo CONPAG'),
(21, '21', 'Prorrogacao do B-80 por mais 14 dias'),
(22, '22', 'comparecimento ao recadastramento do procurador'),
(23, '23', 'Prorrogação do administrador provisório'),
(24, '24', 'Reativação pela Revisão LOAS'),
(25, '25', 'Rrestabelecimento aposentadoria Lei 9528/97'),
(26, '26', 'Restabelecimento benefício acidentário/doença'),
(27, '27', 'Reativação de homônimo pela Auditoria'),
(28, '28', 'Reativação de homônimo'),
(29, '29', 'Reativação pela Revisão Rural'),
(30, '30', 'Apresentação da fé de vida'),
(31, '31', 'Prorrogação contrato temporário B-80'),
(32, '32', 'Validação do NIT do titular'),
(33, '33', 'CPF informado'),
(34, '34', 'Restabelecimento de acumulação devida'),
(35, '35', 'Apresentação de conta corrente'),
(36, '36', 'Reativação por cessação indevida pelo SISOBI'),
(37, '37', 'Reativação por cessação indevida pelo SISOBI com troca de titularidade'),
(38, '38', 'Reativação de B-36 / 94 / 95 decorrente de outro acidente'),
(39, '39', 'Inclusão de Procurador'),
(40, '40', 'Comparecimento para atualizar o cadastro de dependentes'),
(41, '41', 'Reativacao Judicial para Mensalidade de Recuperacao'),
(42, '42', 'Restabelecimento por Lei'),
(43, '43', 'Reativacao por Comparecimento ao Censo'),
(44, '44', 'Reativação por defesa cadastrada'),
(45, '45', 'Apresentação documentos obrigatórios'),
(46, '46', 'Recaptura do recluso'),
(47, '47', 'Comparecimento reabilitação profissional');

-- --------------------------------------------------------

--
-- Estrutura para tabela `suspensao`
--

DROP TABLE IF EXISTS `suspensao`;
CREATE TABLE `suspensao` (
  `id_suspensao` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `conc_final` varchar(255) NOT NULL,
  `prisma_sabi` varchar(255) NOT NULL,
  `reatnb_plenus` varchar(255) NOT NULL,
  `situacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `suspensao`
--

INSERT INTO `suspensao` (`id_suspensao`, `codigo`, `nome`, `conc_final`, `prisma_sabi`, `reatnb_plenus`, `situacao`) VALUES
(1, '21', 'Devolução de cupom sem pagamento', 'Era a forma de interrupção do benefício/pagamento utilizado antes da criação do protocolo bancário/informatização do sistema. A suspensão era utilizada quando não ocorria recebimento por mais de 90 dias.', '04 e 08', '', 'Esse motivo NAO DEVE SER USADO, pois, foi encerrado em torno de 1991. Caso não consiga realizar a reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(2, '23', 'Benefício irregular com ocorrência de pagamento', 'Era a forma de interrupção do benefício/pagamento para as situações de irregularidade, substituída pelos motivos 27/CONST DE IRREG - FRAUDE E 28/CONST DE IRREG – ERRO. Era utilizado quando se constatava irregularidade e já havia ocorrido pagamento. ', '02,03 e 04', '02 e 28', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(3, '24', ' Não movimentação de conta – corrente por mais de 60 dias  ', 'Era a forma de interrupção de benefício/pagamento face a não movimentação da conta-corrente por mais de 60 dias. Tinha o objetivo de evitar créditos indevidos.', '04 e 08', '08', 'Esse motivo NAO DEVE SER USADO, pois, devido ao sigilo bancário não temos acesso as informações bancárias do segurado. Caso não consiga realizar a reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual'),
(4, '25', 'Inexistência de Tutor/Curador', 'Forma automática de interrupção do benefício/pagamento por não constar tutor/curador cadastrado.  Tem por objetivo controlar o recebimento de benefícios com titulares menores (18 anos) e que por ventura não tenham representante legal. A partir do 16 anos ', '04 e 16', '04 e 28', 'O benefício é restabelecido pelo sistema central com o cadastramento do tutor/curador ou por meio dos motivos elencados na planilha.'),
(5, '26', ' Inexistência de Curador', 'Forma automática de interrupção do benefício/pagamento por não constar curador cadastrado.  Tem por objetivo controlar o recebimento de benefícios com titulares maiores de (18 anos) inválidos e que ,por ventura, não tenham curador.. Código Civil Brasileir', '04 e 08', '04 e 28', 'O benefício é restabelecido pelo sistema central com o cadastramento do curador ou por meio dos motivos elencados na planilha.'),
(6, '27', 'Constatação de Fraude', 'Forma de interrupção do benefício/pagamento para as situações com indicação de fraude, com defesa insuficiente, Evitando assim que o sistema gere pagamento durante o período de apuração.', '', '02, 03, 04 e 28', 'Concluídas as fases da apuração da irregularidade do benefício (se necessário) poderá ser reativação por meio do REATNB nos motivos descritos.'),
(7, '28', 'Erro administrativo', 'Forma de interrupção do benefício/pagamento com indicação de erro administrativo/irregularidade, com defesa insuficiente, evitando assim que o sistema gere pagamento durante o período de apuração.', '', '02, 03, 04 e 28', 'Concluídas as fases da apuração, caso seja necessário o benefício poderá ser reativado por meio do REATNB nos motivos descritos.'),
(8, '37', ' Falta de saque por cartão magnético por mais de 60 dias', 'Forma de interrupção do benefício/pagamento para as situações em que o segurado(a) deixa de sacar os valores em cartão magnético por mais de 60 (sessenta) dias. Evitando assim que o sistema gere pagamento que possa ser indevido.', '02, 04, 08, 20,21,26  e 31', '04 e 28', 'O benefício é restabelecido manualmente por meio dos sistemas: PRISMA/ SABI ou REATNB/PLENUS, nos motivos descritos, após solicitação por escrito do titular ou procurador. '),
(9, '39', 'Suspensão de PA por suspensão do benefício do instituidor', 'Forma de interrupção automática do benefício/pagamento nas situações em que o benefício de origem foi suspenso. Evitando assim que o sistema gere pagamento para PA enquanto o benefício de origem  estiver suspenso; ', '', '02, 04 e 28', 'A PA é restabelecido automaticamente pelo sistema central com a reativação do benefício de origem ou manualmente no PLENUS/REATNB nos motivos elencados na planilha.'),
(10, '44', ' Não comparecimento em auditoria', 'Era a forma de interrupção do benefício/ pagamento para as situações em que o segurado não atendia a convocação da auditoria. Tinha como objetivo e evitar que o sistema continua-se gerando pagamento para benefícios com pendência de auditoria.', '', '', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(11, '45', 'Susp. pela Revisão Rural/Urbana', 'Foi uma operação automática do sistema realizada para verificar a regularidade da concessão. Realizada quando da unificação das folhas de pagamento rural/urbana, nos anos de 1993/94. A suspensão era aplicada nos casos em que existia suspeita de irregulari', '02, 03, 04 e 08', '02 e 04 ', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado em torno de 1994. Caso não consiga realizar a reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(12, '46', 'Não existe dependente com nome cadastrado para troca de titularidade automática', 'Forma automática de interrupção do benefício/pagamento nas situações em que ele está sem dependente (válido) cadastrado no sistema(exemplo pensões e auxílio-reclusão). Visa favorecer  o comparecimento do beneficiário para regularização dos dados cadastrai', '02 e 04', '02, 04 e 28', 'O benefício é restabelecido pelo sistema central, após o cadastro do novo titular  ou manualmente por meio dos sistemas PRISMA/SABI e PLENUS/REATNB dos motivos elencados na planilha.'),
(13, '47', 'Não comparecimento do titular p/ revisão médica bienal', 'Trata- se de suspensão manual do benefício/pagamento aplicada para os segurados em em gozo de auxílio-doença, aposentadoria por invalidez e o pensionista inválido, que se deixam de se submeter ao exame médico pericial bienal obrigatório, isento para maior', '04 e 11', '', 'O benefício é restabelecido pelo sistema central, após realização da perícia com parecer favorável ou manualmente por meio dos sistemas PRISMA/SABI nos motivos elencados na planilha.'),
(14, '48', 'Não atendimento à convocação ao posto de benefícios', 'Trata- se de suspensão manual do benefício/pagamento aplicada para todos os benefícios nos casos em que o segurado é convocado pela A.P.S e não atende a solicitação. Usada para favorecer o comparecimento do beneficiário.', '02, 04 e 12', '02, 04, 14 e 28', 'O benefício é restabelecido manualmente por meio dos sistemas: PRISMA/ SABI ou REATNB/PLENUS, nos motivos descritos, após o atendimento da convocação.'),
(15, '49', 'Suspenso pela Inspetoria do MPAS', 'Era a forma de interrupção do benefício/pagamento para as situações  em que a INSPETORIA DO MPAS detectava indício de irregularidade, aplicava-se durante o período de apuração.', '12', '', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(16, '50', 'Suspenso pelo CONPAG', 'CONPAG era um aplicativo que realizava a varredura no HISCRE para verificar os créditos não pagos e consequentemente suspendê-los. Tinha a finalidade de fazer a gestão e a administração dos pagamentos.', '', '08 e 20', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(17, '51', 'Suspenso pelo Posto no Sistema Antigo', 'Era a forma de interrupção do benefício/pagamento usado para os benefícios que estavam suspensos no período de migração para SUB(PLENUS).', '', '01,02,03,04,08,11,13,15,16 e 26', 'Motivo inibido, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND'),
(18, '52', 'Susp. p/ não apres. da declaração cárcere ', 'Forma automática do sistema interromper o benefício/pagamento para as situações em que o(a)  interessado (a) deixa de apresentar a termo de cárcere trimestral, conforme disciplina a Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015, Art. 395, inciso II.', '04 e 15', '', 'O benefício é restabelecido pelo sistema central, após o cadastro da declaração e cárcere ou ou manualmente por meio dos sistemas PRISMA/SABI e nos motivos elencados na planilha.'),
(19, '53', 'Suspensão por marca de erro', 'Forma automática do sistema interromper o benefício/pagamento em situações  que exista alguma inconsistência no benefício, para que seja feito o tratamento desta no aplicativo INCONS/PLENUS.', '', '', 'Restabelecido automaticamente pelo sistema central, após a regularização da inconsistência.'),
(20, '54', 'Fraude detectada p/ Auditoria', 'Era a forma de interrupção do benefício/pagamento para as situações  de fraude detectada pela auditoria, substituído pelo motivo 27/CONST DE IRREG – FRAUDE.', '', '17,18 e 19', 'Esse motivo NAO DEVE SER USADO, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(21, '55', 'Erro adm. detectado p/ Auditoria', 'Era a forma de interrupção do benefício/pagamento para as situações  de erro administrativo detectado pela auditoria, substituído pelo motivo 28/ERRO ADMINISTRATIVO.', '', '17,18 e 19', 'Esse motivo NAO DEVE SER USADO, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(22, '56', 'Suspensão por duplicidade', 'Forma automática do sistema interromper o benefício/pagamento para situações em que ele detecta acumulação de benefícios incompatíveis, favorecendo a análise dos benefícios bem como a regularidade.', '04', '02,04 e 28', 'O benefício é restabelecido manualmente por meio dos sistemas: PRISMA/ SABI ou REATNB/PLENUS, nos motivos descritos, quando da conclusão da regularidade.'),
(23, '57', 'Susp. pela revisão rural (96)', 'Foi uma operação manual realizada aproximadamente em 1995, onde o servidor  verificava a regularidade da acumulação de benefícios incompatíveis (urbano/rural) e a suspensão era aplicada nos casos em que existia suspeita de irregularidade.', '04', '02,04 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado em torno de 1994. Caso não consiga realizar a reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(24, '58', ' Susp. pelo SISOBI', 'Forma automática do sistema interromper o benefício/pagamento para a situação de suspeita de óbito do titular do benefício. É usado para evitar recebimento pós óbito.', '04 ', '02,04 e 28', 'O benefício é restabelecido manualmente por meio dos sistemas: PRISMA/ SABI ou REATNB/PLENUS, nos motivos descritos, quando da conclusão da regularidade.'),
(25, '59', 'Não comparecimento do titular p/ recadastram. de procurador (PROAP)', 'Desenvolvido em meados 1996/1997 para tratar os benefícios que na migração para SUB ficaram sem  informações do procurador, a suspensão era gerada automaticamente pelo aplicativo \"PROAP\" ou manualmente por comandado pelo PSS(A.P.S/atualmente).', '04 e 22', '02,04, 22 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado em torno de 1997. Caso não consiga realizar a reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(26, '60', 'Não apresent. Curatela/tutela', 'Forma automática de interrupção do benefício/pagamento por não apresentação do termo de tutela/curatela.  Tem por objetivo controlar o recebimento de benefícios com titulares maiores de (18 anos) inválidos e que ,por ventura, não tenham curador.. Código C', '09 e 23', '04 e 28', 'O benefício é restabelecido pelo sistema central com o cadastro do termo de curatela ou manualmente por meio dos sistemas PRISMA/SABI e PLENUS/REATNB nos motivos elencados na planilha.'),
(27, '61', ' Recusa ao Progr. Reabilit. Profiss', 'Forma manual de interrupção do pagamento de benefícios de espécies (31/91) usada quando o segurado deixa de submeter-se ao programa de reabilitação profissional, conforme disciplina o Artigo 316 e § 1º. Instrução Normativa nº 77/ PRES/INSS e o Memorando- ', '02,04 e 28', '02,04,24 e 28', 'Constatada a regularidade do benefício esse poderá ser restabelecido manualmente por meio dos sistemas PRISMA/SABI e PLENUS/REATNB dos motivos elencados na planilha, pelo Setor de Benefícios/GEX. '),
(28, '62', 'Suspensão pela revisão LOAS', 'Forma manual de interrupção do BPC(benefício de prestação continuada)/pagamento, face ao  beneficiário ter superado os requisitos para manutenção do benefício. É usado até se conclua a apuração e o período da ampla defesa ( 5º, inciso LV da Constituição F', '', '01, 02, 03, 04 e 26', 'O benefício pode ser restabelecido manualmente, por meio do sistema PLENUS/REATNB, nos motivos elencados.'),
(29, '63', ' Susp. Aposent. lei 9528/97', 'Forma manual de  de interrupção de pagamento das aposentadorias de espécies 42(com período especial)/46/57, para situações em que o segurado continuavam exercendo a mesma função. Tinha a finalidade de impedir o recebimento do benefício enquanto o segurado', '04 e 25', '02, 04, 08, 25 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado em torno de 1997. Caso não consiga realizar a reativação nos motivos exposto na planilha encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMA'),
(30, '64', ' Suspensão B 36/94/95 por restabelecimento B 31/91', 'O sistema identifica a acumulação benefícios de espécies (36/94/95)  com benefícios de auxílio-doença/acidente, espécies 31/91 (de doença que lhe tenha dado origem ao 36/94/95) os deixa  pendentes no PLENUS/ LIBDUP(liberação de crítica de duplicidade), o ', '26 e 38', '04 e 38', 'Restabelecido manualmente após a cessação do auxílio-doença/acidente, conforme o disposto no  Art. 338, § da 1º, I Instrução Normativa nº 77/ PRES/INSS, por meio do PRISMA/SABI e REATNB/PLENUS nos motivos descritos na planilha.'),
(31, '65', 'Suspenso por não apresentação de fé de vida', 'Forma automática de interrupção do benefício/pagamento usado para as situações de não apresentação da comprovação de fé de vida para segurados no exterior. Realizada após o prazo de 90 dias da data da emissão da de convocação, conforme disciplina o tem 1.', '', '', 'O benefício é restabelecido automaticamente pelo sistema central, no motivo 30, após o cadastro da comprovante de fé de vida no PRISMA/SABI.'),
(32, '66', 'Suspenso por óbito informado pelo SAI/SPAI (sistema de acordo internacional/sistema de pagamento de acordo internacional)', 'Era forma manual  de  suspender e interromper o pagamento/benefício de acordo internacional com indicação de óbito no exterior.  Esse motivo está fora de uso, pois, o SPAI foi substituído pelo SPAIWEB.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO,  pois, o SPAI foi substituído pelo SPAIWEB. Para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND'),
(33, '67', 'Indício irregularidade Auditoria', 'Era forma manual usada pela auditoria para  suspender/interromper o pagamento/benefício, pois, essa não podia cessar. Feito isso ela comunicava a  A.P.S/ mantenedora para que essa efetua-se a cessação, por meio do aplicativo AUDIT/ATUBEN/PLENUS.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, para reativação deverá ser encaminhado email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND'),
(34, '68', 'Benef. não localizado – REVBPC', 'Forma manual de  suspensão  do pagamento/benefício de prestação continuada, por não localização do beneficiário, usada pela REVBPC.  Busca favorecer o comparecimento do beneficiário na A.P.S/mantenedora, para  verificar se as condições que deram origem ao', '24', '02, 04 e 28', 'Restabelecido manualmente nos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(35, '69', 'Renda per capita >= ¼ SM – REVBPC', 'Forma manual de  suspensão  do pagamento/benefício de prestação continuada, por renda per capita > = ¼ SM–REVBPC, usada pela REVBPC.  Busca favorecer o comparecimento do beneficiário na A.P.S/mantenedora, para comprovar ou não a alteração da renda.', '24', '02 e 24', 'Restabelecido manualmente nos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(36, '70', 'Óbito informado pela REVBPC', 'Forma manual de  suspensão  do pagamento/benefício de prestação continuada, por indicação de óbito, usada pela REVBPC até que se conclui-se a apuração.', '24', '02 e 24', 'Restabelecido manualmente nos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(37, '71', 'Novo titular sem NIT validado', 'Forma automática do sistema suspender o pagamento/benefício, quando ocorre a troca de titularidade entre os dependentes (sem NIT). Tem o objetivo de favorecer o comparecimento do novo titular para convalidar os dados cadastrais.', '', '04', 'Restabelecido automaticamente pelo sistema central, após a atualização cadastral ou pelo PLENUS/REATNB no motivo 04.'),
(38, '72', 'Concessão de novo benefício para mesmo NIT do titular', 'Forma automática do sistema suspender/interromper o pagamento/benefício face a concessão de novo benefício  para o mesmo NIT do Titular.', '32', '02, 04 e 32', 'Restabelecido manualmente nos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(39, '73', 'Benefício sem CPF', 'Forma automática de  suspender o pagamento/benefício sem CPF. Busca favorecer o comparecimento do beneficiário na A.P.S, para atualização cadastral (CPF).', '', '02, 28, 33 e 38', 'A reativação geralmente é automática quando do cadastro do CPF, mas pode ser feita no REATNB/PLENUS nos motivos elencados na planilha. '),
(40, '74', 'Determinação Judicial', 'Forma manual de suspender o pagamento/benefício, para atender a determinação do poder judiciário. ', '02', '02, 04  e 28', 'Restabelecido manualmente nos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(41, '75', 'Acumulação indevida de benefício', 'Forma automática do sistema suspender o benefício/pagamento por suspeita de acumulação indevida para apuração, conforme disciplina a Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015, Art. 528. ', '02 e 38', '02, 04 e 34', 'Restabelecido manualmente nos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(42, '76', 'Suspenso pelo batimento com o TRE', 'Era a forma automática de suspender o pagamento/benefício com indicativo de óbito na base de dados do Tribunal Superior Eleitoral-TSE. ( (Memorando-Circular/INSS/DIRBEN nº 04 de 12/01/2009)', '35', '04', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Caso não consiga realizar a reativação nos motivos exposto na planilha encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(43, '77', 'Não apresentação de Conta Corrente', 'Era a forma automática de suspender o benefício/pagamento favorecendo o comparecimento do segurado/beneficiário na A.P.S, para atualização CC/conta-corrente (Memorando Circular DIRBEN/CGBENEF/ Nº 049, de 08/06/2000 e Circular DIRBEN/CGBENEF/ nº37, de 17/1', '', '35', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Caso não consiga realizar a reativação nos motivos exposto na planilha encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(44, '78', 'Benefício de Acordo sem procurador', 'Usado na concessão de benefício de Acordo Internacional, cujos países acordantes sejam a Itália, Portugal, Grécia, Alemanha,  Espanha, Japão, Canadá,  Uruguai, Chile e Argentina e Paraguai não deverá haver geração de crédito de concessão, enquanto não hou', '', '02 e 39', 'O benefício suspenso por falta de procurador será reativado automaticamente no motivo 39 quando do cadastramento do procurador com emissão de pagamento de todo período.'),
(45, '79', 'Suspenso por óbito devido batimento SUB', 'Era usado quando cessado um benefício no PRISMA, pelo motivo 13, era feito batimento no SUB verificando a existência de outro benefício para o mesmo titular e existindo, o suspendia, pelo motivo 79. Substituído pelo motivo 82.', '', '04 e 28', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi substituído pelo motivo 82. Caso não consiga realizar a reativação nos motivos exposto na planilha encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMA'),
(46, '80', 'Suspenso por não comparecimento ao censo', 'Era a forma automática do sistema suspender/interromper o benefício/pagamento dos segurados/beneficiários que não tinham realizado o censo. (Memorando-Circular nº 19 INSS/DIRBEN, 07/04/2006)', '43 e 44', '02 e 04', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Era reativado automaticamente, mas pode ser reativado no PRISMA (MOTIVO 43/44) REATNB/PLENUS (02/04). Caso não consiga reativar  encaminhar email para SMAN detalhando o motivo da reativação com doss'),
(47, '81', ' Defesa insuficiente- Censo - (reativação automática)', 'Era a forma automática do sistema de suspender/interromper o benefício/pagamento dos segurados cuja a defesa fora considerada insuficiente.', '43 e 44', '02 e 04', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Era reativado automaticamente, mas pode ser reativado no PRISMA (MOTIVO 43/44) REATNB/PLENUS (02/04). Caso não consiga reativar  encaminhar email para SMAN detalhando o motivo da reativação com doss'),
(48, '82', 'Suspenso por suspeita de óbito', 'Forma automática ou manual de suspender o benefício/pagamento, por suspeita de óbito. ', '04', '02 e 04', 'Restabelecido manualmente nos sistemas PRISMA/SABI ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(49, '83', 'Suspensão aux. Reclusão por concessão aux. Doença para recluso', 'Forma manual de suspensão do auxílio-reclusão, por opção do titular/família pelo auxílio-doença, conforme disciplina os Artigos 383, § 2º e 395, § 1º,  Instrução Normativa nº 77/ PRES/INSS, de 21/01/2015 e Memorando- Circular Nº 16 DIRBEN/INSS , 01/07/201', '45', '45', 'A reativação é manual e só ocorrerá com a cessação do auxílio-doença e  de declaração de cárcere, nos sistemas PRISMA e PLENUS/ REATNB.'),
(50, '84', 'Fuga do Recluso', 'Era a forma manual de suspender o benefício/pagamento no caso de fuga, esse motivo foi extinto, conforme disciplinada o Artigo 394, inciso IX e e Memorando- Circular nº  16 /DIRBEN/INSS, de 01/072013.', '', '', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(51, '85', 'Ação Revisional compartilhada ', 'Foi um motivo de suspensão decorrente de uma ação conjunta que envolveu (auditoria, controle interno e procuradoria em meados de 2007). Tinha objetivo de  apurar a regularidade /irregularidade do fício, após o censo.', '', '02, 04', 'Esse motivo NAO DEVE SER UTILIZADO, pois, foi encerrado. Para reativação  encaminhar email para SMAN detalhando o motivo da reativação com dossiê anexo, a qual, enviará a demanda à DMAND.'),
(52, '86', 'Suspenso BPC por exercer atividade remunerada', '\nForma manual de suspensão/interrupção do benefício de prestação continuada (deficiência), aplicada ao beneficiário do BPC espécie 87, que entra no mercado de trabalho, o qual terá o pagamento do seu benefício suspenso, em caráter especial. Mas, se perder', '49', '', 'Restabelecido manualmente nos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.'),
(53, '87', 'Suspenso por suspeita de óbito SIM', 'Forma manual de suspensão/interrupção de benefício/pagamento, face ao de batimento do SIM (Sistema Informação sobre Mortalidade - SUS) com o CMOBEN,a fim , de verificar se o beneficiário foi a óbito.', '04 e 28', '04 e 28', 'Restabelecido manualmente nos sistemas PRISMA/SABI/SIBE ou PLENUS/REATNB pelos motivos elencados na planilha.');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cessacao`
--
ALTER TABLE `cessacao`
  ADD PRIMARY KEY (`id_cessacao`);

--
-- Índices de tabela `reativacao`
--
ALTER TABLE `reativacao`
  ADD PRIMARY KEY (`id_reativacao`);

--
-- Índices de tabela `suspensao`
--
ALTER TABLE `suspensao`
  ADD PRIMARY KEY (`id_suspensao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cessacao`
--
ALTER TABLE `cessacao`
  MODIFY `id_cessacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de tabela `reativacao`
--
ALTER TABLE `reativacao`
  MODIFY `id_reativacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `suspensao`
--
ALTER TABLE `suspensao`
  MODIFY `id_suspensao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
