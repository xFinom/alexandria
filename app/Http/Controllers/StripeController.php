<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function checkout(Request $request) {
        $requestData = $request->only(['book_inventory_id']);

        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' =>[
                        'currency' => 'mxn',
                        'product_data' => [
                            'name' => $request->title,
                        ],
                        'unit_amount' => $request->price * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => URL::signedRoute('success', ['requestData' => $requestData]),
            'cancel_url' => route('home'),
        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request) {
        if (!$request->hasValidSignature()) {
            abort(403, 'Invalid signature');
        }

        $requestData = $request->input('requestData');

        $purchasesController = new UserPurchasesController();
        $purchasesController->store($requestData);

        return redirect()->route('purchases.index')->with('success', 'Payment successful!');
    }
}
