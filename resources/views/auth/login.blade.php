
      <!--layouts.app -->
@extends('layout.baseLayout')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Login</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <input type="email" name="email" placeholder="ton email s'il te plait" value="{{ old('email') }}" required="required" />
                            <div class="col-md-6">
                           <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> 

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe Man!</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                               
                                
                                <button type="submit" class="bton bton-primary bton-block bton-large">Valider</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


 <div class="login">
	<h1>Login</h1>
    <form method="POST"  action="{{ route('login') }}" > {{ csrf_field() }}
    	<input type="email" name="email" placeholder="email please" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="bton bton-primary bton-block bton-large">Valider</button>
    </form>
</div>

@endsection