<?php
require __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName(applicationName: 'Googlr Sheets in PHP');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType(accessType: 'offline');
$client->setAuthConfig(config: __DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$range = 'A1:D10';
$data = [
    [
        'Category',
		'Title',
		'Text',
		'Email'
    ]
];
$values = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

$options = [
    'valueInputOption' => 'RAW'
];
$spreadsheetId = '1_R7w_ysXxsbBmbj57iIB3ws0YOwpey-GqHqFwEEOUIk';

$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);

$response = $service->spreadsheets_values->get($spreadsheetId, $range);

var_dump($response->getValues());