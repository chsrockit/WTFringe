<?php 
ini_set('date.timezone', 'Europe/London');
$info = array('GO FUCKING SEE THIS','Storm the stage after you fucking watch',' Sit quietly and applaud loudly when you fucking watch',' Stage a competing Fringe show so that no one will fucking watch',' Watch your watch when you fucking watch',' How about you fucking watch',' Why don\'t you fucking watch',' Pick the pockets of those who fucking watch',' Bring a friend to fucking watch',' Steal fucking ideas when you fucking watch');
$shows = array('DREAMOF', 'ILOVEYO', 'LITTLEM', 'BURKLYN', 'NOSTALG', 'PINOCCH', 'RET', 'NAIV', 'FRENCHP', 'SCOTTIW', 'MUSECHA', 'LITTLET', 'NOHNONO', 'EVENINH', 'LONGROA', 'WHATARE', 'REPENTW', 'STOR', 'ALLTHEK', 'HRDDAYS', 'GETUPST', 'JOURNEY', 'OLDWOMA', 'ENCOUNT', 'BACHAND', 'BUGHOST', 'LOVEFOR', 'SMILEYS', 'AKIKOOK', 'GUITART', 'STEVEO', 'TRUTHAB', 'BOBDOOM', 'SOYOUTH', 'ORGANRG', 'JOHNHUN', 'PIAG', 'TOCCATA', 'WORKING', 'CELEBRD', 'POOZIES', 'THISSHO', 'OLIVIAL', 'RACHELS', 'BBCGREA', 'ACTBEFO', 'RICH', '39STEPS', 'HARPSID', 'WARPAIN', 'LETSDOI', 'GREENER', 'GASPING', 'AMUSEDN', 'ADLIBER', 'BANGBAN', 'BBCRICH', 'BBCCOMH', 'PANICAT', 'SPANKTA', 'AMANDAF', 'DRINKIN', 'HAMMERQ', 'BIGMALT', 'CREDITO', 'RHODESP', 'AUDIENC', 'PEEPSHO', 'VIVIANA', 'DANADIX', 'COOKING', 'PARENTS', 'THIRDPE', 'TEN', 'AMARYLL', 'ANTONIO', 'SOUNDCH', 'ALCHEMY', 'BOYWITH', 'FREECUD', 'AURICLE', 'SONGSIL', 'HOWTOBG', 'EVELYNE', 'EDINBUB', 'FREEAGE', 'THINGST', 'SAVINGS', 'TARTANR', 'PERFECT', 'BESTOFA', 'CIGARET', 'WRESTLI', 'BRIGITT', 'PHANTAS', 'BBCFEST', 'TODDBAR', 'ANDYMUN', 'IPIFFON', 'NEWYORL', 'THREELI', 'NEWYORM', 'BLUEBIR', 'BBCLIFE', 'FIONAH', 'CRIMINY', 'CELTICS', 'GHILLIE', 'ANDINEA', 'ADRIANA', 'BBCMACA', 'USANDTH', 'NICKKEI', 'COMEDY1', 'TRAGEDY', 'WESEEFI', 'NOSE', 'INFORAP', 'DAVEFLA', 'THROUGH', 'BLONDEC', 'TOTALLB', 'PAINESP', 'ORCHEST', 'MAHHUNT', 'TAKEOUT', 'SPECIAL', 'PLEASAO', 'MOMENTI', 'INTHISL', 'SONGSOF', 'ANDINTH', 'VACCINE', 'CREATIW', 'CALEDON', 'ONEHUND', 'PROP', 'SEVENDE', 'TOMDALE', 'EDINBUX', 'EYESWID', 'EAST15W', 'MIDSUMM', 'DANCESY', 'STANDUR', 'ADELAID', 'ALICESA', 'GRIMMTC', 'TALESFR', 'VOYAGEO', 'ROMANTI', 'GOODTHE', 'BLACKMI', 'ARTISTS', 'HOWDESP', 'MONOLOG', 'SCREWTA', 'GERMANS', 'THEJABB', 'THEFRIN', 'MIDSUMO', 'CLUEDO', 'FAUSTUS', 'INYOURD', 'HANKSCO', 'STICKSS', 'FESTIVE', 'FRINGEC', 'TRICITZ', 'HITCOME', 'HOTELME', 'TROUBLE', 'FOSTERS', 'STANDLA', 'PHILSKI', 'SKETCHA', 'BABYLOV', 'MYSTERY', 'TITANKN', 'FESTIVA', 'TRUELOV', 'HAROUNA', 'WAST', 'WEEANDY', 'BENVERT', 'VIRALTH', 'RIVALS', 'TOTALLA', 'WARATHO', 'RICHHAO', 'NINETYS', 'ORKNEYJ', 'URBANO', 'MANOFVA', 'LITTLEN', 'FREEFRI', 'STEVEPR', 'BESTOFB', 'DIRT', 'WONDERB', 'ALERTAR', 'DEATHSO', 'MICHAEM', 'BUBBLEW', 'EXCESSB', 'GOLDEND', 'SEMINAR', 'COMMEDI', 'SHLOMOM', 'VOODOOR', 'GOLDGLA', 'JUMPING', 'MYJUDYJ', 'HEROESH', 'FREETEA', 'SOONANE', 'HITCHAN', 'BOOKOFQ', 'LADYGAR', 'MICHAEL', 'LETH', 'SIMONDO', '400WOME', 'HOWTOS', 'MOONHOR', 'DEADCA', 'NOWISTH', 'PERFFEC', 'INDIREC', 'CARD', 'COUNTIN', 'CHARLIE', 'MIDNIGL', 'LOVEHAT', 'SHHH', 'ATTENTI', 'TIMKEYM', 'ODDMANO', 'SARAPAS', 'FORCEQ', 'DRESSTO', 'NAZOSMA', 'TRIALBY', 'BABAYAB', 'EDINBUV', 'ONEMILL', 'TIMEFOR', 'TOMROSE', 'MOVINM', 'CHRISMB', 'ROTTENL', 'HIDESEE', 'TERRYAL', 'DISCOVE', 'BLUELAD', '1745THE', 'UNBEARA', 'NOBODYT', 'DEBRIS', 'PHILOSO', 'THREESI', 'NONSENS', 'LAURENA', 'FOOTLIH', 'MANO', 'CARCRAS', 'CARLSAG', 'RICHARG', 'DEEMED', 'PRESENT', 'LAUGHIN', 'TEAWITH', 'CHRISCP', 'SOMENEW', 'FLAK', 'HERMIT', 'UGLY', 'MUSI', 'YOUREBE', 'CIRCLEL', 'TOBYLUC', 'MARKTWA', 'MARYMAR', 'PHOEBEA', 'LACHSAN', 'JAMESLO', 'UNNATUR', 'UNCLEIV', 'ENDOFTI', 'PASSIOO', 'TRANSFO', 'JOHNROD', 'RETURNP', 'FOOTSTO', 'LALORPA', 'ASHERTR', 'BITCHDO', 'STOCKHO', 'HAVERFO', 'SCOTTIS', 'WHISKEY', 'BARRYAO', 'CHEESEB', 'ALLOTME', 'BESTOFY', 'BRIEFHI', 'BRIEFS', 'ONEMANB', 'DONNADI', 'DYINGTO', 'RADIOHE', 'POP', 'WHATREM', 'FLAMENC', 'WRENS', 'ZAMBEZI', 'NORTHVS', 'FASCINA', 'LAUGHOR', 'TAKESYO', 'ONEO', 'ROMANAR', 'BILLIEH', 'IHOPEMY', 'SHAGGER', 'UPTOTHE', 'IAINSTI', 'PARTYBA', 'THREEBL', 'CEILIDH', 'ARTFORL', 'MATTAND', 'BOBANDJ', 'WORB', 'INVENTI', 'CONTINE', 'CLOH', 'BATTLEO', 'LADYBOY', 'GINGETI', 'SUND', 'MERVYNS', 'AGONISE', 'PHOENIY', 'DARKPHI', 'AFRICAH', 'MOLE', 'EUNUCHS', 'SKET', 'WETPAIN', 'STORYTE', 'OXFORDR', 'JOEBORJ', 'CHILDRF', 'JAMESAC', 'ENDEMIC', 'ROCKTHE', 'AULDREG', 'NONSTOP', 'RUSMART', 'RITUALS', 'CHEKHOV', 'BIGBITE', 'ERICMUT', 'MORNING', 'DAVIDRE', 'SWISSOH', 'INFECTI', 'BOBDOWN', 'EDINBUR', 'SANS', 'THREEMA', 'PREPARE', 'TOUL', 'NEILDEM', 'ROCK', 'ITHEDIC', 'FIREBIR', 'GREGORY', 'LILILAS', 'LEO', 'YELLOWW', 'ROMCOMC', 'BIGVALV', 'REQUEST', 'IMPRINT', 'MIDSEME', 'ARMAGED', 'DOGEARE', 'FLEETP', 'SHAK', 'LONDONI', 'COMICST', 'TOMGREE', 'FITFORP', 'TOMSTAD', 'LIVEWIR', 'TRANSL', 'LOOK', 'ALTERNO', 'LATENLI', 'ORPH', 'IANPERT', 'LAPINWA', 'ONENIGI', 'COMEDYZ', 'SAMMYJR', 'NUNSENS', 'NATHAND', '2BE', 'CYCLEON', 'AAAANDN', 'BRINGME', 'QUIZINM', 'POLITIE', 'QUEENSS', 'PETERB', 'ADVENTV', 'JOEYPAG', 'INFLATA', 'GIRLWIT', 'MANIPUL', 'INSTANT', 'RADIOEY', 'JAZZATL', 'JESSICA', 'LINEAGE', 'KEVORKI', 'DANHOYS', 'WILHODG', 'BRAVENE', 'KITTYCO', 'ITSTWOO', 'HISTORJ', 'ROBERTT', 'BESTOFS', 'MOSCOWS', 'AMUSEDM', 'TOMTOAL', 'PHILMAN', 'BESTOFZ', 'WOMENOF', 'SHINOXC', 'LIVEATT', 'PINKTRA', 'FITZROW', 'AFTERTH', 'SUSANM', 'MINDGAM', 'KINGSLE', 'LOVF', 'DAVIDMO', 'TOURIST', 'ALEXHOR', 'FUSIONT', 'SCOTTIX', 'BEMYBAC', 'YOURLAS', 'GAMES', 'SHOWMET', 'SHEEPAH', 'IMAG', 'FOURSCR', 'AULDART', 'YOUONCE', 'POLITID', 'GOODDEA', 'BLUECAF', 'ASLANTH', 'BAB', 'SATELLI', 'MARKUSB', 'SHMOZLE', 'APOC', 'SILENCE', 'ANDYZAL', 'ASIMINE', 'MILOMCC', 'IMPROVE', 'BLOKE', 'CONFESS', 'FLYERMA', 'TONYLAW', 'LOSTORD', 'RADIODE', 'DREAMPI', 'ANTI', 'HENRYPA', 'MONSTES', 'HITLERA', 'CALPOLF', 'HAPPINE', 'SLENDER', 'FEAROFA', 'BADBREA', 'OPERATI', 'CURSEOF', 'KAIHUMP', 'DAWNOFT', 'TRULYME', 'PROPERN', 'CAUTION', 'VIEWFRP', 'WHOARET', 'SEANHUG', 'NINETHE', 'COALHEA', 'MOLLYAN', 'SHOWSTP', 'COLINHO', 'MAKINGF', 'LIFETIM', 'SHOW', 'TEREZIN', 'BMINORM', 'RUMP', 'ACTINGA', 'WHATTHF', 'TRAUMAT', 'STANDIN', 'GUITARB', 'KAYLAKA', 'IMAH', 'BONDJAM', 'GRIMMNI', 'JASMINE', 'ROBINSO', 'TALESFT', 'CABAREV', 'MAGICPO', 'ALFIEJO', 'BELARUT', 'LOVL', 'AFRICAA', 'BALD', 'RESO', 'BARDSIN', 'LORCANM', 'UNDOING', 'OUTBUTN', 'BELLEOF', 'MUSICAL', 'STANDUQ', 'ALEXYEL', 'HAMLET', 'LIVEFRO', 'JULIUSC', 'EMILYSC', 'NUCLEAR', 'MASTERC', 'ROSSCO', 'MANWHOX', 'HEROOFO', 'FAMELES', 'DUSTBOW', 'HEADSUP', 'SALSACE', 'LEAVEHI', 'THISART', 'EXCLUSJ', 'ITCHASC', 'TRAINSP', 'RUBYPA', 'CONFIG', 'INBE', 'ADULTPA', 'MUSICSV', 'CHLOEFO', 'SCOTSAC', 'WAITING', 'AAAAAAD', 'MAXWELL', 'INTERPR', 'BLUERAI', 'KISTCEL', 'OMIDDJA', 'CALI', 'LLWYTH', 'THECABI', 'WTFWHER', 'LIEBACK', 'HOWTHEM', 'BEETHOX', 'MALFI', 'HEATHER', 'DOUGIEM', 'JAZZED', 'ETHOMET', 'CASTLER', 'SIIME', 'HANNAHH', 'LITT', 'SOMAREC', 'ANDYPAR', 'LUKEHAI', 'BBCLOOS', 'RESERVO', 'SIMONKE', 'PUTASOC', 'THUNDER', 'FALLOFT', 'SCOTLAN', 'ALLOFME', 'SUNDAES', 'RAMPANT', 'ZEROSO', 'SKERRYV', 'SPRINGA', 'BBCOFFT', 'PHILOSP', 'MANGONE', 'MACBETH', 'BUS', 'DUMBWAI', 'NOURISH', 'ABACUSD', 'PRICELE', 'SINGINH', 'DEAD', 'AAAAAAB', 'BERKOFF', 'CONFERE', 'FAURERE', '2011ASP', 'ALISTAK', 'CRUCIBM', 'JUSTFID', 'NORTHSE', 'GEOFFCO', 'OHLADYB', 'EDUARDO', 'BREATHI', 'OVIDSME', 'ANIMALS', 'BURNS2B', 'SONGOFT', 'WOMANSV', 'QUOTHTH', 'MERVS20', 'EVENINI', 'BERTJAN', 'JACKWHJ', 'CAVESIN', 'MUSICAM', 'LAST5YE', 'TAMLIN', 'STEALCO', 'SARAHMI', 'DRAGSAL', 'BOBBLAC', 'MAYIHAV', 'HARPSIE', 'AFTERMI', 'THIR', 'FROMTHE', 'FATEAND', 'FRINGEG', 'DUCHESS', 'CINEFRI', 'ROSSINI', 'VOICES', 'KEEPING', 'BLAZINF', 'CUTTING', 'UND', 'CONQUER', 'PATSYBL', 'ONEHOUR', 'BACARTI', 'FLYERMB', 'BURNSUN', 'SHOSTAK', 'BRITHOT', 'DICKGA', 'TRAVELE', 'ORGANRE', 'LATING', 'ITSNEVE', 'AMUSEDO', 'TEAROOM', 'LANDING', 'EMBLEMS', 'MUSICOG', 'WHATAPA', 'ROLLOUT', 'RACHMAN', 'MORRISV', 'PLEASEP', 'POEZEST', 'GREATBJ', 'TONYBEN', 'METROPQ', 'OVERNIG', 'CABARE', 'JAZZATC', 'RADIOEA', 'STATION', 'PEACOCM', 'WORLDAC', 'CLOUDGI', 'AUSTENG', 'SAMBASE', 'ALICIAE', 'LISZTPK', 'ABOUTCP', 'BOUNCES', 'JOWHARM', 'MICKEYA', 'HONKJUN', 'TWOKS', 'LULW', 'DURHAMR', 'CATHEDT', 'ERICSTA', 'CHILDRE', 'GAGSSON', 'TOMGOOD', 'ANDE', 'CHARMIN', 'DESCLAR', 'AMATEUR', 'LATENIJ', 'MEMYSEM', 'ANINSTJ', 'EIGHTYE', 'RICHFUL', 'MAXANDI', 'BENBRAI', 'TWOWRON', 'LOVESWI', 'GIANTSO', 'JERRYSA', 'LOVE', 'DRAMAWO', 'BIGDAVE', 'LAUGHIQ', 'COMEDI', 'PASTAMA', 'UNDERTH', 'RITATR', 'TIMFITA', 'ORPE', 'CHESSGA', 'DRETTRI', 'WILFRED', 'AGNESOF', 'LITTLEE', 'WINEINT', 'BISCUIT', 'FRAGMEN', 'POINTLE', 'ABSOLUX', 'DEFINIT', 'JIGSAWJ', 'SILKENW', 'REC', 'LECOCHO', 'ANILDES', 'IHATECH', 'BODYOFW', 'PLAYLAT', 'JASONJO', 'YOUFORC', 'TIERNAN', 'CHRISRA', 'FORGETT', 'SINGINI', 'HUGGERS', 'ANDTHEW', 'ONEM', 'PULSE', 'ABOUTTA', 'BEPO', 'COTTONP', 'AULDREE', 'SUITCAS', 'COMEDYS', 'ROUNDTH', 'JAMESAN', 'CURS', 'AWARDWI', 'JASONCO', 'DANCING', 'BIGVAL', 'TISI', 'PINKNOI', 'JOLLYGO', 'MONKEYM', 'POLITIC', 'NEILBYM', 'WENDYWA', 'JUSTGOO', 'SMUTFRE', 'HAIRYMA', 'OUTL', 'GUTTERJ', 'ELEGY', 'RAKUINK', 'BELL', 'JAMESSH', 'PIPUTTO', 'ANDREWD', 'AUSTRIA', 'BRETTGO', 'ALIVEAN', 'SNAILSK', 'BETAMAL', 'BIGNOIS', 'ADVENTZ', 'JULIETN', 'DOCTORB', 'ANGRYBI', 'HAPPINF', 'CARUSOA', 'NORMANL', 'MANWHOW', 'BETTEAN', 'BRANDRE', 'DRETTRJ', 'BLUEBEA', 'WORBEYF', 'MORGANW', 'JOHNKEA', 'RAW', '12INCOM', 'FLIRTFI', 'LASTTRI', 'ALZHEIM', 'GRIMMTA', 'GAGTANA', 'AGENTST', 'MIDNIGI', 'SALLYAN', 'AGNESAN', 'OUTS', 'SHADESO', 'EVERYTI', 'BARRYCR', 'BASHIRL', 'RICHARJ', 'SEXUALA', 'PUREASA', 'SING', 'FWORD', 'POKERME', 'NOTSOGR', 'HUMPHRE', 'LAURENC', 'SOME', 'COMEDYR', 'PRETEND', 'IDIDNTM', 'TIGERSB', 'DAVIDOD', 'HAMILTO', 'MEMORIE', 'JENBRIT', 'KIDNAPP', 'ALLTHEF', 'CAMILLE', 'AROUND', 'MYBE', 'PRINCET', 'SEAGULL', 'BLOO', 'JOELSAN', 'CHESHIR', 'DANNYPE', 'LASO', 'HOTELDE', 'BANE12A', 'SINGLES', 'EMERGEN', 'JOEFAIS', 'CUTTINH', 'ROBINIO', 'MARCELL', 'BEPREPA', 'VIKKIST', 'VELV', 'MATTHEW', 'THIRSTZ', 'JAZZBAR', 'PRODIGA', 'HARMONM', 'RULESFO', 'APPLIED', 'MOTORTO', 'WADEMCF', 'BIDINGT', 'ZANNISK', 'SPIELPA', 'JUSTTHF', 'WORLDBE', 'QUESTIO', 'ONETHRE', 'FIREAND', 'EDDIENA', 'HAMWEHA', 'SKIT', 'BAREGUI', 'DEVOTIO', 'CHERRYO', 'STAN', 'NAPILEW', 'DONQUIX', 'FREEDAI', 'MITCHBE', 'AREYOUH', 'UNDERTI', 'PREOCC', 'ARTISAN', 'BRILLIA', 'SCOTTCA', 'NOTHING', 'ROMCOMW', 'TOMBELL', 'THIT', 'COMEDYD', 'WISHYO', 'IDIOTSO', 'CRYOFTH', 'WOYZECK', 'MONTEVE', 'MURDERA', 'HURTAND', 'HEAVYLI', 'MICKFER', 'JUSTHAV', 'GEMMAGO', 'SPEC', 'TRIA', 'ROBERTR', 'NICKHEM', 'AMERICA', 'LITP', 'JEFFLEA', 'WHENWON', 'JOELDOM', 'FUNNYWP', 'AVAVIDA', 'TIT', 'BLACKWO', 'BOSOMB', 'MIXEDBA', 'COMEDYI', 'WHATIKN', 'MATTHEX', 'MAGICDR', 'NICKPYN', 'FORUM', 'CLAREPL', 'ILOVEYQ', 'ICEFISH', 'ARROGAN', 'OFSOUND', 'COMM', 'ALISTAI', 'AFTERL', 'REMINDM', 'TINGIRL', 'MOONFIS', 'ALISONT', 'PLEASEH', 'SQUIRRE', 'LATENFR', 'KALAGOR', 'LEWISGR', 'DAVIDLF', 'TOMDEAC', 'VISITAD', 'PETEFIR', 'RICHARI', 'JULIANS', 'IMPR', 'ROSIETH', 'STRIPSE', 'APERFOR', 'BROKENW', 'GHOSTCI', 'SLIGHTL', 'PISTOLJ', 'GAGGING', 'JINGOAN', 'KREESTA', 'JOANNAN', 'MUSCLE', 'ROBERTC', 'HOTM', 'GIRLWI', 'HOLLYWA', 'SPAGHET', 'DIANESP', 'THINGS', 'CONWAYS', 'JAMESGA', 'LIFEDOC', 'RIDICUL', 'KATEDAI', 'DISCOIN', 'THISISN', 'DANC', 'AAAAAAC', 'ALLOVER', 'JOSHHOW', 'DIRTYWO', 'BANGBAO', 'WOLFSTO', 'DRAGONO', 'HANDELT', 'SETLIST', 'BACHFOS', 'WOLFMAN', 'CHARLIG', 'FALLCHI', 'HOWTOMB', 'ORKESTA', 'PETERPA', 'PRINCES', 'FOOL', 'TOMLENK', 'ABANDOM', 'MUSECHB', 'JSBACHT', 'JONRICH', 'MUSICOF', 'BRAHMSA', 'GOINGNO', 'MOONLIG', 'BBCFRON', 'DEVIOUS', 'SPOOKYM', 'BEETHOZ', 'SEVENSE', 'ALICEIO', 'PLEASER', 'GILESSW', 'NORTHAT', 'FISTING', 'BOUNCER', 'MHOUSE', 'MELTING', 'SINGAPO', 'CATHEDV', 'DESPERA', 'DIDOAND', 'DEACON', 'PLAYINJ', 'ITTAKES', 'GIVETHE', 'CLUBNOI', 'WRITERS', 'MAGICOF', 'PRACTIC', 'VANESSA', 'BARELYL', 'ANDTHEA', 'REDDRES', 'DOUGLAS', 'TRIALAN', 'HOUSEOF', 'AAAAAAA', 'TOUCHIN', 'LESSONS', 'ARABIAN', 'NEWYORK', 'CHAPSOO', 'STUFFAN', 'COMEDYG', 'SOYOUWA', 'FROMMYS', 'FLOOE', 'AGEOFTR', 'ADVENTY', 'CELEBRA', 'DREAMLO', 'ANOTHER', 'NONAMET', 'AWAYFRO', 'TOMFAIR', 'BOGSTAN', 'LOVEBOA', 'FILTHYD', 'SECRETO', 'FATKITT', 'TRIPLIC', 'PLAYTIM', 'SWEE', 'FIVEALI', 'BBCJUST', 'JIVEACE', 'GUITARO', 'BIGBAND', 'MIKEWHE', 'TRADITI', 'GOSPELO', 'PIANOFA', 'PIRATES', 'JUSTBEF', 'HOWTODO', 'SKETCHY', 'MACFLOY', 'SETITOF', 'PIANODI', 'LASW', 'CANDIDC', 'RORYMCL', 'EUANBUR', 'DISHOFT', 'CAST', 'STEFANW', 'MULTIPL', 'WITHERE', 'MARTINS', 'DOCTORS', 'IMAGINA', 'STORYTO', 'INPI', 'HEARTBR', 'BEETHOW', 'MANWHOY', 'THEWRIG', 'HOWTODI', 'TWILIGH', 'SCOTTIT', 'MORCHEE', 'KEY89', 'DEBORAH', 'AGAMEMN', 'DAVEFLY', 'BERKOFG', 'KAFKASM', 'RANDOM', 'ROSIENI', 'BBCTHE', 'ARGUMEN', 'JETSETG', 'CALLING', 'CHANGIN', 'ANGELOS', 'JAZZONA', 'RECOVER', 'DOSTOEV', 'HARPSIC', 'STEVETA', 'ROMEOAN', 'VANISHI', 'MACBETJ', 'MARYCO', 'POLL', 'ADVENTX', 'IFTHATS', 'MEMYSEL', 'THISHER', 'ROGE', 'CELEBRC', 'DEANFRJ', 'LILLIAN', 'TRAINS', 'MOVINGO', 'FITNESS', 'FREEFES', 'BEMYBAB', 'EVELINA', 'THOSEBL', 'IMPROVF', 'WHENIMK', 'EXAMPLE', 'ROCKSTA', 'MATCHMA', 'CIRCUSF', 'MEDEASC', 'BIGSCHO', 'CUSP', 'JENNEKE', 'STUARTM', 'SIMPLET', 'BOOKING', 'BBCCOMF', 'GUITARS', 'WILLTHE', 'SHONENK', 'AGM', 'ABERDEE', 'LISZTPI', 'CLASSIC', 'GETCART', 'ARIAINA', 'ROOM', 'DECADEN', 'WIZKHAL', 'DUDYOU', 'SINGALO', 'FORGETM', 'MARTHAM', 'TRIANGL', 'ALMOSTM', 'DANCEMA', 'DISTILL', 'RUMORS', 'IAMGOOG', 'TENCHIS', 'LULM', 'TWOCOME', 'ORKESTR', 'ONEMANA', 'BURLYCE', 'NOTSOFA', 'ILLIADT', 'AWAKETO', 'CHRONID', 'DICKING', 'THOSEMA', 'SANITYV', 'TAKETWO', 'GINGETH', 'SCEN', 'REALMOF', 'COLMORE', 'PEELING', 'STONEST', 'KEVINSH', 'VIVALDJ', 'TOMORRO', 'JAMIEBL', 'CLICK', 'KAFKAAN', 'HENNING', 'BLOODAN', 'PLAYING', 'AUNTDAN', 'ACTIONS', 'EDINBUA', 'RICHARF', 'SAINTSS', 'FIN', 'BABYDIA', 'SUBSIST', 'BLACKWE', 'RATP', 'PARRISA', 'LIFESAG', 'TISM', 'CHRISTO', 'LEEDSTE', 'FEAR', 'CHARMIA', 'SAMURAI', 'PATRICK', 'SAMSIMM', 'PEELINH', 'BLUEBEC', 'GENTLEM', 'BETRAYA', 'MCNEILA', 'HORSEAN', 'GOTOGOD', 'JOHNLYN', 'SEUSSIC', 'CONSTAO', 'KUNTAND', 'NOISENF', 'ANTONS', 'ATTHEFR', 'BOOMJEN', 'RICHARH', 'FOURSAD', 'JAYFORE', 'HOWTOBF', 'DAVIDVE', 'NOWANDA', 'FREERUN', 'HOWL', 'RATH', 'FREDAST', 'ABSOLUW', 'LETTHEM', 'EMPTYPA', 'ROBINAN', 'MANWHOP', 'MACBETK', 'EDUCATE', 'IMPROLY', 'TIMETRA', 'VOICE', 'HIDDENG', 'STARCHI', 'FOUNDOB', 'REVOLTI', 'GIVEMET', 'BESTOFI', 'PEOPLEI', 'CHRISCO', 'ITALIAN', 'CARIADL', 'UNEXPEC', 'INDO', 'HORNESE', 'KITTYLI', 'THREECO', 'DEEPWAT', 'PUNCHIN', 'DAZZLEJ', 'SILENT', 'OTWAYHE', 'LARAMIE', 'LORCANN', 'LEECAMP', 'JOEWILL', 'REDRIDJ', 'MADABO', 'MILDRED', 'SHIRLEY', 'RORYOHA', 'MARYCHR', 'LEITHR', 'CATIEWI', 'SHAKESQ', 'MENOFWA', 'STUARTG', 'DRPHILS', 'GETHAPP', 'OFFICEG', 'DORISDA', 'ICROON', 'HOLDENA', 'DUCKS', 'SHEEPSA', 'KELLYKI', 'JONATHA', 'CHRISMD', 'EDBYRNE', 'PERILSO', 'LOSTINM', 'LAST', 'ALIW', 'INK', 'SWIMMIN', 'DANCED', 'ZOELYON', 'EIGHTDO', 'CROFTPE', 'WARMUPS', 'RELEASE', 'ALLSHOO', 'TECH', 'CIRCOL', 'CHANNEL', 'DRYICE', 'JOHNHUR', 'TONYCRA', 'DIAM', 'YOUWILL', 'DOUGSEG', 'TOMALLE', 'YELL', 'COMEBLO', 'BRISTOL', 'FLYNCHL', 'SEXLIES', 'BAKERTH', 'CHAOS', 'GLENNWO', 'AHIRSHA', 'ERICDAV', 'COSMOPO', 'SENTMIL', 'BAWBEES', 'BENNYBO', 'MATTFOR', 'TOMWEBB', 'THEPROC', 'SEXYOUI', 'PEARSEJ', 'THUGZNT', 'OUTOFTH', 'JOHNPEE', 'ANCIENT', 'HAMLETH', 'SQUIFFZ', 'HOTCHOC', 'DEADDAD', 'MEDITAT', 'NOWTHAT', 'SHARRON', 'BEERLOA', 'MAGNETS', '43MILES', 'NATHANE', 'MALCOLM', 'GADDKIR', 'ALFIEBR', 'NEWARTC', 'CLAUDIA', 'BILLYKI', 'FRESHER', 'BASH', 'BARRYAN', 'TOLL', 'BBCCOME', 'METROPO', 'PATRICL', 'ADVENT', 'TOOMUCH', 'ZIMBABW', 'ROUGHHA', 'LEADERO', 'STANDUP', 'NIGHTST', 'RUBYWAX', 'ACMESTA', 'ONEUNDE', 'FLANDER', 'SOYDEC', 'LEWISSC', 'SOLD', 'FRANKEN', 'BLUES', 'DICKAND', 'GIJOEJA', 'BRIDGE', 'EAPOEIN', 'RANDYIS', 'JAKESWA', 'MARTINM', 'TRIMMED', 'SHERICA', 'LULD', 'SPRINGF', 'DAVIDOF', 'JIGSAW', 'MAGICAM', 'HOME', 'SOWETOE', 'AAASTAO', 'SELFISH', 'MAEDAYI', 'TURANDO', 'BESP', 'VLADIMI', 'EDINBUW', 'PRIN', 'SAILING', 'GAMEOFR', 'REALMEN', 'COMX', 'DINN', 'EDREARD', 'LATENIH', 'THOMASI', 'CARLDON', 'MAGI', 'ALMAMAT', 'FUNT', 'OEDI', 'FRESHFA', 'ARNICA9', 'ROWENAH', 'JOHNHEG', 'EVENING', 'ERICHER', 'RETROSP', 'CRAIGHI', 'PAULDAN', 'JIMEOIN', 'FOUNDIN', 'ROCKERT', 'DANNYAN', 'LIZZYST', 'BLACKSH', 'PHILLJV', 'BLACKSL', 'TOTTYGA', 'BRIDGET', 'DANIELS', 'CHRISCR', 'BABYWAN', 'FIRS', 'ANDREWB', 'AXISOFA', 'BESTOFX', 'HEYPIAN', 'MARKDOL', 'ALICEIN', 'DEANNES', 'SILKYPA', '1HANDED', 'TWOJOHN', 'TOHAVEA', 'YOUSHO', 'JAMESDO', 'NEILDOV', 'FOURPOO', 'ONTH', 'AAASTAN', 'ONEFINE', 'OEDIPUT', 'BIGVALW', 'STEPHEO', 'ELISJAM', 'STRONGW', 'KISSING', 'VIRGINM', 'HEX', 'OLVERPO', 'LEGATEA', 'JIMMYMC', 'AMAZ', 'BALLADO', 'CANYOUD', 'DONTMES', 'JUSLIKE', 'WHITEMI', 'WEDR', 'JASONBY', 'CLOC', 'LASTMIN', 'CAGEBIR', '2401OBJ', 'MEDEA', 'GANGSTE', 'MAYBEPI', 'OKLAHOM', 'SLAPGIG', 'WEDDINI', 'VERTIGO', 'ANYTHIN', 'FOURFOR', 'VIVALDI', 'PHOEBET', 'CELEBRI', 'HARPURS', 'ENROUTE', 'KIRSTYL', 'OHBOLOG', 'BETWEEN', 'HULAHOO', 'MINDREA', 'SORRIES', 'UNFORGE', 'UGLIESD', 'SLEEPIN', 'TOHOLDA', '12MENGO', 'WILLGRA', 'PAULMES', 'END', 'WATCHER', 'AMCCEIL', 'HIROSHI', 'DOORSCL', 'LIKEAVI', 'RAGGEDG', 'DAVESTE', 'BESTOFW', 'SHESTHE', 'BOBDOOL', 'ECHO', 'STILLLI', 'MICHAEN', 'NUTRAX', 'NEWTTRI', 'DUSTYLI', 'LATINON', 'ALEXHOS', 'MYJOURN', 'SUNDAYA', 'EDINBUY', 'LOOKALI', 'MESSIAE', 'IMALVOL', 'SEVE', 'MIRACLE', 'STMICHA', 'DIND', 'MEETBRI', 'SUPERCA', 'TEMPES', 'BOSOMBV', 'BARRYFO', 'OPHELIA', 'CHECKPL', 'TOBEORN', 'ENGLISH', 'LOOSEME', 'POLISHS', 'TRINITY', 'THENATI', 'REPLAYI', 'SIMPLYT', 'MOSAICO', 'STAIRHE', 'COLINCL', 'CAPITAL', 'ENCLOS', 'OPERATJ', 'WRETCH', 'MYVOLUN', 'SHOWCAS', 'COUPERI', 'BBCBROA', 'ALMURRB', 'WHISTLF', 'PHILKAY', 'INVISIB', 'BOXFREF', 'BILCYNB', 'MIDDLEE', 'COUNTRY', 'AIRYDEL', 'CELEBRE', 'POLLYAP', 'GOSPELQ', 'JUSTFOR', 'SAXAPPE', 'GARLETO', 'ANTIGON', 'CATHEDY', 'GUITARA', 'LISZTPL', 'RICHARD', 'DIALHFO', 'COMEDIV', 'APPLICA', 'MEDIEVA', 'NINESUI', 'CHRONIC', 'BEETHOV', 'JUDGEOF', 'BBCCOMI', 'CATHEDW', 'GAGSIMA', 'TONYLIT', 'SEBADOH', 'JACKSAV', 'COMEHEL', 'EDINBUZ', 'BABYLOW', 'YOUMUST', 'DOGHOUS', 'GREATBR', 'MOZARTA', 'FESTIVD', 'WHATSIN', 'LACHSAO', 'RUSKINL', 'CATHEDX', 'SALLYO', 'ASDRAWN', 'VIEWFRO', 'PRESTON', 'SHOOGLE', 'ROMANCE', 'COUCHIM', 'FESTIVC', 'BBCCOMG', 'TOMBOYB', 'EXIT', 'LITTLES', 'HOTELMF', 'PCUKAMI', 'TURNBAC', 'MONA', 'BROKENX', 'BARBJUN', 'TUCANLI', 'MUSICAV', 'DISTANT', 'DINNERW', 'CATHEDS', 'CHLOEMA', 'LASTORD', 'ATTIC', 'WILLYMA', 'MUSICB', 'MARKWAT', 'MOUR', 'HOWDOIG', 'FOSTERT', 'LOLLOTS', 'TREKELE', 'POSTHUM', 'OLDSAIN', 'BATMANT', 'CHAMBER', 'BENNYGA', 'BOOKINH', 'PIAF', 'GREATGO', 'OXFG', 'SCOTTIY', 'NUNSENT', 'GOODGUY', 'GODBLES', 'RECUERD', 'PROBLEM', 'TORTURE', 'RRRANTI', 'GOLDENA', 'ADOLF', 'GOSPELP', 'MUSICS', 'CHOPINA', 'SHAWNHI', 'REDRIDI', 'BEETHOY', 'GRIMMTB', 'NAKEDB', 'WAYTHRO', 'ANYONEF', 'SUDDENL', 'QUESTIP', 'SANDYBR', 'LUCIADI', 'THISNEX', 'ILOVEYP', 'MACHINE', 'SENSATI', 'KRISTIN', 'WHOKILL', '3RDRING', 'FORUMTH', 'JACKWHI', 'UNTOUCH', 'METROPP', 'ALASTAI', 'JUDGEST', 'METROPR', 'FUNNYWQ', 'SCOTSMA', 'STACY', 'THEBODY', 'METAMOR', 'WHOOOOO', 'BABYWAO', 'ANDB', 'HANDLIN', 'GIRLWHO', 'LLOYDLA', 'REMEMBF', 'SKITTLE', 'FLIGHTI', 'SLOWAIR', 'DIPPERF', 'DONOTGO', 'MISSION', 'MAFFBRO', 'ABOUTGI', 'BANTERI', 'VIVELED', 'COMEDYM', 'DAVEFUL', 'HOWTOCA', 'NOPANTT', 'ALANSHA', 'ROAR', 'POTOFDR', 'AISLE16', 'KIERANA', 'DANA', 'VISITAH', 'SEANNWA', 'COMEDYC', 'TEECHER', 'ALISTAJ', 'MUCHADP', 'INVESTI', 'HURR', 'ALANAND', 'SAMANTH', 'WENEEDT', 'BROWNAN', 'JAVIERJ', 'PATHOSW', 'HIMANDM', 'CRUCIBL', 'DAYINNO', 'SEASONS', 'HANS', 'WELCOME', 'WRIGHTB', 'KILLING', 'BESTOFV', 'ANDIOSH', 'LAUGHIP', 'RONNIEG', 'NEWSREV', 'FEMALEH', 'TREVORB', 'HISTORI', 'CHAS', 'CHATMAT', 'TENFILM', 'FRIMSTO', 'DUST', 'ABSOLUT', 'ZEHOFF', 'ISYSUTT', 'LULV', 'JEFFMIR', 'JAMESCH', 'LASTPET', 'ELSAJEA', 'SOPHIEA', 'PAMFORD', 'IVORSOT', 'LEILASL', 'EVERYTH', 'MANTOMA', 'THOMASH', 'SIDE', 'EDINBU', 'SIMONM', 'DAMIONL', 'BOBSLAY', 'STEVEGR', 'POSITIV', 'SECR', 'BECKETT', 'THEKIST', 'KEVINCR', 'ROISINC', 'SHUTTER', 'WORLDOG', 'JEWELLE', 'STEPHEN', 'LOM', 'FREDCOO', 'HITLERT', 'MUSICAO', 'JEMBROO', 'SOMEWHF', 'GARETHS', 'MRBENNT', 'DAVIDLE', 'LUKEMCQ', 'CONOROT', 'FRESHBR', 'INL', 'TIMOTHY', 'TOTALLZ', 'STREETD', 'LIGH', 'FABULO', 'CATHEDR', 'MIRAZOZ', 'FOILARM', 'WATERPT', 'CURSEOG', 'HANNAHG', 'FUNNYVA', 'TOYBOX', 'FLOOD', 'FINTAYL', 'SECRETC', 'MOONUND', 'THREEEN', 'ROSIESP', 'BESTOF', 'PAULFOO', 'BONES', 'KERRYGO', 'THIS', 'RACHAEL', 'ONET', 'JOHNLUK', 'HAPPYEV', 'ERICHUT', 'MARBLES', 'DANAMCC', 'GAVINWE', 'BERTIEQ', 'INCONFI', 'ORLANDO', 'FABULOW', 'ABSOLU', 'JIMSMAL', 'LIVELEB', 'CIRCUSO', 'CITYOFT', 'MYFILTH', 'VIEWLES', 'ROYHUTC', 'TONYBO', 'INTE', 'ANDREWL', 'WAITINH', 'RICHHAM', 'MATTRUD', '2SIDESO', 'JOHNROB', 'SWEETRE', 'JACKIET', 'WHENABE', 'LESM', 'PAULMCC', 'FUNNYAT', 'HELMSMA', 'INTOTHE', 'CHASTIT', 'PANTHER', 'WORLDST', 'MACBETI', 'LATESHO', 'MRKE', 'CULDESA', 'URBANSH', '3DHAMLE', 'PETEBEN', 'JAWBONE', 'MUSICAT', 'POLLYAN', 'FRANKLY', 'FUNNYAS', 'POCKETS', 'WINESCH', 'FLAM', 'SHAZIAM', 'MANYMEN', 'POPGOES', 'FEDERER', 'ROBDEER', 'GREATEX', 'OTHELLP', 'LOUNGER', 'TIMANDL', 'SUPE', 'KOREAND', 'DEVILIO', 'FUDGESH', 'MADSCIE', 'JOLLYBO', 'TEDDYAN', 'WHAG', 'EARLTHE', 'ROSESTA', 'HYDRONO', 'SAMI', 'KEITHFA', 'CHIPSON', 'OBSERVA', 'MADEINS', 'MYTHBUN', 'DAVIDMA', 'OTHELLO', 'SWAMPJ', 'BRUCEF', 'INFANT', 'FORDAND', 'MYNAMEI', 'JACKSON', 'JOCKSAN', 'JESSICB', 'WITTANK', 'NICKGIB', 'JACKMIN', 'MABBSJ', 'HOWSTEF', 'SOMEWHE', 'FREEJEW', 'MATTTIL', 'PASSION', 'TOURGUI', 'GREE', 'MUGGING', 'BABB', '7DAYDRV', 'ARTHURS', 'ANDREAS', 'TABLE', 'TEMP', 'WHAF', 'ERICLAN', 'SHANEMA', 'THIRTYS', 'ONETHO', 'DOWNTOT', 'DAUGHTE', 'TONIGHT', 'WARNING', 'PHOTOGR', 'PIFFTHE', 'TIMCLAR', 'ST\xdcCKPI', 'MARKNEL', 'FOOTLIG', 'OXFORDI', 'LAUNDRY', 'SHANEAO', 'BRADYBR', 'JABBERW', 'LISTOPF', 'MOTHERS', 'CAREYMA', 'FRANCES', 'SINGING', 'CLAS', 'MARGARE', 'NUNSEN', 'MABLEMA', 'MUSEUMO', 'KADDISH', 'IBSENSH', 'PHILLIQ', 'CASABLA', 'EXCLUSK', 'TRANSLA', 'DELETET', 'FOURSOM', 'RAYTIME', 'SPRINGD', 'TINAMAR', 'FRISKYM', 'FALLING', 'GRISLYT', 'EDWARDA', 'DONOTTA', 'WEDIDNT', 'LUNCHWI', 'TOMPRIC', 'AROUNDT', 'ELIZABE', 'LAPUTYK', 'ARET', 'ODDCAST', 'CHRISMA', 'STRANGE', 'ROOMOF', 'ANDREWO', 'PIPUTTP', 'TIFFANY', 'ENJOYYO', 'MRKO', 'JAMESAO', 'DAVEEAS', 'WHOISJE', 'LOOSERW', 'DAMSELI', 'SHAKESP', 'WHEEL', 'MORE', 'VIRGINN', 'MOVI', 'SIMONCA', 'MAKINGL', 'LEWISSD', 'LUNCHTI', 'SOCIALA', 'STATEOF', 'FAULTYT', 'ADAMLAR', 'SAMMYJP', 'SCARYGO', 'REBUSSE', 'LIFESTI', 'NAEAIRS', 'MASS', 'PHILNIC', 'ROBBERB', 'PAULSIL', 'BUDDHIS', 'MICHAEP', 'BIGSING', 'ALIMCGR', 'WOOFAWE', 'ALBOWLL', 'EXTRAOR', 'HOTGROG', 'PHYSICA', 'ANYMORE', 'BELLEVI', 'DEATHOF', 'HOOD', 'JANEAUS', 'MOZARTT', 'MUCHADO', 'MOZARTS', 'RAINBOW', 'SCOTTI', 'WHENSUM', 'TROG', 'COMICS', 'FLYMETO', 'PLAYINI', 'FROZENS', 'MELODYB', 'SHOPPIN', 'EXCLUSI', 'ALEXHOD', 'BRIANAN', 'LOUDPRO', 'BACHATT', 'VALERYP', 'HAYLEYR', 'WHAT', 'THEYCAM', 'LORDOF', 'MEETTHF', 'BATTLEG', 'ABSOLUV', 'OPPOSIT', 'JAMIEGR', 'FIONAR', 'MUDWRES', 'TODOLIS', 'STILLLJ', 'MIDNIGK', 'ELIZACA', 'REALLYT', 'OBSESSI', 'BLOODMO', 'SEVENDF', 'SANCTUA', 'THEYCAL', 'HOWTOTO', 'LOVESON', 'SHARONC', 'CAPTAIN', 'PARA', 'NAKEDIN', 'SHARONK', 'EIGHT', 'SODOM', 'TEXTAND', 'SCOTSAB', 'KITTYDA', 'CITYDAN', 'CHORALC', 'RINGOFS', 'BESTCOA', 'HANNAHR', 'RUSSELL', 'MERCYME', 'ALADDIN', 'PATSYBM', 'FLAMEND', 'JOJINGL', 'JOANASP', 'JAZZPIA', 'DREAMCA', 'GUYPRAT', 'CHORTLF', 'ALMURRA', 'BBCTHER', 'KINGJAM', 'CAGETHE', 'POOLNOW', 'JIMMYEA', 'HEIDITA', 'SUMMERC', 'RENT', 'AMCSHOW', 'CARUSTH', 'LAPRIGI', 'SOMEEDI', 'ABERDEF', 'POGIRL', 'HELENKE', 'GOOD', 'MANSAMA', 'ADMIRAL', 'AFTERNP', 'IAMTHED', 'ALBATOO', 'JONIMIT', 'GIRLAGH', 'HOTTUBW', 'EVENINE', 'SOLENTB', 'BACHFOT', 'BROADWA', 'BASI', 'BIGCOME', 'CHINESE', 'FIRSTLI', 'EVILTHE', 'AFTERNO', 'GOLDRUS', 'JAMESBM', 'BBCWHAT', 'LETTING', 'PARTIAL', 'EXSO', 'FRINGEA', 'WIRELES', 'BRAZILI', 'QUOTIDI', 'AMOEBAT', 'GETTING', 'CELEBRB', 'SPLI', 'ENDOFTH', 'MOBILIS', 'GECKO3', 'ENTITLE', 'HOLD', 'BARBARB', 'APOCALY', 'NEILHAM', 'OLDSAIO', 'TOUCHIO', 'CHRISPA', 'ALIC', 'CADENZA', 'ISEESIM', 'BENTARG', 'EATYOUR', 'ABBIPAT', 'HISTORY', 'WIVESOF', 'LASHING', 'MAHLERS', 'SCOTTIV', 'ALLE', 'WALKING', 'RESTFOR', 'HENNINH', 'BEARDYM', 'LEAVEMY', 'CATHED', 'ANTONYC', 'JEWELSH', 'DARREND', 'AUNTIEN', 'HESBACK', 'DANTESI', 'MYRTLEC', 'WRITING', 'COOLBRE', 'GOMEZ', 'HENRYRO', 'RODJONE', 'INVISIC', 'MISSJUL', 'AULDREH', 'ROBDEES', 'CONVERS', 'GORGEO', 'LATENII', 'YOUWOUL', 'SOYOUTI', 'EARLYWO', 'NOTTHES', 'BABY', 'CATHEDA', 'MUSICST', 'PSYCHOB', 'ALICECA', 'HEYOKAH', 'SPONSOS', 'CAFEVOI', 'RESHAPE', 'SHAPPIL', 'THINKIN', 'CHIMPRO', 'FLESHEA', 'CAROLIP', 'INTERNA', 'PINOCCI', 'GREATBI', 'MOONSHI', 'PRIVATE', 'TRUTHAN', 'KAOSTHE', 'SUPERCR', 'DEVLINA', 'YOURSIS', 'MRDARWI', 'CASUALV', 'AIDANBI', 'WELOVEC', 'NOBODYS', 'STILLSP', 'ADAMCRO', 'ENGEL', 'QUEENOF', 'STEWART', 'LAUGHIO', 'TEMPEST', 'COLOURM', 'RIOT', 'BAGPUSS', 'BOYJ', 'HALSPAR', 'QUEENAR', 'AAABATT', 'JOSHWID', 'HOWTOBE', 'FINGERM', 'HEAVENB', 'SILLYBE', 'ALUNCOC', 'SHYLOCK', 'WHITERA', 'MYBI', 'BYTHESE', 'PIPSAND', 'FUTUREP', 'JUSTTHE', 'THISTWI', 'THES', 'WITHINR', 'MIDNIGH', 'JOANDBR', 'LATELIV', 'PAPERTO', 'RETURNO', 'THREEBA', 'OFFTHET', 'POTTEDP', 'SCHOOLO', 'HENNANI', 'SANDERS', 'BALLETR', 'MATTKIR', 'JOHNROC', 'KINDOFS', 'KISSOFT', 'UNCLETO', 'GOGOLST', 'SHOWCAT', 'LUKEWRJ', 'FREETIM', 'NEALSYA', 'RAPEOFL', 'LAURACA', 'TENPLAG', 'TIMVINE', '52MANPI', 'FINGERS', 'NOHOLES', 'LIBERAC', 'BEOWULF', 'TIMBATT', 'CHORTLE', 'ELEVEN', 'AFTERHO', 'ALPHONS', 'PHILLJ', 'OVERCOA', 'LORDOFT', 'LASTDAY', 'DEL', 'MOVINON', 'PUSHING', 'GEMMAGP', 'DEANFRI', 'REALMAC', 'DAVEGIB', 'MICKSER', 'CABARET', 'PAJAMAM', 'NATHANC', 'MONSTER', 'FROMTHF', 'IMPROVI', 'BATTLEA', 'TWEN', 'DANNYBE', 'OCDTHES', 'SHIPSOF', 'WKAMAUB', 'SLIMINW', 'LITTLEI', 'WORL', 'FIONAOL', 'MATILDA', 'MESS', 'IMMORAL', 'SINGINT', 'CARDNIO', 'LILL', 'FLAWLES', 'ATTEMPT', 'WE3', 'DAMIANC', 'ITSUNIF', 'BLUE', 'JAMESWS', 'ALICOOK', 'TOTALLY', 'COWBOYT', 'BONE', 'MOSTLYC', 'ULTIMAT', 'OTWAYON', 'DEVILIN', 'ULTIMA', 'SEYMOUR', 'MARKTHO', 'SPANK', 'POPEBEO', 'PAULSIN', 'MINUTEA', 'TEADANC', 'CANTSTA', 'OLDRUSS', 'DOUBLEA', 'TAKETHM', 'ROCAMPB', 'BROTHER', 'ROLANDR', 'RAYGUNS', 'DAVENEL', 'COWBOYS', 'GHERKIN', 'FINDME', 'EASTEND', 'MARYBLA', 'SPRI', 'WESTEND', 'SNOWPLB', 'CLOUDMA', 'WOLV', 'FETCH', 'EDINBUT', 'JACKSST', 'DARKNES', 'IFWA', 'PAPACJO', 'SITTING', 'WEEMAN', 'BETABAG', 'WITZELS', 'GENERAT', 'DEBBIED', 'GUILTSH', 'RICHARE', 'COFFIN', 'WONDRO', 'DRAPPLE', 'UNCHART', 'LIGHTSD', 'MAGICIA', 'LYSISTR', 'PETROLJ', 'LIFT', 'STEVEHA', 'AULDREF', 'WHISTLE', 'WHICHOO', 'DANWILL', 'CAROLIN', 'TALE', 'TOAVOID', 'DOWNAND', 'FRANKSA', 'MONKHO', 'MISSIOO', 'LATENIG', 'DREGS', 'RAYMOND', 'MANOSTH', 'LUCIAAN', 'CABFARE', 'CARROLL', 'POORCAR', 'YOUW', 'LACHTHE', 'KINGSGO', 'THOMTUC', 'IMPROLZ', 'IMRANYV', 'ANDREWM', 'UNANSWE', 'PIPPIN', 'MCROSER', 'DIARIES', 'SCOTTAG', 'RAIN', 'JOSIELO', 'ASIANPR', 'NICHOLA', 'JODYKAM', 'MIKENEX', 'TRICITY', 'JOESTIL', 'ROBERTB', 'THRE', 'HOWIINV', 'DRIFT', 'CHIPPIT', 'RIKNMIX', 'VISITFR', 'DUSKRIN', 'DAVEGOR', 'IANBILL', 'ROBININ', 'THOSETW', 'CAROLIO', 'WATERLO', 'TWOBYJI', 'LIVEWIS', 'RIGHTDI', 'VOICET', 'PUPPETR', 'KING', 'PEACOCK', 'JOHNLEN', 'KINGOFS', 'CATRION', 'CATHERI', 'SILENTF', 'JAMESCA', 'FRASERM', 'SPLENDI', 'DESBISH', 'MERYLOR', 'IANFOXE', 'COCKAND', 'TINYDIC', 'ZEUSPAM', 'IANDMON', 'LIVEWIT', 'YOUNGPR', 'REBUSHI', 'SPACESB', 'WILL', 'SNAPCAT', 'SARAHAR', 'QUESTFO', 'TINCANP', 'NEWSATK', 'STITCHE', 'GODSFOO', 'BEEF', 'ALBAFLA', 'FESTIVB', 'CELEBRF', 'ATTHESA', 'ZACHAND', 'IGETTHE', 'FANT', 'PHYSED', 'INFINIT', 'SOMUCHP', 'PENNYDR', 'CONS', 'RUNDEAF', 'FREDMAC', 'OLIVERM', 'JARLATH', 'GODS', 'APPLYWI', 'OHFKMOM', 'FIVESTE', 'AUDIEND', 'JUSTSOS', 'TWONKEY', 'MOJO', 'ITSTHEE', 'NATHANP', 'MATTGRE', 'SLAV', 'CRAIGCA', 'MICHAEO', 'ZOO', 'MOGI', 'CLAY201', 'FRINGES', 'SPENT', 'MIDNIGJ', 'ERICGUD', 'EDINBUS', 'STICKMA', 'SEGUESI', 'YORKSHI', 'TALESFS', 'ORIGINA', 'KATHERI', 'SINKORS', 'REMEMBE', 'MALONES', 'TALKING', 'MILTONJ', 'JACKIEL', 'FAR', 'JERRYFI', 'CHILDRG')
$randcode = array_rand($shows);

$secret_access_key = 'hupsbJ060wj9ztXl';
$data = '/events?filter=fringe&code='.$randcode;
$secret = hash_hmac('sha1', $data, $secret_access_key);
$url = 'http://api.festivalslab.com'.$data.'&signature='.$secret

$json = file_get_contents($url);
$json_object = json_decode($json);
$hhmm = $json_object[0]->start_time_hhmm;
$yymmdd = $json_object[0]->start_date_yyyymmdd;

$hhmm = strlen($hhmm) < 4 ? '0' . $hhmm : $hhmm;

$arr = strptime($yymmdd . $hhmm, '%Y%m%d%H%M');
$t  = mktime($arr['tm_hour'], $arr['tm_min'],$arr['tm_sec'], $arr['tm_mon'], $arr['tm_mday'],  $arr['tm_year'] + 1900);
$event_time = strftime('%A %e %B %Y %R',  $t);
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>What the fuck should I watch tonight?</title>
  <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/wtf.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js" ></script>
<script type="text/javascript" src="js/wtf.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23181668-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </head>
  <body class="wtf">
    <h1 id="wtf">
	<?$int = array_rand($info);
	echo $info[$int];?>
	</h1>
    <div id="event">
      <h2 id="eventtitle"><?echo $json_object[0]->title;?></a></h2>
      <div id="eventinfo">
        <p id="eventdescription"><?echo $json_object[0]->description;?></p>
        <dl>
        <dt>Where</dt><dd id="venue"><?echo $json_object[0]->venue_desc;?></dd>
        <dt>When</dt><dd id="time"><?echo $event_time?></dd>
        <dl>
      </div>
    </div>
    <ul class="nav">
    <li><a id="expanddescription" href="#">I want to read the fucking description</a></li>
    <li><a href="">I don't want to fucking see that</a></li>
    </ul>
    <div id="profanity"><a href="/splash_site/profanity.html">I don't fucking like profanity</a></div>
    <div id="fuckers">This site was fucking made by <a href="http://github.com/chsrockit/" target="_blank">chsrockit!</a> at <a href="http://www.culturehackscotland.com" target="_blank">chs11</a>.</div>
    <div style="display:none"><?echo $json_object[0]; ?></div>
  </body>
</html>
