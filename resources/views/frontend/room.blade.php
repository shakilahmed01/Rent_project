@extends('frontend.master.master')
@section('content')

<header class="">
    <div class="container-fluid">

            <div class="col-md-12 mx-4">
                <div class="row  ">
                    <div class="col-md-2 col-small mx-2 main-service text-center single_box" onclick="location.href='{{route('room')}}'">
                        <span class="icon-room service_item"></span>
                        <br>
                        <span class="service_item_name"> Room</span>
                    </div>
                </div>
                <div class="row   ">
                        <form class="form-horizontal top-form" action="{{route('room_search')}}" role="form">
                          @csrf
                            <div class="row  justify-content-between">
                            <div class="col-lg-3 col-md-3 mt-2 top-from">
                                <input type="text" name="filter[thana]" class="form-control" id="location" placeholder="Location" aria-label=" location">
                            </div>
                            <div class="col-lg-3 col-md-3 mt-2  top-from">
                                <input type="date" name="filter[date]" class="form-control" id="check-in-date" placeholder="Add Dates" aria-label="Add Dates">
                            </div>
                            <div class="col-lg-3 col-md-3  mt-2  top-from">
                                <input type="date" name="filter[date]" class="form-control" id="check-out-date" placeholder="Add Dates" aria-label="Add Dates">
                            </div>
                            <div class="col-lg-3 col-md-3  mt-2 top-from">
                                <input type="number" name="filter[guest_count]" class="form-control" id="guest-count" placeholder="Guests" aria-label="Guests">
                            </div>

                            </div>
                            <!-- Checkbox filters -->
                            <div class="my-4 ">
                                <div class="form-check form-check-inline mx-3 pt-2">
                                    <input class="form-check-input" type="checkbox" name="filter[attached_toilet]" id="attached_toilet" value="Attached">
                                    <label class="form-check-label checkboxes-label" for="attached_toilet">Attached Toilet</label>
                                </div>
                                <div class="form-check form-check-inline mx-3 pt-2">
                                    <input class="form-check-input" type="checkbox" name="filter[attached_varanda]" id="attached_veranda" value="Attached">
                                    <label class="form-check-label checkboxes-label" for="attached_veranda">Attached Veranda</label>
                                </div>
                                <div class="form-check form-check-inline mx-3 pt-2">
                                    <input class="form-check-input" type="checkbox" name="filter[hot_water]" id="hot_water" value="hot">
                                    <label class="form-check-label checkboxes-label" for="hot_water">Hot Water</label>
                                </div>
                                <div class="form-check form-check-inline mx-3 pt-2">
                                    <input class="form-check-input" type="checkbox" name="filter[ac]" id="ac" value="ac">
                                    <label class="form-check-label checkboxes-label" for="ac">A.C</label>
                                </div>
                                <div class="form-check form-check-inline mx-3 pt-2">
                                    <input class="form-check-input" type="checkbox" name="filter[wifi]" id="wifi" value="wifi">
                                    <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                                </div>

                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[lift]" id="lift" value="lift">
                                        <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[furnished]" id="furnished" value="furnished">
                                        <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[cable_tv]" id="cableTv" value="cable">
                                        <label class="form-check-label checkboxes-label" for="cableTv">Cable TV</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[parking]" id="parking" value="parking">
                                        <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[water]" id="water" value="Water">
                                        <label class="form-check-label checkboxes-label" for="parking">Water</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[gas]" id="gas" value="Gas">
                                        <label class="form-check-label checkboxes-label" for="parking">Gas</label>
                                    </div>
                                    <div class="form-check form-check-inline mx-3 pt-2">
                                        <input class="form-check-input" type="checkbox" name="filter[electricity]" id="electricity" value="Electricity">
                                        <label class="form-check-label checkboxes-label" for="electricity">Electricity</label>
                                    </div>
                            </div>

                            <div class="price-range-block mb-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="sliderText">  Price Range  </div>
                                            <div class="d-flex  ">
                                                <input type="number" name="filter[price]" min=100 max="9900000" oninput="validity.valid||(value='100');" id="min_price"
                                                    class="price-range-field form-control me-2" placeholder="Min-price" />

                                                <input type="number" name="filter[price]" min=100 max="10000000" oninput="validity.valid||(value='1000000');" id="max_price"
                                                    class="price-range-field form-control" placeholder="Max-price" />
                                            </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="sliderText"> Area Range  </div>
                                            <div class="d-flex  ">
                                                <input type="number" name="filter[room_size]" min=100 max="9900000" oninput="validity.valid||(value='100');" id="min_price"
                                                    class="price-range-field form-control me-2" placeholder="Min-price" />
                                                <input type="number" name="filter[room_size]" min=100 max="10000000" oninput="validity.valid||(value='1000000');" id="max_price"
                                                    class="price-range-field form-control" placeholder="Max-price" />
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mt-2  top-from ">
                                <button  type="submit" class=" btn btn-danger  w-100 rounded-pill white-text" id="">Search</button>
                            </div>


                        </form>
                </div>
            </div>
    </div>
</header>
<!-- Header End -->

@endsection
