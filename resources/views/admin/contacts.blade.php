@extends('admin.layouts.app')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
@section('content')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">All Contacts</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Contacts</a>
                                </li>
                                <li class="breadcrumb-item active">All Contacts
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
                                                       
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                       
                                                        <th>Message</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($contacts as $contact)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $contact->name }}</td>
                                                            <td>{{ $contact->email }}</td>
                                                            <td>{{ $contact->phone }}</td>
                                                            <td>{{ $contact->message }}</td>
                                                         
                                                            <td>{{ $contact->created_at }}</td>
                                                           
                                                             <td col='20'> 


                                                              <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
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
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Message</th>
                                                         <th>Date</th>
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
