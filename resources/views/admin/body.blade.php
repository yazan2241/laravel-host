
<div class="main-panel">
    <div class="content-wrapper">
        

        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h1 >Historical Places</h1>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0 text-success" style="font-size: 30PX;">{{ $antique }}</h2>
                            
                                </div>
                               
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Natural places </h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0 text-success" style="font-size: 30PX;">{{ $naturalCount }}</h2>
                                  
                                </div>
                               
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>religious places</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0 text-success" style="font-size: 30PX;">{{ $religiousCount }}</h2>
                                    
                                </div>
                             
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visitors by Countries</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-us"></i>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right"> 1500 </td>
                                            <td class="text-right font-weight-medium"> 56.35% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-de"></i>
                                            </td>
                                            <td>Germany</td>
                                            <td class="text-right"> 800 </td>
                                            <td class="text-right font-weight-medium"> 33.25% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-au"></i>
                                            </td>
                                            <td>Australia</td>
                                            <td class="text-right"> 760 </td>
                                            <td class="text-right font-weight-medium"> 15.45% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-gb"></i>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td class="text-right"> 450 </td>
                                            <td class="text-right font-weight-medium"> 25.00% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-ro"></i>
                                            </td>
                                            <td>Romania</td>
                                            <td class="text-right"> 620 </td>
                                            <td class="text-right font-weight-medium"> 10.25% </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="flag-icon flag-icon-br"></i>
                                            </td>
                                            <td>Brasil</td>
                                            <td class="text-right"> 230 </td>
                                            <td class="text-right font-weight-medium"> 75.00% </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div id="audience-map" class="vector-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Where2Go 2022</span>
        </div>
    </footer>
    <!-- partial -->
</div>



