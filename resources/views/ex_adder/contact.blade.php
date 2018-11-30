<section id="contact" class="contact-part">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form action="{{ route('contactme') }}" method="POST">
                    @csrf
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="signin-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100 form-control" type="text" name="name" placeholder="Your name" value="" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fas fa-user-tie fa-2x"></i>
                                    </span>
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="signin-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100 form-control" type="email" name="email" placeholder="example@mail.com" value="" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fas fa-envelope fa-2x"></i>
                                    </span>
                                    
                                </div>
                            </div>
                            
                        </div>

                        <div class="row" style="margin-top: 15px;">
                            <div class="col-md-6">
                                <div class="signin-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100 form-control" type="text" name="number" placeholder="your number" value="" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fas fa-phone fa-2x"></i>
                                    </span>                                        
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="signin-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <select name="subject" class="custom-select form-control-lg" id="inputGroupSelect03" aria-label="Example select with button addon">
                                        <option selected>Subject...</option>
                                        <option value="Web Application">Web Application</option>
                                        <option value="E-Commerce">E-Commerce</option>
                                        <option value="Android App">Android App</option>
                                        <option value="Graphics Design">Graphics Design</option>
                                        <option value="Electrical circuit design">Electrical circuit design</option>
                                        <option value="IT Consultancy">IT Consultancy</option>
                                        <option value="Others">Others</option>
                                  </select>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fas fa-thumbs-up fa-2x"></i>
                                    </span>                                        
                                </div>

                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px;">
                            <div class="col-md-12">
                                <textarea name="message" class="form-control form-control-lg" id="message" rows="3" placeholder="How Can LOGICSWORD Help you?"></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px;">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outline-warning btn-lg btn-custom float-left">Contact US</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="contact-us">
                    <div class="heading-title">
                        <h3>Feel Free To <span class="color-style">Contact Us</span></h3>
                        <p>Please complete the form, so we can provide efficient <span style="color: #f8b500;">service</span>. If this is argent metter please contact customer <span style="color:#f8b500;">support</span>. we are <span style="color:#f8b500;">24/7</span> availabe in phone call.</p>
                        <ul>
                            <li><i class="fas fa-phone-square"></i> +880 1911 976364</li>
                            <li><i class="fas fa-envelope"></i> support@logicsword.com</li>
                            <li><i class="fas fa-map-marker-alt"></i> 55-Idris Market, Zindabazar, <br><span style="padding-left: 10px;">Sylhet-3100, Bangladesh</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>