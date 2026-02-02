
<div class="row mb-3">
    <div class="col-md-6 mb-2">
        <label class="form-check-label text-light">Full Name</label>
        <input type="text" class="form-control form-control-sm" placeholder="">
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-check-label text-light">Personal Email</label>
        <input type="email" class="form-control form-control-sm" placeholder="@gmail.com">
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-check-label text-light">Select Nationality</label>
        <select id="nationality" class="form-control form-control-sm">
            <option value="">Select Nationality</option>
            <option value="national">National</option>
            <option value="international">International</option>
        </select>
    </div>
    <!-- CNIC -->
    <div class="col-md-6 mb-2 d-none" id="cnicField">
        <label class="form-check-label text-light">CNIC</label>
        <input type="text" class="form-control form-control-sm" placeholder="xxxxx-xxxxxxx-x">
    </div>
    <!-- Passport -->
    <div class="col-md-6 mb-2 d-none" id="passportField">
        <label class="form-check-label text-light">Passport</label>
        <input type="text" class="form-control form-control-sm" placeholder="">
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label form-check-label text-light">Country Code</label>
        <select name="country_code" class="form-control form-control-sm">
            <option value="">Select Country Code</option>
            <option value="+92">🇵🇰 Pakistan (+92)</option>
            <option value="+1">🇺🇸 USA (+1)</option>
            <option value="+44">🇬🇧 UK (+44)</option>
            <option value="+91">🇮🇳 India (+91)</option>
            <option value="+61">🇦🇺 Australia (+61)</option>
            <option value="+49">🇩🇪 Germany (+49)</option>
            <option value="+33">🇫🇷 France (+33)</option>
            <option value="+971">🇦🇪 UAE (+971)</option>
            <option value="+966">🇸🇦 Saudi Arabia (+966)</option>
            <option value="+86">🇨🇳 China (+86)</option>
            <option value="+81">🇯🇵 Japan (+81)</option>
            <option value="+39">🇮🇹 Italy (+39)</option>
            <option value="+34">🇪🇸 Spain (+34)</option>
            <option value="+1">🇨🇦 Canada (+1)</option>
        </select>
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-check-label text-light">Phone No (WhatsApp Preferred)</label>
        <input type="text" class="form-control form-control-sm" placeholder="xx-xxxxxxxxx">
    </div>
</div>

<!-- JavaScript -->
<script>
document.getElementById('nationality').addEventListener('change', function () {
    const cnicField = document.getElementById('cnicField');
    const passportField = document.getElementById('passportField');

    if (this.value === 'national') {
        cnicField.classList.remove('d-none');
        passportField.classList.add('d-none');
    } 
    else if (this.value === 'international') {
        passportField.classList.remove('d-none');
        cnicField.classList.add('d-none');
    } 
    else {
        cnicField.classList.add('d-none');
        passportField.classList.add('d-none');
    }
});
</script>
