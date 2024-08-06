function validateForm() {
    let fullName = document.getElementById('full').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let usdot = document.getElementById('usdot').value;

    let usdot_st2 = document.getElementById('usdot_st2');
    let email_st2 = document.getElementById('email_st2');
    let full_st2 = document.getElementById('full_st2');

    let fullNameError = document.getElementById('full-error');
    let emailError = document.getElementById('email-error');
    let phoneError = document.getElementById('phone-error');
    let usdotError = document.getElementById('usdot-error');

    let step1 = document.getElementById('step1');
    let step2 = document.getElementById('step2');
    let phone_buss = document.getElementById('phone_business');

    let isValid = true;

    let nameRegex = /^[a-zA-Z]{2,}\s[a-zA-Z]{2,}$/;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let phoneRegex = /^\(\d{3}\) \d{3}-\d{4}$/;
    let usdotRegex = /^\d+$/;

    // Reset error messages
    fullNameError.textContent = '';
    emailError.textContent = '';
    phoneError.textContent = '';
    usdotError.textContent = '';

    if (!nameRegex.test(fullName)) {
        fullNameError.textContent = 'Full name must contain at least two words, each with at least two letters.';
        isValid = false;
    }

    if (!emailRegex.test(email)) {
        emailError.textContent = 'Invalid email address.';
        isValid = false;
    }

    if (!phoneRegex.test(phone)) {
        phoneError.textContent = 'Invalid phone number format. Please use (xxx) xxx-xxxx.';
        isValid = false;
    }

    if (!usdotRegex.test(usdot)) {
        usdotError.textContent = 'USDOT number must contain only digits.';
        isValid = false;
    }

    if (isValid) {
        step1.classList.add('d-none')
        step2.classList.remove('d-none')
        step2.classList.add('d-block')
        usdot_st2.value = usdot;
        email_st2.value = email;
        full_st2.value = fullName;
        phone_buss.value = phone;
    }
}

/* Checkbox event for bussiness phone number */

document.addEventListener('DOMContentLoaded', () => {
    const checkbox = document.getElementById('is_business');

    checkbox.addEventListener('change', function () {
        const phone_buss = document.getElementById('phone_buss');

        if (this.checked) {
            phone_buss.value = document.getElementById('phone').value;
        } else {
            phone_buss.value = '';
        }
    });
});

/* Checkbox event for get Address  */

document.addEventListener('DOMContentLoaded', () => {
    const checkbox = document.getElementById('address');
    const address = document.getElementById('address_text');
    let text = address.textContent;
    let items = text.split(',')


    checkbox.addEventListener('change', function () {
        const street = document.getElementById('street');
        const city = document.getElementById('city');
        const state = document.getElementById('state');
        const zip = document.getElementById('zip');

        if (this.checked) {

            street.value = items[0];
            city.value = items[1];
            state.value = items[2];
            zip.value = items[3];

        } else {
            street.value = '';
            city.value = '';
            state.value = '';
            zip.value = '';
        }
    });
});

function getCompanyInfo(e) {
    e.preventDefault();

    // Get input values
    let phone = document.getElementById('phone_buss').value;
    let email = document.getElementById('email_st2').value;
    let usdot = document.getElementById('usdot_st2').value;
    let fullName = document.getElementById('full').value

    // Regex patterns
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let phoneRegex = /^\(\d{3}\) \d{3}-\d{4}$/;
    let usdotRegex = /^\d+$/;
    let nameRegex = /^[a-zA-Z]{2,}\s[a-zA-Z]{2,}$/;

    // Validation flag
    let isValid = true;

    // Validate phone number
    if (!phoneRegex.test(phone)) {
        document.getElementById('phone_buss').classList.add('border-danger');
        isValid = false;
    } else {
        document.getElementById('phone_buss').classList.remove('border-danger');
    }

    // Validate email
    if (!emailRegex.test(email)) {
        document.getElementById('email_st2').classList.add('border-danger');
        isValid = false;
    } else {
        document.getElementById('email_st2').classList.remove('border-danger');
    }

    // Validate USDOT
    if (!usdotRegex.test(usdot)) {
        document.getElementById('usdot_st2').classList.add('border-danger');
        isValid = false;
    } else {
        document.getElementById('usdot_st2').classList.remove('border-danger');
    }

    if (!nameRegex.test(fullName)) {
        document.getElementById('full_st2').classList.add('border-danger');
        isValid = false;
    }
    else {
        document.getElementById('full_st2').classList.remove('border-danger');
    }

    if (isValid) {
        document.getElementById('company_info').classList.remove('d-none');
    }

    //this.classList.add('d-none');
}


/* Next Step , Registration Details */

function regStep() {

    const street = document.getElementById('street');
    const city = document.getElementById('city');
    const state = document.getElementById('state');
    const zip = document.getElementById('zip');
    const full_st2 = document.getElementById('full_st2');

    const authorization = document.getElementById('authorization');
    const agree = document.getElementById('agree');

    let nameRegex = /^[a-zA-Z]{2,}\s[a-zA-Z]{2,}$/;

    let isValid = true;

    if (!nameRegex.test(full_st2.value)) {
        document.getElementById('full_st2').classList.add('border-danger');
        isValid = false;
    }
    else {
        document.getElementById('full_st2').classList.remove('border-danger');
    }

    if (!street.value) {
        street.classList.add('border-danger');
        isValid = false;
    }
    else {
        street.classList.remove('border-danger')
    }

    if (!state.value) {
        state.classList.add('border-danger');
        isValid = false;
    }
    else {
        state.classList.remove('border-danger')
    }

    if (!city.value) {
        city.classList.add('border-danger');
        isValid = false;
    }
    else {
        city.classList.remove('border-danger')
    }

    if (!zip.value) {
        zip.classList.add('border-danger');
        isValid = false;
    }
    else {
        zip.classList.remove('border-danger')
    }

    if (!agree.checked) {
        document.querySelector(`label[for='agree']`).classList.add('text-danger');
        isValid = false;
    }
    else {
        document.querySelector(`label[for='agree']`).classList.remove('text-danger');
    }

    if (!authorization.checked) {
        document.querySelector(`label[for='authorization']`).classList.add('text-danger');
        isValid = false;
    }
    else {
        document.querySelector(`label[for='authorization']`).classList.remove('text-danger');
    }

    if (isValid) {

        document.getElementById('step2').classList.add('d-none');
        document.getElementById('step3').classList.remove('d-none')

    }

}

function prevStepReg() {
    document.getElementById('step2').classList.remove('d-none');
    document.getElementById('step3').classList.add('d-none')
}


function carriersCheckes(checkbox) {
    const broker = document.getElementById('broker');
    const leasing = document.getElementById('leasing');

    if (checkbox.checked) {
        broker.disabled = true;
        leasing.disabled = true;
    } else {
        broker.disabled = false;
        leasing.disabled = false;
    }
}

function disableOtherCheckboxes(checkedCheckbox) {
    let checkboxes = document.querySelectorAll('.checkboxes input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                if (checkbox !== checkedCheckbox) {
                    checkbox.disabled = checkedCheckbox.checked;
                }
            });
}


function optionSecond() {
    let option = document.getElementById('optionB');

    let vehicles1 = document.getElementById('vehicles1');
    let vehicles2 = document.getElementById('vehicles2');
    let vehicles3 = document.getElementById('vehicles3');

    if (option.checked) { 
        vehicles1.removeAttribute('readonly');
        vehicles2.removeAttribute('readonly');
        vehicles3.removeAttribute('readonly');
    }
}

function optionFirst() {
    let option = document.getElementById('optionA');

    let vehicles1 = document.getElementById('vehicles1');
    let vehicles2 = document.getElementById('vehicles2');
    let vehicles3 = document.getElementById('vehicles3');

    if (option.checked) { 
        vehicles1.setAttribute('readonly',true);
        vehicles2.setAttribute('readonly',true);
        vehicles3.setAttribute('readonly',true);
    }
}

/* Next Step, Payment Details */

function nextPayment() {
    let checkboxes = document.querySelectorAll('.checkboxes input[type="checkbox"]');
    let allUnchecked = true;
    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            allUnchecked = false;
        }
    });

    let labels = document.querySelectorAll('.checkboxes label');
    labels.forEach(function (label) {
        if (allUnchecked) {
            label.classList.add('text-danger');
        } else {
            label.classList.remove('text-danger');
        }
    });
}
