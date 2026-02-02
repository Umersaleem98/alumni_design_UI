
  <div class="row g-3 mb-3">

    <!-- Password -->
    <div class="col-md-6 position-relative">
      <label for="password" class="form-label text-light">Password</label>
      <input type="password" id="password" class="form-control form-control-sm" placeholder="Enter Password" autocomplete="new-password">
      <span id="togglePassword" style="cursor:pointer; position:absolute; top:38px; right:10px; user-select:none;">
        👁️
      </span>
      <div id="passwordHelp" class="form-text text-light small mt-1">
        Must be at least 8 characters, include uppercase, lowercase, number, and special character.
      </div>
      <ul class="list-unstyled text-light small mt-1" id="passwordCriteria" style="line-height: 1.2;">
        <li id="length" class="text-light">❌ Minimum 8 characters</li>
        <li id="uppercase" class="text-light">❌ At least one uppercase letter</li>
        <li id="lowercase" class="text-light">❌ At least one lowercase letter</li>
        <li id="number" class="text-light">❌ At least one number</li>
        <li id="special" class="text-light">❌ At least one special character</li>
      </ul>
    </div>

    <!-- Confirm Password -->
    <div class="col-md-6 position-relative">
      <label for="confirmPassword" class="form-label text-light">Confirm Password</label>
      <input type="password" id="confirmPassword" class="form-control form-control-sm" placeholder="Confirm Password" autocomplete="new-password">
      <span id="toggleConfirmPassword" style="cursor:pointer; position:absolute; top:38px; right:10px; user-select:none;">
        👁️
      </span>
      <div id="confirmHelp" class="form-text text-danger small mt-1 d-none">
        Passwords do not match.
      </div>
    </div>

    <!-- Terms & Conditions -->
    <div class="col-12">
      <div class="form-check">
        <input type="checkbox" id="terms" class="form-check-input">
        <label for="terms" class="form-check-label text-light">
          I agree to the <a href="#" class="text-info">Terms and Conditions</a>
        </label>
      </div>
    </div>



  </div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const password = document.getElementById('password');
  const confirmPassword = document.getElementById('confirmPassword');
  const togglePassword = document.getElementById('togglePassword');
  const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
  const submitBtn = document.getElementById('submitBtn');
  const terms = document.getElementById('terms');

  const criteria = {
    length: document.getElementById('length'),
    uppercase: document.getElementById('uppercase'),
    lowercase: document.getElementById('lowercase'),
    number: document.getElementById('number'),
    special: document.getElementById('special'),
  };

  const confirmHelp = document.getElementById('confirmHelp');

  // Password regex checks
  function checkPassword(pw) {
    return {
      length: pw.length >= 8,
      uppercase: /[A-Z]/.test(pw),
      lowercase: /[a-z]/.test(pw),
      number: /[0-9]/.test(pw),
      special: /[^A-Za-z0-9]/.test(pw),
    };
  }

  function updateCriteriaUI(results) {
    for (const key in results) {
      if (results[key]) {
        criteria[key].classList.remove('text-danger');
        criteria[key].classList.add('text-success');
        criteria[key].textContent = '✔ ' + criteria[key].textContent.slice(2);
      } else {
        criteria[key].classList.remove('text-success');
        criteria[key].classList.add('text-danger');
        criteria[key].textContent = '❌ ' + criteria[key].textContent.slice(2);
      }
    }
  }

  function validatePasswords() {
    const pwVal = password.value;
    const confirmVal = confirmPassword.value;

    const results = checkPassword(pwVal);
    updateCriteriaUI(results);

    // Confirm password match
    if (confirmVal && pwVal !== confirmVal) {
      confirmHelp.classList.remove('d-none');
    } else {
      confirmHelp.classList.add('d-none');
    }

    // Enable submit only if all criteria met and passwords match and terms checked
    const allValid = Object.values(results).every(v => v) &&
                     pwVal === confirmVal &&
                     terms.checked;

    submitBtn.disabled = !allValid;
  }

  // Toggle password visibility
  togglePassword.addEventListener('click', () => {
    if (password.type === 'password') {
      password.type = 'text';
      togglePassword.textContent = '🙈';
    } else {
      password.type = 'password';
      togglePassword.textContent = '👁️';
    }
  });

  toggleConfirmPassword.addEventListener('click', () => {
    if (confirmPassword.type === 'password') {
      confirmPassword.type = 'text';
      toggleConfirmPassword.textContent = '🙈';
    } else {
      confirmPassword.type = 'password';
      toggleConfirmPassword.textContent = '👁️';
    }
  });

  // Event listeners for validation
  password.addEventListener('input', validatePasswords);
  confirmPassword.addEventListener('input', validatePasswords);
  terms.addEventListener('change', validatePasswords);
});
</script>
