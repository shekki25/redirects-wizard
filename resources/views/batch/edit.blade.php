@extends('layouts.master')

@section('title', $title ?? 'Red Olive Redirects')

@section('content')
    <div class="container mx-auto">
        <h1 class="block mt-8 mb-2 px-4 text-grey-darkest">
            Redirect Batch
        </h1>
        <p class="mb-6 px-4">
            <a 
                href="/" 
                class="no-underline text-sm font-semibold rounded text-blue py-1 leading-normal"
            >
                <i class="fas fa-home"></i>
                Home
            </a>
        </p>
        <div id="app">
            <batch-edit-component 
                :urls="{{ $urls }}"
                batch_id="{{ $batch->id}}" 
                dev_url="{{ $batch->dev_url }}"
            >
                {{ $batch->dev_url }}
            </batch-edit-component>
        </div>
    </div>
@endsection
