@extends('layouts/frontend_layout')

@section('content')
<style>
    .container {
    width: 100%;
    display: flex;
}

.radio-filter {
    width: 30%;
}

.details {
    width: 70%;
}
</style>


	<div class="" style="height:200px;">
	</div>
    
    <div class="container">

        <div class="radio-filter" style="">
            <!-- Price Range Filter -->
            <div class="price-range-filter">
                @if(session('error'))
                    <p>{{ session('error') }}</p>
                @endif
                
                <h6 style="font-weight: bolder;">Price Range:</h6>
                <div>
                    <input type="radio" id="price_0_50" name="price_range" value="0-50">
                    <label for="price_0_50">Rp 0 - Rp 500 ribu</label>
                </div>
                <div>
                    <input type="radio" id="price_50_100" name="price_range" value="50-100">
                    <label for="price_50_100">Rp 500 ribu - Rp 1 juta</label>
                </div>
                <div>
                    <input type="radio" id="price_100_150" name="price_range" value="100-150">
                    <label for="price_100_150">Rp 1 juta - Rp 1,5 juta</label>
                </div>
                <div>
                    <input type="radio" id="price_150_200" name="price_range" value="150-200">
                    <label for="price_150_200">Rp 1,5 juta - Rp 2 juta</label>
                </div>
                <div>
                    <input type="radio" id="price_above_200" name="price_range" value="above_200">
                    <label for="price_above_200">diatas Rp 2 juta</label>
                </div>
            </div>
        </div>
        
        
        <!-- Details Right -->
        <div class="details" style="">
            <h4>Results</h4>
                @if(count($rooms) > 0)
                    @foreach($rooms as $room)
                        <div class="container mb-5">
                            <div class="row">
                                
                                <!-- Details Image -->
                                <div class="col-xl-7 col-lg-6">
                                    <div class="details_image">
                                        <div class="background_image" style="background-image:url({{ asset('assets/frontend/images/details_1.jpg') }})"></div>
                                    </div>
                                </div>
                
                                <!-- Details Content -->
                                <div class="col-xl-5 col-lg-6">
                                    <div class="details_content">
                                        <div class="details_title">{{ $room->name }}  <span style="font-weight: bolder;color:white;background-color:red;font-size:18px; padding:2px;">{{ $room->discount }}%  OFF</span> </div>
                                        <h6> 
                                            <span style="text-decoration:line-through;color:green;">{{ 'Rp ' . number_format($room->price_base, 0, ',', '.') }}</span> 
                                            <span style="font-weight: bolder;color:red;font-size:18px;">{{ 'Rp ' . number_format($room->price_after, 0, ',', '.') }}</span> 
                                             
                                        </h6> 
                                        <div class="details_list">
                                            <ul>
                                                <li>27 m² Patio</li>
                                                <li>Balcony with view</li>
                                                <li>Garden / Mountain view</li>
                                                <li>Flat-screen TV</li>
                                                <li>Air conditioning</li>
                                                <li>Soundproofing</li>
                                                <li>Private bathroom</li>
                                                <li>Free WiFi</li>
                                            </ul>
                                        </div>
                                        <div class="details_long_list">
                                            <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                                <li>Balcony</li>
                                                <li>Mountain view</li>
                                                <li>Terrace</li>
                                                <li>TV</li>
                                                <li>Satellite Channels</li>
                                                <li>Safety Deposit Box</li>
                                                <li>Heating</li>
                                                <li>Sofa</li>
                                                <li>Tile/Marble floor</li>
                                                <li>Mosquito net</li>
                                                <li>Wardrobe/Closet</li>
                                                <li>Sofa bed</li>
                                                <li>Shower</li>
                                                <li>Hairdryer</li>
                                                <li>Free toiletries</li>
                                                <li>Toilet</li>
                                                <li>Bath or Shower</li>
                                                <li>Toilet paper</li>
                                                <li>Tea/Coffee Maker</li>
                                                <li>Minibar</li>
                                                <li>Dining area</li>
                                                <li>Electric kettle</li>
                                                <li>Dining table</li>
                                                <li>Outdoor furniture</li>
                                                <li>Outdoor dining area</li>
                                                <li>Towels</li>
                                                <li>Linen</li>
                                                <li>Upper floors accessible by lift</li>
                                            </ul>
                                        </div>
                                        <div class="book_now_button"><a href="#">Book Now</a></div>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                    {{ $rooms->links() }}
                    @endforeach
                @else
                    <p>No rooms found for the given search criteria.</p>
                @endif
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Function to handle the filter radio buttons change event
            function handleFilters() {
                const priceRange = $('input[name="price_range"]:checked').val();
    
                // Make AJAX request to fetch filtered results
                $.ajax({
                    url: "{{ route('filterRoomPrices') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        price_range: priceRange
                    },
                    success: function (response) {
                        // Update the rooms-wrapper with the filtered results
                        $('.rooms-wrapper').html(response);
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            }
    
            // Bind the handleFilters function to the change event of filter radio buttons
            $('input[name="price_range"]').on('change', function () {
                handleFilters();
            });
    
            // Prevent default form submission and handle it with AJAX
            $('#filterForm').on('submit', function (e) {
                e.preventDefault();
                handleFilters();
            });
        });
    </script>
    



@endsection