<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function phonePe()
    {
       	$apiKey = "71c0d83a-622e-466f-8255-91921ac87207";
        $merchantId = 'PRIMUSONLINE';

        // Generate a unique transaction ID
        $transactionId = uniqid();

        // Prepare the payload for the API request
        $payload = [
            'merchantId' => $merchantId,
            'transactionId' => $transactionId,
            'amount' => 1000, // Amount in paisa (e.g., ₹10.00)
            'redirectUrl' => route('response'), // Laravel named route for response handling
            'redirectMode' => 'REDIRECT',
            'callbackUrl' => route('response'), // Laravel named route for response handling
            'mobileNumber' => '9999999999',
            'paymentInstrument' => ['type' => 'PAY_PAGE'],
            // Add more required fields as per PhonePe's documentation
        ];

      $encoded_payload = base64_encode(json_encode($payload));

      // Generate the data hash
      $dataToHash = $encoded_payload . '/pg/v1/pay' . $apiKey . '###1';
      $datat = hash('sha256', $dataToHash);

      // Send the API request to initiate payment
      $client = new Client();
      $apiUrl = 'https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay';
	return "we will be return soon with this feature thank you!!";
      $response = $client->post($apiUrl, [
        'headers' => [
             'Content-Type' => 'application/json',
             'accept' => 'application/json',
         ],
         'X-VERIFY' => $datat, // Corrected the placement of X-VERIFY
         'json' => ['request' => $encoded_payload], // Use 'json' to send JSON data
      ]);

    //dd($response);
        //return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);
    }

    public function response(Request $request)
    {
        $input = $request->all();

        $saltKey = '71c0d83a-622e-466f-8255-91921ac87207';
        $saltIndex = 1;

        $finalXHeader = hash('sha256','/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'].$saltKey).'###'.$saltIndex;

        $response = Curl::to('https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'])
                ->withHeader('Content-Type:application/json')
                ->withHeader('accept:application/json')
                ->withHeader('X-VERIFY:'.$finalXHeader)
                ->withHeader('X-MERCHANT-ID:'.$input['transactionId'])
                ->get();

        dd(json_decode($response));
    }
}
