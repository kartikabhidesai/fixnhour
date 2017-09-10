<div id="education">
    @if(count($educations)!=0)
    @foreach($educations as $educationVal)
    <div class="f-t-block" style="border: none;">
        <div class="row">
            <div class="col-lg-12">
                <div class="profile-top full freelancer-bx">
                    <div class="profile-right">
                        <div class="block relative">
                            <h2 class="profile-name"> {{$educationVal['degree']}}  <img src="{{ asset('images/right-icon.png') }}" alt="#"></h2>
                            <p class="padding-top-ten"><strong> {{$educationVal['school']}} </strong></p>
                            <p class="location"> {{$educationVal['school_from']}} - {{$educationVal['school_to']}}</p>
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