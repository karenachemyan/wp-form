   
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
                    <input type="checkbox" class="form-check-input" id="carrier" onclick="carriersCheckes(this)" value="Motor Carrier (For Hire)" name="motor_for_hire"><br>
                    <label class="form-check-label" for="carrier">Motor Carrier (For Hire)</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="not_carrier" onclick="carriersCheckes(this)" value="Motor Private Carrier (Not For Hire)" name="moto-for-not-hire"><br>
                    <label class="form-check-label" for="not_carrier">Motor Private Carrier (Not For Hire)</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="freight" onclick="carriersCheckes(this)" value="Freight Forwarder" name="forwarder"><br>
                    <label class="form-check-label" for="freight">Freight Forwarder</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="broker" onclick="disableOtherCheckboxes(this)" value="Broker" name="broker-chackbox"><br>
                    <label class="form-check-label" for="broker">Broker</label>
                    </div>

                    <div class="col-md-2 text-center border p-5">
                    <input type="checkbox" class="form-check-input" id="leasing" onclick="disableOtherCheckboxes(this)" value="Leasing Company" name="leasing-company"><br>
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
