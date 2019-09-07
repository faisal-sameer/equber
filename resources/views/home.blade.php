@extends('layouts.app')





@section('content')

<div class="containe">
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
        </div>






<div class="container">
    <div class="row">
        <!--basic
                            <img src="فهرس.png">

                        -->
        
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    <div class="card-title green white-text">
                        <h3>صاحب معدات</h3>
                        
                    </div>
                    <ul class="collection">
                        <li class="collection-item">سجل دخولك كصاحب معدة لتسهل تواصلك مع المهندسين </li>
                      
                    </ul>
                </div>
                
                <div class="card-action">
                    <div class="btn btn-block btn-large pink">Sing Up</div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <!--basic
                            <img src="iconend.png">
-->
        
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    <div class="card-title green white-text">
                        <h3>مهندس</h3>
                        
                    </div>
                    <ul class="collection">
                        <li class="collection-item">سجل دخولك كمهندس حيث نسهل التواصل بينك وبين أصحاب معدات البناء</li>

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

</div>

@endsection
