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
                    <h3 class="content-header-title">Edit Student</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Students</a></li>
                                <li class="breadcrumb-item active"><a href="#">Edit Student</a></li>
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
                                        <form class="form" enctype="multipart/form-data" method="POST" action="{{ route('student.update', $student->id) }}">
                                            @csrf
                                           
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="rollnumber">Roll Number</label>
                                                            <input type="number" id="rollnumber" class="form-control" placeholder="Roll Number" name="rollnumber" value="{{ $student->rollnumber }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fullname">Full Name</label>
                                                            <input type="text" id="fullname" class="form-control" placeholder="Full Name" name="fullname" value="{{ $student->fullname }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fathersname">Father's Name</label>
                                                            <input type="text" id="fathersname" class="form-control" placeholder="Father's Name" name="fathersname" value="{{ $student->fathersname }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mothersname">Mother's Name</label>
                                                            <input type="text" id="mothersname" class="form-control" placeholder="Mother's Name" name="mothersname" value="{{ $student->mothersname }}">
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
                                                                <option value="none" disabled>Select Qualification</option>
                                                                <option value="High School" {{ $student->qualification == 'High School' ? 'selected' : '' }}>High School (10th)</option>
                                                                <option value="Intermidiate" {{ $student->qualification == 'Intermidiate' ? 'selected' : '' }}>Intermidiate (12th)</option>
                                                                <option value="Diploma" {{ $student->qualification == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                                                <option value="UG" {{ $student->qualification == 'UG' ? 'selected' : '' }}>UG</option>
                                                                <option value="PG" {{ $student->qualification == 'PG' ? 'selected' : '' }}>PG</option>
                                                                <option value="Others" {{ $student->qualification == 'Others' ? 'selected' : '' }}>Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phonenumber">Phone Number</label>
                                                            <input type="tel" id="phonenumber" pattern="[0-9]{10}" class="form-control" placeholder="0000000000" name="phonenumber" value="{{ $student->phonenumber }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="course">Course</label>
                                                            <select id="course" name="course" class="form-control">
                                                                <option value="none" disabled>Select course</option>
                                                                <option value="Basic Makeup (15 Days)" {{ $student->course == 'Basic Makeup (15 Days)' ? 'selected' : '' }}>Basic Makeup (15 Days)</option>
                                                                <option value="Advance Makeup (15 To 30 Days)" {{ $student->course == 'Advance Makeup (15 To 30 Days)' ? 'selected' : '' }}>Advance Makeup (15 To 30 Days)</option>
                                                                <option value="Nail Extension (30 Days)" {{ $student->course == 'Nail Extension (30 Days)' ? 'selected' : '' }}>Nail Extension (30 Days)</option>
                                                                <option value="Nail Art (30 Days)" {{ $student->course == 'Nail Art (30 Days)' ? 'selected' : '' }}>Nail Art (30 Days)</option>
                                                                <option value="Hair Extension (30 Days)" {{ $student->course == 'Hair Extension (30 Days)' ? 'selected' : '' }}>Hair Extension (30 Days)</option>
                                                                <option value="Hair Cut (30 Days)" {{ $student->course == 'Hair Cut (30 Days)' ? 'selected' : '' }}>Hair Cut (30 Days)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                   <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="addmissionfrom">Admission From</label>
                                                            <input type="date" id="addmissionfrom" class="form-control" placeholder="addmissionfrom" name="addmissionfrom" value="{{ $student->addmissionfrom }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="addmissionupto">Admission Upto</label>
                                                            <input type="date" id="addmissionupto" class="form-control" placeholder="addmissionupto" name="addmissionupto" value="{{ $student->addmissionupto }}">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea id="address" rows="5" class="form-control" name="address" placeholder="Address">{{ $student->address }}"</textarea>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-raised btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Update
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