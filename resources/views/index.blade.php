@inject('decorate', 'App\Helper\Decorator')
@extends('layouts.default')
@php
    $locale =  app()->getLocale();
    $display = "";
    if($locale === 'ar')
	{
        $display = ".display-3 { font-size: 3.5rem; }";
    }
@endphp
@section('content')
    <style>
        body { background-color: {!! $siteData['other_config']['background-color'] !!} !important}
        {{ $display }} 
    </style>
    {{ $decorate->section($siteData['options']) }}
@endsection