<style>
    /* ===== Section with Background Video ===== */
    .section-wrapper {
        position: relative;
        overflow: hidden;
    }

    .section-video {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -2;
    }

    .section-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: -1;
    }

    .section-content {
        position: relative;
        z-index: 1;
        color: #fff;
    }

    /* ===== Chapter Cards ===== */
    .chapter-card {
        border: 2px solid #6A0901;
        padding: 12px;
        transition: 0.3s ease;
    }

    .chapter-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 5px 12px rgba(0, 0, 0, 0.25);
    }

    .chapter-card img {
        height: 150px;
        width: 100%;
        object-fit: cover;
    }

    .chapter-card h5 {
        font-size: 1rem;
        margin-bottom: 0;
    }

    /* ===== Tabs Styling ===== */
    .nav-tabs {
        border-bottom: none;
        gap: 1rem;
    }

    .nav-tabs .nav-link {
        border: 2px solid #B36767;
        /* danger */
        color: #fff;
        background: transparent;
        border-radius: 8px;
        padding: 10px 26px;
        font-weight: 600;
        transition: 0.3s ease;
    }

    .nav-tabs .nav-link:hover {
        background-color: rgba(220, 53, 69, 0.15);
    }

    .nav-tabs .nav-link.active {
        background-color: #800000;
        /* danger */
        border-color: #800000;
        color: #fff;
    }

    /* Desktop fine-tuning */
    @media (min-width: 992px) {
        .chapter-card img {
            height: 140px;
        }
    }
</style>

<section class="py-5 section-wrapper mb-3">

    <!-- Background Video -->
    <video autoplay muted loop playsinline class="section-video">
        <source src="{{ asset('videos/International.mp4') }}" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div class="section-overlay"></div>

    <!-- Content -->
    <div class="container section-content">

        <!-- Title -->
        <div class="text-center mb-4">
            <h2 class="fw-bold text-light">
                Bringing NUST Alumni Together Worldwide
            </h2>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="chapterTabs">
            <li class="nav-item">
                <button class="nav-link active btn-" data-bs-toggle="tab" data-bs-target="#national">
                    National Chapters
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#international">
                    International Chapters
                </button>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content">

            <!-- ===== National Chapters ===== -->
            <div class="tab-pane fade show active" id="national">
                <div class="row g-4 justify-content-center text-center">

                    @forelse ($nationalChapters as $item)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ url('chapter.show', $item->id) }}"
                                class="text-decoration-none d-block bg-white rounded shadow p-2 chapter-card h-100">
                                <img src="{{ asset('templates/img/International-chapters/' . $item->cover_image) }}"
                                    alt="{{ $item->chapter_name }}" class="img-fluid rounded mb-2">
                                <h5 class="text-dark fw-semibold">
                                    {{ $item->chapter_name }}
                                </h5>
                            </a>
                        </div>
                    @empty
                        <p>No national chapters found.</p>
                    @endforelse

                </div>

                <div class="text-center mt-4">
                    {{-- <a href="#" class="btn btn-danger px-4" style="border-radius:8px;">
                        Explore More
                    </a> --}}
                </div>
            </div>

            <!-- ===== International Chapters ===== -->
            <div class="tab-pane fade" id="international">
                <div class="row g-4 justify-content-center text-center">

                    @forelse ($internationalChapters as $item)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="{{ url('chapter.show', $item->id) }}"
                                class="text-decoration-none d-block bg-white rounded shadow p-2 chapter-card h-100">
                                <img src="{{ asset('templates/img/International-chapters/' . $item->cover_image) }}"
                                    alt="{{ $item->chapter_name }}" class="img-fluid rounded mb-2">
                                <h5 class="text-dark fw-semibold">
                                    {{ $item->chapter_name }}
                                </h5>
                            </a>
                        </div>
                    @empty
                        <p>No international chapters found.</p>
                    @endforelse

                </div>

                <div class="text-center mt-4">
                    {{-- <a href="#" class="btn btn-danger px-4" style="border-radius:8px;">
                        Explore More
                    </a> --}}
                </div>
            </div>

        </div>
    </div>
</section>
