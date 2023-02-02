@extends('website.master')
@section('body')
<section class="container py-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-4 text-center"> অনলাইন অ্যাডমিশন ফর্ম</h4>
                </div>
                <div class="card-body">
                    {{-- <h4 class="card-title mb-4 text-center"> অনলাইন অ্যাডমিশন ফর্ম</h4> --}}
                    <form action="{{route('student.create')}}" method="POST">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="name" class="col-sm-3 col-form-label fw-bold"> আপনার নাম :</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="name" placeholder="আপনার নাম" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="email" class="col-sm-3 col-form-label fw-bold"> 
                                ই-মেইল : </label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email"
                                 placeholder=" ই-মেইল" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="mobile" class="col-sm-3 col-form-label fw-bold"> আপনার মোবাইল নাম্বার :</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" class="form-control" id="mobile" placeholder="আপনার মোবাইল নাম্বার" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="address" class="col-sm-3 col-form-label fw-bold">আপনার বর্তমান ঠিকানা :</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" id="address" placeholder="আপনার বর্তমান ঠিকানা" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="education" class="col-sm-3 col-form-label fw-bold">শিক্ষাগত যোগ্যতা ? </label>
                            <div class="col-sm-9">
                               <select name="education" id="education" class="form-control" required>
                                <option value="">সিলেক্ট করুন </option>
                                <option value="JSC">JSC</option>
                                <option value="SSC">SSC</option>
                                <option value="HSC">HSC</option>
                                <option value="Diploma">Diploma</option>
                                <option value="B.Sc.">B.Sc.</option>
                                <option value="Honours">Honours</option>
                                <option value="Masters">Masters</option>
                                <option value="M.Sc.">M.Sc.</option>
                               </select>
                            </div>
                        </div>
                        {{-- <div class="form-group row mb-4">
                            <label for="education" class="col-sm-3 col-form-label">Present Work</label>
                            <div class="col-sm-9">
                               <select name="education" id="education" class="form-control">
                                <option value="">সিলেক্ট করুন </option>
                                <option value="JSC">Student</option>
                                <option value="SSC">Employment</option>                              
                               </select>
                            </div>
                        </div> --}}
                        <div class="form-group row mb-4">
                            <label for="course" class="col-sm-3 col-form-label fw-bold">কোর্স :</label>
                            <div class="col-sm-9">
                               <select name="course" id="course" class="form-control" required>
                                <option value="">সিলেক্ট করুন </option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Web Design">Web Design</option>                              
                                <option value="Web Development">Web Development</option>                              
                               </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="address" class="col-sm-12 col-form-label fw-bold">Bkash / Nagad /Roket Personal Number: 01740023199</label>
                            
                        </div>

                        <div class="form-group row mb-4">
                            <label for="payment" class="col-sm-3 col-form-label fw-bold"> Bkash/Nogod/Roket </label>
                            <div class="col-sm-9">
                                <input type="number" name="payment" class="form-control" id="payment" placeholder="Bkash/Nogod/Roket Number" required/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="transaction" class="col-sm-3 col-form-label fw-bold"> Transaction ID </label>
                            <div class="col-sm-9">
                                <input type="text" name="transaction" class="form-control" id="transaction" placeholder="Transaction ID" required/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
        
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
