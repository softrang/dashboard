@extends('ecommerce-dashboard::backend.layouts.app')

@section('title', 'Dashboard - Softrang')

@section('page_title', 'Dashboard Overview')

@section('content')
    <div class="card">
        <h3>Welcome back, {{ Auth::user()->name ?? 'Admin' }} 👋</h3>
        <p>This is your Softrang Dashboard.</p>
    </div>
@endsection
