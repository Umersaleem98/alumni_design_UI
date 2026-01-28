@include('layouts.templates.head')
<title>Index</title>

<body>

    @include('layouts.templates.header')

    <section class="py-5 section-wrapper">
        <!-- Background Video -->

        <div class="section-overlay"></div>

        <div class="container section-content">
            <div class="row align-items-center bg-white rounded shadow p-4">

                <!-- LEFT: IMAGE -->
                <div class="col-12 col-md-5 mb-4 mb-md-0">
                    <img src="{{ asset('templates/img/International-chapters/' . $chapters->cover_image) }}"
                        alt="{{ $chapters->chapter_name }}" class="img-fluid rounded w-100">
                </div>

                <!-- RIGHT: CONTENT -->
                <div class="col-12 col-md-7 text-dark">
                    <h2 class="fw-bold mb-3">
                        {{ $chapters->chapter_name }}
                    </h2>

                    <p class="mb-3">
                        {!! $chapters->description !!}
                    </p>

                    <ul class="list-unstyled">
                        <li><strong>Country:</strong> {{ $chapters->country ?? '—' }}</li>
                        <li><strong>City:</strong> {{ $chapters->city ?? '—' }}</li>
                    </ul>

                    <a href="{{ url()->previous() }}" class="btn btn-danger mt-3">
                        ← Back to Chapters
                    </a>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.templates.footer')

    @include('layouts.templates.script')
