

    <!-- Step 2nd Fields -->
    <div class="container p-3 border d-none" id="step2">
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

            <div class="row mt-4 justify-content-center">
                <div class="col-md-11 bg-primary pt-2">
                    <h3 class="text-center text-white bg-primary">Carrier Information</h3>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <label for="usdot_st2" class="form-label">Your USDOT#*</label>
                    <input type="text" name="usdot" placeholder="USDOT #" id="usdot_st2" maxlength='14' class="border">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Select Registration Year*</label>
                    <select  class="form-select">
                        <option>2023</option>
                        <option>2024</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="email_st2" class="form-label">Email Address*</label>
                    <input type="text" name="email" placeholder="Email Address" id="email_st2" class="border">
                </div>

                <div class="col-md-4">
                    <label for="phone_business" class="form-label">Business Phone*</label>
                    <input type="text" name="phone_business" placeholder="Business Phone" id="phone_business" class="border">
                </div>

                <div class="col-md-4 mt-4">
                <input type="checkbox" class="form-check-input" id="is_business">
                <label class="form-check-label" for="is_business">Same as Business Phone*</label>
                <input type="text" name="phone_buss_same" placeholder="Enter Your Phone Number" id="phone_buss" class="border">
                </div>

            <button class="bg-primary mt-4 text-white w-50 m-auto" onclick="getCompanyInfo(event)" type="submit">Get Company Info</button>


            <div class="col-md-12 mt-4 d-none row border p-3" id="company_info">

            <div class="col-md-4">
                <p>Legal Name</p>
                <p><strong>LSTRUCKING LLC</strong></p>
            </div>

            <div class="col-md-4">
                <p>DBA</p>
            </div>

            <div class="col-md-4">
                <p>Physical Address</p>
                <p id="address_text"><strong>6690 AUTUMN WOOD CV, MEMPHIS, TN, 38141</strong></p>
            </div>


            <div class="bg-primary pt-2 mb-4">
                    <h3 class="text-center text-white bg-primary">Mailing Address</h3>
                </div>


                <input type="checkbox" class="form-check-input" id="address">
                <label class="form-check-label" for="address">Same As Physical Address</label>

                <div class="row mt-4">

                <div class="col-md-3">
                    <label for="street" class="form-label">Street*
                    </label>
                    <input type="text" name="street" placeholder="Enter Your Address" id="street" class="border">
                </div>

                <div class="col-md-3">
                    <label for="city" class="form-label">City*
                    </label>
                    <input type="text" name="street" placeholder="Enter Your City" id="city" class="border">
                </div>

                <div class="col-md-3">
                    <label for="state" class="form-label">State*
                    </label>
                    <input type="text" name="state" placeholder="Enter Your State" id="state" class="border">
                </div>

                <div class="col-md-3">
                    <label for="zip" class="form-label">Zip Code*
                    </label>
                    <input type="text" name="street" placeholder="Enter Your Zip Code" id="zip" class="border">
                </div>

                </div>

                <div class="bg-primary pt-2 mb-4 mt-4">
                    <h3 class="text-center text-white bg-primary">Who is creating this registration                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <label for="full_st2" class="form-label">Name (First & Last)*</label>
                    <input type="text" name="full_st2" placeholder="Full Name" id="full_st2" class="border">
                    </div>

                    <div class="col-md-6">
                    <input type="checkbox" class="form-check-input" id="authorization" value="I certify that I have been given proper authorization to perform or modify UCR registration information for USDOT 1 for 2023">
                <label class="form-check-label" for="authorization">I certify that I have been given proper authorization to perform or modify UCR registration information for USDOT 1 for 2023.</label>
                    </div>

                </div>

                <div class="bg-primary pt-2 mb-4 mt-4">
                    <h3 class="text-center text-white bg-primary">Intrastate Notice</h3>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <input type="checkbox" class="form-check-input" id="agree" value="I agree that my business is subject to UCR">
                <label class="form-check-label" for="agree">
                I agree that my business is subject to UCR.</label>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="border w-25 p-4" id="next_st" onclick="regStep()">
                        <p>Next Step<br>
                    <small>Registration Details</small>
                    </p>
                    </div>
                </div>

            </div>          

    </div>
    </div>
    </div>