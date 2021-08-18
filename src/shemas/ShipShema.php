<?php

namespace mmaurice\api\infoflot\shemas;

use \mmaurice\api\infoflot\shemas\CoordinatesSheme;
use \mmaurice\api\infoflot\shemas\DeckShema;
use \mmaurice\api\infoflot\shemas\FeaturesShema;
use \mmaurice\api\infoflot\shemas\InterestingFactsPhotosShema;
use \mmaurice\api\infoflot\shemas\OnboardServiceShema;
use \mmaurice\api\infoflot\shemas\ReviewSheme;
use \mmaurice\api\infoflot\shemas\ShipCabinShema;
use \mmaurice\api\infoflot\shemas\ShipIdCabinTypesShema;
use \mmaurice\api\infoflot\shemas\ShipIdSchemeShema;
use \mmaurice\api\infoflot\shemas\ShipFilesShema;
use \mmaurice\api\infoflot\shemas\ShipPhotosShema;
use \mmaurice\api\infoflot\shemas\SocialShema;
use \mmaurice\apigate\types\ArrayType;

class ShipShema extends \mmaurice\apigate\builders\ShemaBuilder
{
    protected static $rules = [
        'id' => ['integer'],
        'name' => ['string'],
        'url' => ['string'],
        'tagline' => ['string'],
        'tagline2' => ['string'],
        'stars' => ['integer'],
        'type' => ['string'],
        'typeName' => ['string'],
        'captain' => ['string'],
        'cruiseDirector' => ['string'],
        'restaurantDirector' => ['string'],
        'description' => ['string'],
        'descriptionBig' => ['string'],
        'services' => ['string'],
        'discounts' => ['string'],
        'discountsNextYear' => ['string'],
        'files' => [ShipFilesShema::class],
        'photos' => [ShipPhotosShema::class],
        'photoArchive' => ['string'],
        'photoArchiveSize' => ['integer'],
        'interestingFactsPhotos' => [InterestingFactsPhotosShema::class],
        'features' => [[FeaturesShema::class, ArrayType::class]],
        'currentCruiseId' => ['integer'],
        'onboardServices' => [OnboardServiceShema::class],
        'coordinates' => [CoordinatesSheme::class],
        'reviews' => [[ReviewSheme::class, ArrayType::class]],
        'interestingFactsPhotos' => [InterestingFactsPhotosShema::class],
        'foreignCurrency' => ['integer'],
        '3dtour' => ['string'],
        'video' => ['string'],
        'files' => [SocialShema::class],
        'interestingFacts' => ['string'],
        'include' => ['string'],
        'project' => ['string'],
        'decks' => [[DeckShema::class, ArrayType::class]],
        'cabins' => [[ShipCabinShema::class, ArrayType::class]],
        'cabinTypes' => [[ShipIdCabinTypesShema::class, ArrayType::class]],
        'timetableUrl' => ['string'],
        'timetableUrlPdf' => ['string'],
        'schemes' => [[ShipIdSchemeShema::class, ArrayType::class]],
        'svgScheme' => ['string'],
    ];
}
