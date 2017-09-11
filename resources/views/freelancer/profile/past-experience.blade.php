<div id="past-experience">
    @if(count($employmentDetail)!=0)
    @foreach($employmentDetail as $employmentVal)
    <div class="f-t-block-old">
        <div class="row">
            <div class="col-lg-12">
                <div class="profile-top full freelancer-bx">
                    <div class="profile-right">
                        <div class="block relative">
                            <h2 class="profile-name">{{$employmentVal['company']}} <img src="{{ asset('images/right-icon.png') }}" alt="#"></h2>
                            <p class="padding-top-ten"><strong>{{($employmentVal['role']!='')?  $arrRole[$employmentVal['role']]:''}}</strong></p>
                            <p class="location"><img src="{{ asset('images/map-pin.png') }}" alt="#"> {{$employmentVal['location']}}, {{ ($employmentVal['country']!='')?  $arrCountry[$employmentVal['country']]:''}}</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>