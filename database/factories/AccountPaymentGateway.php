<?php

use App\Models\AccountPaymentGateway;

$factory->define(AccountPaymentGateway::class, function (Faker\Generator $faker) {
    return [
        'account_id' => function () {
            return factory(App\Models\Account::class)->create()->id;
        },
        'payment_gateway_id' => function () {
            return factory(App\Models\PaymentGateway::class)->create()->id;
        },
        'config' => [
            'apiKey' => 'sk_test_51N8lKXHoZ3nWPK0RAEEr7aWJsBLZz9hOmkZbAuj794izBrSi4PobZur06LUsFsWLUzalg0OjXy7CzIDG3GR3iHCa00mBg751FG',
            'publishableKey' => 'pk_test_51N8lKXHoZ3nWPK0RYcDbO51c6mpV8g4EtEWBowxPQkUBygASPaDAupXT8Pv6c4VtRKmtlNOaYe1X4I1onSWW3hIT00O44rrvCl',
        ],
    ];
});
