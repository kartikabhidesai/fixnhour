@extends('layouts.freelancerlayout')

@section('content')
<main class="cd-main-content">

    <link href="{{ asset('css/typeahead.css') }}"  rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
                                    
    <div class="clearfix"></div>

    <section class="max-height-footer home-page gray-bg">
        <div class="container">
            <div class="home-left">
                <div class="job-left custom-ul-li">
                    @include('freelancer.includes.setting-menu-left-panel')
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="home-right">   
                <div class="search-right">
                    <div class="row ">
                        <div class="search-left col-sm-6 col-md-12 col-xs-12">
                            <div class="col-md-12 setting-title">
                                <h3><i class="fa fa-warning"></i> Update Skill</h3>
                            </div>
                            <div class="clearfix"></div>
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
                            {{ Form::open( array('method' => 'post', 'id' => 'notification',  'class' => '' )) }}
                            <div class="col-md-12">
                                <div class="form-group">

                                    
                                    <div class="bgcolor1">
                                        <input type="text" id="tags-input" name="skill" data-role="tagsinput" />
                                    </div>

                                    <script src="{{ asset('js/jquery.min.js') }}"></script>
                                    <script src="{{ asset('js/typeahead.js') }}"></script>
                                    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
                                    <style>
                                        body{ font-family:calibri;}
                                        .twitter-typeahead { display:initial !important; }
                                        .bootstrap-tagsinput {line-height:40px;display:block !important;}
                                        .bootstrap-tagsinput .tag {background:#09F;padding:5px;border-radius:4px;}
                                        .tt-hint {top:4px !important;}
                                        .tt-input{vertical-align:baseline !important;}
                                        .typeahead { border: 1px solid #CCCCCC;border-radius: 4px;padding: 8px 12px;width: 300px;font-size:1.5em;}
                                        .tt-menu { width:300px; }
                                        span.twitter-typeahead .tt-suggestion {padding: 10px 20px;	border-bottom:#CCC 1px solid;cursor:pointer;}
                                        span.twitter-typeahead .tt-suggestion:last-child { border-bottom:0px; }
                                        .bgcolor {max-width: 440px;height: 200px;background-color: #c3e8cb;padding: 40px 70px;border-radius:4px;margin:20px 0px;}
                                        .search-left input[type="text"]{
                                            border: none;
                                            width: auto;
                                        }
                                        .tag {
                                            font-size: 16px;
                                        }
                                    </style>
                                    <script>

                                        var cities = new Bloodhound({
                                            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
                                            queryTokenizer: Bloodhound.tokenizers.whitespace,
                                            prefetch: baseurl + 'freelancer/setting/getSkillList'
                                        });
                                        cities.initialize();

                                        var elt = $('#tags-input');
                                        elt.tagsinput({
                                            itemValue: 'value',
                                            itemText: 'text',
                                            typeaheadjs: {
                                                name: 'cities',
                                                displayKey: 'text',
                                                source: cities.ttAdapter()
                                            }
                                        });
                                        </script>
                                        
                                        @foreach ($getUserSkills as $key => $value)
                                            <script>
                                                var name = "@php echo $value['name']; @endphp";
                                                var value = "@php echo $value['id']; @endphp";
                                                elt.tagsinput('add', {"value": value, "text": name, "continent": "Europe"});
                                            </script>
                                        @endforeach
                                        

                                </div>
                            </div>   
                            <div class="form-actions text-center">
                                <button type="submit" class="btn default btn-green">Update</button>
                                <a href="{{ route('freelancer-notification') }}" class="btn default btn-green">Cancel</a>
                            </div>
                            {{ Form::close() }}
                        </div>

                    </div>
                </div>    

            </div>
        </div>
    </section>
    <style>
        body{ font-family:calibri;}
        .twitter-typeahead { display:initial !important; }
        .bootstrap-tagsinput {line-height:40px;display:block !important;}
        .bootstrap-tagsinput .tag {background:#09F;padding:5px;border-radius:4px;}
        .tt-hint {top:4px !important;}
        .tt-input{vertical-align:baseline !important;}
        .typeahead { border: 1px solid #CCCCCC;border-radius: 4px;padding: 8px 12px;width: 300px;font-size:1.5em;}
        .tt-menu { width:300px; }
        span.twitter-typeahead .tt-suggestion {padding: 10px 20px;	border-bottom:#CCC 1px solid;cursor:pointer;}
        span.twitter-typeahead .tt-suggestion:last-child { border-bottom:0px; }
        .bgcolor {max-width: 440px;height: 200px;background-color: #c3e8cb;padding: 40px 70px;border-radius:4px;margin:20px 0px;}
    </style>
</main>

@endsection