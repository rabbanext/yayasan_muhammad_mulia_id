@extends('layouts.app')

@section('content')
<div class="container py-5" style="min-height: 100vh; max-width: 800px;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light px-3 py-2 rounded">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Our Programs</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $program->title }}</li>
        </ol>
    </nav>
    
    <h1 class="text-center mb-4">{{ $program->title }}</h1>
    
    <img src="{{ asset('storage/' . $program->image) }}" 
         alt="{{ $program->title }}" 
         class="img-fluid rounded shadow-sm mb-4">
    
    <div class="content">
        <p class="text-justify" style="line-height: 1.8;">
            {!! $program->body !!}
        </p>
    </div>
</div>
@endsection
