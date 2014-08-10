<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-up: A laravel Form</title>
<style>
label {
    display:block;
    padding-top:1em;
}
input[type="submit"]{
    display:block;
    margin-top:2em;
}
textarea {
    display:block;
    margin-bottom:1em;
}
input[type="checkbox"] {
    display:inline-block;
    margin-top:1em;
}
label[for="agree"] {
    display:inline;
}

</style>
</head>

<body>
    <h1>Newsletter sign up</h1>
    {{ Form::open(array('url'=>'thanks')) }}
        {{ Form::label('email','Email Address') }}
        {{ Form::text('email') }}

        {{ Form::label('os','Operation System') }}
        {{ Form::select('os',array(
        'linux'=>'Linux',
        'mac'=>'Mac OS 10',
        'windows'=>'Windows'
        )) }}

        {{ Form::label('comment','Comments') }}
        {{ Form::textarea('comment','',array('placeholder'=>'what are your interests?')) }}

        {{ Form::checkbox('agree','yes',false) }}
        {{ Form::label('agree','I agree to your terms of services') }}

        {{ Form::submit('signup') }}

    {{ Form::close() }}
</body>
</html>
