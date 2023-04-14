@extends('pub_theme::layouts.app')
@section('content')
    {{-- dddx($row) --}}
    <livewire:article.edit :panel="$_panel" />
@endsection