# PHP SDK для работы с API Инфофлот

[![Language](https://img.shields.io/badge/php-%5E5.6-blue)](https://img.shields.io/badge/php-%5E5.6-blue) [![Language](https://img.shields.io/badge/ApiGate-%5E0.1.4-brightgreen)](https://img.shields.io/badge/ApiGate-%5E0.1.4-brightgreen)

PHP SDK инструмент для работы с [API Инфофлот](https://restapi.infoflot.com/) из PHP. Данный проект реализован на базе фреймворка **[ApiGate](https://github.com/moss-maurice/apigate)**. Запросы и ответы соответствуют схемам, указанным в официальной документации.

#### Реализованные методы
**Справочники**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/cities***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/cities/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/discounts***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/discounts/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/discounts-rules***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/onboard-services***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/onboard-services/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/public-places***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/public-places/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/rivers***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/rivers/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/ports***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/ports/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/countries***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/countries/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/regions***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/regions/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/ships***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/ships/{id}***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/popular-routes***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/popular-routes/{id}***

**Поиск данных**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/cruises/{id}/cabins***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/cruises/{id}/cabins/search***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/cruises***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/cruises/{id}***

**Заявки**
- ![GET-method](https://img.shields.io/badge/GET-green) ***/requests***
- ![POST-method](https://img.shields.io/badge/POST-blue) ***/requests***
- ![GET-method](https://img.shields.io/badge/GET-green) ***/requests/{id}***
- ![DELETE-method](https://img.shields.io/badge/DELETE-red) ***/requests/{id}***

#### Установка
Установка производится через Composer:
```sh
composer require mmaurice/infoflot-api
```

#### Примеры кода
В файле `/example/index.php` представлен пример кода. Для работы с библиотекой, необходимо указать свой apiKey (`/example/configs/Config.php`).

#### Ссылки
- [Официальная документация по Инфофлот API](https://restapi.infoflot.com/)
- [Документация по ApiGate](https://github.com/moss-maurice/apigate)
