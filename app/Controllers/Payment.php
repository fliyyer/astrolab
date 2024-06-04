<?php

namespace App\Controllers;

use Midtrans\Config;
use Midtrans\Snap;

class Payment extends BaseController
{
    public function __construct()
    {
        $midtrans = new \Config\Midtrans();
        Config::$serverKey = $midtrans->serverKey;
        Config::$isProduction = $midtrans->isProduction;
        Config::$isSanitized = $midtrans->isSanitized;
        Config::$is3ds = $midtrans->is3ds;
    }

    public function token()
    {
        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => 2611400,
        );

        $item1_details = array(
            'id' => 'a1',
            'price' => 2309000,
            'quantity' => 1,
            'name' => "Baloon Sleeve Shirt Navy"
        );

        $item2_details = array(
            'id' => 'a2',
            'price' => 151200,
            'quantity' => 1,
            'name' => "Bataille Hors - Piste"
        );

        $item3_details = array(
            'id' => 'a3',
            'price' => 151200,
            'quantity' => 1,
            'name' => "Liontine Segi Jewel"
        );

        $item_details = array($item1_details, $item2_details, $item3_details);

        $customer_details = array(
            'first_name'    => "admin",
            'last_name'     => "testing",
            'email'         => "admin@testing.com",
            'phone'         => "081122334455",
        );

        $transaction = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );

        try {
            $snapToken = Snap::getSnapToken($transaction);
            return $this->response->setJSON(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['error' => $e->getMessage()]);
        }
    }
}
