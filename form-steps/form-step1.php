<div class="container" id="step1">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-primary pt-3 pb-3">
                <h2 class="text-white text-center">Renew & Get Approved</h2>
            </div>

            <div class="col-md-8 pt-3 pb-3 dark_blue">
                <div class="row">
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('../assets/images/check.svg', __FILE__); ?>">
                        Same Day Approval
                    </div>
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('../assets/images/check.svg', __FILE__); ?>">
                        Save Time + Avoid Fees
                    </div>
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('../assets/images/check.svg', __FILE__); ?>">
                        Digital Copy of Your UCR Registration
                    </div>
                    <div class="col-md-6 text-white pb-3">
                        <img src="<?php echo plugins_url('../assets/images/check.svg', __FILE__); ?>">
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