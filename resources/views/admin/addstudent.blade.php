@extends('admin.layouts.app')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
@section('content')
 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Add Student</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Students</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Add Student</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                    <a class="heading-elements-toggle">
                                        <i class="la la-ellipsis-v font-medium-3"></i>
                                    </a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse">
                                                    <i class="ft-minus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="reload">
                                                    <i class="ft-rotate-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-action="expand">
                                                    <i class="ft-maximize"></i>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                       
                                        <form class="form" enctype="multipart/form-data" method="post" action="{{ route('save.student') }}">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="rollnumber">Roll Number</label>
                                                            <input type="number" id="rollnumber" class="form-control" placeholder="Roll Number" name="rollnumber">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fullname">Full Name</label>
                                                              <input type="text" id="fullname" class="form-control" placeholder="Full Name" name="fullname">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fathersname">Father's Name</label>
                                                            <input type="text" id="fathersname" class="form-control" placeholder="Father's Name" name="fathersname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mothersname">Mother's Name</label>
                                                            <input type="text" id="mothersname" class="form-control" placeholder="Mother's Name" name="mothersname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="adhaar">Upload Adhaar</label>
                                                            <input type="file" id="adhaar" class="form-control" placeholder="adhaar" name="adhaar">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="qualification">Qualification</label>
                                                            <select id="qualification" name="qualification" class="form-control">
                                                                <option value="none" selected="" disabled="">Select Qualification</option>
                                                                <option value="High School">High School (10th)</option>
                                                                <option value="Intermidiate">Intermidiate (12th)</option>
                                                                 <option value="Diploma">Diploma</option>
                                                                <option value="UG">UG</option>
                                                                <option value="PG">PG</option>
                                                               <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phonenumber">Phone Number</label>
                                                            <input type="tel" id="phonenumber" pattern="[0-9]{10}" class="form-control" placeholder="0000000000" name="phonenumber">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="course">Course </label>
                                                            <select id="course" name="course" class="form-control">
                                                                <option value="none" selected="" disabled="">Select course</option>
                                                                <option value="Basic Makeup (15 Days)">Basic Makeup (15 Days)</option>
                                                                <option value="Advance Makeup (15 To 30 Days)">Advance Makeup (15 To 30 Days)</option>
                                                                <option value="Nail Extension (30 Days)">Nail Extension (30 Days)</option>
                                                                <option value="Nail Art (30 Days)">Nail Art (30 Days)</option>
                                                                <option value="Hair Extension (15 Days)">Hair Extension (15 Days)</option>
                                                                 <option value="Lashes Extension (15 Days)">Lashes Extension (15 Days)</option>
                                                                  <option value="Micro Blading (15 Days)">Micro Blading (15 Days)</option>
                                                                   <option value="Latest Hair Cuts (On Student Demand)">Latest Hair Cuts (On Student Demand)</option>
                                                                    <option value="Chemical Work At Hair (15 Days to 2 Months - On Demand)">Chemical Work At Hair (15 Days to 2 Months - On Demand)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="addmissionfrom">Admission From</label>
                                                            <input type="date" id="addmissionfrom" class="form-control" placeholder="addmissionfrom" name="addmissionfrom">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="addmissionupto">Admission Upto</label>
                                                            <input type="date" id="addmissionupto" class="form-control" placeholder="addmissionupto" name="addmissionupto">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea id="address" rows="5" class="form-control" name="address" placeholder="Address"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-danger mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    

                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@include('admin.layouts.footer')