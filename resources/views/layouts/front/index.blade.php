@extends('layouts.frontLayout.front_design')
@section('content')


         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-8 align-self-center">
                              <div class="p-3">
                                 <h2 class="mb-2">Book An Appointment</h2>
                                 <form action="{{ url('submit-appointment') }}" method="post">@csrf
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="text" name="name" id="name" autocomplete="off">
                                             <label>Full Name</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="text" name="phone" id="phone" autocomplete="off">
                                             <label>Phone Number</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">                                                
                                                <input class="floating-input form-control" type="datetime-local" id="starttime"
                                                   name="starttime" placeholder="Select starting date">
                                                   <label>From</label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">                                                
                                                <input class="floating-input form-control" type="datetime-local" id="endtime"
                                                   name="endtime" placeholder="Select ending date">
                                                   <label>To</label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" style="">Book Appointment</button><br>
                                    
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@endsection