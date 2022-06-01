



<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
    @include('admin.css')
    <style type="text/css">
        tr {
            border: solid white thin;
        }

        th {
            border: solid white thin;
        }

        td {
            border: solid white thin;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                           target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                            class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial Navbar-->

@include('admin.navbar')
<!-- partial -->
    <!-- main-panel ends -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="margin-top: 30px;padding-top: 50px;" align="left">
            <table style="background-color: black; border: solid white medium;">
                <tr style="border: solid white medium;">

                    <th style="padding: 10px;">Place ID</th>
                    <th style="padding: 20px;">Place name</th>
                    <th style="padding: 20px;">Place Images</th>
                    <th style="padding: 20px;"> Action</th>



                </tr>
                @foreach($images as $newimage)
                    <tr>
                        <td style="padding: 20px;">{{$newimage->place_id}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$newimage->place_name}}</td>
                        <td align="right" style="padding: 20px;text-align: right"><img src="{{$newimage->url}}" alt="Image palce" width="500" height="500"></td>
                        <td align="right" style="padding: 20px;text-align: right">
                        <a href="{{url('DeleteImage',$newimage->id)}}" onclick="return confirm('Are you Sure to Delete this Image')" class="btn btn-danger" style="margin: 5px;padding: 10px; display: block;">Delete</a>
                        </td>



                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@include('admin.script')
</body>
</html>
