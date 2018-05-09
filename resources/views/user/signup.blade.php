@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row offset-4">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        SIGN UP</h5>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                                @endif

                    <form class="form form-signup" action="{{route('user.signup')}}" method="post" role="form">
                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                                <input type="text" class="form-control" placeholder="Email Address" name="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" placeholder="Password" name="password" />
                            </div>
                        </div>

                <button type="submit" href="http://www.jquery2dotnet.com" class="btn btn-sm btn-primary btn-block" role="button">
                    SUBMIT</button>
                        {{csrf_field()}}

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection