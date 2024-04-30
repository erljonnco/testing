<?php
$random = rand(1, 2);
// Define the age ranges
$genZRange = "Gen Z (1997-2012)";
$millennialRange = "Millennial (1981-1996)";

// Use the random number to select the age range
$selectedRange = ($random === 1) ? $genZRange : $millennialRange; // use for random range


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
  CURLOPT_POSTFIELDS => 'entry.1850381375='.$firstRowData[54].'&entry.354737837='.$firstRowData[55].'&entry.764304576='.$firstRowData[56].'&entry.1372016660='.$firstRowData[57].'&entry.603323405='.$firstRowData[58].'&entry.1904517005='.$firstRowData[59].'&entry.1235991724='.$firstRowData[60].'&entry.864297512='.$firstRowData[61].'&entry.1337236633='.$firstRowData[62].'&entry.1105824180='.$firstRowData[63].'&entry.1174693838='.$firstRowData[64].'&entry.2038536841='.$firstRowData[65].'&entry.1597410451='.$firstRowData[66].'&entry.227958887='.$firstRowData[67].'&entry.969560462='.$firstRowData[68].'&entry.1435967913='.$firstRowData[69].'&entry.270179506='.$firstRowData[70].'&entry.1678709171='.$firstRowData[71].'&entry.1919719307='.$firstRowData[72].'&entry.1860602698='.$firstRowData[73].'&entry.1435048799='.$firstRowData[74].'&entry.622557727='.$firstRowData[75].'&entry.1770475366='.$firstRowData[76].'&entry.1248728651='.$firstRowData[77].'&entry.567998809='.$firstRowData[78].'&entry.1564982171='.$firstRowData[79].'&entry.1132867349='.$firstRowData[80].'&entry.1276228015='.$firstRowData[81].'&entry.213697391='.$firstRowData[82].'&entry.945240747='.$firstRowData[83].'&entry.163011501='.$firstRowData[84].'&entry.94700283='.$firstRowData[85].'&entry.589895868='.$firstRowData[86].'&entry.112086805='.$firstRowData[87].'&entry.1028725047='.$firstRowData[88].'&entry.1367753800='.$firstRowData[89].'&entry.1840428412='.$firstRowData[90].'&entry.2078943004='.$firstRowData[91].'&entry.1595586962='.$firstRowData[92].'&entry.1628482647='.$firstRowData[93].'&entry.1569771844='.$firstRowData[94].'&entry.388730867='.$firstRowData[95].'&entry.881438317='.$firstRowData[96].'&entry.1143728284='.$firstRowData[97].'&entry.493782225='.$firstRowData[98].'&entry.2142321492='.$firstRowData[99].'&entry.789394145='.$firstRowData[100].'&entry.1855727757='.$firstRowData[101].'&entry.1663803426='.$firstRowData[102].'&entry.1625260553='.$firstRowData[103].'&entry.1850381375_sentinel=&entry.354737837_sentinel=&entry.764304576_sentinel=&entry.1372016660_sentinel=&entry.603323405_sentinel=&entry.1904517005_sentinel=&entry.1235991724_sentinel=&entry.864297512_sentinel=&entry.1337236633_sentinel=&entry.1105824180_sentinel=&entry.1174693838_sentinel=&entry.2038536841_sentinel=&entry.1597410451_sentinel=&entry.227958887_sentinel=&entry.969560462_sentinel=&entry.1435967913_sentinel=&entry.270179506_sentinel=&entry.1678709171_sentinel=&entry.1919719307_sentinel=&entry.1860602698_sentinel=&entry.1435048799_sentinel=&entry.622557727_sentinel=&entry.1770475366_sentinel=&entry.1248728651_sentinel=&entry.567998809_sentinel=&entry.1564982171_sentinel=&entry.1132867349_sentinel=&entry.1276228015_sentinel=&entry.213697391_sentinel=&entry.945240747_sentinel=&entry.163011501_sentinel=&entry.94700283_sentinel=&entry.589895868_sentinel=&entry.112086805_sentinel=&entry.1028725047_sentinel=&entry.1367753800_sentinel=&entry.1840428412_sentinel=&entry.2078943004_sentinel=&entry.1595586962_sentinel=&entry.1628482647_sentinel=&entry.1569771844_sentinel=&entry.388730867_sentinel=&entry.881438317_sentinel=&entry.1143728284_sentinel=&entry.493782225_sentinel=&entry.2142321492_sentinel=&entry.789394145_sentinel=&entry.1855727757_sentinel=&entry.1663803426_sentinel=&entry.1625260553_sentinel=&fvv=1&partialResponse=[[[null,600053437,["I Agree to participate in the study."],0],[null,1907700300,["'.$name.'"],0],[null,1514381088,["'.$phoneNumber.'"],0],[null,1780155547,["2024-04-27"],0],[null,181091983,["'.$testRange.'"],0],[null,143228284,["'.$firstRowData[4].'"],0],[null,1601162235,["'.$firstRowData[5].'"],0],[null,407217438,["'.$firstRowData[6].'"],0],[null,660717839,["'.$firstRowData[7].'"],0],[null,1623351664,["'.$firstRowData[8].'"],0],[null,1312666005,["'.$firstRowData[9].'"],0],[null,1934562435,["'.$firstRowData[10].'"],0],[null,820954367,["'.$firstRowData[11].'"],0],[null,800046647,["'.$firstRowData[12].'"],0],[null,186546234,["'.$firstRowData[13].'"],0],[null,1850703293,["'.$firstRowData[14].'"],0],[null,941303019,["'.$firstRowData[15].'"],0],[null,1352354943,["'.$firstRowData[16].'"],0],[null,1817659321,["'.$firstRowData[17].'"],0],[null,1757315134,["'.$firstRowData[18].'"],0],[null,2118043477,["'.$firstRowData[19].'"],0],[null,491538641,["'.$firstRowData[20].'"],0],[null,1699352741,["'.$firstRowData[21].'"],0],[null,524170937,["'.$firstRowData[22].'"],0],[null,591010779,["'.$firstRowData[23].'"],0],[null,1269712760,["'.$firstRowData[24].'"],0],[null,390818084,["'.$firstRowData[25].'"],0],[null,1840668844,["'.$firstRowData[26].'"],0],[null,1153311026,["'.$firstRowData[27].'"],0],[null,1356664226,["'.$firstRowData[28].'"],0],[null,1396934530,["'.$firstRowData[29].'"],0],[null,440364246,["'.$firstRowData[30].'"],0],[null,1522569661,["'.$firstRowData[31].'"],0],[null,632405440,["'.$firstRowData[32].'"],0],[null,404148058,["'.$firstRowData[33].'"],0],[null,1883756635,["'.$firstRowData[34].'"],0],[null,451977145,["'.$firstRowData[35].'"],0],[null,764125913,["'.$firstRowData[36].'"],0],[null,1937089027,["'.$firstRowData[37].'"],0],[null,1262472462,["'.$firstRowData[38].'"],0],[null,1967760008,["'.$firstRowData[39].'"],0],[null,1154402712,["'.$firstRowData[40].'"],0],[null,412201080,["'.$firstRowData[41].'"],0],[null,596385997,["'.$firstRowData[42].'"],0],[null,1143134773,["'.$firstRowData[43].'"],0],[null,1371974829,["'.$firstRowData[44].'"],0],[null,433892977,["'.$firstRowData[45].'"],0],[null,1480225312,["'.$firstRowData[46].'"],0],[null,1068750185,["'.$firstRowData[47].'"],0],[null,478613287,["'.$firstRowData[48].'"],0],[null,1386853145,["'.$firstRowData[49].'"],0],[null,1620248150,["'.$firstRowData[50].'"],0],[null,908131360,["'.$firstRowData[51].'"],0],[null,619210277,["'.$firstRowData[52].'"],0],[null,501453317,["'.$firstRowData[53].'"],0]
]
,null,"5480601417773693154"]&pageHistory=0,1,2,3,4&fbzx=7014619481503663276&submissionTimestamp=1713354892915',

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
?>
