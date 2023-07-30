<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room\Room;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function search(Request $request)
    {
        // dd($request);
        $checkInDate = Carbon::parse($request->input('check_in'))->toDateString();
        $checkOutDate = Carbon::parse($request->input('check_out'))->toDateString();
        $childrenAmount = (int) $request->input('children_amount');
        $roomAmount = (int) $request->input('room_amount');

        $rooms = Room::where('room_availability', '>=', $checkInDate)
            ->where('room_availability', '<=', $checkOutDate)
            ->where('children_amount', '>=', $childrenAmount)
            ->orderBy('room_availability')
            ->paginate(10);

        // Return the search results to a view
        return view('visitors.room_search', compact('rooms'));
    }

    public function filter_price(Request $request)
    {
        $priceRange = $request->input('price_range');
    
        // Validate the format of $priceRange
        if (!empty($priceRange) && preg_match('/^\d+-\d+$/', $priceRange)) {
            // Split the price range into lower and upper bounds
            [$minPrice, $maxPrice] = explode('-', $priceRange);
    
            // Query the rooms based on the selected price range
            $rooms = Room::whereBetween('price_after', [$minPrice, $maxPrice])
                ->get();
    
            // Check if any rooms are available in the selected price range
            if ($rooms->isEmpty()) {
                // If no rooms are available, return an appropriate message
                return redirect()->back()->with('error', 'No rooms available in the selected price range.');
            }
    
            // Return the filtered room data as a Blade view
            return view('visitors.room_search', compact('rooms'));
        } else {
            // Invalid price range format
            return redirect()->back()->with('error', 'Invalid price range format.');
        }
    }
}
