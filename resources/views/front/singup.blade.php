@extends('layouts.loginlayout')

@section('content')

<div class="min-height-footer sign-up-page coustom-bg">
    <div class="container pad-botm-30">
        <div class="signup-new">

            <div class="signup-form">
                <!--Form without header-->
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div class="text-center">
                            <h2 class="login-heading text-center"> Create An Account for Client</h2>

                            <hr>
                            <p> <a href="create-accont-freelance.html" class="coutom-link">Sign up as a Freelancer</a></p>
                        </div>
                        <div id='errorSection'>
                            @if (session('session_success'))
                            <div class="alert alert-success">
                                {{ session('session_success') }}
                                <div class="pull-right closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                            @endif

                            @if (session('session_error'))
                            <div class="alert alert-danger">
                                {{ session('session_error') }}
                                <div class="pull-right closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            </div>
                            @endif

                        </div>
                        <!--Body-->
                         {{ Form::open(array('route' => 'signup','id'=>'signupform','class'=>'signup-form')) }}
                        <div class="md-form form-group">
                            <input type="text" id="form2" name="username" class="form-control">
                            <label for="form2 form-group">Username</label>
                        </div>

                        <div class="md-form form-group">
                            <input type="text" name="email" id="form2" class="form-control">
                            <label for="form2">Email Address</label>
                        </div>

                        <div class="md-form form-group">
                            <input type="password" name="password" id="password" class="form-control">
                            <label for="form4">Your password</label>
                        </div>

                        <div class="md-form form-group">

                            <input type="password" name="cpassword" id="password_confirm" class="form-control">
                            <label for="form4">Re-type password</label>
                        </div>
                        <div class="md-form form-group">

                            <div><input type="radio" id="form43" name="usertype" value="client" checked="checked"> Client
                            <input type="radio" name="usertype" id="form5" value="freelancer" class=""> Freelancer
                            </div>
                            <label for="form4">Signup As</label>
                        </div>

                        <div class="form-group">

                            <label class="keep-login">
                                <span class="cutome-check1 cutome-3">
                                    <input name="termandc" type="checkbox" value='tandc'>
                                    <span></span>
                                </span>Terms & conditions</label>

                        </div>
                        <div class="text-center">
                            <button type='submit' class="btn btn-deep-purple">Sign Up</button>
                        </div>
                         {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection