@extends('main')

@section('content')

	<section class="view hm-stylish-strong login-page">
	    <div class="full-bg-img flex-center">
	        <div class="container">
	            <div class="row">
	                <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

	                    {!! Form::open(array('route' => 'login', 'class'=>'form-signin')) !!}
	                    	<!--Form with header-->
	                    	<div class="card">
	                        	<div class="card-body">
	                                <!--Header-->
	                                <div class="form-header theme-gradient">
	                                    <h3>Gymhunt</h3>
	                                </div>
	                                <span id="reauth-email" class="reauth-email"></span>
	                                @if (count($errors) > 0)
	                                    @foreach ($errors->all() as $error)
	                                        <div class="alert alert-danger" style="width:100%">
	                                            {{ $error }}
	                                        </div>
	                                    @endforeach
	                                @endif

	                                <!--Body-->
	                                <div class="md-form">
	                                    <i class="fa fa-envelope prefix white-text"></i>
	                                    <!-- <input type="text" id="orangeForm-email" class="form-control"> -->
	                                    {!! Form::email('email', null, array('class' => 'form-control','id'=>'orangeForm-email')) !!}
	                                    <label for="orangeForm-email" class="active">Your email</label>
	                                </div>

	                                <div class="md-form">
	                                    <i class="fa fa-lock prefix white-text"></i>
	                                    <!-- <input type="password" id="orangeForm-pass" class="form-control"> -->
	                                    {!! Form::password('password', array( 'class'=>'form-control','id'=>'orangeForm-pass')) !!}
	                                    <label for="orangeForm-pass" class="active">Your password</label>
	                                </div>

	                                <div class="text-center">
	                                    <button class="btn theme-gradient btn-lg waves-effect waves-light">Sign in</button>
	                                </div>
	                        	</div>
	                    	</div>
	                    {!! Form::close() !!}
	                    <!--/Form with header-->

	                </div>
	            </div>
	        </div>
	    </div>
	</section>

@endsection