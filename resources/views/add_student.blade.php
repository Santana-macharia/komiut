
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">

        <div id="wrapper">

          

        <h3 class="menu-title">Teacher Dashboard</h3>
                

                <div class="row">
                    <div class="col-md-10 col-xs-12">

                        <form action="" id="adsPostForm" class="form-horizontal" method="post" enctype="multipart/form-data"> @csrf

              

                        <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                            <label for="name" class="col-sm-4 control-label">Student Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name" placeholder="name">
                                {!! $errors->has('name')? '<p class="help-block">'.$errors->first('ad_title').'</p>':'' !!}
                                
                            </div>
                        </div>

                                <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
                            <label for="ad_title" class="col-sm-4 control-label">Class</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="class" value="" name="class" placeholder="class">
                                {!! $errors->has('class')? '<p class="help-block">'.$errors->first('class').'</p>':'' !!}
                            </div>
                        </div>

                        <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">Student results</legend>
                                    <div class="row d-flex justify-content-lg-around justify-content-sm-center">
                                        <div class="col-sm-12 col-lg-5">
                                        <div class="invalid-feedback">
                                                    Upload a scanned copy of the student results
                                                </div>
                                            <div class="form-group">
                                                
                                                <input type="file" class="form-control custom-file-input" id="kcse" name="KCSE_certificate" placeholder="Upload  scan"  accept="image/*" required>
                                                
                                                
                                            </div>
</div>                                 



