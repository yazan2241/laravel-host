<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/publc">
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;

        }
        input {
            display: inline-block;
            width: 400px;

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
        <div class="container" style="margin-top: 30px;padding-top: 50px;" align="center">
            <form action="{{url('EditPlace',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="name">Place Name</label>
                    <input type="text" id="name" name="name"  style="color: black;" value="{{$data->name}}" >
                </div>
                <div style="padding: 15px;">
                    <label for="location">Place Location</label>
                    <input type="text" id="location" name="location" value="{{$data->location}}" style="color: black;">
                </div>
                <div style="padding: 15px;">
                    <label for="GoogleMap">GoogleMap</label>
                    <input type="text" id="GoogleMap" name="GoogleMap" value="{{$data->GoogleMap}}"style="color: black;">
                </div>
                <div style="padding: 15px;">
                    <label for="category">category</label>
                    <input type="text" id="category" name="category" value="{{$data->category}}"style="color: black;">


                </div>
                <div style="padding: 15px;">
                    <p><label for="details">Details</label></p>
                    <textarea id="details" name="details" rows="10" cols="50" style="color: black;" >
                </textarea>
                </div>
                <div style="padding: 15px;">

                    <input type="submit" class="btn btn-outline-success" value="edit">
                </div>
            </form>
        </div>
    </div>

    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@include('admin.script')
</body>
</html>

