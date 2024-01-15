@extends('layout.layout')
@section('title')
    Contact
@endsection
@section('content')
    <div class="mymargin">
        <div class="container">
            <h2 class="my-5">Have a question?</h2>
        </div>
        <section class="contact-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <div class="contact-box">
                            <div class="get-touch-text">Get in touch</div>
                            <div class="d-flex mb-3">
                                <div class="address-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <div class="text-capitalize">Registered Address :</div>
                                    <div class="text-capitalize">49 Boston Road, London, W7 3SH, UNITED KINGDOM</div>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="address-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <div class="text-capitalize">Email :</div>
                                    <div class="text-capitalize">cs@quicksendmt.co.uk</div>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <div class="address-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <div class="text-capitalize">Call :</div>
                                    <div class="text-capitalize">02033026721</div>
                                </div>
                            </div>

                        </div>
                        <div class="contact-box-img">
                            <img class="w-100" src="{{ asset('assets/img/services/contact.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 p-5 contact-form-border">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Enter Your Name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter Your E-mail" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="subject">Subject</label>
                                <input type="text" placeholder="Enter Your Subject" id="subject" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="10" rows="4" class="form-control" placeholder="Enter your message here..."></textarea>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <h2 class="my-5">Find us from Google Map</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d620.8278487835697!2d-0.3373603332136706!3d51.50750286034569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760d7bba56b1a1%3A0x81a4accb1e24e6c9!2s49%20Boston%20Rd%2C%20London%20W7%203SH%2C%20UK!5e0!3m2!1sen!2sbd!4v1687446798266!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
@endsection
