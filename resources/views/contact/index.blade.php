@extends('layouts.app')


@section('content')
<a href="{{route('contact.create')}}">新規登録</a>

@foreach($contacts as $contact)
{{$contact->id}}
{{$contact->your_name}}

@endforeach
indexです
@endsection