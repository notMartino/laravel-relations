@extends('layouts.main-layout')

@section('content')
    <main>

        <ul>
            <li class="lidetail">
                <h3>
                    Create car:
                </h3>
            </li>
            <li class="lidetail">
                <form method="POST" action="{{route('storeCarLink')}}">
                    @method('POST')
                    @csrf

                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="model" placeholder="Model" required>
                    <input type="number" name="kw" placeholder="Kw" required>
                    <select name="brand_id">
                        <option value="" selected disabled>Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{$brand -> id}}">{{$brand -> name}}</option>
                        @endforeach
                    </select>
                    <ul class="pilots">
                        @foreach ($pilots as $pilot)
                            <li>
                                <label for="pilot_id[]">{{$pilot -> firstname . ' ' .$pilot -> lastname}}</label>
                                <input type="checkbox" name="pilot_id[]" value="{{$pilot -> id}}">
                            </li>
                        @endforeach
                    </ul>


                    <button type="submit">Create</button>
                </form>
            </li>
        </ul>
    </main>
@endsection