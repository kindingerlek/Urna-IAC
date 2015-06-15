-- --------------------------------------------------------
-- Extraindo dados da tabela `cep`

INSERT INTO `cep` (`cep`, `logradouro`, `bairro`, `cidade`, `estado`) VALUES

('81870000', 'RUA IZAAC FERREIRA DA CRUZ'           , 'PINHEIRINHO'             , 'CURITIBA'                , 'PR'),
('83411050', 'RUA PRESIDENTE FARIA'                 , 'COLONIA FARIA'           , 'COLOMBO'                 , 'PR'),
('83701485', 'RUA TIBAGI'                           , 'IGUAÇU'                  , 'ARAUCÁRIA'               , 'PR'),

('02478150', 'RUA EDGAR BAINZON'                    , 'VILA PITA'               , 'SÃO PAULO'               , 'SP'),
('02846030', 'RUA FRANCISCO CRISTIANO DE ASSIS'     , 'VILA ITABERABA'          , 'SÃO PAULO'               , 'SP'),
('05885300', 'RUA JORGE STREET'                     , 'JARDIM LILAH'            , 'SÃO PAULO'               , 'SP'),
('06813015', 'AVENIDA JOÃO PAULO II - DE  - LADO'   , 'JARDIM SANTA TEREZA'     , 'EMBU DAS ARTES'          , 'SP'),
('06833141', 'RUA SERIDO'                           , 'JARDIM MAGALI'           , 'EMBU'                    , 'SP'),
('08391480', 'RUA VIOLETA'                          , 'PARQUE DAS FLORES'       , 'SÃO PAULO'               , 'SP'),
('12606280', 'RUA AMÉLIA PEREIRA'                   , 'CRUZ'                    , 'LORENA'                  , 'SP'),
('13310663', 'RUA RICARDO LUIS DA SILVA'            , 'JARDIM RESIDENCIAL ITAIM', 'ITU'                     , 'SP'),
('13872035', 'RUA PADRE EGÍDIO SARCONI'             , 'JARDIM PRIMEIRO DE MAIO' , 'SãO JOÃO DA BOA VISTA'   , 'SP'),
('17601040', 'RUA TIMBORÉS'                         , 'CENTRO'                  , 'TUPã'                    , 'SP'),
('26015090', 'RUA ARMINE CARNEIRO'                  , 'PARQUE ENGENHO PEQUENO'  , 'NOVA IGUAÇU'             , 'RJ'),
('26540184', 'TRAVESSA DULCE'                       , 'CABUIS'                  , 'NILÓPOLIS'               , 'RJ'),
('29108250', 'RUA GUAICURUS'                        , 'SANTA INÊS'              , 'VILA VELHA'              , 'ES'),
('29182411', 'RUA AFONSO CLAUDIO'                   , 'REIS MAGOS'              , 'SERRA'                   , 'ES'),
('47801268', 'RUA PÁSSARO-PRETO'                    , 'VILA BRASIL'             , 'BARREIRAS'               , 'BA'),
('50771001', 'TRAVESSA BEZINHA'                     , 'JIQUIÁ'                  , 'RECIFE'                  , 'PE'),
('52190347', 'RUA TRINTA DE JULHO'                  , 'NOVA DESCOBERTA'         , 'RECIFE'                  , 'PE'),
('60425010', 'TRAVESSA ALBERTO MAGNO'               , 'BOM FUTURO'              , 'FORTALEZA'               , 'CE'),
('69027350', 'RUA SÃO FRANCISCO'                    , 'SÃO RAIMUNDO'            , 'MANAUS'                  , 'AM'),
('70741620', 'QUADRA SCRN  BLOCO B'                 , 'ASA NORTE'               , 'BRASÍLIA'                , 'DF'),
('73026540', 'QUADRA COMERCIO LOCAL'                , 'SOBRADINHO'              , 'SOBRADINHO'              , 'DF'),
('87043474', 'RUA RIO JAGUARIBE'                    , 'CONJUNTO JOÃO DE BARRO'  , 'MARINGÁ'                 , 'PR'),
('88351170', 'RUA PADRE ORLANDO MARIA MURPHY'       , 'CENTRO'                  , 'BRUSQUE'                 , 'SC'),
('89265070', 'RUA AMéRICO COSTA'                    , 'ESTRADA NOVA'            , 'JARAGUÁ DO SUL'          , 'SC'),
('94935480', 'RUA DO PARQUE'                        , 'VILA PARQUE BRASíLIA'    , 'CACHOEIRINHA'            , 'RS');

-- --------------------------------------------------------
-- Extraindo dados da tabela `enderecos`
INSERT INTO `enderecos` (`numero`, `complemento`, `cep`) VALUES
('2079', 'Casa 02', '83411050'),
('332', 'ap401', '81870000'),
('993', 'Casa', '83701485'),

('123', 'casa', '02478150'),
('123', 'casa', '02846030'),
('123', 'casa', '05885300'),
('123', 'casa', '06813015'),
('123', 'casa', '06833141'),
('123', 'casa', '08391480'),
('123', 'casa', '12606280'),
('123', 'casa', '13310663'),
('123', 'casa', '13872035'),
('123', 'casa', '17601040'),
('123', 'casa', '26540184'),
('123', 'casa', '29108250'),
('123', 'casa', '29182411'),
('123', 'casa', '47801268'),
('123', 'casa', '50771001'),
('123', 'casa', '52190347'),
('123', 'casa', '60425010'),
('123', 'casa', '69027350'),
('123', 'casa', '70741620'),
('123', 'casa', '73026540'),
('123', 'casa', '87043474'),
('123', 'casa', '88351170'),
('123', 'casa', '89265070'),
('123', 'casa', '94935480'),
('1234', 'casa', '26015090');



-- --------------------------------------------------------
-- Extraindo dados da tabela `usuarios`

INSERT INTO `usuarios` (`cpf`, `numero`, `email`, `cep`, `complemento`, `nome`, `tituloEleitor`, `idAdmin`, `zona`, `secao`, `senha`, `dtNasc`) VALUES
('05829791960', '332'   ,            'cagrispan@gmail.com', '81870000',  'ap401', 'CARLOS AUGUSTO LIMA GRISPAN' , '093255330604', '#20140097', '145', '0709', '81dc9bdb52d04dc20036dbd8313ed055', '10/10/1987'),
('09487904905', '993'   ,       'alisson.krul@hotmail.com', '83701485',   'Casa', 'ALISSON FRANCISCO KRUL'      , '106469310620', '#20140226', '123', '0123', '18fb622e79c298bcdc038b04860ac3b5', '08/07/1996'),
('09964341946', '2079'  ,       'kindingerlek02@gmail.com', '83411050', 'Casa02', 'LUCAS ERNESTO KINDINGER'     , '106833500620', '#20140098', '186', '0091', '57985ac735bc81dc466da93f48589888', '14/03/1995'),

('07231623360', '123'   ,              'email@dominio.com', '60425010', 'casa', 'CESAR LEVI BARBOSA'                    , '552321600353', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('09129550157', '123'   ,              'email@dominio.com', '52190347', 'casa', 'BEATRIZ ESTER CAROLINE DA SILVA'       , '177016181430', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '25/08/1996'),
('16535099105', '123'   ,              'email@dominio.com', '08391480', 'casa', 'HELOISA CAROLINE RAQUEL SOUZA'         , '157464521104', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('17767608409', '123'   ,              'email@dominio.com', '06833141', 'casa', 'FERNANDA ISABELLE OLIVEIRA'            , '405420731406', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('19022477878', '123'   ,              'email@hotmail.com', '69027350', 'casa', 'PIETRA MILENA ARAUJO'                  , '351623440221', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '12/08/1996'),
('19896031819', '123'   ,              'email@dominio.com', '26015090', 'casa', 'KAIQUE LORENZO RIBEIRO'                , '142486881643', NULL, '180', '0080', 'e807f1fcf82d132f9bb018ca6738a19f', '21/11/1993'),
('21191994007', '123'   ,              'email@dominio.com', '02846030', 'casa', 'GABRIELLY GABRIELA STELLA CAVALCANT'   , '515560431406', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '12/04/1993'),
('25914833450', '123'   ,              'email@dominio.com', '70741620', 'casa', 'FERNANDO IGOR RODRIGUES'               , '472273200558', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('28326284270', '123'   ,              'email@dominio.com', '29182411', 'casa', 'MARCELA MIRELLA NASCIMENTO'            , '044686721228', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('33757052986', '123'   ,              'email@dominio.com', '88351170', 'casa', 'FERNANDA ANTONELLA ALANA RODRIGUES'    , '248716521422', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('35469918424', '123'   ,              'email@dominio.com', '13872035', 'casa', 'CARLOS EDUARDO JULIO FRANCISCO BARROS' , '467040811180', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('35957432458', '123'   ,              'email@dominio.com', '06813015', 'casa', 'RENATO FERNANDO BENJAMIN ROCHA'        , '630147361619', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('46416434237', '123'   ,              'email@dominio.com', '89265070', 'casa', 'JUAN LUCCA OLIVEIRA'                   , '276070500302', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('46835349670', '123'   ,              'email@dominio.com', '05885300', 'casa', 'PIETRO IGOR MARCOS VINICIUS CASTRO'    , '488633021082', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('56267444791', '123'   ,              'email@dominio.com', '73026540', 'casa', 'EMANUELLY ALICIA ALMEIDA'              , '880133110329', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('56763922310', '123'   ,              'email@dominio.com', '50771001', 'casa', 'GIOVANNA ELISA MOURA'                  , '177016181430', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '16/04/1993'),
('57429947450', '123'   ,              'email@dominio.com', '13310663', 'casa', 'JUAN DIOGO VINICIUS MOURA'             , '477085651724', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('66312276155', '123'   ,              'email@dominio.com', '87043474', 'casa', 'JULIO IGOR PEDRO HENRIQUE CAVALCANTI'  , '783023270680', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('68318933842', '123'   ,              'email@dominio.com', '47801268', 'casa', 'NATALIA EVELYN LAIS DOS SANTOS'        , '072744801244', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('69910834537', '123'   ,              'email@dominio.com', '12606280', 'casa', 'RAQUEL STELLA ANA NASCIMENTO'          , '075683750507', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('72067641930', '123'   ,              'email@dominio.com', '02478150', 'casa', 'PAULO ERICK MATHEUS NASCIMENTO'        , '823581431180', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('72404397630', '123'   ,              'email@dominio.com', '17601040', 'casa', 'RAFAELA MARCELA CATARINA CARDOSO'      , '072744801244', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('78621654628', '123'   ,              'email@dominio.com', '29108250', 'casa', 'GABRIEL MARCOS VINICIUS CALEBE ROCHA'  , '647278441686', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('91527184099', '123'   ,              'email@dominio.com', '94935480', 'casa', 'BENICIO THALES ALVES'                  , '206218740256', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('97260361514', '123'   ,              'email@dominio.com', '26540184', 'casa', 'NATHAN CAUA CARDOSO'                   , '504031371066', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993');
