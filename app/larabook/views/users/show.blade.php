@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="media">
                <div class="pull-left">
                    @include('users.partials.avatar', ['size' => 65])
                </div>

                <div class="media-body">
                    <h1 class="media-heading">{{ $user->username }}</h1>
                    <p class="text-muted">{{ $statusCount = $user->statuses->count() }} {{ str_plural('Status', $statusCount) }}</p>

                    @unless($user->isCurrent($currentUser))
                        @include('users.partials.follow-form')
                    @endunless
                </div>
            </div>
        </div>

        <div class="col-md-6">
            @if($user->isCurrent($currentUser))
                @include('statuses.partials.publish-status-form')
            @endif

            @include('statuses.partials.statuses', ['statuses' => $user->statuses])
        </div>
    </div>
@stop
