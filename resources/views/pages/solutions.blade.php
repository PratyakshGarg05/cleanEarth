{{-- resources/views/pages/solutions.blade.php --}}
@extends('layouts.app')

@section('title', 'Solutions — CleanEarth')

@section('content')

{{-- ══ HERO ══ --}}
<div class="solutions-hero">
    <span class="section-label">Core Solutions</span>
    <h1>Practical Strategies for <span>Sustainable Waste Management</span></h1>
    <p>Evidence-based, implementable solutions across segregation, disposal, and sanitation — designed for communities of all sizes.</p>
</div>

{{-- ══ TABS NAV ══ --}}
<div class="solutions-tabs">
    @foreach ($tabs as $i => $tab)
        <button class="tab-btn {{ $i === 0 ? 'active' : '' }}"
                onclick="showTab('{{ $tab['id'] }}', this)">
            {{ $tab['label'] }}
        </button>
    @endforeach
</div>

{{-- ══ TAB CONTENTS ══ --}}
@foreach ($tabs as $i => $tab)
    <div class="tab-content {{ $i === 0 ? 'active' : '' }}" id="tab-{{ $tab['id'] }}">
        <div class="sol-layout">

            {{-- Left: info + steps --}}
            <div class="sol-info">
                <h2>{{ $tab['title'] }}</h2>
                @foreach ($tab['intro'] as $para)
                    <p>{{ $para }}</p>
                @endforeach

                <div class="steps-list">
                    @foreach ($tab['steps'] as $step)
                        <div class="step">
                            <div class="step-num">{{ $step['num'] }}</div>
                            <div class="step-txt">
                                <strong>{{ $step['title'] }}</strong>
                                <span>{{ $step['desc'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: fact pills --}}
            <div class="sol-visual">
                <h3>{{ $tab['facts_title'] }}</h3>
                @foreach ($tab['facts'] as $fact)
                    <div class="fact-pill">
                        <strong>{{ $fact['title'] }}</strong>
                        {{ $fact['desc'] }}
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endforeach

@endsection

@push('scripts')
<script>
function showTab(id, btn) {
    document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('tab-' + id).classList.add('active');
    if (btn) btn.classList.add('active');
}
</script>
@endpush
