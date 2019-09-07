@extends('layouts.app')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">









<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->name == 0)
                    Please check your Email and active your account !!
                    @endif

                    You are logged in!
                </div>
            </div>
            <!--      -->
            <div class="container">
                <div class="row">
                    <!--basic-->
                    
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-title green white-text">
                                    <h3>Basic</h3>
                                    <h5>$29/month</h5>
                                </div>
                                <ul class="collection">
                                    <li class="collection-item">25GB Disk Space</li>
                                    <li class="collection-item">30 Email Address</li>
                                    <li class="collection-item">1 Domain</li>
                                    <li class="collection-item">Live Support</li>
                                    <li class="collection-item">Unlimited Bandwidth</li>
                                </ul>
                            </div>
                            
                            <div class="card-action">
                                <div class="btn btn-block btn-large pink">Sing Up</div>
                            </div>
                        </div>
                    </div>


        </div>
    </div>
</div>
@endsection
