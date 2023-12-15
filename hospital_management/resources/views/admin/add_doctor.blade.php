
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label{
            width:100px;
        }
        input,select{
            width:300px;
        }
    </style>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--admin sidebar starts -->

    @include('admin.sidebar')

    <!--admin sidebar ends -->


    <div class="container-fluid page-body-wrapper">

        <!-- admin navbar starts-->

        @include('admin.navbar')

        <!-- admin navbar ends-->

        <!-- admin body starts-->

{{--        @include('admin.body')--}}

        <!-- admin body ends-->

        <div class="container-fluid page-body-wrapper">

            <div style="padding-top:100px;" class="container">
                @if(session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <form action="{{url('/upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                     <div style="padding:15px;">
                         <label>Doctor name</label>
                         <input type="text" style="color:black;" name="name" placeholder="Enter the  name"/>
                     </div>
                    <div style="padding:15px;">
                        <label>Phone</label>
                        <input type="number" style="color:black;" name="phone" placeholder="Enter the  phone"/>
                    </div>
                    <div style="padding:15px;">
                        <label>Speciality</label>
                        <select name="speciality" style="color:black;">
                            <option>--Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>
                    <div style="padding:15px;">
                        <label>Room No</label>
                        <input type="text" style="color:black;" name="room" placeholder="Enter room number"/>
                    </div>

                    <div style="padding:15px;">
                        <label>Doctor Image</label>
                        <input type="file"  name="file" />
                    </div>

                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success text-center" name="submit" />
                    </div>

                </form>
            </div>
            </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>
</html>
