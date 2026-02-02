
    <div class="row g-3 mt-3 mb-3">

        <!-- Current Status -->
        <div class="col-md-6">
            <label class="form-check-label text-light">Current Status</label>
            <select id="currentStatus" class="form-select form-select-sm">
                <option value="">Select Status</option>
                <option value="employed">Employed</option>
                <option value="self_employed">Self Employed</option>
                <option value="not_employed">Not Currently Employed</option>
                <option value="higher_education">Higher Education</option>
            </select>
        </div>

        <div class="col-md-6"></div>

        <!-- EMPLOYMENT FIELDS -->
        <div id="employmentFields" class="row g-3 d-none">

            <div class="col-md-6">
                <label class="form-check-label text-light">Organization</label>
                <input type="text" class="form-control form-control-sm">
            </div>

            <div class="col-md-6">
                <label class="form-check-label text-light">Designation</label>
                <input type="text" class="form-control form-control-sm">
            </div>

            <div class="col-md-6">
                <label class="form-check-label text-light">Start Year</label>
                <select id="jobStartYear" class="form-select form-select-sm"></select>
            </div>

            <div class="col-md-6">
                <label class="form-check-label text-light">End Year</label>
                <select id="jobEndYear" class="form-select form-select-sm"></select>

                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="currentlyWorking">
                    <label class="form-check-label text-light">Currently Working</label>
                </div>
            </div>

        </div>

        <!-- HIGHER EDUCATION FIELDS -->
        <div id="educationFields" class="row g-3 d-none">

            <div class="col-md-6">
                <label class="form-check-label text-light">Current Institute</label>
                <input type="text" class="form-control form-control-sm">
            </div>

            <div class="col-md-6">
                <label class="form-check-label text-light">Degree Name</label>
                <select class="form-select form-select-sm">
                    <option value="">Select Degree</option>
                    <option>Bachelor’s</option>
                    <option>Master’s</option>
                    <option>PhD</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-check-label text-light">Discipline</label>
                <input type="text" class="form-control form-control-sm">
            </div>

            <div class="col-md-6"></div>

            <div class="col-md-6">
                <label class="form-check-label text-light">Enrollment Year</label>
                <select id="eduStartYear" class="form-select form-select-sm"></select>
            </div>

            <div class="col-md-6">
                <label class="form-check-label text-light">Graduation Year</label>
                <select id="eduEndYear" class="form-select form-select-sm"></select>
            </div>

        </div>

    </div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const status = document.getElementById('currentStatus');
    const employment = document.getElementById('employmentFields');
    const education = document.getElementById('educationFields');

    const jobStart = document.getElementById('jobStartYear');
    const jobEnd = document.getElementById('jobEndYear');
    const currentlyWorking = document.getElementById('currentlyWorking');

    const eduStart = document.getElementById('eduStartYear');
    const eduEnd = document.getElementById('eduEndYear');

    const startYear = 1995;
    const currentYear = new Date().getFullYear();

    /* Populate Years */
    function populateYears(select, from, to) {
        select.innerHTML = `<option value="">Select Year</option>`;
        for (let y = from; y <= to; y++) {
            select.innerHTML += `<option value="${y}">${y}</option>`;
        }
    }

    populateYears(jobStart, startYear, currentYear);
    populateYears(jobEnd, startYear, currentYear);
    populateYears(eduStart, startYear, currentYear);

    /* Status Change */
    status.addEventListener('change', function () {
        employment.classList.add('d-none');
        education.classList.add('d-none');

        if (this.value === 'employed' || this.value === 'self_employed') {
            employment.classList.remove('d-none');
        }

        if (this.value === 'higher_education') {
            education.classList.remove('d-none');
        }
    });

    /* Currently Working */
    currentlyWorking.addEventListener('change', function () {
        jobEnd.disabled = this.checked;
        if (this.checked) jobEnd.value = '';
    });

    /* Education Graduation Year */
    eduStart.addEventListener('change', function () {
        eduEnd.innerHTML = `<option value="">Select Graduation Year</option>`;
        if (!this.value) return;

        const minYear = parseInt(this.value) + 2;
        for (let y = minYear; y <= currentYear + 10; y++) {
            eduEnd.innerHTML += `<option value="${y}">${y}</option>`;
        }
    });

});
</script>
