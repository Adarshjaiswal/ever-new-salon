@extends('admin.layouts.app')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
@section('content')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">All Students</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Students</a>
                                </li>
                                <li class="breadcrumb-item active">All Students
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                   
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                       
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Roll Number</th>
                                                        <th>Name</th>
                                                        <th>Father's Name</th>
                                                        <th>Mother's Name</th>
                                                        <th>Adhaar</th>
                                                        <th>Qualification</th>
                                                        <th>Address</th>
                                                        <th>Phone</th>
                                                        <th>Course</th>
                                                        <th>Admission Start</th>
                                                        <th>Admission End</th>
                                                          <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($students as $student)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $student->rollnumber }}</td>
                                                            <td>{{ $student->fullname }}</td>
                                                            <td>{{ $student->fathersname }}</td>
                                                            <td>{{ $student->mothersname }}</td>
                                                            <td><a href="{{ $student->adhaar }}" class="btn btn-primary" target="blank"> view Adhaar</a></td>
                                                            <td>{{ $student->qualification }}</td>
                                                            <td>{{ $student->address }}</td>
                                                            <td>{{ $student->phone }}</td>
                                                            <td>{{ $student->course }}</td>
                                                            <td>{{ $student->addmissionfrom }}</td>
                                                            <td>{{ $student->addmissionupto }}</td>
                                                             <td col='20'> 
 <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>&nbsp;
 &nbsp;
 &nbsp;

                                                              <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                        </form></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                       <th>Sr. No.</th>
                                                        <th>Roll Number</th>
                                                        <th>Name</th>
                                                        <th>Father's Name</th>
                                                        <th>Mother's Name</th>
                                                        <th>Adhaar</th>
                                                        <th>Qualification</th>
                                                        <th>Address</th>
                                                        <th>Phone</th>
                                                        <th>Course</th>
                                                        <th>Admission Start</th>
                                                        <th>Admission End</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
  
  
   
    <!-- END: Content-->
@include('admin.layouts.footer')
