<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
      "firstname"=>$faker ->firstNameMale(),
      "lastname"=>$faker ->lastName(),
      "address"=>$faker ->streetAddress(),
      "code"=>$faker ->ean8(),
      "state"=>$faker ->state(),
      "phoneNumber"=>$faker ->phoneNumber(),
      "rule"=>$faker ->jobTitle()
    ];
});
