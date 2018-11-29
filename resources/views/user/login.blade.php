<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<form method="POST">

@foreach($errors->all() as $message)
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! $message !!}</strong>
            </div>
        </div>
    </div>
@endforeach

<input type="text" name="mobile_numer"/>
<input type="submit" value="submit"/>
{!! csrf_field() !!}
</form>
</body>
</html>