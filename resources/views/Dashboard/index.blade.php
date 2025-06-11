@extends('layout.main')
@section('content')
<marquee class="text-marqee" direction="left" scrollamount="15"> 
          <h2 class="big-title">PT BINTANG SURYASINDO</h2>
        </marquee>
<table>
    <tr>
        <th class="p-2">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/aqua_1500_ml.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aqua 1500ml</h5>
                    <br>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </th>
        <th class="p-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/aqua_cup_200ml.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aqua Cup</h5>
                    <br>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </th>
        <th class="p-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/aqua_600ml.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aqua 600ml</h5>
                    <br>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </th>
        <th class="p-2">    
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/aqua_220ml.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aqua 220ml</h5>
                    <br>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </th>
    </tr>
</table>
@endsection

