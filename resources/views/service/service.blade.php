@extends('layout.layout')
@section('title')
    Service
@endsection
@section('content')
    <div class="mymargin">
        <div class="container">
            <h2 class="mb-5 text-uppercase">Our Services</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/services/service_1.png') }}" class="card-img-top w-100" style="height: 230px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Worldwide Online Money Transfer</h5>
                            <p class="card-text text-capitalize">Offer fast and secure online money transfer services through our user-friendly website.</p>
                            <a href="#" class=" btn btn-primary btn-sm">Go To Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/services/service_2.jpg') }}" class="card-img-top w-100" style="height: 230px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mobile app Money Transfer</h5>
                            <p class="card-text text-capitalize">Transfer money on-the-go with our convenient our mobile app, available both android and ios.</p>
                            <a href="#" class=" btn btn-primary btn-sm">Go To Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/services/service_3.jpg') }}" class="card-img-top w-100" style="height: 230px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">In store Money Transfer</h5>
                            <p class="card-text text-capitalize">Transfer money face to face in one or our stores with the assistance of our knowledgeable staff.</p>
                            <a href="#" class=" btn btn-primary btn-sm">Go To Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="mt-4 mb-3">Why you should choose us?</h2>

            <div class="row">
                <div class="col-lg-6 my-3">
                    <div class="card card-content">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-info">Security and Reliability</h5>
                            <p class="card-text text-capitalize">When choosing a money transfer service, one of the most crucial factors to consider is security. We prioritize the safety of your funds and personal information by implementing robust encryption protocols and advanced security measures. Our platform is built on a secure infrastructure, ensuring that your transactions are protected against potential threats and unauthorized access. You can trust us to handle your money transfers with utmost reliability and confidentiality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="card card-content">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-info">Convenient and User-Friendly Platform</h5>
                            <p class="card-text text-capitalize">We believe in making money transfers as convenient and hassle-free as possible. Our user-friendly online platform or mobile app allows you to initiate and track your transfers with ease. We offer a seamless and intuitive interface that simplifies the process, enabling you to complete transactions quickly and efficiently. Whether you're sending money to family abroad or making a business payment, our platform is designed to provide a smooth and convenient experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="card card-content">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-info">Competitive Rates and Fees</h5>
                            <p class="card-text text-capitalize">We understand the importance of cost-effectiveness when it comes to sending money internationally or domestically. As a money transfer service, we offer competitive exchange rates and transparent fee structures, ensuring that you get the most value for your money. We strive to keep our fees reasonable, without compromising on the quality of service provided. With us, you can expect affordable rates and minimal hidden charges, allowing you to save on your transactions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="card card-content">
                        <div class="card-body">
                            <h5 class="card-title mb-4 text-info">Excellent Customer Support</h5>
                            <p class="card-text text-capitalize">We prioritize customer satisfaction and aim to provide exceptional customer support throughout your money transfer journey. Our dedicated support team is available to assist you with any queries, concerns, or technical issues you may encounter. We strive to offer timely and effective solutions to ensure a positive customer experience. Whether you need assistance with a transaction, clarification on fees, or guidance on using our services, our knowledgeable support team is just a phone call or email away.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
