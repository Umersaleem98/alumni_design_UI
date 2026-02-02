
    <div class="row g-3 mt-2 mb-3">

        <!-- NUST Registration Number -->
        <div class="col-md-6">
            <label class="form-check-label text-light">NUST Registration Number</label>
            <input type="text"
                   class="form-control form-control-sm"
                   placeholder="e.g. 0*****">
        </div>

        <!-- Degree Name -->
        <div class="col-md-6">
            <label class="form-check-label text-light">Degree Name</label>
            <select class="form-select form-select-sm">
                <option value="">Select Degree</option>
                <option value="bachelors">Bachelor’s</option>
                <option value="masters">Master’s</option>
                <option value="phd">PhD</option>
            </select>
        </div>

        <!-- School -->
        <div class="col-md-6">
            <label class="form-check-label text-light">School</label>
            <select class="form-select form-select-sm">
                <option value="">Select School</option>
                <option value="SEECS">SEECS</option>
                <option value="SMME">SMME</option>
                <option value="NBS">NBS</option>
                <option value="S3H">S3H</option>
                <option value="SADA">SADA</option>
                <option value="SNS">SNS</option>
                <option value="ASAB">ASAB</option>
                <option value="CEME">CEME</option>
                <option value="IAEC">IAEC</option>
                <option value="NICE">NICE</option>
            </select>
        </div>

        <!-- Discipline -->
        <div class="col-md-6">
            <label class="form-check-label text-light">Discipline</label>
            <select class="form-select form-select-sm">
                <option value="">Select Discipline</option>
                <option value="cs">Computer Science</option>
                <option value="se">Software Engineering</option>
                <option value="ai">Artificial Intelligence</option>
                <option value="ds">Data Science</option>
                <option value="ee">Electrical Engineering</option>
                <option value="me">Mechanical Engineering</option>
                <option value="ce">Civil Engineering</option>
                <option value="ms">Management Sciences</option>
                <option value="econ">Economics</option>
                <option value="phy">Physics</option>
                <option value="math">Mathematics</option>
            </select>
        </div>

        <!-- Enrollment Year -->
        <div class="col-md-6">
            <label class="form-check-label text-light">Enrollment Year</label>
            <select id="enrollmentYear" class="form-select form-select-sm">
                <option value="">Select Enrollment Year</option>
            </select>
        </div>

        <!-- Graduation Year -->
        <div class="col-md-6">
            <label class="form-check-label text-light">Graduation Year</label>
            <select id="graduationYear" class="form-select form-select-sm">
                <option value="">Select Graduation Year</option>
            </select>
        </div>

    </div>


<script>
const enrollmentSelect = document.getElementById('enrollmentYear');
const graduationSelect = document.getElementById('graduationYear');

const startYear = 1995;
const currentYear = new Date().getFullYear();

// Populate Enrollment Years
for (let year = startYear; year <= currentYear; year++) {
    enrollmentSelect.innerHTML += `<option value="${year}">${year}</option>`;
}

// Handle Graduation Year logic
enrollmentSelect.addEventListener('change', function () {
    graduationSelect.innerHTML = `<option value="">Select Graduation Year</option>`;

    if (!this.value) return;

    const enrollmentYear = parseInt(this.value);
    const minGraduationYear = enrollmentYear + 2;

    for (let year = minGraduationYear; year <= currentYear + 10; year++) {
        graduationSelect.innerHTML += `<option value="${year}">${year}</option>`;
    }
});
</script>
