@extends('AdminDashboard.Layout.adminBaseView')
@section('dashContent')
<form action="{{Request::segment(2) == 'add' ? route('booking.save') : route('booking.update', ['id' => Request::segment(2)]) }}" method="post">
    @csrf
    <div class="container">
        @if(Auth::user()->user_type == 1)
        <div class="mb-3 w-50">
            <label for="user_name" class="form-label">User Name</label>
            <select name="user_name" class="form-select" aria-label="Default select example">
                <option selected>Select user</option>
                @foreach($data as $user)
                <option value="{{ $user->id }}" {{ isset($booking->user_id) && $booking->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
                @endforeach
            </select>
        </div>
        @else
        <input type="hidden" name="user_name" value="{{ isset($booking->user_id) ? $booking->user_id : Auth::user()->id }}">
        @endif
        <div class="mb-3 w-50">
            <label for="booking_name" class="form-label">Booking Name</label>
            <input type="text" class="form-control" id="booking_name" name="booking_name" placeholder="Booking Name" value="{{ isset($booking->name) ? $booking->name : '' }}">
        </div>
        <div class="mb-3 w-50">
            <label for="booking_date" class="form-label">Booking On</label>
            <input type="date" class="form-control" id="booking_date" name="booking_date" placeholder="Booking Date" value="{{ isset($booking->booking_date) ? $booking->booking_date : now()->toDateString() }}">

            <!-- <input type="date" class="form-control" id="booking_on" name="booking_on" placeholder="Booking Date" value="{{ isset($booking->booking_date) ? $booking->booking_date : '' }}"> -->
        </div>
        <div class="mb-3 w-50">
            <label for="booking_status" class="form-label">Booking Status</label>
            <select name="booking_status" aria-label="Default select example" class="form-select">
                <option value="" selected>Set status</option>
                <option value="1" {{ isset($booking->status) && $booking->status == 1 ? 'selected' : '' }}>Booked</option>
                <option value="2" {{ isset($booking->status) && $booking->status == 2 ? 'selected' : '' }}>Booking Cancelled</option>
                <option value="3" {{ isset($booking->status) && $booking->status == 3 ? 'selected' : '' }}>Booking Fulfilled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ Request::segment(2) == 'add' ? 'Save' : 'Update' }}</button>
    </div>
</form>
@endsection
