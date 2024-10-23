@extends('components.layout')

@section('slot')
    <div>
        @dump(session()->all())
    </div>
@endsection
