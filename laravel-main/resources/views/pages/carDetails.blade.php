@extends('layouts.main-layout')

@section('content')
    <main>

        <ul>
            <li class="lidetail">
                <h3>
                    Car Details:
                </h3>
            </li>
            <li class="lidetail">
                <div>
                    {{'Name: ' . $car -> name}} <br>
                    {{'Model: ' . $car -> model}} <br>
                    {{'KW: ' . $car -> kw}}    
                </div>
            </li>
            <li class="lidetail">
                <h3>
                    Pilot Details:
                </h3>
            </li>
            <li class="lidetail">
                @foreach ($car -> pilots as $pilot)
                    <div class="lefted">
                            {{'Firstname: ' . $pilot -> firstname}} <br>
                            {{'Lastname: ' . $pilot -> lastname}} <br>
                            {{'Nationality: ' . $pilot -> nationality}} <br>
                            {{'Birth date: ' . $pilot -> date_of_birth}} <br>
                    </div>
                @endforeach
            </li>
            <li class="lidetail">
                <h3>
                    Brand Details:
                </h3>
            </li>
            <li class="lidetail">
                <div class="">
                        {{'Name: ' . $car -> brand -> name}} <br>
                        {{'Nationality: ' . $car -> brand -> nationality}} <br>
                </div>
            </li>
        </ul>
    </main>
@endsection