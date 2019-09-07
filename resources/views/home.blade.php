@extends('layouts.app')

@section('content')
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



                    
                </div>
                
            </div>
            
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

                
            <div class="container">
            <h3>A demo of Bootstrap Card</h3>
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="iconend.png" alt="the image alt text here">
              <div class="card-body">
                <h5 class="card-title text-primary">Bootstrap 4</h5>
                <p class="card-text">The great way to build mobile first web applications. Create responsive websites by built-in capabilities by utlizing 
                variety of components with a powerful grid system.
                </p>
                <a href="#" class="btn btn-outline-dark">Learn more</a>
              </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
