@extends('layouts.guest')

@section('content')
<div class="section section-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 res-m-bttm">
                <div class="contact-information">
                    <h4>Contact Information</h4>
                    <div class="row">
                        <div class="col-sm-4 res-m-bttm">
                            <div class="contact-entry">
                                <h6>Crystal<span>Capital</span></h6>
                                <p>333 Fremont Street,<br>San Francisco, California </p>
                            </div>
                        </div>
                        <div class="col-sm-4 res-m-bttm">
                            <div class="contact-entry">
                                <h6>contact number</h6>
                                <p>phone: (614) 701-9101</p>
                            </div>
                        </div>
                        <div class="col-sm-4 res-m-bttm">
                            <div class="contact-entry">
                                <h6>Telegram Link</h6>
                                <a href="t.me/CrystalCapital">t.me/CrystalCapital</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <p>Complete and submit the form below</p>
                    <form id="contact-form" class="form-message" action="form/contact.php" method="post">
                        <div class="form-results"></div>
                        <div class="form-group row">
                            <div class="form-field col-sm-6 form-m-bttm">
                                <input name="contact-name" type="text" placeholder="Full Name *"
                                    class="form-control required">
                            </div>
                            <div class="form-field col-sm-6">
                                <input name="contact-email" type="email" placeholder="Email *"
                                    class="form-control required email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-sm-6 form-m-bttm">
                                <input name="contact-phone" type="text" placeholder="Phone Number *"
                                    class="form-control required">
                            </div>
                            <div class="form-field col-sm-6">
                                <input name="contact-subject" type="text" placeholder="Subject *"
                                    class="form-control required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-md-12">
                                <textarea name="contact-message" placeholder="Messages *"
                                    class="txtarea form-control required"></textarea>
                            </div>
                        </div>
                        <input type="text" class="hidden" name="form-anti-honeypot" value="">
                        <button type="submit" class="btn btn-alt">Submit</button>
                    </form>
                </div>
            </div><!-- .col  -->
            <div class="col-md-4">
                <div id="gMap" class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.100682176254!2d-122.39487528468202!3d37.787680179757075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807afeed8475%3A0x84f14b637f1e331e!2s333%20Fremont%20St%2C%20San%20Francisco%2C%20CA%2094105%2C%20USA!5e0!3m2!1sen!2sng!4v1583337640396!5m2!1sen!2sng"
                        width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <a href="#" class="map-link">View on google map <span class="fa fa-caret-right"></span></a>
            </div><!-- .col  -->
        </div>
    </div>
</div>
@endsection
