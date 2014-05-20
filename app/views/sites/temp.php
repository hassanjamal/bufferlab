<div id="sign_in1"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 header">
                <h4>Log in to your account</h4>

                <div class="col-md-12 footer">

                    {{ Form::open(array( 'url' => 'user/login' ,'autocomplete' => 'on'
                    ,'method'=>'POST','class'=>'form-inline' , 'role'=>'form' )) }}

                    {{ Form::email('email', Input::old('email') , array( 'placeholder'=>'Email' ,
                    'class'=>'form-control' ) ) }}

                    {{ Form::password('password', array( 'placeholder'=>'****************' , 'class'=>'form-control' ) )
                    }}

                    {{ Form::submit('Sign In' , array( 'class'=>'btn btn-primary ' ) ) }}

                    {{ Form::close() }}

                </div>

                    @if ( Session::get('error') )
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif

                    @if ( Session::get('notice') )
                    <div class="alert">{{ Session::get('notice') }}</div>
                    @endif

                <!-- <div class="col-md-12 proof">
                    <div class="col-md-6 remember">
                        {{HTML::link('forgetpassword' ,'Forgot Password',array('class'=>'text-danger'))}}

                    </div>

                    <div class="col-md-6">
                        <div class="dosnt">
                            {{HTML::link('register' ,'Register Here', array('class'=>'text-danger'))}}

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
<!-- </div>
