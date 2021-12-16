@extends('layouts.app')

@section('content')

    <x-lesson-heading>Laravel</x-lesson-heading>
    <x-lesson-introduction>The PHP Framework for web artisans</x-lesson-introduction>

    <br><br>

    <x-topic-heading>Basic Routing</x-topic-heading>
    <x-topic-content>
        The most basic Laravel routes accept a URI and a closure, providing a very simple and expressive method of defining routes and behavior without complicated routing configuration files:
    </x-topic-content>

    <br><br>

    <x-code-block>
        <p>
            This is a code block
        </p>
        
        <x-topic-heading>
            Lorem ipsum
        </x-topic-heading>
    </x-code-block>

@endsection