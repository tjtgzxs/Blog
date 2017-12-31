<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Status;

$factory->define(App\Models\Status::class, function (Faker $faker) {
    $date_time=$faker->date." ".$faker->time;
    return [
        'content'=>$faker->text(),
        'created_at'=>$date_time,
        'updated_at'=>$date_time
    ];
});
