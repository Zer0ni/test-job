@extends('pagewrapper')

@section('page_content')
<form id="ticketForm" method="post" action="/addTicket">
    @csrf
    <h1>Ticket information</h1>
    Subject:<input type="text" name="subject" id="subject" class="form-control"><br/>
    User Name:<input type="text" name="user_name" id="user_name" class="form-control"><br/>
    User Email:<input type="email" name="user_email" id="user_email" class="form-control"><br/>
    <h1>Attached message</h1>
    Author:<select name="type" name="author" id="author" class="form-control">
        <option value="client" selected="selected">Client</option>
        <option value="manager">Manager</option>
    </select><br/>
    Message content:<textarea name="content" id="content" class="form-control"></textarea><br/>
    <h1>Attached credentials</h1>
    Login:<input type="text" name="login" id="login" class="form-control"><br/>
    Password:<input type="text" name="password" id="password" class="form-control"><br/>
    <button type="submit" class="btn btn-success">Create ticket</button>
</form>
@endsection
