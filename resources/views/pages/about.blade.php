{{-- resources/views/pages/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About — CleanEarth')

@section('content')

{{-- ══ ABOUT INTRO ══ --}}
<section class="section bg-white" style="padding-top:80px">
    <div class="about-grid">
        <div class="about-visual">
            <div class="big-icon">♻️</div>
            <div class="inner">
                <h2>Our Mission</h2>
                <p>To educate, advocate, and implement practical waste management strategies
                   that protect public health and restore ecological balance in our communities.</p>
            </div>
        </div>

        <div class="about-text">
            <span class="section-label">About This Project</span>
            <h2 class="section-title">Understanding the Waste Crisis</h2>
            <p class="body-text">
                Rapid urbanization and population growth have led to an unprecedented waste
                generation crisis. Without structured intervention through segregation,
                controlled disposal, and improved sanitation, communities face serious health,
                economic, and environmental consequences.
            </p>

            <ul class="about-list">
                @foreach ($pillars as $item)
                    <li>
                        <div class="icon-sm">{{ $item['icon'] }}</div>
                        <div class="txt">
                            <strong>{{ $item['title'] }}</strong>
                            <span>{{ $item['desc'] }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

{{-- ══ KEY STATS ══ --}}
<section class="section bg-light">
    <span class="section-label">The Problem Scope</span>
    <h2 class="section-title">Key Statistics</h2>
    <p class="section-sub">Understanding the scale of the problem helps us design proportional, effective responses.</p>

    <div class="cards-grid">
        @foreach ($stats as $stat)
            <div class="card">
                <div class="card-icon">{{ $stat['icon'] }}</div>
                <h3>{{ $stat['title'] }}</h3>
                <p>{{ $stat['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

@endsection
