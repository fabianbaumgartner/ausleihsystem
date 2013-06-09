@extends('layout')

@section('content')

<?php
echo Former::horizontal_open()
    ->id('LoginForm')
    ->class('form-signin')
    ->method('POST');
?>

<h2 class="form-signin-heading">Anmelden</h2>

<?php
echo Former::text('email')
    ->label('E-Mail Adresse')
    ->class('input-block-level')
    ->placeholder('E-Mail Adresse');

echo Former::password('password')
    ->label('Passwort')
    ->class('input-block-level')
    ->placeholder('Passwort');
?>
<button class="btn btn-large btn-primary" type="submit">Anmelden</button>

<?php echo Former::close(); ?>

@stop