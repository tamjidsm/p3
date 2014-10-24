
@extends ('_master')
@section ('title')
	Word generator
@end

@section ('content')
	<h1>Word Generator</h1>
	<h2>Lorem Ipsum Generator</h2>
 <p>Create random filler text for your applications.</p>

<!-- {{ Form::open(array('url' => '/word')) }} -->

{{ Form::open(array(
    'url' => '/word',
    'method' => 'POST',
    'accept-charset' => 'ISO-8859-1'
)) }}

{{ Form::label('count', 'Num of para') }}
    {{ Form::text('count', ' ') }}

 {{ Form::submit('Save') }}

{{ Form::close() }}

 @stop
