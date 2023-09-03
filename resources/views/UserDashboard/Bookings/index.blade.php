@extends('UserDashboard.layout.userBaseView')
@section('style')
<style>
#centerbox {
    width: 800px;
    height: auto;
    background-color: white;
    padding: auto;
    margin: auto;
    margin-top: 50px;
    border: 2px solid lightgrey;
    border-radius: 10px;
    /* box-shadow: 0px 2px 2px .5px rgba(71,71,0.3); */

}

.text-center {
    margin-top: 20px;
}

.newbooking {
    margin-left: 20px;
}
</style>
@section('dashContent')
<div class="container">
    <div class="newbooking">
        <a href="{{route('booking.add')}}" class="btn btn-primary mb-2 float-end">Create new booking</a>
    </div>
    <div class="text-center">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">user name</th>
                    <th scope="col">Booking name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Booked for</th>             
                    <th scope="col">Aciton</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1;@endphp
                @foreach($data as $booking)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{@$booking->user_name}}</td>
                    <td>{{@$booking->name}}</td>
                    <td>
                        @if($booking->status == 1)
                            Booked
                        @elseif($booking->status == 2)
                            Booking canceled
                        @else
                            Booking fulfilled
                        @endif
                    </td>
                    <td>{{@$booking->booking_date}}</td>                   
                    <td>
                        <div> 
                                <a href="{{route('booking.view.delete',['id'=>$booking->id])}}"  style="text-decoration: none;"><i
                                        class="bi bi-trash"></i>Delete</a>
                        </div>
                    </td>
                </tr>
                @php $i++ @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection