@extends('layouts.app')


@section('content')
    <div class="container ">
        <h1>I LOVE TRAINS</h1>

    </div>

    <section>
        <div class="container text-black">
            <div class="row row-cols-5 g-4">
                @forelse ($trains as $train)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>{{ $train->Azienda }}</h4>
                                <ul class="list-group list-un">
                                    <li class="list-group-item active">Active item</li>
                                    <li class="list-group-item">Item</li>
                                    <li class="list-group-item disabled">Disabled item</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col">
                        <p>Torna piu tardin non ci sono treni</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
