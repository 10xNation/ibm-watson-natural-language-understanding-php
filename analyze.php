<?php


$content = [
  'version' => '2017-02-27',
  'url' => 'https://10xnation.com/machine-learning/',
  'features' => 'concepts,entities,keywords,categories,emotion,sentiment,metadata,relations,semantic_roles',
  'return_analyzed_text' => false
];


$config = [
  'API_USERNAME',
  'API_PASSWORD'
];


require(__DIR__.'/vendor/autoload.php');

$client = new GuzzleHttp\Client(['base_uri' => 'https://gateway.watsonplatform.net/natural-language-understanding/api/v1/']);

$res = $client->get('analyze', ['auth' => $config, 'query' => $content]);

echo $res->getBody();
