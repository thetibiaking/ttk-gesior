<?php

// 'false' blocks new payments, it will still process old payment reports
// to block processing of payment reports edit $stripe_server_name
$stripe_active = false;

/*
 * payments code use 'account ID' and file on HDD to make sure that payments are not duplicated
 * stripe.com reports each payment to all 'endpoints' configured in panel
 * if someone hosts more than 1 OTS [2+ endpoints on stripe.com],
 * it would add points 'to account ID X' on all hosted OTSes - duplicate points
 *
 * 'server_name' is used to make 'other OTSes' (other acc. makers) skip payments not generated by given acc. maker
 */
$stripe_server_name = 'unique_ots_name';
$stripe_return_url = 'https://127.0.0.1/?subtopic=shopsystem';

$stripe_secret_key = 'sk_test_QWEQWEQWE123';
$stripe_endpoint_secret = 'whsec_ASDASDAS123';

$stripe_payments = [
    [
        'money_amount' => '10.00',
        'money_currency' => 'EUR',
        'premium_points' => 50,
        'name' => '50 premium points on Your OTS',
        'price_id' => 'price_XXX123',
    ],
    [
        'money_amount' => '20.00',
        'money_currency' => 'EUR',
        'premium_points' => 100,
        'name' => '100 premium points on Your OTS',
        'price_id' => 'price_YYY123',
    ],
];