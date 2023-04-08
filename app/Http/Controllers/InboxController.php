<?php

namespace App\Http\Controllers;

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
}
