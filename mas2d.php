<?php
 

  $duomenys=[
    [1, 7, 9, 11], 
    [3, 8, [8, 7, 6], 1],
    [8, 7, 3, 2]
  ];
  


  //echo $m[0][1];
  
  foreach ($duomenys as $eilute){
    foreach ($eilute as $sk){
        if (is_array($sk)){
            echo "[";
            foreach ($sk as $sk2){
                echo $sk2." ";
            }
            echo "]";
        }else{
            echo $sk." ";
        }
        
    }
    echo "<br>";
  }
  echo "<hr>";

  $r1=[1, 2, 3, 4];
  $mas[0]=$r1;
  $mas[1]=$r1;
  $r1[0]=9;

 // unset($mas[0][0]);
  $mas[0][0]=10;

  foreach ($mas as $r=>$row){
    foreach ($row as $k=>$n){
        echo "[".$r.",".$k."]=".$n." ";
    }
    echo "<br>";
  }

  echo "<hr>";
  $darbuotojai=[
    ['name'=>'Jonas', 'age'=>28, 'salary'=>1900],
    ['name'=>'Antanas', 'age'=>24, 'salary'=>2500],
    ['name'=>'Gediminas', 'age'=>38, 'salary'=>1400],
  ];

  foreach ($darbuotojai as $dartojas){
    echo "Darbuotojas ".$dartojas['name']." yra "
        .$dartojas['age'].", jo atlyginimas: "
        .$dartojas['salary']." EUR <br>";
    }

    $countries = array(
        array('id' => '1','code' => 'ABW','name' => 'ZZZZZZZZZz','region' => 'Caribbean','population' => '-50'),
        array('id' => '3','code' => 'AGO','name' => 'Angolaas','region' => 'Central Africa','population' => '10000'),
        array('id' => '5','code' => 'ALB','name' => 'AlbaniaSSS','region' => 'Southern Europe','population' => '1700700'),
        array('id' => '7','code' => 'ANT','name' => 'Netherlands Antilles','region' => 'Caribbean','population' => '108600'),
        array('id' => '8','code' => 'ARE','name' => 'United Arab Emirates','region' => 'Middle East','population' => '1220600'),
        array('id' => '9','code' => 'ARG','name' => 'Argentinas','region' => 'South America','population' => '18516100'),
        array('id' => '10','code' => 'ARM','name' => 'ArmeniaZZ','region' => 'Middle East','population' => '1760100'),
        array('id' => '13','code' => 'ATF','name' => 'French Southern territories','region' => 'Antarctica','population' => '50'),
        array('id' => '15','code' => 'AUS','name' => 'Australia','region' => 'Australia and New Zealand','population' => '9443100'),
        array('id' => '16','code' => 'AUT','name' => 'Lietuva','region' => 'Western Europe','population' => '3000000'),
        array('id' => '17','code' => 'AZE','name' => 'Azerbaijan','region' => 'Middle East','population' => '3867100'),
        array('id' => '18','code' => 'BDI','name' => 'Burundi','region' => 'Eastern Africa','population' => '3347600'),
        array('id' => '19','code' => 'BEL','name' => 'Belgium','region' => 'Western Europe','population' => '5119600'),
        array('id' => '20','code' => 'BEN','name' => 'Neverland','region' => 'Western Africa','population' => '10'),
        array('id' => '21','code' => 'BFA','name' => 'Burkina Faso','region' => 'Western Africa','population' => '5968600'),
        array('id' => '22','code' => 'BGD','name' => 'Bangladesh','region' => 'Southern and Central Asia','population' => '64577600'),
        array('id' => '23','code' => 'BGR','name' => 'Bulgaria','region' => 'Eastern Europe','population' => '4095550'),
        array('id' => '24','code' => 'BHR','name' => 'Bahrain','region' => 'Middle East','population' => '308600'),
        array('id' => '25','code' => 'BHS','name' => 'Bahamas','region' => 'Caribbean','population' => '153600'),
        array('id' => '26','code' => 'BIH','name' => 'Bosnia and Herzegovina','region' => 'Southern Europe','population' => '1986100'),
        array('id' => '27','code' => 'BLR','name' => 'Belarus','region' => 'Eastern Europe','population' => '5118100'),
        array('id' => '28','code' => 'BLZ','name' => 'BelizsfdS','region' => 'Central America','population' => '120600'),
        array('id' => '29','code' => 'BMU','name' => 'Bermuda','region' => 'North America','population' => '32600'),
        array('id' => '30','code' => 'BOL','name' => 'Bolivia','region' => 'South America','population' => '100'),
        array('id' => '33','code' => 'BRN','name' => 'Brunei','region' => 'Southeast Asia','population' => '164100'),
        array('id' => '34','code' => 'BTN','name' => 'Propanas','region' => 'Southern and Central Asia','population' => '1062100'),
        array('id' => '35','code' => 'BVT','name' => 'Bouvet Island','region' => 'Antarctica','population' => '50'),
        array('id' => '37','code' => 'CAF','name' => 'Central African Republic','region' => 'Central Africa','population' => '1807600'),
        array('id' => '38','code' => 'CAN','name' => 'Canada','region' => 'North America','population' => '15573600'),
        array('id' => '39','code' => 'CCK','name' => 'Cocos (Keeling) Islands','region' => 'Australia and New Zealand','population' => '350'),
        array('id' => '40','code' => 'CHE','name' => 'Switzerland','region' => 'Western Europe','population' => '3580300'),
        array('id' => '41','code' => 'CHL','name' => 'Chile','region' => 'South America','population' => '7605600'),
        array('id' => '42','code' => 'CHN','name' => 'China','region' => 'Eastern Asia','population' => '319389550'),
        array('id' => '43','code' => 'CIV','name' => 'Côte d’Ivoire','region' => 'Western Africa','population' => '7393100'),
        array('id' => '44','code' => 'CMR','name' => 'Cameroon','region' => 'Central Africa','population' => '7542600'),
        array('id' => '45','code' => 'COD','name' => 'Congo, The Democratic Republic of the','region' => 'Central Africa','population' => '25827100'),
        array('id' => '46','code' => 'COG','name' => 'Congos','region' => 'Central Africa','population' => '1471600'),
        array('id' => '47','code' => 'COK','name' => 'Cook Islands','region' => 'Polynesia','population' => '10100'),
        array('id' => '48','code' => 'COL','name' => 'Colombia','region' => 'South America','population' => '21160600'),
        array('id' => '49','code' => 'COM','name' => 'Comoros','region' => 'Eastern Africa','population' => '289100'),
        array('id' => '50','code' => 'CPV','name' => 'Cape Verde','region' => 'Western Africa','population' => '214100'),
        array('id' => '51','code' => 'CRI','name' => 'Costa Rica','region' => 'Central America','population' => '2011600'),
        array('id' => '53','code' => 'CXR','name' => 'Christmas Island','region' => 'Australia and New Zealand','population' => '1300'),
        array('id' => '54','code' => 'CYM','name' => 'Cayman Islands','region' => 'Caribbean','population' => '19100'),
        array('id' => '56','code' => 'CZE','name' => 'Czech Republic','region' => 'Eastern Europe','population' => '5139150'),
        array('id' => '57','code' => 'DEU','name' => 'Germany','region' => 'Western Europe','population' => '41082450'),
        array('id' => '58','code' => 'DJI','name' => 'Djibouti','region' => 'Eastern Africa','population' => '319100'),
        array('id' => '59','code' => 'DMA','name' => 'Dominica','region' => 'Caribbean','population' => '35600'),
        array('id' => '60','code' => 'DNK','name' => 'Denmark','region' => 'Nordic Countries','population' => '2665100'),
        array('id' => '61','code' => 'DOM','name' => 'Dominican Republic','region' => 'Caribbean','population' => '4247600'),
        array('id' => '62','code' => 'dsa','name' => 'ddd','region' => 'ddd','population' => '50'),
        array('id' => '63','code' => 'DZA','name' => 'Algeria','region' => 'Northern Africa','population' => '15735600'),
        array('id' => '64','code' => 'ECU','name' => 'Ecuador','region' => 'South America','population' => '6323100'),
        array('id' => '65','code' => 'EGY','name' => 'Egypt','region' => 'Northern Africa','population' => '34235100'),
        array('id' => '66','code' => 'ERI','name' => 'Eritrea','region' => 'Eastern Africa','population' => '1925100'),
        array('id' => '67','code' => 'ESH','name' => 'Western Sahara','region' => 'Northern Africa','population' => '146600'),
        array('id' => '68','code' => 'ESP','name' => 'Spain','region' => 'Southern Europe','population' => '19720950'),
        array('id' => '69','code' => 'EST','name' => 'Estonia','region' => 'Baltic Countries','population' => '719700'),
        array('id' => '70','code' => 'ETH','name' => 'Ethiopia','region' => 'Eastern Africa','population' => '31282600'),
        array('id' => '71','code' => 'FIN','name' => 'Finland','region' => 'Nordic Countries','population' => '2585750'),
        array('id' => '72','code' => 'FJI','name' => 'Fiji Islands','region' => 'Melanesia','population' => '408600'),
        array('id' => '73','code' => 'FLK','name' => 'Falkland Islands','region' => 'South America','population' => '1050'),
        array('id' => '74','code' => 'FRA','name' => 'France','region' => 'Western Europe','population' => '29612950'),
        array('id' => '75','code' => 'FRO','name' => 'Faroe Islands','region' => 'Nordic Countries','population' => '21600'),
        array('id' => '76','code' => 'FSM','name' => 'Micronesia, Federated States of','region' => 'Micronesia','population' => '59600'),
        array('id' => '77','code' => 'GAB','name' => 'Gabon','region' => 'Central Africa','population' => '613100'),
        array('id' => '78','code' => 'GBR','name' => 'United Kingdom','region' => 'British Islands','population' => '29811800'),
        array('id' => '79','code' => 'GEO','name' => 'Georgia','region' => 'Middle East','population' => '2484100'),
        array('id' => '80','code' => 'GHA','name' => 'Ghana','region' => 'Western Africa','population' => '10106100'),
        array('id' => '81','code' => 'GIB','name' => 'Gibraltar','region' => 'Southern Europe','population' => '12600'),
        array('id' => '82','code' => 'GIN','name' => 'Guinea','region' => 'Western Africa','population' => '3715100'),
        array('id' => '83','code' => 'GLP','name' => 'Guadeloupe','region' => 'Caribbean','population' => '228100'),
        array('id' => '84','code' => 'GMB','name' => 'Gambia','region' => 'Western Africa','population' => '652600'),
        array('id' => '85','code' => 'GNB','name' => 'Guinea-Bissau','region' => 'Western Africa','population' => '606600'),
        array('id' => '86','code' => 'GNQ','name' => 'Equatorial Guinea','region' => 'Central Africa','population' => '226600'),
        array('id' => '87','code' => 'GRC','name' => 'Greece','region' => 'Southern Europe','population' => '5272950'),
        array('id' => '88','code' => 'GRD','name' => 'Grenada','region' => 'Caribbean','population' => '47100'),
        array('id' => '89','code' => 'GRL','name' => 'Greenland','region' => 'North America','population' => '28100'),
        array('id' => '90','code' => 'GTM','name' => 'Guatemala','region' => 'Central America','population' => '5692600'),
        array('id' => '91','code' => 'GUF','name' => 'French Guiana','region' => 'South America','population' => '90600'),
        array('id' => '92','code' => 'GUM','name' => 'Guam','region' => 'Micronesia','population' => '84100'),
        array('id' => '93','code' => 'GUY','name' => 'Guyana','region' => 'South America','population' => '430600'),
        array('id' => '94','code' => 'HKG','name' => 'Hong Kong','region' => 'Eastern Asia','population' => '3391100'),
        array('id' => '95','code' => 'HMD','name' => 'Heard Island and McDonald Islands','region' => 'Antarctica','population' => '50'),
        array('id' => '96','code' => 'HND','name' => 'Honduras','region' => 'Central America','population' => '3242600'),
        array('id' => '97','code' => 'HRV','name' => 'Croatia','region' => 'Southern Europe','population' => '2236600'),
        array('id' => '98','code' => 'HTI','name' => 'Haiti','region' => 'Caribbean','population' => '4111100'),
        array('id' => '99','code' => 'HUN','name' => 'Hungary','region' => 'Eastern Europe','population' => '5021700'),
        array('id' => '100','code' => 'IDN','name' => 'Indonesia','region' => 'Southeast Asia','population' => '106053600'),
        array('id' => '101','code' => 'IND','name' => 'India','region' => 'Southern and Central Asia','population' => '506831100'),
        array('id' => '102','code' => 'IOT','name' => 'British Indian Ocean Territory','region' => 'Eastern Africa','population' => '50'),
        array('id' => '103','code' => 'IRL','name' => 'Ireland','region' => 'British Islands','population' => '1887650'),
        array('id' => '105','code' => 'IRQ','name' => 'Iraq','region' => 'Middle East','population' => '11557600'),
        array('id' => '106','code' => 'ISL','name' => 'Iceland','region' => 'Nordic Countries','population' => '139600'),
        array('id' => '107','code' => 'ISR','name' => 'Israel','region' => 'Middle East','population' => '3108600'),
        array('id' => '108','code' => 'ITA','name' => 'Italy','region' => 'Southern Europe','population' => '28840100'),
        array('id' => '109','code' => 'JAM','name' => 'Jamaica','region' => 'Caribbean','population' => '1291600'),
        array('id' => '110','code' => 'JOR','name' => 'Jordan','region' => 'Middle East','population' => '2541600'),
        array('id' => '111','code' => 'JPN','name' => 'Japan','region' => 'Eastern Asia','population' => '63357100'),
        array('id' => '112','code' => 'KAZ','name' => 'Kazakstan','region' => 'Southern and Central Asia','population' => '8111600'),
        array('id' => '113','code' => 'KEN','name' => 'Kenya','region' => 'Eastern Africa','population' => '15040100'),
        array('id' => '114','code' => 'KGZ','name' => 'Kyrgyzstan','region' => 'Southern and Central Asia','population' => '2349600'),
        array('id' => '115','code' => 'KHM','name' => 'Cambodia','region' => 'Southeast Asia','population' => '5584100'),
        array('id' => '116','code' => 'KIR','name' => 'Kiribati','region' => 'Micronesia','population' => '41600'),
        array('id' => '117','code' => 'KNA','name' => 'Saint Kitts and Nevis','region' => 'Caribbean','population' => '19100'),
        array('id' => '118','code' => 'KOR','name' => 'South Korea','region' => 'Eastern Asia','population' => '23422100'),
        array('id' => '119','code' => 'KWT','name' => 'Kuwait','region' => 'Middle East','population' => '986100'),
        array('id' => '120','code' => 'LAO','name' => 'Laos','region' => 'Southeast Asia','population' => '2716600'),
        array('id' => '121','code' => 'LBN','name' => 'Lebanon','region' => 'Middle East','population' => '1641100'),
        array('id' => '122','code' => 'LBR','name' => 'Liberia','region' => 'Western Africa','population' => '1577100'),
        array('id' => '123','code' => 'LBY','name' => 'Libyan Arab Jamahiriya','region' => 'Northern Africa','population' => '2802600'),
        array('id' => '124','code' => 'LCA','name' => 'Saint Lucia','region' => 'Caribbean','population' => '77100'),
        array('id' => '125','code' => 'LIE','name' => 'Liechtenstein','region' => 'Western Europe','population' => '16250'),
        array('id' => '126','code' => 'LKA','name' => 'Sri Lanka','region' => 'Southern and Central Asia','population' => '9413600'),
        array('id' => '127','code' => 'LSO','name' => 'Lesotho','region' => 'Southern Africa','population' => '1076600'),
        array('id' => '128','code' => 'LTU','name' => 'Lietuva','region' => 'Baltic Countries','population' => '2801600'),
        array('id' => '129','code' => 'LUX','name' => 'Luxembourg','region' => 'Western Europe','population' => '217950'),
        array('id' => '130','code' => 'LVA','name' => 'Latvaja','region' => 'Baltic Countries','population' => '1212200'),
        array('id' => '131','code' => 'MAC','name' => 'Macao','region' => 'Eastern Asia','population' => '236600'),
        array('id' => '132','code' => 'MAR','name' => 'Morocco','region' => 'Northern Africa','population' => '14175600'),
        array('id' => '133','code' => 'MCO','name' => 'Monaco','region' => 'Western Europe','population' => '17100'),
        array('id' => '134','code' => 'MDA','name' => 'Moldova','region' => 'Eastern Europe','population' => '2190100'),
        array('id' => '135','code' => 'MDG','name' => 'Madagascar','region' => 'Eastern Africa','population' => '7971100'),
        array('id' => '136','code' => 'MDV','name' => 'Maldives','region' => 'Southern and Central Asia','population' => '143100'),
        array('id' => '137','code' => 'MEX','name' => 'Mexico','region' => 'Central America','population' => '49440600'),
        array('id' => '138','code' => 'MHL','name' => 'Marshall Islands','region' => 'Micronesia','population' => '32100'),
        array('id' => '139','code' => 'MKD','name' => 'Macedonia','region' => 'Southern Europe','population' => '1012100'),
        array('id' => '140','code' => 'MLI','name' => 'Mali','region' => 'Western Africa','population' => '5617100'),
        array('id' => '141','code' => 'MLT','name' => 'Malta','region' => 'Southern Europe','population' => '190200'),
        array('id' => '142','code' => 'MMR','name' => 'Myanmar','region' => 'Southeast Asia','population' => '22805600'),
        array('id' => '143','code' => 'MNG','name' => 'Mongolia','region' => 'Eastern Asia','population' => '1331100'),
        array('id' => '144','code' => 'MNP','name' => 'Northern Mariana Islands','region' => 'Micronesia','population' => '39100'),
        array('id' => '145','code' => 'MOZ','name' => 'Mozambique','region' => 'Eastern Africa','population' => '9840100'),
        array('id' => '146','code' => 'MRT','name' => 'Mauritania','region' => 'Western Africa','population' => '1335100'),
        array('id' => '147','code' => 'MSR','name' => 'Montserrat','region' => 'Caribbean','population' => '5600'),
        array('id' => '148','code' => 'MTQ','name' => 'Martinique','region' => 'Caribbean','population' => '197600'),
        array('id' => '149','code' => 'MUS','name' => 'Mauritius','region' => 'Eastern Africa','population' => '579100'),
        array('id' => '150','code' => 'MWI','name' => 'Malawi','region' => 'Eastern Africa','population' => '5462600'),
        array('id' => '151','code' => 'MYS','name' => 'Malaysia','region' => 'Southeast Asia','population' => '11122100'),
        array('id' => '152','code' => 'MYT','name' => 'Mayotte','region' => 'Eastern Africa','population' => '74600'),
        array('id' => '153','code' => 'NAM','name' => 'Namibia','region' => 'Southern Africa','population' => '863100'),
        array('id' => '154','code' => 'NCL','name' => 'New Caledonia','region' => 'Melanesia','population' => '107100'),
        array('id' => '155','code' => 'NER','name' => 'Niger','region' => 'Western Africa','population' => '5365100'),
        array('id' => '156','code' => 'NFK','name' => 'Norfolk Island','region' => 'Australia and New Zealand','population' => '1050'),
        array('id' => '157','code' => 'NGA','name' => 'Nigeria','region' => 'Western Africa','population' => '55753100'),
        array('id' => '158','code' => 'NIC','name' => 'Nicaragua','region' => 'Central America','population' => '2537100'),
        array('id' => '159','code' => 'NIU','name' => 'Niue','region' => 'Polynesia','population' => '1050'),
        array('id' => '160','code' => 'NLD','name' => 'Netherlands','region' => 'Western Europe','population' => '7932100'),
        array('id' => '161','code' => 'NOR','name' => 'Norway','region' => 'Nordic Countries','population' => '2239350'),
        array('id' => '162','code' => 'NPL','name' => 'Nepal','region' => 'Southern and Central Asia','population' => '11965100'),
        array('id' => '163','code' => 'NRU','name' => 'Nauru','region' => 'Micronesia','population' => '6100'),
        array('id' => '164','code' => 'NZL','name' => 'New Zealand','region' => 'Australia and New Zealand','population' => '1931100'),
        array('id' => '165','code' => 'OMN','name' => 'Oman','region' => 'Middle East','population' => '1271100'),
        array('id' => '166','code' => 'PAK','name' => 'Pakistan','region' => 'Southern and Central Asia','population' => '78241600'),
        array('id' => '167','code' => 'PAN','name' => 'Panama','region' => 'Central America','population' => '1428100'),
        array('id' => '168','code' => 'PCN','name' => 'Pitcairn','region' => 'Polynesia','population' => '75'),
        array('id' => '169','code' => 'PER','name' => 'Peru','region' => 'South America','population' => '12831100'),
        array('id' => '170','code' => 'PHL','name' => 'Philippines','region' => 'Southeast Asia','population' => '37983600'),
        array('id' => '171','code' => 'PLW','name' => 'Palau','region' => 'Micronesia','population' => '9600'),
        array('id' => '172','code' => 'PNG','name' => 'Papua New Guinea','region' => 'Melanesia','population' => '2403600'),
        array('id' => '173','code' => 'POL','name' => 'Poland','region' => 'Eastern Europe','population' => '19326900'),
        array('id' => '174','code' => 'PRI','name' => 'Puerto Rico','region' => 'Caribbean','population' => '1934600'),
        array('id' => '175','code' => 'PRK','name' => 'North Korea','region' => 'Eastern Asia','population' => '12019600'),
        array('id' => '176','code' => 'PRT','name' => 'Portugalasd','region' => 'Southern Europe','population' => '4998900'),
        array('id' => '177','code' => 'PRY','name' => 'Paraguay','region' => 'South America','population' => '2748100'),
        array('id' => '178','code' => 'PSE','name' => 'Palestine','region' => 'Middle East','population' => '1550600'),
        array('id' => '179','code' => 'PYF','name' => 'French Polynesia','region' => 'Polynesia','population' => '117600'),
        array('id' => '180','code' => 'QAT','name' => 'Qatar','region' => 'Middle East','population' => '299600'),
        array('id' => '181','code' => 'REU','name' => 'Réunion','region' => 'Eastern Africa','population' => '349600'),
        array('id' => '182','code' => 'ROM','name' => 'Romania','region' => 'Eastern Europe','population' => '11227850'),
        array('id' => '183','code' => 'RUS','name' => 'Russian Federation','region' => 'Eastern Europe','population' => '73467100'),
        array('id' => '185','code' => 'SAU','name' => 'Saudi Arabia','region' => 'Middle East','population' => '10803600'),
        array('id' => '186','code' => 'SDN','name' => 'Sudan','region' => 'Northern Africa','population' => '14745100'),
        array('id' => '187','code' => 'SEN','name' => 'Senegal','region' => 'Western Africa','population' => '4740600'),
        array('id' => '188','code' => 'SGP','name' => 'Singapore','region' => 'Southeast Asia','population' => '1783600'),
        array('id' => '189','code' => 'SGS','name' => 'South Georgia and the South Sandwich Islands','region' => 'Antarctica','population' => '50'),
        array('id' => '190','code' => 'SHN','name' => 'Saint Helena','region' => 'Western Africa','population' => '3100'),
        array('id' => '191','code' => 'SJM','name' => 'Svalbard and Jan Mayen','region' => 'Nordic Countries','population' => '1650'),
        array('id' => '192','code' => 'SLB','name' => 'Solomon Islands','region' => 'Melanesia','population' => '222100'),
        array('id' => '193','code' => 'SLE','name' => 'Sierra Leone','region' => 'Western Africa','population' => '2427100'),
        array('id' => '194','code' => 'SLV','name' => 'El Salvador','region' => 'Central America','population' => '3138100'),
        array('id' => '195','code' => 'SMR','name' => 'San Marino','region' => 'Southern Europe','population' => '13600'),
        array('id' => '196','code' => 'SOM','name' => 'Somalia','region' => 'Eastern Africa','population' => '5048600'),
        array('id' => '197','code' => 'SPM','name' => 'Saint Pierre and Miquelon','region' => 'North America','population' => '3600'),
        array('id' => '198','code' => 'STP','name' => 'Sao Tome and Principe','region' => 'Central Africa','population' => '73600'),
        array('id' => '199','code' => 'SUR','name' => 'Suriname','region' => 'South America','population' => '208600'),
        array('id' => '200','code' => 'SVK','name' => 'Slovakia','region' => 'Eastern Europe','population' => '2699450'),
        array('id' => '201','code' => 'SVN','name' => 'Slovenia','region' => 'Southern Europe','population' => '994000'),
        array('id' => '202','code' => 'SWE','name' => 'Sweden','region' => 'Nordic Countries','population' => '4430800'),
        array('id' => '203','code' => 'SWZ','name' => 'Swaziland','region' => 'Southern Africa','population' => '504100'),
        array('id' => '204','code' => 'SYC','name' => 'Seychelles','region' => 'Eastern Africa','population' => '38600'),
        array('id' => '205','code' => 'SYR','name' => 'Syria','region' => 'Middle East','population' => '8062600'),
        array('id' => '206','code' => 'TCA','name' => 'Turks and Caicos Islands','region' => 'Caribbean','population' => '8600'),
        array('id' => '207','code' => 'TCD','name' => 'Chad','region' => 'Central Africa','population' => '3825600'),
        array('id' => '208','code' => 'TGO','name' => 'Togo','region' => 'Western Africa','population' => '2314600'),
        array('id' => '209','code' => 'THA','name' => 'Thailand','region' => 'Southeast Asia','population' => '30699600'),
        array('id' => '210','code' => 'TJK','name' => 'Tajikistan','region' => 'Southern and Central Asia','population' => '3094100'),
        array('id' => '211','code' => 'TKL','name' => 'Tokelau','region' => 'Polynesia','population' => '1050'),
        array('id' => '212','code' => 'TKM','name' => 'Turkmenistan','region' => 'Southern and Central Asia','population' => '2229600'),
        array('id' => '213','code' => 'TMP','name' => 'East Timor','region' => 'Southeast Asia','population' => '442600'),
        array('id' => '214','code' => 'TON','name' => 'Tonga','region' => 'Polynesia','population' => '49600'),
        array('id' => '215','code' => 'TTO','name' => 'Trinidad and Tobago','region' => 'Caribbean','population' => '647600'),
        array('id' => '216','code' => 'TUN','name' => 'Tunisia','region' => 'Northern Africa','population' => '4793100'),
        array('id' => '217','code' => 'TUR','name' => 'Turkey','region' => 'Middle East','population' => '33295600'),
        array('id' => '218','code' => 'TUV','name' => 'Tuvalu','region' => 'Polynesia','population' => '6100'),
        array('id' => '219','code' => 'TWN','name' => 'Taiwan','region' => 'Eastern Asia','population' => '11128100'),
        array('id' => '220','code' => 'TZA','name' => 'Tanzania','region' => 'Eastern Africa','population' => '16758600'),
        array('id' => '221','code' => 'UGA','name' => 'Uganda','region' => 'Eastern Africa','population' => '10889100'),
        array('id' => '222','code' => 'UKR','name' => 'Ukraine','region' => 'Eastern Europe','population' => '25228100'),
        array('id' => '223','code' => 'UMI','name' => 'United States Minor Outlying Islands','region' => 'Micronesia/Caribbean','population' => '50'),
        array('id' => '224','code' => 'URY','name' => 'Uruguay','region' => 'South America','population' => '1668600'),
        array('id' => '225','code' => 'USA','name' => 'United States','region' => 'North America','population' => '139178600'),
        array('id' => '226','code' => 'UZB','name' => 'Uzbekistan','region' => 'Southern and Central Asia','population' => '12159100'),
        array('id' => '227','code' => 'VAT','name' => 'Holy See (Vatican City State)','region' => 'Southern Europe','population' => '550'),
        array('id' => '228','code' => 'VCT','name' => 'Saint Vincent and the Grenadines','region' => 'Caribbean','population' => '57100'),
        array('id' => '229','code' => 'VEN','name' => 'Venezuela','region' => 'South America','population' => '12085100'),
        array('id' => '230','code' => 'VGB','name' => 'Virgin Islands, British','region' => 'Caribbean','population' => '10600'),
        array('id' => '231','code' => 'VIR','name' => 'Virgin Islands, U.S.','region' => 'Caribbean','population' => '46600'),
        array('id' => '232','code' => 'VNM','name' => 'Vietnam','region' => 'Southeast Asia','population' => '39916100'),
        array('id' => '233','code' => 'VUT','name' => 'Vanuatu','region' => 'Melanesia','population' => '95100'),
        array('id' => '234','code' => 'WLF','name' => 'Wallis and Futuna','region' => 'Polynesia','population' => '7550'),
        array('id' => '235','code' => 'WSM','name' => 'Samoa','region' => 'Polynesia','population' => '90100'),
        array('id' => '236','code' => 'YEM','name' => 'Yemen','region' => 'Middle East','population' => '9056100'),
        array('id' => '237','code' => 'YUG','name' => 'Yugoslavia','region' => 'Southern Europe','population' => '5320100'),
        array('id' => '238','code' => 'ZAF','name' => 'South Africa','region' => 'Southern Africa','population' => '20188600'),
        array('id' => '240','code' => 'ZWE','name' => 'Zimbabwe','region' => 'Eastern Africa','population' => '5834600'),
        array('id' => '249','code' => 'XXY','name' => 'Y-land','region' => NULL,'population' => '175'),
        array('id' => '255','code' => 'HHH','name' => 'nauja','region' => NULL,'population' => '50'),
        array('id' => '260','code' => 'LLL','name' => 'Land','region' => 'Europe','population' => '10000'),
        array('id' => '261','code' => '5EE','name' => 'Nauja šlis','region' => 'Africa','population' => '51000'),
        array('id' => '265','code' => 'ZZZ','name' => 'Zazaland','region' => 'Europ','population' => '1000'),
        array('id' => '267','code' => 'ZZA','name' => 'Zaza','region' => 'Africa','population' => '50000'),
        array('id' => '268','code' => 'AAB','name' => 'Aba landija','region' => 'Africa','population' => '1000000'),
        array('id' => '269','code' => 'AFG','name' => 'ASdasdas d asdf asf asdf','region' => 'Africa','population' => '500')
      );

    foreach($countries as $country){
        echo "{$country['name']} gyvena {$country['population']} <br>";
    }
    
    print_r($countries);


