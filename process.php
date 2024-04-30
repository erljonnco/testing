<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
function forFour($count) {
    $numbers = array();
    for ($i = 0; $i < $count; $i++) {
        $numbers[$i] = mt_rand(1, 4);
    }
    return $numbers;
}
function forFive($count) {
    $numbers = array();
    for ($i = 0; $i < $count; $i++) {
        $numbers[$i] = mt_rand(1, 5);
    }
    return $numbers;
}
$five = forFive(50);
$four = forFour(50);

$random = rand(1, 2);
// Define the age ranges
$genZRange = "Gen Z (1997-2012)";
$millennialRange = "Millennial (1981-1996)";

// Use the random number to select the age range
$selectedRange = ($random === 1) ? $genZRange : $millennialRange;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://docs.google.com/forms/d/e/1FAIpQLSfjH6URRPT2lkaIPjRl16WJQGI_JzcueV6YwBrfn38S-h7b2A/formResponse',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'entry.1850381375='.$five[0].'&entry.354737837='.$five[1].'&entry.764304576='.$five[2].'&entry.1372016660='.$five[3].'&entry.603323405='.$five[4].'&entry.1904517005='.$five[5].'&entry.1235991724='.$five[6].'&entry.864297512='.$five[7].'&entry.1337236633='.$five[8].'&entry.1105824180='.$five[9].'&entry.1174693838='.$five[10].'&entry.2038536841='.$five[11].'&entry.1597410451='.$five[12].'&entry.227958887='.$five[13].'&entry.969560462='.$five[14].'&entry.1435967913='.$five[15].'&entry.270179506='.$five[16].'&entry.1678709171='.$five[17].'&entry.1919719307='.$five[18].'&entry.1860602698='.$five[19].'&entry.1435048799='.$five[20].'&entry.622557727='.$five[21].'&entry.1770475366='.$five[22].'&entry.1248728651='.$five[23].'&entry.567998809='.$five[24].'&entry.1564982171='.$five[25].'&entry.1132867349='.$five[26].'&entry.1276228015='.$five[27].'&entry.213697391='.$five[28].'&entry.945240747='.$five[29].'&entry.163011501='.$five[30].'&entry.94700283='.$five[31].'&entry.589895868='.$five[32].'&entry.112086805='.$five[33].'&entry.1028725047='.$five[34].'&entry.1367753800='.$five[35].'&entry.1840428412='.$five[36].'&entry.2078943004='.$five[37].'&entry.1595586962='.$five[38].'&entry.1628482647='.$five[39].'&entry.1569771844='.$five[40].'&entry.388730867='.$five[41].'&entry.881438317='.$five[42].'&entry.1143728284='.$five[43].'&entry.493782225='.$five[44].'&entry.2142321492='.$five[45].'&entry.789394145='.$five[46].'&entry.1855727757='.$five[47].'&entry.1663803426='.$five[48].'&entry.1625260553='.$five[49].'&entry.1850381375_sentinel=&entry.354737837_sentinel=&entry.764304576_sentinel=&entry.1372016660_sentinel=&entry.603323405_sentinel=&entry.1904517005_sentinel=&entry.1235991724_sentinel=&entry.864297512_sentinel=&entry.1337236633_sentinel=&entry.1105824180_sentinel=&entry.1174693838_sentinel=&entry.2038536841_sentinel=&entry.1597410451_sentinel=&entry.227958887_sentinel=&entry.969560462_sentinel=&entry.1435967913_sentinel=&entry.270179506_sentinel=&entry.1678709171_sentinel=&entry.1919719307_sentinel=&entry.1860602698_sentinel=&entry.1435048799_sentinel=&entry.622557727_sentinel=&entry.1770475366_sentinel=&entry.1248728651_sentinel=&entry.567998809_sentinel=&entry.1564982171_sentinel=&entry.1132867349_sentinel=&entry.1276228015_sentinel=&entry.213697391_sentinel=&entry.945240747_sentinel=&entry.163011501_sentinel=&entry.94700283_sentinel=&entry.589895868_sentinel=&entry.112086805_sentinel=&entry.1028725047_sentinel=&entry.1367753800_sentinel=&entry.1840428412_sentinel=&entry.2078943004_sentinel=&entry.1595586962_sentinel=&entry.1628482647_sentinel=&entry.1569771844_sentinel=&entry.388730867_sentinel=&entry.881438317_sentinel=&entry.1143728284_sentinel=&entry.493782225_sentinel=&entry.2142321492_sentinel=&entry.789394145_sentinel=&entry.1855727757_sentinel=&entry.1663803426_sentinel=&entry.1625260553_sentinel=&fvv=1&partialResponse=[[[null,600053437,["I Agree to participate in the study."],0],[null,1907700300,["'.$name.'"],0],[null,1514381088,["'.$phone.'"],0],[null,1780155547,["2024-04-28"],0],[null,181091983,["'.$selectedRange.'"],0],[null,143228284,["'.$four[0].'"],0],[null,1601162235,["'.$four[1].'"],0],[null,407217438,["'.$four[2].'"],0],[null,660717839,["'.$four[3].'"],0],[null,1623351664,["'.$four[4].'"],0],[null,1312666005,["'.$four[5].'"],0],[null,1934562435,["'.$four[6].'"],0],[null,820954367,["'.$four[7].'"],0],[null,800046647,["'.$four[8].'"],0],[null,186546234,["'.$four[9].'"],0],[null,1850703293,["'.$four[10].'"],0],[null,941303019,["'.$four[11].'"],0],[null,1352354943,["'.$four[12].'"],0],[null,1817659321,["'.$four[13].'"],0],[null,1757315134,["'.$four[14].'"],0],[null,2118043477,["'.$four[15].'"],0],[null,491538641,["'.$four[16].'"],0],[null,1699352741,["'.$four[17].'"],0],[null,524170937,["'.$four[18].'"],0],[null,591010779,["'.$four[19].'"],0],[null,1269712760,["'.$four[20].'"],0],[null,390818084,["'.$four[21].'"],0],[null,1840668844,["'.$four[22].'"],0],[null,1153311026,["'.$four[23].'"],0],[null,1356664226,["'.$four[24].'"],0],[null,1396934530,["'.$four[25].'"],0],[null,440364246,["'.$four[26].'"],0],[null,1522569661,["'.$four[27].'"],0],[null,632405440,["'.$four[28].'"],0],[null,404148058,["'.$four[29].'"],0],[null,1883756635,["'.$four[30].'"],0],[null,451977145,["'.$four[31].'"],0],[null,764125913,["'.$four[32].'"],0],[null,1937089027,["'.$four[33].'"],0],[null,1262472462,["'.$four[34].'"],0],[null,1967760008,["'.$four[35].'"],0],[null,1154402712,["'.$four[36].'"],0],[null,412201080,["'.$four[37].'"],0],[null,596385997,["'.$four[38].'"],0],[null,1143134773,["'.$four[39].'"],0],[null,1371974829,["'.$four[40].'"],0],[null,433892977,["'.$four[41].'"],0],[null,1480225312,["'.$four[42].'"],0],[null,1068750185,["'.$four[43].'"],0],[null,478613287,["'.$four[44].'"],0],[null,1386853145,["'.$four[45].'"],0],[null,1620248150,["'.$four[46].'"],0],[null,908131360,["'.$four[47].'"],0],[null,619210277,["'.$four[48].'"],0],[null,501453317,["'.$four[49].'"],0]],null,"5480601417773693154"]&pageHistory=0,1,2,3,4&fbzx=7014619481503663276&submissionTimestamp=1713354892915',

  CURLOPT_HTTPHEADER => array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'accept-language: en-US,en;q=0.9',
    'cache-control: max-age=0',
    'content-type: application/x-www-form-urlencoded',
    'cookie: S=spreadsheet_forms=ofvL5ZE7g8DE62Bib92SZc3rawEdsAENEaehy-Yjv_k; COMPASS=spreadsheet_forms=CjIACWuJV1QBpSVXbWjkeKntM1KI6qorMd8LYqUzc-5lKJCOfjoPRvXRrY5GARi1xVHY4xCzjP-wBhpDAAlriVeGdI3fwNGIM2mDOXDAFCGBslbhvTaBH9eaKnXBQclcbhDPILqlTsd1EkIlFJtf8ds57Eno4jhHh4eF6SWxfQ==; NID=513=FwJBwwplHSDzFz8xIi0SSkG0FjjDSk3c_Tn9S6zGysL9SuZavWUSe77Swg3CiRUXRQXjopxZDirlubgyoyslgNhuUW2zmfXD_SzOBUfQAC8IKYNVMJA-EgwqL_jfzCA63s2XCQLH8nD2u8VOAacCfwHN7rImecQfUwB2_kxSlmY; COMPASS=spreadsheet_forms=CjIACWuJV59Rv4eqHul-Bu7GPE4RwK74XUW-ngBCpu_yob1DbDNcqF9KJ4YhTVgUxOwFZxCqvv-wBhpDAAlriVcy7kwdmdjyiYpQC-EVfswjErThHs17g8KQRf60_bIwczspAB94IqLzwuqRsgShp6-JK43bnPK6lyiCZcL33w==; S=spreadsheet_forms=OUNQ9kp6H_Gmw1wnQ5k8_y0HaTTrOeJvk7N3g1X71eY',
    'origin: https://docs.google.com',
    'preferanonymous: 1',
    'referer: https://docs.google.com/forms/d/e/1FAIpQLSfjH6URRPT2lkaIPjRl16WJQGI_JzcueV6YwBrfn38S-h7b2A/formResponse',
    'sec-ch-ua: "Microsoft Edge";v="123", "Not:A-Brand";v="8", "Chromium";v="123"',
    'sec-ch-ua-arch: "x86"',
    'sec-ch-ua-bitness: "64"',
    'sec-ch-ua-full-version-list: "Microsoft Edge";v="123.0.2420.97", "Not:A-Brand";v="8.0.0.0", "Chromium";v="123.0.6312.123"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-model: ""',
    'sec-ch-ua-platform: "Windows"',
    'sec-ch-ua-platform-version: "15.0.0"',
    'sec-ch-ua-wow64: ?0',
    'sec-fetch-dest: document',
    'sec-fetch-mode: navigate',
    'sec-fetch-site: same-origin',
    'sec-fetch-user: ?1',
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

// Use DOMDocument and DOMXPath to parse the HTML and extract the div content
$dom = new DOMDocument();
@$dom->loadHTML($response); // Suppress warnings
$xpath = new DOMXPath($dom);

// Find the div with class 'vHW8K'
$divNodeList = $xpath->query('//div[@class="vHW8K"]');

// Check if the div was found
if ($divNodeList->length > 0) {
    // Get the text content of the first matching div
    $divContent = $divNodeList->item(0)->textContent;
    http_response_code(200);
    echo $divContent; // Output the div content
} else {
    echo 'Div not found.';
    http_response_code(404);
}
sleep(98);
?>
