@extends('UserDashboard.layout.userBaseView')
@section('style')
<style>
.icon{
    float:right;
    font-size:500px;
    position:absolute;
    top:0rem;
    right:0,3rem;
    opacity:.16;
}
#user-contianer{
    width:500px;
    height:90px;
    display:flex;

}
#web-container{
    width:500px;
    display:flex;
}
#booking-container{
    width:1200px;
    display:flex;
}
.kpi-card{
    margin:1px;
}
.grey-dark{
    width:500px;
    height:90px;
    background:#495057;
    color:#efefef;
}
.red-gradient{
    width:500px;
    height:90px;
    background:linear-gradient(180deg,rgba(207,82,82,1) 0%,rgba(121,9,9,1) 80%);
    color:#fff;
}
.red{
    width:500px;
    height:90px;
    background:#910f0f;
    color:#fff;
}
.orange{
    background:#cf6422;
    color:#fff;
    width:500px;
    height:90px;
}
.purple{
    width:500px;
    height:90px;
    background:#70128f;
    color:#fff;
}
.card-value{
    display:block;
    font-size: 200%;
    font-weight: bolder;
}
.card-text{
    display:block;
    font-size:70%;
    padding-left:0.2em;
}
</style>
@section('dashContent')
<heading><h2>DashBoard</h2></heading>
<div class="container mt-2">
    <h4>Booking KPI</h4><hr>
    <div id="user-contianer">
        <div class="kpi-card purple">
            <span class="card-value"> {{$data['totalBookings']}}</span>
            <span class="card-text">Total Bookings</span>
        </div>
        <div class="kpi-card grey-dark">
            <span class="card-value"> {{$data['completedBookings']}}</span>
            <span class="card-text">Completed Bookings</span>
        </div>
    </div>
</div>


@endsection
    
