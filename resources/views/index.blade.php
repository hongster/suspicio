@extends('layouts.app')

@section('title', 'Is It Suspicious?')


@section('content')
    <div class="row justify-content-center">
        
        <h3 class="mt-5 mb-4">Check If A Business Is On Watchlist</h3>

        <div class="col-8 text-center mb-4">
            <form method="GET" action="{!! url('/') !!}">
                <input class="form-control form-control-lg mb-2" type="text" name="search" value="{{ $search }}" pattern=".{4,}" required title="4 characters minimum" placeholder="e.g. jjptr" autofocus>
                <button type="submit" class="btn btn-primary form-control-lg">Check Now</button>
            </form>
        </div>

        <div class="col-8">
            @if (empty($search))
                <p class="alert alert-light">
                    Before getting involved in any investment or monetary services, check the business name against Bank 
                    Negara Malaysia and Securites Commission Malaysia's watchlists. This is not an exhaustive list but if
                    you encountered anyone on the list, please report it to the authority immediately. 
                </p>
            @elseif (count($entities) == 0)
                <p class="alert alert-danger">No matching search result.</p>
            @endif

            @foreach ($entities as $entity)
                <div class="mb-4">
                    <h3>{{ $entity->name }}</h3>

                    <dl class="row">
                        <dt class="col-sm-2">Listed By</dt>
                        <dd class="col-sm-10">{{ $entity->suspicioList->source }} ({{ $entity->suspicioList->title }})</dd>

                        <dt class="col-sm-2">Date Listed</dt>
                        <dd class="col-sm-10">{{ $entity->date_listed }}</dd>
                    
                        @if ($entity->address)
                            <dt class="col-sm-2">Address</dt>
                            <dd class="col-sm-10">{{ $entity->address }}</dd>
                        @endif
                    
                        @if ($entity->websites)
                            <dt class="col-sm-2">Website</dt>
                            <dd class="col-sm-10">{{ $entity->websites }}</dd>
                        @endif
                    </dl>
                </div>
            @endforeach
        </div>
    </div>
@endsection