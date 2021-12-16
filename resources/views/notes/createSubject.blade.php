@extends('layouts.app')

@section('head')
    @livewireStyles
@endsection

@section('content')
    <form action="" method="POST">
        <section class="my-5">
            <livewire:create-category />
        </section>

        <section class="my-5">
            <label for="subject">Subject : &nbsp;</label><br>
            <input type="text" name="subject" placeholder="Subject" class="bg-slate-700 p-2">
        </section>

        <section class="my-5">
            <input type="submit" name="submitSubject" value="Create" class="box-border border bg-green-700 text-white p-2 font-bold">
            <a href="#" class="box-border border bg-gray-700 text-white p-2 ml-3 font-bold">Cancel</a>
        </section>
    </form>

    @livewireScripts
@endsection