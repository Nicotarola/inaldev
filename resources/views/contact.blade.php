@extends("layouts.template")

@section("title", "NIALDEV - Contacto")


@section('content-general')

 <!-- banner -->
 <div class="mil-banner-sm mil-deep-bg">
    <img src="img/deco/map.png" alt="background" class="mil-background-image">
    <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
    <div class="mil-banner-content">
        <div class="container mil-relative">
            <ul class="mil-breadcrumbs mil-mb-30">
                <li><a href="home-1.html">Home</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
            <h2 class="mil-uppercase">Let’s discuss your opportunity</h2>
        </div>
    </div>
</div>
<!-- banner end -->

<section class="mil-contact mil-p-120-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-xl-8 mil-mb-120">

                <form id="formContact" method="post" enctype="multipart/form-data">

                    <h4 class="mil-mb-60"><span class="mil-accent">01.</span> Tell Us About Yourself</h4>

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>First Name</span></label>
                                <input type="text" name="first_name" required placeholder="John">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Last Name</span></label>
                                <input type="text" name="last_name" required placeholder="Jones">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Email Address</span></label>
                                <input type="email" name="email" required placeholder="doe@mydomain.com">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Phone</span></label>
                                <input type="tel" name="phone" placeholder="Enter your phone number">
                            </div>

                        </div>
                        <div class="col-lg-6">


                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Company</span></label>
                                <input type="text" name="company" placeholder="Your company name">
                            </div>

                        </div>
                        <div class="col-lg-6 mil-mb-30">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Role</span></label>
                                <input type="text" name="role" placeholder="Your role">
                            </div>

                        </div>
                    </div>

                    <h4 class="mil-mb-60"><span class="mil-accent">02.</span> What Can We Help You With?</h4>

                    <div class="row">
                        <div class="col-lg-6 mil-mb-30">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Project Category</span></label>
                                <input type="text" name="category" placeholder="Product Design">
                            </div>

                        </div>
                    </div>

                    <h4 class="mil-mb-60"><span class="mil-accent">03.</span> Tell Us About Your Project</h4>

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Project Description</span></label>
                                <textarea placeholder="Your Message" name="message" class="mil-shortened"></textarea>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="mil-attach-frame mil-dark mil-mb-30">
                                <i class="fas fa-paperclip"></i>
                                <label class="mil-custom-file-input">
                                    <span>Attach your file</span>
                                    <input 
                                      type="file" 
                                      name="userfile"
                                      id="mil-file-input"
                                      accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                      text/plain, application/pdf, image/*"
                                    >
                                </label>
                                <p class="mil-text-sm mil-light-soft">up to 20MB</p>
                            </div>
                        </div>

                        <div class="col-lg-6 mil-mb-30">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Project Budget</span></label>
                                <input type="number" name="budget" placeholder="123">
                            </div>

                        </div>

                        <div class="col-lg-12">

                            <button type="submit" class="mil-button mil-border mil-fw"><span>Submit Now</span></button>

                        </div>

                    </div>
                    
                    <div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>
                    <div class="alert-error" style="display: none;"><h5>Error! Message could not be sent.</h5></div>
                </form>

            </div>
            <div class="col-lg-4 col-xl-3 mil-mb-120">

                <div class="mil-mb-60">
                    <h5 class="mil-list-title mil-mb-30">Support Request</h5>
                    <p class="mil-mb-20">Our experts are ready to answer your questions.</p>
                    <a href="contact.html" class="mil-link mil-link-sm"><span>Support Now</span><i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="mil-divider mil-mb-60"></div>

                <div class="mil-mb-60">
                    <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                        <img src="img/icons/md/8.svg" alt="icon">
                    </div>
                    <h5 class="mil-list-title mil-mb-30">Need Help?</h5>
                    <p>For technical questions or billing questions, please contact Customer Care.</p>
                </div>

                <div class="mil-mb-60">
                    <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                        <img src="img/icons/md/9.svg" alt="icon">
                    </div>
                    <h5 class="mil-list-title mil-mb-30">Needs More Info?</h5>
                    <p>For technical questions or billing questions, please contact Customer Care.</p>
                </div>

                <div class="mil-divider mil-mb-60"></div>

                <a href="contact.html" class="mil-link mil-link-sm mil-mb-15"><span>Legality Guide</span><i class="fas fa-arrow-right"></i></a><br>
                <a href="contact.html" class="mil-link mil-link-sm"><span>Security Center</span><i class="fas fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</section>
<!-- contact end -->

<!-- map -->
<div>
    <div class="mil-map-frame">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.289421122936!2d-74.0577166!3d40.7107384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250aee3ee6da7%3A0xe8a316c6c836011f!2sBuddy&#39;s%20JC!5e0!3m2!1sen!2sua!4v1682071433844!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container"></div>
</div>

 <!-- contact info -->
 <section class="mil-p-120-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <h4 class="mil-mb-30">United States</h4>
                    <h5 class="mil-list-title mil-mb-15">New York</h5>
                    <p class="mil-mb-30">525, North Tryon Street, Suite 1600, Charlotte, NC 28202-0213</p>
                    <div class="mil-divider mil-divider-left mil-mb-30"></div>

                    <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                    <h6><span class="mil-accent">usa</span>.support@mydomain.com</h6>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <h4 class="mil-mb-30">Germany</h4>
                    <h5 class="mil-list-title mil-mb-15">Berlin</h5>
                    <p class="mil-mb-30">501, Satyamev Eminence, Science City Road,
                        Ahmedabad, Gujarat - 380060</p>
                    <div class="mil-divider mil-divider-left mil-mb-30"></div>

                    <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                    <h6><span class="mil-accent">germany</span>.support@mydomain.com</h6>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <h4 class="mil-mb-30">France</h4>
                    <h5 class="mil-list-title mil-mb-15">Paris</h5>
                    <p class="mil-mb-30">397 Bedford Highway, Suite 323 Halifax NS B3M 2L3 Science City Road</p>
                    <div class="mil-divider mil-divider-left mil-mb-30"></div>

                    <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                    <h6><span class="mil-accent">france</span>.support@mydomain.com</h6>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- contact info end -->

<!-- footer -->
<footer class="mil-dark-bg">
    <img src="img/deco/map.png" alt="background" class="mil-footer-bg">
    <div class="container">
        <div class="mil-footer-content">
            <div class="row align-items-center mil-p-120-60">
                <div class="col-xl-6 mil-mb-60">

                    <h3 class="mil-light mil-mb-15">Join The <span class="mil-accent">ITSulu</span> Experience</h3>

                    <p class="mil-light-soft">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>

                </div>
                <div class="col-xl-6 mil-mb-60">

                    <form class="mil-subscribe-form">
                        <input type="text" placeholder="Your email address">
                        <button type="submit" class="mil-button mil-accent-bg">Subscribe Now</button>
                    </form>

                </div>
            </div>
            <div class="mil-divider mil-light"></div>
            <div class="row justify-content-between mil-p-120-60">
                <div class="col-md-3 col-lg-3 col-xl-3 mil-mb-30">

                    <img src="img/logo/logo-light.png" alt="" class="mil-logo mil-mb-60" style="width: 140px">

                    <p class="mil-light mil-light-soft" style="margin-bottom: 45px">2307 Beverley Rd Brooklyn, <br>New York 11226 USA.</p>

                    <ul class="mil-simple-list mil-mb-15">
                        <li class="mil-light"><span class="mil-accent">+07</span>&nbsp;<span class="mil-light-soft">0 002 00 05</span></li>
                        <li><span class="mil-accent">info</span><span class="mil-light mil-light-soft">@mydomain.com</span></li>
                    </ul>

                </div>
                <div class="col-md-8 col-lg-7 col-xl-7">

                    <div class="row justify-content-end">
                        <div class="col-md-4 col-lg-4 mil-mb-60">

                            <h4 class="mil-list-title mil-light mil-mb-60">Social</h4>

                            <ul class="mil-hover-link-list mil-light">
                                <li>
                                    <a href="#.">Facebook</a>
                                </li>
                                <li>
                                    <a href="#.">Instagram</a>
                                </li>
                                <li>
                                    <a href="#.">LinkedIn</a>
                                </li>
                                <li>
                                    <a href="#.">Twitter</a>
                                </li>
                                <li>
                                    <a href="#.">YouTube</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-4 col-lg-4 mil-mb-60">

                            <h4 class="mil-list-title mil-light mil-mb-60">Support</h4>

                            <ul class="mil-hover-link-list mil-light">
                                <li>
                                    <a href="#.">Documentation</a>
                                </li>
                                <li>
                                    <a href="#.">Support</a>
                                </li>
                                <li>
                                    <a href="#.">FAQs</a>
                                </li>
                                <li>
                                    <a href="#.">Download</a>
                                </li>
                                <li>
                                    <a href="#.">Sitemap</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-4 col-lg-4 mil-mb-60">

                            <h4 class="mil-list-title mil-light mil-mb-60">Links</h4>

                            <ul class="mil-hover-link-list mil-light">
                                <li>
                                    <a href="#.">About Us</a>
                                </li>
                                <li>
                                    <a href="#.">Terms & condition</a>
                                </li>
                                <li>
                                    <a href="#.">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#.">Partners</a>
                                </li>
                                <li>
                                    <a href="#.">Press</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="mil-footer-bottom">
        <div class="container">
            <p class="mil-text-sm mil-light">© ITSulu 2023.</p>
            <p class="mil-text-sm mil-light">All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- footer end --


@endsection
