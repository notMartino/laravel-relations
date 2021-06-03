@extends('layouts.main-layout')

@section('content')
    <main>

        <ul>
            <li class="lidetail">
                <h3>
                    Pilot Details:
                </h3>
            </li>
            <li class="lidetail">
                <div>
                    {{$pilot -> firstname . ' ' .$pilot ->lastname}}
                </div>
            </li>
            <li class="lidetail">
                <h3>
                    Cars:
                </h3>
            </li>
            <li class="lidetail">
                @foreach ($pilot -> cars as $car)
                    <div class="lefted">
                        Name: {{$car -> name}} <br>
                        Model: {{$car -> model}} <br>
                        Kw: {{$car -> kw}} <br>
                    </div>
                @endforeach
            </li>
        </ul>
    </main>
@endsection