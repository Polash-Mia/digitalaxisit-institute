@extends('website.master')

@section('body')
 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('/') }}website/assets/img/graphic.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                            <h1 class="display-3 text-white animated slideInDown">গ্রাফিক্স ডিজাইন এবং ফ্রিল্যান্সিং </h1>
                            <p class="fs-5 text-white mb-4 pb-2">অভিজ্ঞতা অর্জন হয় দক্ষতা বৃদ্ধির মাধ্যমে। আর দক্ষতাই পারে সাফল্যের শিখরে পৌঁছে দিতে। তাই সময় নষ্ট না করি, দক্ষতা বৃদ্ধি করি।</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="{{ route('student') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('/') }}website/assets/img/web.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                            <h1 class="display-3 text-white animated slideInDown">ওয়েব ডিজাইন এবং ফ্রিল্যান্সিং </h1>
                            <p class="fs-5 text-white mb-4 pb-2">অভিজ্ঞতা অর্জন হয় দক্ষতা বৃদ্ধির মাধ্যমে। আর দক্ষতাই পারে সাফল্যের শিখরে পৌঁছে দিতে। তাই সময় নষ্ট না করি, দক্ষতা বৃদ্ধি করি।</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="{{ route('student') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('/') }}website/assets/img/laravel2.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                            <h1 class="display-3 text-white animated slideInDown">ওয়েব ডেভেলপমেন্ট এবং ফ্রিল্যান্সিং </h1>
                            <p class="fs-5 text-white mb-4 pb-2">অভিজ্ঞতা অর্জন হয় দক্ষতা বৃদ্ধির মাধ্যমে। আর দক্ষতাই পারে সাফল্যের শিখরে পৌঁছে দিতে। তাই সময় নষ্ট না করি, দক্ষতা বৃদ্ধি করি।</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="{{ route('student') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('/') }}website/assets/img/digital.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                            <h1 class="display-3 text-white animated slideInDown">ডিজিটাল মার্কেটিং এবং ফ্রিল্যান্সিং </h1>
                            <p class="fs-5 text-white mb-4 pb-2">অভিজ্ঞতা অর্জন হয় দক্ষতা বৃদ্ধির মাধ্যমে। আর দক্ষতাই পারে সাফল্যের শিখরে পৌঁছে দিতে। তাই সময় নষ্ট না করি, দক্ষতা বৃদ্ধি করি।</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="{{ route('student') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">দক্ষ প্রশিক্ষক</h5>
                        <p>একজন দক্ষ প্রশিক্ষকই পারে আপনাকে দক্ষ করতে। আর আমাদের সকল প্রশিক্ষক উচ্চ দক্ষতা সম্পন্ন।</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">আধুনিক শিক্ষা ব্যবস্থা</h5>
                        <p>কোর্সের লেসন এর উপর ভিত্তি করে অনলাইনের মাধ্যমে ঘরে বসে লাইভ কোর্স করানো হয় ।</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">রিসোর্স সরবরাহ</h5>
                        <p>প্রতিটি কোর্সের এর সাথে কোর্স  সম্পর্কিত রিসোর্স সফ্টওয়্যার  প্রদান করা হয়।</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        {{-- <i class="fa fa-3x fa-home text-primary mb-4"></i> --}}
                        <i class="fas fa-3x fa-calendar-check text-primary mb-4"></i>
                        <h5 class="mb-3">সফলতা নিশ্চিতকরণ</h5>
                        <p>কথায় নয়, আমরা কাজে বিশ্বাসী। তাই সফলতা নিশ্চিত করাই মুলত ডিজিটালাক্সিস আইটির প্রধান লক্ষ্য।</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('/') }}website/assets/img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Digitalaxis IT-তে স্বাগতম</h1>
                <p class="mb-4">Digitalaxis IT মূল লক্ষ্য এবং উদ্দেশ্য হল ফ্রিল্যান্সার, প্রোগ্রামার, ডেভেলপার, গ্রাফিক ডিজাইনার এবং এই জাতীয় সমস্ত প্রযুক্তিগত লোকদের এক জায়গায় একত্রিত করা । Digitalaxis IT প্রতিটি সদস্য দক্ষ ডিজাইনার, ডেভেলপার এবং সফল ফ্রীলান্সার।  তাই আপনি আমাদের সাথে আত্মবিশ্বাসের সাথে কাজ করুন।</p>
                {{-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> --}}
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>দক্ষ প্রশিক্ষক</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>আধুনিক শিক্ষা ব্যবস্থা</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>আপডেটেড কোর্স মডিউল  
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>স্কিল ডেভেলপমেন্ট 
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>কোর্স শেষে সার্টিফিকেট প্রদান।  
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>পর্যাপ্ত রিসোর্স সরবরাহ</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>লাইফটাইম সাপোর্ট</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>সফলতা নিশ্চিতকরণ</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ফ্রিল্যান্সিং</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>বিভিন্ন প্রতিষ্ঠানে কাজের সুযোগ</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Categories Start -->
{{-- <div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Courses Categories</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/img/cat-1.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Web Design</h5>
                                <small class="text-primary">49 Courses</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/img/cat-2.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Graphic Design</h5>
                                <small class="text-primary">49 Courses</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{ asset('/') }}website/assets/img/cat-3.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Video Editing</h5>
                                <small class="text-primary">49 Courses</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('/') }}website/assets/img/cat-4.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Online Marketing</h5>
                        <small class="text-primary">49 Courses</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}
<!-- Categories Start -->


<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">আমাদের কোর্স সমূহ</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('/') }}website/assets/img/course-1.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="{{ route('student') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Graphic Design with Freelancing </h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Toihiduzzaman</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3 month</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('/') }}website/assets/img/course-2.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="{{ route('student') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web Design  with Freelancing</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Md. Polash</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3 month</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('/') }}website/assets/img/course-3.jpg" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="{{ route('student') }}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web  Development with Freelancing</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Md. Polash</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3 month</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
            <h1 class="mb-5">দক্ষ প্রশিক্ষক</h1>
        </div>
        <div class="row g-4 ">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('/') }}website/assets/img/touhid.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Toihiduzzaman</h5>
                        <small>Graphic designer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden " >
                        <img class="img-fluid  w-100" src="{{ asset('/') }}website/assets/img/p.jpg" alt="Md. Polash">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Md. Polash </h5>
                        <small>Web developer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('/') }}website/assets/img/mehidy.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Mehedi Hasan</h5>
                        <small>Motion Graphic Designer</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('/') }}website/assets/img/Ashik--Tou.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Asaduzzaman</h5>
                        <small>Graphic Designer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="mb-5">শিক্ষার্থীরা যা বলেন</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('/') }}website/assets/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('/') }}website/assets/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('/') }}website/assets/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('/') }}website/assets/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection