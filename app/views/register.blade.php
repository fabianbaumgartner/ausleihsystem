@extends('layout')

@section('content')

<div class="row">
    <div class="span12">

        <?php
        echo Former::vertical_open()
            ->id('RegisterForm')
            ->rules(User::$rules)
            ->method('POST');

        echo Former::text('email')
            ->class('span12')
            ->label('E-Mail Adresse');

        echo Former::text('password')
            ->label('Passwort');

        echo Former::text('firstname')
            ->label('Vorname');

        echo Former::text('lastname')
            ->label('Nachname');

        echo Former::text('phone')
            ->label('Telefonnummer');

        echo Former::text('studentid')
            ->label('Matrikelnummer');

        ?>
        <button class="btn btn-primary" type="submit">Registrieren</button>

        <?php echo Former::close(); ?>


    </div>

</div>

@stop