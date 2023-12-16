
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

        <div class=" w-100 container-fluid page-body-wrapper overflow-auto">
            <div class="container-fluid w-100  mt-4">
                <table class=" table table-striped w-100">
                    <thead>
                    <tr>
                        <th>Doctor's name</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room No</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Update</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $doctor)
                        <tr>
                            <td class="text-white">{{$doctor->name}}</td>
                            <td class="text-white">{{$doctor->phone}}</td>
                            <td class="text-white">{{$doctor->speciality}}</td>
                            <td class="text-white">{{$doctor->room}}</td>
                            <td class="text-white"><img src="doctorimage/{{$doctor->image}}"/></td>
                            <td><a class="btn btn-danger text-decoration-none" onclick="return confirm('Are you sure to delete this doctor ?')" href="{{url('/delete_doctor', $doctor->id)}}">Delete</a></td>
                            <td><a class="btn btn-info text-decoration-none" href='{{url("/update_doctor/{$doctor->id}")}}'>Update</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>
</html>
