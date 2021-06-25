<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketCreationPageController extends Controller
{
    public function initContent() {
        return view('ticket_creation');
    }

    public function processAddTicket(Request $req) {
        dd($req);
    }
}
