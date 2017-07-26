@extends('layouts.frontlayout')

@section('content')

<main class="cd-main-content">
    <div class="max-height-footer find-talent-page gray-bg">
        <div class="container pad-botm-30 padding-top30 ">
            <section class="top-find-sec top-find-sec2">
                <div class="row">    
                    <div class="col-xs-12">
                        @if($message == 'Success')
                        <h2>Congratulation Your Account is Active.<h2/>
                        @else
                        <h2>Something Went Wrong.<h2/>
                        @endif
                            
                    </div>

                </div>

            </section>

            <div class="clearfix"></div>
            
        </div>
    </div>
</main>
@endsection