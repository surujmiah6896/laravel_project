@extends('layouts.dashboard_master');

@section('dashboard_bar')
Profile
@endsection

@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo">
                                        <img src="{{asset('uploads/cover_photo')}}/{{auth()->user()->cover_photo}}" width="100%"   class="img-fluid " alt="No photo">
                                    </div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{asset('uploads/profile_photo')}}/{{auth()->user()->profile_photo}}" width="500" class="img-fluid rounded-circle" alt="No photo">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">{{auth()->User()->name}}</h4>
											<p>UX / UI Designer</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{auth()->User()->email}}</h4>
											<p>Email</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">
                                                @if (auth()->User()->phone_number)
                                                    {{auth()->User()->phone_number}}
                                                @else
                                                    N/A
                                                @endif
                                            </h4>
											<p>Phone Number</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">
                                                @if (auth()->User()->address)
                                                    {{auth()->User()->address}}
                                                @else
                                                     N/A
                                                @endif
                                            </h4>
											<p>Address</p>
										</div>

									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="pt-3">
                                                    <div class="settings-form">
                                                          @if (session('change_name'))
                                                            <div class=" alert alert-success">
                                                                {{session('change_name')}}
                                                            </div>
                                                            @endif

                                                            @if (session('password_change_message'))
                                                                <div class="alert alert-success">
                                                                    {{session('password_change_message')}}
                                                                </div>
                                                            @endif

                                                        <h4 class="text-primary">Account Setting</h4>
                                                        <form action="{{route('update_profile')}}" method="POST" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="form-group">
                                                                         <label>Name <span class="text-danger">*</span></label>
                                                                          <input type="text" value="{{auth()->User()->name}}" name="name" class="@error('name') is-invalid @enderror form-control">
                                                                          @error('name')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                          @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-group">
                                                                          <label>Email</label>
                                                                         <input type="email" value="{{auth()->User()->email}}" name="email" class="form-control">
                                                                     </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-group">
                                                                         <label>Phone Number (017xxxxxxx)</label>
                                                                          <input type="text" value="{{auth()->User()->phone_number}}" name="phone_number" class="@error('phone_number') is-invalid @enderror  form-control">
                                                                          @error('phone_number')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                          @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-group">
                                                                         <label>Address</label>
                                                                          <input type="text" value="{{auth()->User()->address}}" name="address" class="form-control">
                                                                    </div>
                                                                </div>
                                                               <div class="row">
                                                                   <div class="col-6">
                                                                    <div class="form-group">
                                                                         <label>Profile Photo</label>
                                                                          <input type="file"  name="profile_photo" class="form-control">

                                                                    </div>
                                                                   </div>
                                                                   <div class="col-6">
                                                                    <div class="form-group">
                                                                         <label>Cover Photo</label>
                                                                          <input type="file"  name="cover_photo" class="form-control">

                                                                    </div>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <button class="btn-sm btn btn-primary" type="submit">Submit</button>
                                                            @csrf
                                                        </form>


                                                            <hr>






                                                            <form action="{{route('change.password')}}" method="POST">
                                                                @csrf
                                                                <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                    <label>Current Password</label>
                                                                    <input type="password" name="current_password" placeholder="Enter current password" class="form-control">
                                                                    @error('current_password')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                    @error('current_password_error')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>Password</label>
                                                                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                                                    @error('password')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                    @enderror

                                                                     @error('current_store')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label  abel>Confirm Password</label>
                                                                    <input type="password" name="password_confirmation" placeholder="Enter Confirm Password" class="form-control">
                                                                    @error('photo_error')
                                                                            <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <button class="btn-sm btn btn-primary" type="submit">Change Password</button>
                                                            </form>


                                                    </div>
                                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
