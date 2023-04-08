<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    protected $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    public function index (Request $request) {
        $data = $this->contactModel->getContact();
        return Response()->json($data);
    }

    public function update (Request $request) {
        $id = 1;

        $validator = Validator::make($request->all(), [
            'address' => 'required|max:225',
            'email' => 'required|email:dns',
            'phone' => ['required', 'regex:/^(0[1-9]{1}|(\+[1-9]{1}))[0-9]{3,13}$/', 'min:8'],
            'whatsapp' => ['required', 'regex:/^(0[1-9]{1}|(\+[1-9]{1}))[0-9]{3,13}$/', 'min:8'],
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'phone.required' => 'Phone is required',
            'phone.regex' => 'Phone Number is invalid. Allowed characted : + and 0-9; without space, "-", or "\"; Starting with "00" is not allowed use +(prefix) instead',
            'phone.min' => 'Mobilephone Number must ber at least 8 character (including country prefix)',
            'whatsapp.required' => 'Whatsapp is required',
            'whatsapp.regex' => 'Whatsapp Number is invalid. Allowed characted : + and 0-9; without space, "-", or "\"; Starting with "00" is not allowed use +(prefix) instead',
            'whatsapp.min' => 'Whatsapp Number must be at least 8 character (including country prefix)',
            'address.required' => 'address is required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'The given data was invalid',
                'errors' => $validator->errors()
            ], 400);
        } else {
            $data = [
                'phone' => $validator->validated()['phone'],
                'whatsapp' => $validator->validated()['whatsapp'],
                'email' => $validator->validated()['email'],
                'address' => $validator->validated()['address']
            ];
            $update = Contact::where('id', 1)->update($data);

            if ($update) {
                return response()->json([
                    'success' => true,
                    'message' => 'Contact updated'
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Server is broken'
                ], 500);
            }
        }
    }
}
