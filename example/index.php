<?php

require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');

use \mmaurice\apigate\ClientException;
use \mmaurice\api\infoflot\Client;
use \mmaurice\api\infoflot\example\configs\Config;
use \mmaurice\api\infoflot\shemas\RequestServiceShema;
use \mmaurice\api\infoflot\types\RequestServiceTypeEnumType;

try {
    $client = Client::init();
    $client->config(new Config);

    # Список городов
    //$cities = Client::callMethod('cities/list');
    //var_dump($cities);

    # Данные по городу
    //$city = Client::callMethod('cities/get', [
    //    'id' => 1,
    //]);
    //var_dump($city);

    # Список круизов
    //$cruises = Client::callMethod('cruises/list');
    //var_dump($cruises);

    # Данные по круизу
    //$cruise = Client::callMethod('cruises/get', [
    //    'id' => 333795,
    //]);
    //var_dump($cruise);

    # Данные по каютам
    //$cruiseCabin = Client::callMethod('cruises/cabins/get', [
    //    'id' => 333795,
    //]);
    //var_dump($cruiseCabin);

    # Поиск кают
    //$cruiseCabinSearch = Client::callMethod('cruises/cabins/search', [
    //    'id' => 333795,
    //]);
    //var_dump($cruiseCabinSearch);

    # Список скидок
    //$discounts = Client::callMethod('discounts/list');
    //var_dump($discounts);

    # Данные по скидке
    //$discount = Client::callMethod('discounts/get', [
    //    'id' => 30,
    //]);
    //var_dump($discount);

    # Правила суммирования скидок
    //$discountRules = Client::callMethod('discounts/rules');
    //var_dump($discountRules);

    # Список услуг
    //$onboardServices = Client::callMethod('services/list');
    //var_dump($onboardServices);

    # Данные по услуге
    //$onboardService = Client::callMethod('services/get', [
    //    'id' => 9,
    //]);
    //var_dump($onboardService);

    # Список мест
    //$publicPlaces = Client::callMethod('places/list');
    //var_dump($publicPlaces);

    # Данные по месту
    //$publicPlace = Client::callMethod('places/get', [
    //    'id' => 189,
    //]);
    //var_dump($publicPlace);

    # Список рек
    //$rivers = Client::callMethod('rivers/list');
    //var_dump($rivers);

    # Данные по реке
    //$river = Client::callMethod('rivers/get', [
    //    'id' => 144,
    //]);
    //var_dump($river);

    # Список портов
    //$ports = Client::callMethod('ports/list');
    //var_dump($ports);

    # Данные по порту
    //$port = Client::callMethod('ports/get', [
    //    'id' => 153,
    //]);
    //var_dump($port);

    # Список стран
    //$countries = Client::callMethod('countries/list');
    //var_dump($countries);

    # Данные по стране
    //$country = Client::callMethod('countries/get', [
    //    'id' => 257,
    //]);
    //var_dump($country);

    # Список регионов
    //$regions = Client::callMethod('regions/list');
    //var_dump($regions);

    # Данные по региону
    //$region = Client::callMethod('regions/get', [
    //    'id' => 216,
    //]);
    //var_dump($region);

    # Список теплоходов
    //$ships = Client::callMethod('ships/list');
    //var_dump($ships);

    # Данные по теплоходу
    //$ship = Client::callMethod('ships/get', [
    //    'id' => 1,
    //]);
    //var_dump($ship);

    # Список направлений
    //$popularRoutes = Client::callMethod('routes/list');
    //var_dump($popularRoutes);

    # Данные по направлению
    //$popularRoute = Client::callMethod('routes/get', [
    //    'id' => 95,
    //]);
    //var_dump($popularRoute);

    # Создание заявки
    //$createRequest = Client::callMethod('requests/create', [
    //    'services' => [
    //        new RequestServiceShema([
    //            'service_type' => RequestServiceTypeEnumType::TYPE_OTHER
    //        ]),
    //    ],
    //]);
    //var_dump($createRequest);

    # Список заявок
    //$requests = Client::callMethod('requests/list');
    //var_dump($requests);

    # Данные по заявке
    //$request = Client::callMethod('requests/get', [
    //    'id' => 95,
    //]);
    //var_dump($requests);

    # Удаление заявки
    //$deleteRequest = Client::callMethod('requests/delete', [
    //    'id' => 95,
    //]);
    //var_dump($deleteRequest);

} catch (ClientException $exception) {
    echo $exception->getMessage();
}

exit;
