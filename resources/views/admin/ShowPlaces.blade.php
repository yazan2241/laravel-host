<!DOCTYPE html>
<html lang="en">
<head>

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

                <th style="padding: 10px;">id</th>
                <th style="padding: 20px;">name</th>
                <th style="padding: 20px;">location</th>
                <th style="padding: 10px;">GoogleMap</th>
                <th style="padding: 10px;">category</th>
                <th style="padding: 10px;">details</th>
                <th style="padding: 10px;">created at</th>
                <th style="padding: 10px;">updated at</th>
                <th style="padding: 10px;">Actions </th>

                </tr>
                @foreach($data as $place)
                    <tr>
                        <td style="padding: 20px;">{{$place->id}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$place->name}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$place->location}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$place->GoogleMap}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$place->category}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$place->details}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$place->created_at}}</td>
                        <td align="right" style="padding: 20px;text-align: right">{{$place->updated_at}}</td>
                        <td align="center" style="padding: 20px;text-align: center">
                            <a href="{{url('DeletePlace',$place->id)}}" onclick="return confirm('Are you Sure to Delete this Place')" class="btn btn-danger" style="margin: 5px;padding: 10px; display: block;">Delete</a>
                            <a href="{{url('UpdatePlace',$place->id)}}" onclick="return confirm('Are you Sure to Update this Place')"class="btn btn-primary" style="margin: 5px;padding: 10px;display: block;">Update</a>
                            <a href="{{url('AddNewImageView',$place->id)}}" class="btn btn-primary" style="margin: 5px;padding: 10px;display: block;">Add Image</a>
                            <a href="{{url('ShowImagesView',$place->id)}}" class="btn btn-primary" style="margin: 5px;padding: 10px;display: block;">Show Images</a>


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
