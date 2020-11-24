@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
<?php 
            echo Form::label('name', 'Name'); 
            echo Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name']);
?>
        </div>
        <div class="form-group">
<?php
            echo Form::label('email', 'E-Mail Address');
            echo Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email']);
?>
        </div>
        <div class="form-group">
<?php
            echo Form::label('message', 'message');
            echo Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Message']);
?>
        </div>
        <div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        </div>
    {!! Form::close() !!}
@endsection