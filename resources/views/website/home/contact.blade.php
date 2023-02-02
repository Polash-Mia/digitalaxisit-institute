@extends('website.master')
@section('body')
 <!-- Header Start -->
 <div class="container-fluid bg-primary py-1 mb-5 page-header">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-xxl py-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">যোগাযোগ</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5>যোগাযোগ করুন</h5>
                <p class="mb-4">যে কোনো প্রয়োজনে যোগাযোগ করতে সরাসরি আমাদের অফিস ভিজিট করতে পারেন। তাছাড়া মেইলে কিংবা ফেসবুক ম্যাসেঞ্জারেও নক করে বা ফোন নম্বরে কল করে  ট্রেইনিং সংক্রান্ত যেকোনো তথ্য জেনে নিতে পারেন। </p>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Office</h5>
                        <p class="mb-0">নিউ আদর্শ পাড়া , শাপলা চত্বর, রংপুর ।</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Mobile</h5>
                        <p class="mb-0">01740023199</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Email</h5>
                        <p class="mb-0">digitalaxis4@gmail.com</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="আপনার নাম">
                                <label for="name">আপনার নাম</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="আপনার ইমেইল">
                                <label for="email">আপনার ইমেইল</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="সাবজেক্ট">
                                <label for="subject">সাবজেক্ট</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="বিস্তারিত লিখুন" id="message" style="height: 150px"></textarea>
                                <label for="message">বিস্তারিত লিখুন</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5082.590558384256!2d89.24646777969177!3d25.739687840320773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e32df6adf014c5%3A0x29fbc58dc3f3a99!2sNew%20Adarsha%20Para%20Jame%20Masjid!5e0!3m2!1sen!2sbd!4v1672915275921!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection