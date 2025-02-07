<?php

use Filament\Support\Colors\Color;
use Filament\Tests\TestCase;

uses(TestCase::class);

it('generates colors from a HEX value', function () {
    expect(Color::hex('#49D359'))
        ->toBe([
            50 => '246, 253, 247',
            100 => '237, 251, 238',
            200 => '210, 244, 214',
            300 => '182, 237, 189',
            400 => '128, 224, 139',
            500 => '73, 211, 89',
            600 => '66, 190, 80',
            700 => '55, 158, 67',
            800 => '44, 127, 53',
            900 => '36, 103, 44',
            950 => '22, 63, 27',
        ])
        ->and(Color::hex('#FF0000'))
        ->toBe([
            50 => '255, 242, 242',
            100 => '255, 230, 230',
            200 => '255, 191, 191',
            300 => '255, 153, 153',
            400 => '255, 77, 77',
            500 => '255, 0, 0',
            600 => '230, 0, 0',
            700 => '191, 0, 0',
            800 => '153, 0, 0',
            900 => '125, 0, 0',
            950 => '77, 0, 0',
        ]);
});

it('generates colors from an RGB value', function () {
    expect(Color::rgb('rgb(73, 211, 89)'))
        ->toBe([
            50 => '246, 253, 247',
            100 => '237, 251, 238',
            200 => '210, 244, 214',
            300 => '182, 237, 189',
            400 => '128, 224, 139',
            500 => '73, 211, 89',
            600 => '66, 190, 80',
            700 => '55, 158, 67',
            800 => '44, 127, 53',
            900 => '36, 103, 44',
            950 => '22, 63, 27',
        ])
        ->and(Color::rgb('rgb(255, 0, 0)'))
        ->toBe([
            50 => '255, 242, 242',
            100 => '255, 230, 230',
            200 => '255, 191, 191',
            300 => '255, 153, 153',
            400 => '255, 77, 77',
            500 => '255, 0, 0',
            600 => '230, 0, 0',
            700 => '191, 0, 0',
            800 => '153, 0, 0',
            900 => '125, 0, 0',
            950 => '77, 0, 0',
        ]);

});

it('returns all colors', function () {
    $colors = [];

    foreach ((new ReflectionClass(Color::class))->getConstants() as $name => $color) {
        $colors[strtolower($name)] = $color;
    }

    expect(Color::all())
        ->toBe($colors);
});
