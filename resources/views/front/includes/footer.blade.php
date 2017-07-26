<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body login-popup">
                <div class="main-message">
                    <h5>Login to Softral</h5>
                </div>
                {{ Form::open(array('route' => 'home','id'=>'signupform','class'=>'signup-form')) }}
                    <div class="form-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="email" class="form-control" name='username' id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="keep-login">
                            <span class="cutome-check cutome-3">
                                <input type="checkbox">
                                <span></span>
                                
                            </span>Keep me signed in for 2 week<a class="login-que">[?]</a></label>
                        <a class="forgot-pass" href="#">Forgot Password?</a>
                    </div>
                    <div class="clear-full text-center btn-bottom"> <button type='submit' class="btn-green login-popup-btn">Continue</button> </div>
                    <div class="or-divi"><span>OR</span></div>
                </form>
                <div class="social-login-buttons">
                    <li> <a href="#" class="facebook-login"> <i class="fa fa-facebook" aria-hidden="true"></i> <span> Continue with Facebook </span></a> </li>
                    <li> <a href="#" class="google-login"> <img src="images/google-icon.png">  <span> Continue with google </span></a> </li>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"  src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/bootstrap.min.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/holder.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/owl.carousel.js') }}"></script> 
    <script type="text/javascript"  src="{{ asset('js/custom.js') }}"></script> 
    <script src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/front/frontcommon.js') }}"></script>
    <script type="text/javascript">
$(window).load(function()
{
	var a=$(window).height();
	$("#hero-slider .owl-item .item > img").css({height:a});
	$(window).resize(function()
		{
			var b=$(window).height();
			$("#hero-slider .owl-item .item > img").css({height:b})
		})
});
</script>
    @if (!empty($js))
        @foreach($js as $value)
        <link href="{{ asset('js/'.$value) }}" rel="stylesheet">
        @endforeach
    @endif