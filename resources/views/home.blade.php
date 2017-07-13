@extends('layouts.app')

@section('content')
  <div style="background-color: black; height: 8em; paddng-top: 0; margin-top: 0">
        <div class="container">
              <!-- Logo Starts -->
          <a class="navbar-brand" href="#"><img src="/images/logo.png" height="80" alt="logo"/></a>
              <!-- #Logo Ends -->
        </div>
  </div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
