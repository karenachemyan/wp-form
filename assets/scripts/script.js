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
    let items = text.split(',');
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
        document.getElementById('step3').classList.remove('d-none');
        window.scrollTo({ top: 0, behavior: 'smooth' });

    }

}

function prevStepReg() {
    document.getElementById('step2').classList.remove('d-none');
    document.getElementById('step3').classList.add('d-none');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function prevStepReg2() {
    document.getElementById('step3').classList.remove('d-none');
    document.getElementById('step4').classList.add('d-none');
    window.scrollTo({ top: 0, behavior: 'smooth' });
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
            document.getElementById('step3').classList.add('d-none');
            document.getElementById('step4').classList.remove('d-none');
            document.getElementById('total').value = +document.getElementById('vehicles2').value + +document.getElementById('vehicles3').value;

            document.getElementById('cost').value = 50*document.getElementById('total').value;

        }
    });
}


document.addEventListener('DOMContentLoaded', () => {
    const radioButtons = document.querySelectorAll('.address_radio');
    const address = document.getElementById('address_text');
    let text = address.textContent;
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function () {
            const street = document.getElementById('bill_street');
            const city = document.getElementById('bill_city');
            const state = document.getElementById('bill_state');
            const zip = document.getElementById('bill_zip');

            if (this.checked) {
                let items = text.split(',');

                street.value = items[0].trim();
                city.value = items[1].trim();
                state.value = items[2].trim();
                zip.value = items[3].trim();
            } else {
                street.value = '';
                city.value = '';
                state.value = '';
                zip.value = '';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const radioButton = document.querySelector('#new_billing');
    const street = document.getElementById('bill_street');
            const city = document.getElementById('bill_city');
            const state = document.getElementById('bill_state');
            const zip = document.getElementById('bill_zip');
   
    radioButton.addEventListener('change', function () {          

            if (this.checked) {                
                street.value = '';
                city.value = '';
                state.value = '';
                zip.value = '';
            }        
    });
});

/* Drawing Signature Canvas */

const canvas = document.getElementById('signatureCanvas');
const ctx = canvas.getContext('2d');
let drawing = false;

canvas.addEventListener('mousedown', startDrawing);
canvas.addEventListener('mouseup', stopDrawing);
canvas.addEventListener('mousemove', draw);

function startDrawing(event) {
    drawing = true;
    ctx.beginPath();
    ctx.moveTo(event.offsetX, event.offsetY);
}

function stopDrawing() {
    drawing = false;
    ctx.closePath();
}

function draw(event) {
    if (!drawing) return;
    ctx.lineTo(event.offsetX, event.offsetY);
    ctx.stroke();
}

function clearCanvas(event) {
    event.preventDefault();
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
}
document.getElementById('clearButton').addEventListener('click', clearCanvas);
/* Drawing Signature Canvas */

/* Expiration date format credit card */

document.addEventListener('DOMContentLoaded', () => {
    const expDateInput = document.getElementById('exp');

    expDateInput.addEventListener('focus', (event) => {
        
        if (event.target.value === '') {            
            event.target.value = 'MM/YY';
        }
    });

    expDateInput.addEventListener('blur', (event) => {        
        if (event.target.value === 'MM/YY') {
            event.target.value = '';
        }
    });

    expDateInput.addEventListener('input', (event) => {        
        let value = event.target.value.replace(/\D/g, '');
        if (value.length > 4) {
            value = value.slice(0, 4);
        }
        if (value.length >= 2) {
            value = `${value.slice(0, 2)}/${value.slice(2)}`;
        }

        event.target.value = value;
    });
});

/* Expiration date format credit card */

/* Validate CVC code */

function validateCVC() {
    const input = document.getElementById('cvc');
    const value = input.value;

    // Remove non-digit characters
    input.value = value.replace(/\D/g, '');

    if (input.value.length > 4) {
        input.value = input.value.slice(0, 4);
    }
    
}/* Validate CVC code */

/* Validate CVC code */

function validateCardNumber() {
    const input = document.getElementById('card');
    const value = input.value;

    // Remove non-digit characters
    input.value = value.replace(/\D/g, '');

    if (input.value.length > 16) {
        input.value = input.value.slice(0, 16);
    }
    
}/* Validate CVC code */

/* Submit Form btn */

function submitPayment(event){ 

    let card = document.getElementById('card').value;
    let exp = document.getElementById('exp').value;
    let holder = document.getElementById('holder').value;
    let cvc = document.getElementById('cvc').value;

    let bill_street = document.getElementById('bill_street').value;
    let bill_city = document.getElementById('bill_city').value;
    let bill_state = document.getElementById('bill_state').value;
    let bill_zip = document.getElementById('bill_zip').value;

    let initial1 = document.getElementById('initial1').value;
    let initial2 = document.getElementById('initial2').value;
    let initial3 = document.getElementById('initial3').value;
    let initial4 = document.getElementById('initial4').value;

    let by_cont = document.getElementById('by_cont');
    let remind = document.getElementById('remind');

    let isValid = true;

    if(!card){
        document.getElementById('card').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('card').classList.remove('border-danger')
    }

    if(!exp){
        document.getElementById('exp').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('exp').classList.remove('border-danger')
    }

    if(!holder){
        document.getElementById('holder').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('holder').classList.remove('border-danger')
    }

    if(!cvc){
        document.getElementById('cvc').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('cvc').classList.remove('border-danger')
    }

    if(!bill_street){
        document.getElementById('bill_street').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('bill_street').classList.remove('border-danger')
    }

    if(!bill_state){
        document.getElementById('bill_state').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('bill_state').classList.remove('border-danger')
    }

    if(!bill_city){
        document.getElementById('bill_city').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('bill_city').classList.remove('border-danger')
    }

    if(!bill_zip){
        document.getElementById('bill_zip').classList.add('border-danger');
        isValid = false;
    }
    else{
        document.getElementById('bill_zip').classList.remove('border-danger')
    }

    if(initial1 !== initial2 || initial3 !== initial4 || initial2 !== initial3){        
        document.getElementById('initials-msg').classList.remove('d-none');
        isValid = false;
    }

    else{
        document.getElementById('initials-msg').classList.add('d-none');
    }

    if (!by_cont.checked) {
        document.querySelector(`label[for='by_cont']`).classList.add('text-danger');
        isValid = false;
    }
    else {
        document.querySelector(`label[for='by_cont']`).classList.remove('text-danger');
    }

    if(isValid){
        alert("SuccessFully Regostered")
    }
    else{
        event.preventDefault();
    }




}

/* Submit Form btn */