@extends('layouts.master')

@section('title', 'Contact SH Interactive')

@section('content')

    <h2>Contact</h2>

    <div class="row">

        <div class="col-sm-4">

        </div>

        <div class="col-sm-8">

            <h1>Contact Us</h1>

            <p>We'd like to hear from you.  Your feedback is important to us.  Feel free to drop us a line below, with whatever questions you may have.  We'll get back to you in 2-3 business days, if not sooner.</p>

            {!! Form::open(['url' => 'contact', 'method' => 'POST']) !!}

            {!! Form::textField('name', 'Name:', Input::old('name')) !!}

            {!! Form::textField('email', 'Email Address:', Input::old('email')) !!}

            {!! Form::textField('phone', 'Phone:', Input::old('phone')) !!}

            {!! Form::textBox('comments', 'Comments/Question:', Input::old('comments')) !!}

            {!! Form::submitButton('Send Email', 'primary') !!}

            {!! Form::close() !!}

        </div>


    </div>
@stop