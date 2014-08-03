@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <h1>{{ $user->username }}</h1>
            @include('layouts.partials.avatar', ['size' => 100])

            @include('users.partials.follow-form')
        </div>

        <div class="col-md-6">
            @if($user->isCurrent($currentUser))
                @include('statuses.partials.publish-status-form')
            @endif

            @include('statuses.partials.statuses', ['statuses' => $user->statuses])
        </div>
    </div>
@stop
