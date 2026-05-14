{{-- resources/views/pages/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact — CleanEarth')

@section('content')

    <div class="contact-wrapper">

        {{-- ══ LEFT: Info Cards ══ --}}
        <div class="contact-info">
            <span class="section-label">Get In Touch</span>
            <h2>Contact Our Project Team</h2>
            <p>Have questions about our research, want to collaborate, or looking for resources
                on waste management? Reach out — we'd love to hear from you.</p>

            <div class="contact-cards">
                <div class="contact-card">
                    <div class="ic">📧</div>
                    <div>
                        <strong>Email Us</strong>
                        <span>gargpratyaksh100@gmail.com</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="ic">📍</div>
                    <div>
                        <strong>Location</strong>
                        <span>The Sovereign Estate Ivy Lane, Upper Dehradun</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="ic">📞</div>
                    <div>
                        <strong>Phone</strong>
                        <span>+91 90587 47951</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="ic">🕐</div>
                    <div>
                        <strong>Office Hours</strong>
                        <span>Monday – Friday, 9:00 AM – 5:00 PM</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- ══ RIGHT: Laravel Form ══ --}}
        <div class="contact-form">
            <h3>Send a Message</h3>

            {{-- Success flash message --}}
            @if (session('success'))
                <div class="success-msg" style="display:block">
                    ✅ {{ session('success') }}
                </div>
            @endif

            {{-- Laravel validation errors --}}
            @if ($errors->any())
                <div class="error-msg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- POST form with CSRF token (Laravel requirement) --}}
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                            placeholder="e.g. Rahul" class="{{ $errors->has('first_name') ? 'input-error' : '' }}" />
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                            placeholder="e.g. Sharma" class="{{ $errors->has('last_name') ? 'input-error' : '' }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="your@email.com"
                        class="{{ $errors->has('email') ? 'input-error' : '' }}" />
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" class="{{ $errors->has('subject') ? 'input-error' : '' }}">
                        <option value="">— Select a topic —</option>
                        @foreach (['General Inquiry', 'Research Collaboration', 'Educational Resources', 'Community Partnership', 'Other'] as $opt)
                            <option value="{{ $opt }}" {{ old('subject') === $opt ? 'selected' : '' }}>
                                {{ $opt }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" placeholder="Tell us how we can help..."
                        class="{{ $errors->has('message') ? 'input-error' : '' }}">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message →</button>
            </form>
        </div>

    </div>

@endsection