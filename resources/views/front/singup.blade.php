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

                        <!--Body-->

                        <div class="md-form">
                            <input type="text" id="form2" class="form-control">
                            <label for="form2">Username</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="form2" class="form-control">
                            <label for="form2">Email Address</label>
                        </div>

                        <div class="md-form">
                            <input type="password" id="form4" class="form-control">
                            <label for="form4">Your password</label>
                        </div>

                        <div class="md-form">

                            <input type="password" id="form4" class="form-control">
                            <label for="form4">Re-type password</label>
                        </div>

                        <div class="form-group">

                            <label class="keep-login"><span class="cutome-check cutome-3">
                                    <input type="checkbox">
                                    <span></span></span>terms & conditions</label>

                        </div>
                        <div class="text-center">
                            <button class="btn btn-deep-purple">Sign Up</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection