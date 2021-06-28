<?php

namespace App\Http\Controllers;

use App\Models\Credentials;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketCreationFormRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Redirect;

class TicketCreationPageController extends Controller
{
    public function initContent() {

        return view('ticket_creation');
    }

    public function processAddTicket(TicketCreationFormRequest $req) {

        $isCreated = false;
        $ticket = new Ticket();
        $ticket->subject = $req->input('subject');
        $ticket->user_name = $req->input('user_name');
        $ticket->user_email = $req->input('user_email');
        $isCreated &= $ticket->save();
        $message = new Message();
        $message->author = $req->input('author');
        $message->content = $req->input('content');
        $message->ticketId = $message->id;
        $isCreated &= $message->save();
        $credentials = new Credentials();
        $credentials->user_email = $req->input('login');
        $credentials->user_email = $req->input('password');
        $credentials->ticketId = $message->id;
        $isCreated &= $credentials->save();
        if($isCreated) {
            $req->ticketCreated();
        }
        return redirect('dashboard');
    }
}

