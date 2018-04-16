<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OmiseCharge;

class OmiseController extends Controller
{
    public function doCharge(Request $request){
        define('OMISE_PUBLIC_KEY', 'pkey_test_5bmomx6m16phcmkobbi');
        define('OMISE_SECRET_KEY', 'skey_test_5bmomx6mcmr1y5wdrn3');

        OmiseCharge::create([
            'amount' => $request->amount,
            'currency' => 'thb',
            'card' => $request->omiseToken
        ]);

        return  response()->json($request);
    }

    public function paymentPage(){
        return view('user.paymentO');
    }

}
