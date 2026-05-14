{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Home — Waste Management Solutions')

@section('content')

{{-- ══ HERO SECTION ══ --}}
<section class="hero">
    <div class="hero-content">
        <span class="hero-badge">🌿 Environmental Solutions Project</span>

        <h1>
            A Cleaner Earth Starts With
            <em>Smart Waste</em> Management
        </h1>

        <p>
            Discover comprehensive solutions for waste segregation, responsible disposal,
            and improved sanitation systems that create healthier, more sustainable
            communities for generations to come.
        </p>

        <div class="hero-btns">
            <a href="{{ route('solutions') }}" class="btn-primary">Explore Solutions</a>
            <a href="{{ route('about') }}"     class="btn-secondary">Learn More</a>
        </div>
    </div>

    {{-- Stats floating cards --}}
    <div class="hero-stats">
        @foreach ($stats as $stat)
            <div class="stat-box">
                <span class="num">{{ $stat['value'] }}</span>
                <span class="lbl">{{ $stat['label'] }}</span>
            </div>
        @endforeach
    </div>
</section>

{{-- ══ THREE PILLARS ══ --}}
<section class="section">
    <span class="section-label">What We Address</span>
    <h2 class="section-title">Three Pillars of Waste Management</h2>
    <p class="section-sub">
        Our project focuses on actionable, community-driven solutions across three
        critical areas to tackle the growing waste crisis.
    </p>

    <div class="cards-grid">
        @foreach ($pillars as $pillar)
            <div class="card">
                <div class="card-icon">{{ $pillar['icon'] }}</div>
                <h3>{{ $pillar['title'] }}</h3>
                <p>{{ $pillar['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ══ WHY IT MATTERS ══ --}}
<section class="section-green">
    <span class="section-label">Why It Matters</span>
    <h2 class="section-title">The Cost of Doing Nothing</h2>
    <p class="section-sub">
        Poor waste management causes water and air pollution, spreads disease, harms
        ecosystems, and contributes significantly to climate change through methane emissions.
    </p>

    <div class="cards-grid">
        @foreach ($threats as $threat)
            <div class="card dark">
                <div class="card-icon">{{ $threat['icon'] }}</div>
                <h3>{{ $threat['title'] }}</h3>
                <p>{{ $threat['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>

@endsection
