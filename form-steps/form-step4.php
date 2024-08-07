<div class="container p-3 border d-none" id="step4">
    <div class="row justify-content-center">

        <div class="col-md-11 dark_blue">
            <h2 class="text-center text-white">UCR—Unified Carrier Renew Form</h2>
        </div>


        <div class="row border p-3 mt-4">
            <div class="col-md-4">
                <p><strong class="text-primary">1 Carrier Info</strong><br>
                    Confirm Your Official Representative</p>
            </div>
            <div class="col-md-4">
                <p><strong class="text-primary">2 Registration Details Info</strong><br>
                    Number of registered vehicles</p>
            </div>
            <div class="col-md-4">
                <p><strong class="text-primary">3 Payment Info</strong><br>
                    Pay to Complete Registration</p>
            </div>
        </div>
    </div>


    <div class="row mt-4 border mb-4">
        <div class="col-md-6">

            <h3 class="text-center text-white bg-primary pt-3 pb-3">Payment Information</h3>

            <div class="row mt-3 mb-3">
                <div class="col-md-6">
                    <label for="card" class="form-label">Card Number*</label>
                    <input type="text" name="card" id="card" class="border" maxlength="16" oninput="validateCardNumber()">
                </div>
                <div class="col-md-6">
                    <label for="exp" class="form-label">Expiration Date*</label>
                    <input type="text" name="exp" id="exp" class="border" placeholder="MM/YY">
                    <span class="text-danger d-none" id="invalid_exp">Invalid Exp Date</span>
                </div>
                <div class="col-md-6">
                    <label for="holder" class="form-label">Card Holder*</label>
                    <input type="text" name="holder" id="holder" class="border">
                </div>
                <div class="col-md-6">
                    <label for="cvc" class="form-label">Card CVC Number*</label>
                    <input type="text" name="cvc" id="cvc" class="border" maxlength="4" oninput="validateCVC()">
                </div>
            </div>


        </div>

        <div class="col-md-6">
            <h3 class="text-center text-white bg-primary pt-3 pb-3">Order Details</h3>

            <div class="row mt-3">
                <div class="col-md-10">
                    <p><strong>Vehicle Total</strong></p>
                </div>
                <div class="col-md-2">
                    <input type="text" name="vehicle-total" id="total" class="border" readonly>
                </div>
                <div class="col-md-10">
                    <p><strong>Total Cost</strong></p>
                </div>
                <div class="col-md-2">
                    <input type="text" name="total-cost" id="cost" class="border" readonly>
                </div>
            </div>

        </div>
    </div>

    <div class="row mb-4">
        <div class="bg-primary pt-2 mb-4 mt-4">
            <h3 class="text-center text-white bg-primary">Billing Address</h3>
        </div>

        <div class="col-md-4 mt-3 mb-3">
            <input type="radio" name="billing" checked class="form-check-input" id="new_billing">
            <label class="form-check-label" for="new_billing">New Billing Address</label>

        </div>

        <div class="col-md-4 mt-3 mb-3">
            <input type="radio" class="form-check-input address_radio" id="phys_add" name="billing">
            <label class="form-check-label" for="phys_add">Billing Address Same as Physical Address</label>

        </div>

        <div class="col-md-4 mt-3 mb-3">
            <input type="radio" class="form-check-input address_radio" id="mail_add" name="billing">
            <label class="form-check-label" for="mail_add">Billing Address Same as Mailing Address</label>

        </div>

        <div class="col-md-3">
            <label for="bill_street" class="form-label">Street*
            </label>
            <input type="text" name="bill_street" placeholder="Enter Your Address" id="bill_street" class="border">
        </div>

        <div class="col-md-3">
            <label for="bill_city" class="form-label">City*
            </label>
            <input type="text" name="bill_city" placeholder="Enter Your City" id="bill_city" class="border">
        </div>

        <div class="col-md-3">
            <label for="bill_state" class="form-label">State*
            </label>
            <input type="text" name="bill_state" placeholder="Enter Your State" id="bill_state" class="border">
        </div>

        <div class="col-md-3">
            <label for="bill_zip" class="form-label">Zip Code*
            </label>
            <input type="text" name="bill_zip" placeholder="Enter Your Zip Code" id="bill_zip" class="border">
        </div>

    </div>


    <div class="row mb-4">
        <div class="bg-primary pt-2 mb-4 mt-4">
            <h3 class="text-center text-white bg-primary">Terms and Conditions</h3>
        </div>
    </div>
    <div class="row mb-4 border pt-3 pb-3">
    <div class="col-md-2">
    <input type="text" name="initial" placeholder="INITIAL" class="border" id="initial1" maxlength="2">
    </div>
    <div class="col-md-10">
        <p>I certify that I am the authorized holder and signer of the credit card reference above. I certify that all information above is complete and accurate.</p>
    </div>
    <div class="col-md-2">
    <input type="text" name="initial" placeholder="INITIAL" class="border" id="initial2" maxlength="2">
    </div>
    <div class="col-md-10">
        <p>I hereby authorize collection of payment for all charges as indicated above. Charges may not exceed the amount listed above in the “TOTAL COST” field. I understand this is only for up to this amount on the date listed below in the “DATE SIGNED“ field. If additional charges are going to be authorized a new form will have to be completed.</p>
    </div>
    <div class="col-md-2">
    <input type="text" name="initial" placeholder="INITIAL" class="border" id="initial3" maxlength="2">
    </div>
    <div class="col-md-10">
        <p>The “TOTAL COST” includes all Federal, State and Local Government fees.</p>
    </div>
    <div class="col-md-2">
    <input type="text" name="initial" placeholder="INITIAL" class="border" id="initial4" maxlength="2">
    </div>
    <div class="col-md-10">
        <p>I hereby, acknowledge and agree that after the charges are authorized a DOT Operating Authority agent is assigned in 15 minutes to run the order. Once the agent is assigned the charges become non-refundable.</p>
    </div>

    <p class="text-danger d-none" id="initials-msg">All Initials must be same</p>
    </div>

    <div class="row mt-4 mb-4 border pt-3 pb-3">
        <div class="col-md-1 mb-3">
        <input type="checkbox" class="form-check-input" id="by_cont" name="by_continuing" value="By continuing with the registration process...">        
        </div>
        <div class="col-md-11 mb-3">
        <label class="form-check-label" for="by_cont">By continuing with the registration process, you are certifying that all provided information is accurate and up-to-date. Permitting delays, fines, and/or additional fees may result from the submission of incorrect or inaccurate information. Furthermore, you agree to pay the total amount shown above with your selected payment method. Failure to produce the required funds or stop payments of funds may result in delays, fines, or additional fees.</label>
        </div>

        <div class="col-md-1 mb-3">
        <input type="checkbox" class="form-check-input" id="remind" name="reminders" value="I agree to receive reminders by text for registration renewal">        
        </div>
        <div class="col-md-11 mb-3">
        <label class="form-check-label" for="reminders">I agree to receive reminders by text for registration renewal</label>
        </div>
    </div>

    <div class="row mb-4 mt-4 border pt-3 pb-3">
        <div class="col-md-3 border p-3 text-center">
            <h3>Name of person signing</h3>
            <p>F D RICH CONSTRUCTION CO INC</p>
        </div>

        <div class="col-md-3 border p-3  text-center">
            <h3>Title</h3>
            <p>F D RICH CONSTRUCTION CO INC</p>
        </div>

        <div class="col-md-3 border p-3  text-center">
            <h3>Date Signed</h3>
            <p><?php echo date('m/d/Y');  ?></p>
        </div>

        <div class="col-md-3 border p-3  text-center">
            <h3>Signature</h3>
            <p><canvas id="signatureCanvas" style="width:90%;border:1px solid #000" height="200"></canvas><br>
    <button id="clearButton">Clear</button></p>
        </div>
    </div>


    <div class="row justify-content-between">

        <div class="border w-25 p-4" id="next_st2" onclick="prevStepReg2()">
            <p>Prev Step<br>
                <small>Registration Details</small>
            </p>
        </div>

        <div class="border w-25 p-4">
            <button type="submit" >Submit Payment</button>

            
        </div>
    </div>

    <input type="hidden" value="<?php echo get_site_url(); ?>">

</div>