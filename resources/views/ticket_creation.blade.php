@extends('pagewrapper')

@section('page_content')
    <div class="container">

        <form id="ticketForm" method="post" action="/addTicket">
            @csrf
            <div class="row">
                <h1>Ticket information</h1>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Subject:
                </div>
                <div class="col-md-10">
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    User Name:
                </div>
                <div class="col-md-10">
                    <input type="text" name="user_name" id="user_name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    User Email:
                </div>
                <div class="col-md-10">
                    <input type="email" name="user_email" id="user_email" class="form-control">
                </div>
            </div>

            <div class="row">
                <h1>Attached message</h1>
            </div>

            <div class="row">
                <div class="col-md-2">
                    Author:
                </div>
                <div class="col-md-10">
                    <select name="author" id="author" class="form-control">
                        <option value="client" selected="selected">Client</option>
                        <option value="manager">Manager</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Message content:
                </div>
                <div class="col-md-10">
                    <textarea name="messageContent" id="messageContent" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <h1>Attached credentials</h1>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Login:
                </div>
                <div class="col-md-10">
                    <input type="text" name="login" id="login" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Password:
                </div>
                <div class="col-md-10">
                    <input type="text" name="password" id="password" class="form-control">
                </div>
            </div>

            <div class="row">
                <button type="submit" class="btn btn-success">Create ticket</button>
            </div>
        </form>
    </div>




@endsection
