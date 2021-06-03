@extends('layouts.main-layout')

@section('content')
    <main>
        
        <ul>
            <li>
                <h3>
                    Cars list:
                </h3>
            </li>
            @foreach ($cars as $car)
                <li>
                    <div>
                        {{'Name: ' . $car -> name}} <br>
                        {{'Model: ' . $car -> model}} <br>
                        {{'KW: ' . $car -> kw}} <br>
                        <h4>Pilots</h4>
                        @foreach ($car -> pilots as $pilot)
                            <a href="">
                               {{$pilot -> firstname . ' ' .$pilot -> lastname}} 
                            </a> 
                            <br>
                        @endforeach
                    </div>
                    <a href="{{route('carDetailsLink', $car -> id)}}"><i class="fas fa-car"></i></a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection