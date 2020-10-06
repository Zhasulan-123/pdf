<?php

namespace app\commands;

use yii\console\Controller;
use yii\helpers\Console;
use app\models\Currency;
use yii\httpclient\Client;


class CurrencyController extends Controller
{

    public function actionAdd()
    {

        $client = new Client();
        $response = $client->createRequest()
            ->setFormat(Client::FORMAT_XML)
            ->setMethod('GET')
            ->setUrl('https://nationalbank.kz/rss/rates_all.xml?switch=russian')
            ->setData(['name' => 'title'])
            ->send();


        // print_r($response->data['channel']['item']);
        
        foreach ($response->data['channel']['item'] as $key => $item) {
            $model = new Currency();
            $model->name = $item['title'];
            $model->rate = $item['description'];
            $model->date = $item['pubDate'];
            $model->created_at = date('Y-m-d H:i:s');
            if($model->save()){
                Console::output('saved');
            }else{
                Console::output('no saved');
            }
        }
        
    }
}
