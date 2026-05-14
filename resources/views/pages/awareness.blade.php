{{-- resources/views/pages/awareness.blade.php --}}
@extends('layouts.app')

@section('title', 'Awareness — CleanEarth')

@section('content')

{{-- ══ BANNER ══ --}}
<div class="awareness-banner">
    <span class="section-label">Public Awareness</span>
    <h2 class="section-title">What You Can Do</h2>
    <p class="section-sub">
        Individual action aggregated across communities creates systemic change.
        Here's how every person can contribute to better waste management and sanitation.
    </p>
</div>

{{-- ══ TIMELINE ══ --}}
<section class="section bg-white">
    <span class="section-label">Step by Step</span>
    <h2 class="section-title">A Roadmap to a Cleaner Community</h2>

    <div class="timeline">
        @foreach ($timeline as $item)
            <div class="tl-item {{ $item['side'] === 'right' ? 'right' : '' }}">
                @if ($item['side'] === 'left')
                    <div class="tl-content">
                        <h4>{{ $item['title'] }}</h4>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                    <div class="tl-dot">{{ $item['icon'] }}</div>
                    <div class="tl-empty"></div>
                @else
                    <div class="tl-empty"></div>
                    <div class="tl-dot">{{ $item['icon'] }}</div>
                    <div class="tl-content">
                        <h4>{{ $item['title'] }}</h4>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</section>

{{-- ══ TIPS GRID ══ --}}
<div class="tips-grid">
    @foreach ($tips as $tip)
        <div class="tip-card">
            <span class="tip-icon">{{ $tip['icon'] }}</span>
            <h4>{{ $tip['title'] }}</h4>
            <p>{{ $tip['desc'] }}</p>
        </div>
    @endforeach
</div>

@endsection
