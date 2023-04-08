<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Inbox;

class InboxController extends Controller
{
    protected $inboxModel;

    public function __construct()
    {
        $this->inboxModel = new Inbox();
    }

    public function index (Request $request) {
        $data = $this->inboxModel->getInboxes($request);
        return Response()->json($data);
    }

    public function store (Request $request) {
        $id = 1;

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:225',
            'subject' => 'required',
            'email' => 'required|email:dns',
            'message' => 'required',
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'name.required' => 'Name is required',
            'subject.required' => 'Subject is required',
            'message.required' => 'Message is required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'The given data was invalid',
                'errors' => $validator->errors()
            ], 400);
        } else {
            $data = [
                'name' => $validator->validated()['name'],
                'subject' => $validator->validated()['subject'],
                'email' => $validator->validated()['email'],
                'message' => $validator->validated()['message']
            ];
            $insert = Inbox::insert($data);

            if ($insert) {
                return response()->json([
                    'success' => true,
                    'message' => 'Message Sent'
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
