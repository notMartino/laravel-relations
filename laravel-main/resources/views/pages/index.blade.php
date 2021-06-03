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
                            <a href="{{route('pilotDetailsLink', $pilot -> id)}}">
                               {{$pilot -> firstname . ' ' .$pilot -> lastname}} <i class="fas fa-external-link-alt"></i>
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