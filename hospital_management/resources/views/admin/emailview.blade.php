
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
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session()->get('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{url('/upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding:15px;">
                        <label>Greeting</label>
                        <input type="text" style="color:black;" name="greeting"
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
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{session()->get('message')}}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        <form action="{{url('/sendemail',$data->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div style="padding:15px;">
                                                <label>Greeting</label>
                                                <input type="text" style="color:black;" name="greeting" placeholder="greeting"/>
                                            </div>
                                            <div style="padding:15px;">
                                                <label>Message</label>
                                                <input type="number" style="color:black;" name="message" placeholder="message"/>
                                            </div>

                                            <div style="padding:15px;">
                                                <label>Action Text</label>
                                                <input type="text" style="color:black;" name="actiontext" placeholder="Enter room number"/>
                                            </div>

                                            <div style="padding:15px;">
                                                <label>Action url</label>
                                                <input type="text" style="color:black;" name="actionurl" placeholder="Enter room number"/>
                                            </div>

                                            <div style="padding:15px;">
                                                <label>End part</label>
                                                <input type="text" style="color:black;" name="endpart" placeholder="Enter room number"/>
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
                        "/>
                    </div>
                    <div style="padding:15px;">
                        <label>Message</label>
                        <input type="number" style="color:black;" name="message" placeholder="Enter the  phone"/>
                    </div>

                    <div style="padding:15px;">
                        <label>Action Text</label>
                        <input type="text" style="color:black;" name="actiontext" placeholder="Enter room number"/>
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
