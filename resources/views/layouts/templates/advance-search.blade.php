<section class="py-5 text-white" style="background-color: #01273E">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left content -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold text-light mx-3">
                    Connect with <span class="text-warning">55000</span><br />
                    Alumni Across the Globe
                </h2>
                <p class="mb-4 mx-3">
                    Once you create your alumni account, you gain access to NUST’s centralized alumni directory,
                    designed to help you connect meaningfully with fellow graduates.
                </p>
                <ul class="list-unstyled mx-3">
                    <li>• Search by Industry</li>
                    <li>• Find Alumni Nearby</li>
                    <li>• Connect by Company</li>
                </ul>
            </div>

            <!-- Right search form -->
            <div class="col-lg-6">
                <form id="searchForm" class="bg-light rounded p-4 shadow-sm text-dark">
                    <h5 class="mb-3 fw-bold">SEARCH</h5>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Enter your search term" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Search by:</label>
                        <div class="d-flex flex-wrap gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchBy" checked>
                                <label class="form-check-label">Name</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchBy">
                                <label class="form-check-label">Year</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchBy">
                                <label class="form-check-label">School</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchBy">
                                <label class="form-check-label">Company</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchBy">
                                <label class="form-check-label">City</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="searchBy">
                                <label class="form-check-label">Country</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger w-100" style="border-radius: 8px;">
                        Search
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="accessModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- bigger modal -->
        <div class="modal-content p-0 border-0 bg-transparent">

            <div class="blurred-container rounded p-4 shadow">
                <h5 class="text-center mb-4 text-white fw-bold">Sample Alumni Profiles</h5>

                <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                    <!-- User Cards -->
                    <div class="user-card text-center text-white">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User 1"
                            class="rounded-circle mb-2 blurred-image" />
                        <div>John Doe</div>
                        <small>Engineering</small>
                    </div>
                    <div class="user-card text-center text-white">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User 2"
                            class="rounded-circle mb-2 blurred-image" />
                        <div>Jane Smith</div>
                        <small>Business</small>
                    </div>
                    <div class="user-card text-center text-white">
                        <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="User 3"
                            class="rounded-circle mb-2 blurred-image" />
                        <div>Ali Khan</div>
                        <small>Computer Science</small>
                    </div>
                    <div class="user-card text-center text-white">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User 4"
                            class="rounded-circle mb-2 blurred-image" />
                        <div>Sara Ahmed</div>
                        <small>Architecture</small>
                    </div>
                </div>

                <div class="text-center text-white mb-3">
                    <i class="fa fa-lock fa-3x text-danger mb-3"></i>
                    <h5 class="fw-bold mb-2">Restricted Access</h5>
                    <p class="mb-4">
                        This information is available exclusively to registered alumni.<br />
                        Please create an account to access full details.
                    </p>

                    <div class="d-flex justify-content-center gap-3">
                        <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal"
                            id="continueBtn">Continue</button>
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal"
                            id="cancelBtn">Cancel</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .blurred-container {
        background: rgba(1, 39, 62, 0.85);
        /* dark blue with opacity */
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        max-width: 700px;
        margin: 0 auto;
    }

    .user-card {
        width: 90px;
    }

    .user-card img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border: 2px solid #ffc107;
        /* bootstrap warning color border */
    }

    /* Add blur effect only on images */
    .blurred-image {
        filter: blur(5px);
    }

    /* Blur name and small description text */
    .user-card>div,
    .user-card>small {
        filter: blur(5px);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('searchForm');
        const modalElement = document.getElementById('accessModal');
        const modalInstance = new bootstrap.Modal(modalElement);

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            modalInstance.show();
        });

        // On modal hide, redirect only if Continue is clicked
        const continueBtn = document.getElementById('continueBtn');
        continueBtn.addEventListener('click', function() {
            window.location.href = "{{ route('register.index') }}";
        });

        // Cancel just hides modal, no redirect needed (default bootstrap behavior)
    });
</script>
