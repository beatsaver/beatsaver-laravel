@extends('themes.bulma-dark.layout')
@section('title', '- Song Detail')

@section('og-meta')
    @component('components.og-meta')
        @slot('ogTitle', $song['version'][$song['key']]['songName'] .' '. $song['version'][$song['key']]['songSubName'])
        @slot('ogImageUrl', $song['version'][$song['key']]['coverUrl'])
        @slot('ogDescription')
Difficulties: {{implode(', ',array_keys($song['version'][$song['key']]['difficulties'])) }}
BPM: {{$song['version'][$song['key']]['bpm']}}
Description: {{$song['description']}}
        @endslot
        @slot('ogUrl', $song['version'][$song['key']]['linkUrl'])
    @endcomponent
@endsection

@section('content')
    @include('themes.bulma-dark.pages.songs.partial-detail')
@endsection
