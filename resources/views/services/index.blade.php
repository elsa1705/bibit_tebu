@extends('welcome')

@section('content')
<style>
    .services-section {
        max-width: 1000px;
        margin: 40px auto;
        padding: 32px;
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 4px 24px rgba(0,128,0,0.08);
    }
    .services-title {
        color: #3a7d2c;
        font-size: 2.2rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 32px;
    }
    .services-list {
        display: flex;
        gap: 32px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .service-card {
        background: #eafbe7;
        border-radius: 16px;
        box-shadow: 0 2px 8px rgba(0,128,0,0.06);
        padding: 32px 24px;
        width: 260px;
        text-align: center;
        transition: box-shadow 0.2s;
    }
    .service-card:hover {
        box-shadow: 0 8px 32px rgba(0,128,0,0.12);
    }
    .service-icon {
        font-size: 2.5rem;
        margin-bottom: 18px;
    }
    .service-title {
        color: #294c36;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .service-desc {
        color: #444;
        font-size: 1rem;
    }
</style>
<div class="services-section">
    <div class="services-title">Our Services</div>
    <div class="services-list">
        @foreach($services as $service)
        <div class="service-card">
            <div class="service-icon">{{ $service['icon'] }}</div>
            <div class="service-title">{{ $service['title'] }}</div>
            <div class="service-desc">{{ $service['desc'] }}</div>
        </div>
        @endforeach
    </div>
</div>
@endsection