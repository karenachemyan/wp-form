<?php
/*
Plugin Name: W-Form Plugin
Description: My First Custom Form Plugin.
Version: 1.0
Author: Karen Achemyan
*/

// Enqueue  styles and scripts
function w_form_enqueue_scripts()
{
    wp_enqueue_style('w-form-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('w-form-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array(), null);
    wp_enqueue_style('w-form-styles', plugins_url('assets/styles/style.css', __FILE__));

    wp_enqueue_script('w-form-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('w-form-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('w-form-popper'), null, true);
}
wp_enqueue_script('w-form-script', plugins_url('assets/scripts/script.js', __FILE__));
add_action('wp_enqueue_scripts', 'w_form_enqueue_scripts');

// Shortcode to display the form
function w_form_shortcode()
{
    ob_start();
?>
<form>
    <div class="container" id="step1">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-primary pt-3 pb-3">
                <h2 class="text-white text-center">Renew & Get Approved</h2>
            </div>

            <div class="col-md-8 pt-3 pb-3 dark_blue">
                <div class="row">
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('assets/images/check.svg', __FILE__); ?>">
                        Same Day Approval
                    </div>
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('assets/images/check.svg', __FILE__); ?>">
                        Save Time + Avoid Fees
                    </div>
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('assets/images/check.svg', __FILE__); ?>">
                        Digital Copy of Your UCR Registration
                    </div>
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('assets/images/check.svg', __FILE__); ?>">
                        Industry Leading Live Customer Support
                    </div>
                </div>

               
                    <p id="full-error" class="text-danger"></p>
                    <input type="text" name="fullName" placeholder="Full Name" id="full">

                    <p id="email-error" class="text-danger"></p>
                    <input type="email" name="email" placeholder="Email" id="email">

                    <p id="phone-error" class="text-danger"></p>
                    <input type="text" name="phone" placeholder="Phone Number" id="phone">

                    <p id="usdot-error" class="text-danger"></p>
                    <input type="text" name="usdot" placeholder="USDOT #" id="usdot" maxlength='14'>

                    <input type="button" id="next" value="Next Step" onclick="validateForm()" class="mt-4">
                

            </div>
        </div>
    </div>

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
                    <input type="text" name="email" placeholder="Business Phone" id="phone_business" class="border">
                </div>

                <div class="col-md-4 mt-4">
                <input type="checkbox" class="form-check-input" id="is_business">
                <label class="form-check-label" for="exampleCheck1">Same as Business Phone*</label>
                <input type="text" name="phone_buss" placeholder="Enter Your Phone Number" id="phone_buss" class="border">
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
                    <input type="checkbox" class="form-check-input" id="authorization">
                <label class="form-check-label" for="authorization">I certify that I have been given proper authorization to perform or modify UCR registration information for USDOT 1 for 2023.</label>
                    </div>

                </div>

                <div class="bg-primary pt-2 mb-4 mt-4">
                    <h3 class="text-center text-white bg-primary">Intrastate Notice</h3>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <input type="checkbox" class="form-check-input" id="agree">
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
<!-- 3rd step  -->

<div class="container p-3 border d-none" id="step3">
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

            <div class="bg-primary pt-2 mb-4 mt-4">
                    <h3 class="text-center text-white bg-primary">Registration Details</h3>
                </div>

                <div class="row">
                    <p>Are you updating any of the company‘s Operations Classification?

                    Yes <input type="radio" class="form-check-input"  name="operations" value="Yes">

                    No <input type="radio" class="form-check-input"  name="operations" value="No" checked>

                    </p>
                </div>

                <div class="bg-primary pt-2 mb-4 mt-4">
                    <h3 class="text-center text-white bg-primary">Carrier Classification</h3>
                </div>

                <div class="row justify-content-between mb-4 checkboxes">

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="carrier" onclick="carriersCheckes(this)"><br>
                    <label class="form-check-label" for="carrier">Motor Carrier (For Hire)</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="not_carrier" onclick="carriersCheckes(this)"><br>
                    <label class="form-check-label" for="not_carrier">Motor Private Carrier (Not For Hire)</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="freight" onclick="carriersCheckes(this)"><br>
                    <label class="form-check-label" for="freight">Freight Forwarder</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="broker" onclick="disableOtherCheckboxes(this)"><br>
                    <label class="form-check-label" for="broker">Broker</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="leasing" onclick="disableOtherCheckboxes(this)"><br>
                    <label class="form-check-label" for="leasing">Leasing Company</label>
                    </div>

                </div>

                <div class="bg-primary pt-2 mb-4 mt-4">
                    <h3 class="text-center text-white bg-primary">Vehicles</h3>
                </div>

                <div class="row mt-4 border">

                    <div class="col-md-6">
                    <input type="radio" class="form-check-input" name="option" checked value="Option A" id="optionA" onclick="optionFirst()">
                    <label class="form-check-label" for="optionA"><strong></strong>Option A</strong> - Autofill from section 26 of your last reported MCS-150/MCSA-1 form.</label><br> 

                    <input type="radio" class="form-check-input" name="option" value="Option B" id="optionB" onclick="optionSecond()">
                    <label class="form-check-label" for="optionB"><strong>Option B</strong> - Manually enter total vehicles operated during the 12-month period from 07/01/2022 to 06/30/2023</label>
                    </div>


                    <div class="col-md-6 p-2">
                        <div class="row border p-2">
                            <div class="col-md-3 offset-md-6">
                            <strong>Vehicles</strong>
                            </div>
                            <div class="col-md-3">
                            <strong>Exemptions</strong>
                            </div>
                        </div>

                    <div class="row border p-2">

                    <div class="col-md-6">
                        <strong>STRAIGHT TRUCKS & TRACTORS</strong>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="vehicles1"  id="vehicles1" class="border" value="1" readonly>
                    </div>

                    <div class="col-md-3">
                    <input type="text" name="exampt1"  id="exampt1" class="border" value="0">
                    </div>


                    <div class="col-md-6">
                        <strong>PASSENGER VEHICLES</strong>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="vehicles2"  id="vehicles2" class="border" value="0" readonly>
                    </div>

                    <div class="col-md-3">
                    <input type="text" name="exampt2"  id="exampt2" class="border" value="0">
                    </div>

                    <div class="col-md-6">
                        <strong>ADDITIONAL VEHICLES	</strong>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="vehicles3"  id="vehicles3" class="border" value="0" readonly>
                    </div>                   

                    </div>

                    </div>


                </div>


            <div class="row justify-content-between">

            <div class="border w-25 p-4" id="next_st" onclick="prevStepReg()">
                        <p>Prev Step<br>
                    <small>Registration Datails</small>
                    </p>
                    </div>

                    <div class="border w-25 p-4" id="next_st" onclick="nextPayment()" >
                        <p>Next Step<br>
                    <small>Payment Datails</small>
                    </p>
                    </div>
                </div>
</div>

</form>

<?php
    return ob_get_clean();
}
add_shortcode('w_form', 'w_form_shortcode');

// Adding settings page to admin menu
function w_form_add_settings_page()
{
    add_menu_page(
        'W-Form Settings',
        'W-Form',
        'manage_options',
        'w-form-settings',
        'w_form_render_settings_page',
        'dashicons-admin-generic',
        20
    );
}
add_action('admin_menu', 'w_form_add_settings_page');


function w_form_render_settings_page()
{
?>
    <div class="wrap">
        <h1>W-Form Plugin Settings</h1>
        <p>Use the shortcode below to display the form on any page or post:</p>
        <pre><code>[w_form]</code></pre>
    </div>
<?php
}
?>