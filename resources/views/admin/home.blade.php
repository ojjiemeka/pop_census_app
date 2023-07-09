@extends('layouts.admin.admin')

@section('content')
    
            <!-- BEGIN .app-main -->
            <div class="app-main">
                <!-- BEGIN .main-heading -->
                <header class="main-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                    <i class="icon-laptop_windows"></i>
                                </div>
                                <div class="page-title">
                                    <h5>Ecommerce</h5>
                                    <h6 class="sub-heading">Welcome to Unify Admin Template</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="input-group form-group search-block">
                                    <input type="text" class="form-control" placeholder="Search for..."
                                        aria-label="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END: .main-heading -->
                <!-- BEGIN .main-content -->
                <div class="main-content">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="card block-300">
                                <div class="card-body">

                                    <div>
                                        <img src="{{ asset('Nigeria_Detailed_Map_With_Regions_generated.jpg') }}"
                                            alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col">
                            <a href="#" class="block-140">
                                <div class="icon primary">
                                    <i class="icon-shopping-cart2"></i>
                                </div>
                                <h5>{{ $stateCount }}</h5>
                                <p>States</p>
                            </a>
                            <a href="#" class="block-140">
                                <div class="icon primary">
                                    <i class="icon-thumbs-up2"></i>
                                </div>
                                <h5>763</h5>
                                <p>Likes</p>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col">
                            <a href="#" class="block-140">
                                <div class="icon primary">
                                    <i class="icon-bell3"></i>
                                </div>
                                <h5>218</h5>
                                <p>Alerts</p>
                            </a>
                            <a href="#" class="block-140">
                                <div class="icon primary">
                                    <i class="icon-location4"></i>
                                </div>
                                <h5>549</h5>
                                <p>Locations</p>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                            <a href="#" class="block-140">
                                <div class="icon primary">
                                    <i class="icon-archive3"></i>
                                </div>
                                <h5>367</h5>
                                <p>Pages</p>
                            </a>
                            <a href="#" class="block-140">
                                <div class="icon secondary">
                                    <i class="icon-download5"></i>
                                </div>
                                <h5>854</h5>
                                <p>Downloads</p>
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <a class="block-300 center-text">
                                <div class="user-profile">
                                    <img src="img/avatar1.svg" class="profile-thumb" alt="User Thumb">
                                    <h5 class="profile-name">Yuki Hayashi</h5>
                                    <h6 class="profile-designation">UX Designer</h6>
                                    <p class="profile-location">Japan</p>
                                    <div class="ml-5 mr-5 chartist custom-two">
                                        <div class="team-act"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="card">
                                <div class="card-header">Saley by Location</div>
                                <div class="card-body">
                                    <div class="row gutter">
                                        <div class="col-xl-12 col-lg-12 col-sm-12">
                                            <div id="map"></div>

                                            <button id="toggleButton">Toggle Marker</button>



                                            <script>
                                                var map = L.map('map').setView([9.0820, 8.6753], 6);

                                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                                                    maxZoom: 18,
                                                }).addTo(map);

                                                // Create a variable to hold the marker
                                                var marker;

                                                // Load the GeoJSON data for Nigeria
                                                var nigeriaLayer = new L.GeoJSON.AJAX("{{ asset('nigeria-detailed-boundary_992.geojson') }}", {
                                                    style: {
                                                        color: 'red',
                                                        weight: 2,
                                                        fillOpacity: 0
                                                    }
                                                }).addTo(map);

                                                var marker = L.marker([9.0765, 7.3986]).addTo(map);

                                                marker.bindPopup("Lagos State");

                                                var markerGroup = L.layerGroup([marker]);

                                                // Function to toggle the marker's visibility
                                                function toggleMarker() {
                                                    if (map.hasLayer(markerGroup)) {
                                                        map.removeLayer(markerGroup);
                                                    } else {
                                                        map.addLayer(markerGroup);
                                                    }
                                                }

                                                // Event listener for the button click
                                                document.getElementById("toggleButton").addEventListener("click", toggleMarker);
                                            </script>
                                            <div class="row gutters">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col">
                                                    <div class="info-stats">
                                                        <span class="info-label"></span>
                                                        <h6 class="info-title">USA</h6>
                                                        <h5 class="info-total">65,550</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col">
                                                    <div class="info-stats">
                                                        <span class="info-label red"></span>
                                                        <h6 class="info-title">EUROPE</h6>
                                                        <h5 class="info-total">32,765</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col">
                                                    <div class="info-stats">
                                                        <span class="info-label green"></span>
                                                        <h6 class="info-title">ASIA</h6>
                                                        <h5 class="info-total">89,495</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header">Settings</div>
                                <div class="card-body">
                                    <ul class="settings">
                                        <li>
                                            <div class="row gutter">
                                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-8">
                                                    <p>Check for new emails for every 15 mins</p>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                                    <div class="toggle-switch">
                                                        <input type="checkbox" class="check">
                                                        <b class="b switch"></b>
                                                        <b class="b track"></b>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row gutter">
                                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-8">
                                                    <p>Enable sound notifications</p>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                                    <div class="toggle-switch">
                                                        <input type="checkbox" class="check" checked="checked">
                                                        <b class="b switch"></b>
                                                        <b class="b track"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row gutter">
                                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-8">
                                                    <p>Delete trash emails for every week</p>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                                    <div class="toggle-switch">
                                                        <input type="checkbox" class="check" checked="checked">
                                                        <b class="b switch"></b>
                                                        <b class="b track"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row gutter">
                                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-8">
                                                    <p>Move deleted messages to trash folder</p>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                                    <div class="toggle-switch">
                                                        <input type="checkbox" class="check">
                                                        <b class="b switch"></b>
                                                        <b class="b track"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row gutter">
                                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-8">
                                                    <p>Add me as a friend</p>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                                    <div class="toggle-switch">
                                                        <input type="checkbox" class="check">
                                                        <b class="b switch"></b>
                                                        <b class="b track"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row gutter">
                                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-8">
                                                    <p>Makes me group Admin</p>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                                    <div class="toggle-switch">
                                                        <input type="checkbox" class="check">
                                                        <b class="b switch"></b>
                                                        <b class="b track"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->

                    <!-- Row start -->
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="card m-0">
                                <div class="card-body">
                                    <table id="scrollVertical" class="table table-striped table-bordered m-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>State</th>
                                                <th>Capital</th>
                                                <th>No. of LGA</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($states as $state)
                                            <tr>
                                                <td>{{$state->id}}</td>
                                                <td>{{$state->name}}</td>
                                                <td>{{$state->capital}}</td>
                                                <td>{{ $state->localGovernmentsCount() }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                    <!-- Row end -->

                </div>
                <!-- END: .main-content -->
            </div>
            <!-- END: .app-main -->
        
@endsection
