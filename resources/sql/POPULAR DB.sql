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
('123', 'casa', '26015090');


-- --------------------------------------------------------
-- Extraindo dados da tabela `usuarios`

INSERT INTO `usuarios` (`cpf`, `numero`, `email`, `cep`, `complemento`, `nome`, `tituloEleitor`, `idAdmin`, `zona`, `secao`, `senha`, `dtNasc`) VALUES
('05829791960', '332'   ,            'cagrispan@gmail.com', '81870000',  'ap401', 'CARLOS AUGUSTO LIMA GRISPAN' , '093255330604', '#20140097', '145', '0709', '81dc9bdb52d04dc20036dbd8313ed055', '10/10/1987'),
('09487904905', '993'   ,       'alisson.krul@hotmail.com', '83701485',   'Casa', 'ALISSON FRANCISCO KRUL'      , '106469310620', '#20140226', '123', '0123', '18fb622e79c298bcdc038b04860ac3b5', '08/07/1996'),
('09964341946', '2079'  ,       'kindingerlek02@gmail.com', '83411050', 'Casa 02', 'LUCAS ERNESTO KINDINGER'     , '106833500620', '#20140098', '186', '0091', '57985ac735bc81dc466da93f48589888', '14/03/1995'),

('07231623360', '123'   ,              'email@dominio.com', '60425010', 'casa', 'CESAR LEVI BARBOSA'                    , '552321600353', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('09129550157', '123'   ,              'email@dominio.com', '52190347', 'casa', 'BEATRIZ ESTER CAROLINE DA SILVA'       , '083222531376', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '25/08/1996'),
('16535099105', '123'   ,              'email@dominio.com', '08391480', 'casa', 'HELOISA CAROLINE RAQUEL SOUZA'         , '157464521104', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('17767608409', '123'   ,              'email@dominio.com', '06833141', 'casa', 'FERNANDA ISABELLE OLIVEIRA'            , '405420731406', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('19022477878', '123'   ,              'email@dominio.com', '69027350', 'casa', 'PIETRA MILENA ARAUJO'                  , '351623440221', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '12/08/1996'),
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
('72404397630', '123'   ,              'email@dominio.com', '17601040', 'casa', 'RAFAELA MARCELA CATARINA CARDOSO'      , '346445530515', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('78621654628', '123'   ,              'email@dominio.com', '29108250', 'casa', 'GABRIEL MARCOS VINICIUS CALEBE ROCHA'  , '647278441686', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('91527184099', '123'   ,              'email@dominio.com', '94935480', 'casa', 'BENICIO THALES ALVES'                  , '206218740256', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993'),
('97260361514', '123'   ,              'email@dominio.com', '26540184', 'casa', 'NATHAN CAUA CARDOSO'                   , '504031371066', NULL, '123', '0123', '25d55ad283aa400af464c76d713c07ad', '07/05/1993');


-- --------------------------------------------------------
-- Extraindo dados da tabela `partidos`

INSERT INTO `partidos` 
(`idPartido`, `nome`, `sigla`, `logo`) VALUES
(       '26', 'PARTIDO HOLLYDIANO'          , 'PH'  , '../resources/party_logo/26.jpg'),
(       '21', 'PARTIDO DA TURMA DO CRASH'   , 'PTC' , '../resources/party_logo/21.jpg'),
(       '43', 'PARTIDO DA TURMA DO MARIO'   , 'PTM' , '../resources/party_logo/43.jpg'),
(       '88', 'PARTIDO DA MARVEL'           , 'PRB' , '../resources/party_logo/88.jpg');


-- --------------------------------------------------------
-- Extraindo dados da tabela `candidatos`

INSERT INTO `eleicoes`
(`horaInicio`, `data`, `horaFim`, `tipo`) VALUES 
('00:00','17/06/2015','23:59','FEDERAL'),
('00:00','17/06/2014','23:59','FEDERAL'),
('00:00','17/06/2016','23:59','MUNICIPAL');


-- --------------------------------------------------------
-- Extraindo dados da tabela `candidatos`

INSERT INTO `candidatos`
(`idCandidato`, `idEleicao`, 			 `tipo`, `idPartido`, `votos`,            `nomeFantasia`, `foto`) VALUES 
(	   '26001',			  1,       'PRESIDENTE',		'26',		0,'ANGELINA JOLIE'          ,'../resources/candidate_photo/1_PRESIDENTE_26001.jpg'),
(	   '26002',			  1,          'SENADOR',		'26',		0,'NICOLAS CAGE'            ,'../resources/candidate_photo/1_SENADOR_26002.jpg'),
(	   '26003',			  1,          'SENADOR',		'26',		0,'BRAD PITT'               ,'../resources/candidate_photo/1_SENADOR_26003.jpg'),
(	   '26004',			  1,          'SENADOR',		'26',		0,'WILL SMITH'              ,'../resources/candidate_photo/1_SENADOR_26004.jpg'),
(	   '26005',			  1,          'SENADOR',		'26',		0,'ADAM SANDLER'            ,'../resources/candidate_photo/1_SENADOR_26005.jpg'),
(	   '26006',			  1,          'SENADOR',		'26',		0,'JIM CARREY'              ,'../resources/candidate_photo/1_SENADOR_26006.jpg'),
(	   '26007',			  1,          'SENADOR',		'26',		0,'TOM CRUISE'              ,'../resources/candidate_photo/1_SENADOR_26007.jpg'),
(	   '26008',			  1,          'SENADOR',		'26',		0,'DENZEL WASHINGTON'       ,'../resources/candidate_photo/1_SENADOR_26008.jpg'),
(	   '26009',			  1,          'SENADOR',		'26',		0,'AL PACINO'               ,'../resources/candidate_photo/1_SENADOR_26009.jpg'),
(	   '26010',			  1,          'SENADOR',		'26',		0,'TOM HANKS'               ,'../resources/candidate_photo/1_SENADOR_26010.jpg'),
(	   '26011',			  1,'DEPUTADO ESTADUAL',		'26',		0,'JOHNNY DEPP'             ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_26011.jpg'),
(	   '26012',			  1,'DEPUTADO ESTADUAL',		'26',		0,'ROBIN WILLIAMS'          ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_26012.jpg'),
(	   '26013',			  1,'DEPUTADO ESTADUAL',		'26',		0,'LEONANRDO DICAPRIO'      ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_26013.jpg'),
(	   '26014',			  1,'DEPUTADO ESTADUAL',		'26',		0,'BRUCE WILLIS'            ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_26014.jpg'),
(	   '26015',			  1,'DEPUTADO ESTADUAL',		'26',		0,'ROBERT DE NIRO'          ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_26015.jpg'),
(	   '26016',			  1, 'DEPUTADO FEDERAL',		'26',		0,'MORGAN FREEMAN'          ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_26016.jpg'),
(	   '26017',			  1, 'DEPUTADO FEDERAL',		'26',		0,'ARNOLD SCHWARZENEGGER'   ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_26017.jpg'),
(	   '26018',			  1, 'DEPUTADO FEDERAL',		'26',		0,'JULIA ROBERTS'           ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_26018.jpg'),
(	   '26019',			  1, 'DEPUTADO FEDERAL',		'26',		0,'SANDRA BULLOCK'          ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_26019.jpg'),
(	   '26020',			  1, 'DEPUTADO FEDERAL',		'26',		0,'JOHN TRAVOLTA'           ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_26020.jpg'),
(	   '26021',			  1,       'GOVERNADOR',		'26',		0,'CLINT EASTWOOD'          ,'../resources/candidate_photo/1_GOVERNADOR_26021.jpg'),
(	   '26022',			  1,         'VEREADOR',		'26',		0,'JET LI'                  ,'../resources/candidate_photo/1_VEREADOR_26022.jpg'),
(	   '26023',			  1,         'VEREADOR',		'26',		0,'MEL GIBSON'              ,'../resources/candidate_photo/1_VEREADOR_26023.jpg'),
(	   '26024',			  1,         'VEREADOR',		'26',		0,'RICHARD GERE'            ,'../resources/candidate_photo/1_VEREADOR_26024.jpg'),
(	   '26025',			  1,         'VEREADOR',		'26',		0,'SYLVERTER STALLONE'      ,'../resources/candidate_photo/1_VEREADOR_26025.jpg'),
(	   '26026',			  1,         'VEREADOR',		'26',		0,'JOHN WAYNE'              ,'../resources/candidate_photo/1_VEREADOR_26026.jpg'),
(	   '26027',			  1,         'VEREADOR',		'26',		0,'KEVIN COSTNER'           ,'../resources/candidate_photo/1_VEREADOR_26027.jpg'),
(	   '26028',			  1,         'VEREADOR',		'26',		0,'MERYL STREEP'            ,'../resources/candidate_photo/1_VEREADOR_26028.jpg'),
(	   '26029',			  1,         'VEREADOR',		'26',		0,'CAMERON DIAZ'            ,'../resources/candidate_photo/1_VEREADOR_26029.jpg'),
(	   '26030',			  1,         'VEREADOR',		'26',		0,'HARRISON FORD'           ,'../resources/candidate_photo/1_VEREADOR_26030.jpg'),
(	   '26031',			  1,         'VEREADOR',		'26',		0,'LUKE SKYWALKER'          ,'../resources/candidate_photo/1_VEREADOR_26031.jpg'),
(	   '26032',			  1,         'VEREADOR',		'26',		0,'ROBERT DOWNEY JR'        ,'../resources/candidate_photo/1_VEREADOR_26032.jpg'),
(	   '26033',			  1,         'VEREADOR',		'26',		0,'MATT DAMON'              ,'../resources/candidate_photo/1_VEREADOR_26033.jpg'),
(	   '26034',			  1,         'VEREADOR',		'26',		0,'DWAYNE JOHNSON'          ,'../resources/candidate_photo/1_VEREADOR_26034.jpg'),
(	   '26035',			  1,         'VEREADOR',		'26',		0,'MARK WAHLBERG'           ,'../resources/candidate_photo/1_VEREADOR_26035.jpg'),
(	   '26036',			  1,         'VEREADOR',		'26',		0,'JENNIFER LAWRENCE'       ,'../resources/candidate_photo/1_VEREADOR_26036.jpg'),
(	   '26037',			  1,         'PREFEITO',		'26',		0,'SETH ROGEN'              ,'../resources/candidate_photo/1_PREFEITO_26037.jpg'),

(	   '43001',			  1,       'PRESIDENTE',		'43',		0,'PRINCESA ZELDA'          ,'../resources/candidate_photo/1_PRESIDENTE_43001.jpg'),
(	   '43002',			  1,          'SENADOR',		'43',		0,'LINK'                    ,'../resources/candidate_photo/1_SENADOR_43002.jpg'),
(	   '43003',			  1,          'SENADOR',		'43',		0,'PRINCESA PEACH'          ,'../resources/candidate_photo/1_SENADOR_43003.jpg'),
(	   '43004',			  1,          'SENADOR',		'43',		0,'MARIO'                   ,'../resources/candidate_photo/1_SENADOR_43004.jpg'),
(	   '43005',			  1,          'SENADOR',		'43',		0,'LUIGI'                   ,'../resources/candidate_photo/1_SENADOR_43005.jpg'),
(	   '43006',			  1,'DEPUTADO ESTADUAL',		'43',		0,'TOAD'                    ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_43006.jpg'),
(	   '43007',			  1,'DEPUTADO ESTADUAL',		'43',		0,'PAULINE'                 ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_43007.jpg'),
(	   '43008',			  1,'DEPUTADO ESTADUAL',		'43',		0,'WARIO'                   ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_43008.jpg'),
(	   '43009',			  1,'DEPUTADO ESTADUAL',		'43',		0,'WAGUIGI'                 ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_43009.jpg'),
(	   '43010',			  1, 'DEPUTADO FEDERAL',		'43',		0,'DAISY'                   ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_43010.jpg'),
(	   '43011',			  1, 'DEPUTADO FEDERAL',		'43',		0,'DONKEY KONG'             ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_43011.jpg'),
(	   '43012',			  1, 'DEPUTADO FEDERAL',		'43',		0,'DIDDY KONG'              ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_43012.jpg'),
(	   '43013',			  1,       'GOVERNADOR',		'43',		0,'TOADETTE'                ,'../resources/candidate_photo/1_GOVERNADOR_43013.jpg'),
(	   '43014',			  1,         'VEREADOR',		'43',		0,'TOADSWORTH'              ,'../resources/candidate_photo/1_VEREADOR_43014.jpg'),
(	   '43015',			  1,         'VEREADOR',		'43',		0,'BOWSER'                  ,'../resources/candidate_photo/1_VEREADOR_43015.jpg'),
(	   '43016',			  1,         'VEREADOR',		'43',		0,'KOOPA TROOPA'            ,'../resources/candidate_photo/1_VEREADOR_43016.jpg'),
(	   '43017',			  1,         'VEREADOR',		'43',		0,'BOB-OMB'                 ,'../resources/candidate_photo/1_VEREADOR_43017.jpg'),
(	   '43018',			  1,         'PREFEITO',		'43',		0,'GOOMBA'                  ,'../resources/candidate_photo/1_PREFEITO_43018.jpg'),


(	   '21001',			  1,       'PRESIDENTE',		'21',		0,'CRASH BANDICOOT'         ,'../resources/candidate_photo/1_PRESIDENTE_21001.jpg'),
(	   '21002',			  1,          'SENADOR',		'21',		0,'COCO BANDICOOT'          ,'../resources/candidate_photo/1_SENADOR_21002.jpg'),
(	   '21003',			  1,          'SENADOR',		'21',		0,'POLAR'                   ,'../resources/candidate_photo/1_SENADOR_21003.jpg'),
(	   '21004',			  1,'DEPUTADO ESTADUAL',		'21',		0,'PURA'                    ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_21004.jpg'),
(	   '21005',			  1,'DEPUTADO ESTADUAL',		'21',		0,'CRUNCH BANDICOOT'        ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_21005.jpg'),
(	   '21006',			  1, 'DEPUTADO FEDERAL',		'21',		0,'AKU-AKU'                 ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_21006.jpg'),
(	   '21007',			  1, 'DEPUTADO FEDERAL',		'21',		0,'RIPPER ROO'              ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_21007.jpg'),
(	   '21008',			  1,       'GOVERNADOR',		'21',		0,'PAPU PAPU'               ,'../resources/candidate_photo/1_GOVERNADOR_21008.jpg'),
(	   '21009',			  1,         'VEREADOR',		'21',		0,'UKA UKA'                 ,'../resources/candidate_photo/1_VEREADOR_21009.jpg'),
(	   '21010',			  1,         'VEREADOR',		'21',		0,'KOALA KONG'              ,'../resources/candidate_photo/1_VEREADOR_21010.jpg'),
(	   '21011',			  1,         'VEREADOR',		'21',		0,'DR NEO CORTEX'           ,'../resources/candidate_photo/1_VEREADOR_21011.jpg'),
(	   '21012',			  1,         'VEREADOR',		'21',		0,'DINGODILE'               ,'../resources/candidate_photo/1_VEREADOR_21012.jpg'),
(	   '21013',			  1,         'PREFEITO',		'21',		0,'NINA CORTEX'             ,'../resources/candidate_photo/1_PREFEITO_21013.jpg'),

(	   '88001',			  1,       'PRESIDENTE',		'88',		0,'BEN REILLY'              ,'../resources/candidate_photo/1_PRESIDENTE_88001.jpg'),
(	   '88002',			  1,          'SENADOR',		'88',		0,'CAMALEÃO'                ,'../resources/candidate_photo/1_SENADOR_88002.jpg'),
(	   '88003',			  1,          'SENADOR',		'88',		0,'CAPITÃO AMERICA'         ,'../resources/candidate_photo/1_SENADOR_88003.jpg'),
(	   '88004',			  1,          'SENADOR',		'88',		0,'CAPITÃO MARVEL'          ,'../resources/candidate_photo/1_SENADOR_88004.jpg'),
(	   '88005',			  1,          'SENADOR',		'88',		0,'CICLOPE'                 ,'../resources/candidate_photo/1_SENADOR_88005.jpg'),
(	   '88006',			  1,'DEPUTADO ESTADUAL',		'88',		0,'DEMOLIDOR'               ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_88006.jpg'),
(	   '88007',			  1,'DEPUTADO ESTADUAL',		'88',		0,'DOUTOR ESTRANHO'         ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_88007.jpg'),
(	   '88008',			  1,'DEPUTADO ESTADUAL',		'88',		0,'GAMBIT'                  ,'../resources/candidate_photo/1_DEPUTADO ESTADUAL_88008.jpg'),
(	   '88009',			  1, 'DEPUTADO FEDERAL',		'88',		0,'GAVIÃO ARQUEIRO'         ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_88009.jpg'),
(	   '88010',			  1, 'DEPUTADO FEDERAL',		'88',		0,'GROOT'                   ,'../resources/candidate_photo/1_DEPUTADO FEDERAL_88010.jpg'),
(	   '88011',			  1,       'GOVERNADOR',		'88',		0,'HOMEM-ARANHA'            ,'../resources/candidate_photo/1_GOVERNADOR_88011.jpg'),
(	   '88012',			  1,         'VEREADOR',		'88',		0,'HOWARD, O PATO'          ,'../resources/candidate_photo/1_VEREADOR_88012.jpg'),
(	   '88013',			  1,         'VEREADOR',		'88',		0,'HULK'                    ,'../resources/candidate_photo/1_VEREADOR_88013.jpg'),
(	   '88014',			  1,         'VEREADOR',		'88',		0,'LAGARTO'                 ,'../resources/candidate_photo/1_VEREADOR_88014.jpg'),
(	   '88015',			  1,         'VEREADOR',		'88',		0,'LUKE CAGE'               ,'../resources/candidate_photo/1_VEREADOR_88015.jpg'),
(	   '88016',			  1,         'VEREADOR',		'88',		0,'THOR'                    ,'../resources/candidate_photo/1_VEREADOR_88016.jpg'),
(	   '88017',			  1,         'VEREADOR',		'88',		0,'HOMEM DE FERRO'          ,'../resources/candidate_photo/1_VEREADOR_88017.jpg'),
(	   '88018',			  1,         'VEREADOR',		'88',		0,'VIUVA NEGRA'             ,'../resources/candidate_photo/1_VEREADOR_88018.jpg'),
(	   '88019',			  1,         'VEREADOR',		'88',		0,'WOLWERINE'               ,'../resources/candidate_photo/1_VEREADOR_88019.jpg');