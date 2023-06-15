@extends('layouts.app')

@section('content')
    <div class="sm:grid sm:grid-cols-3 sm:gap-10">
        <aside class="mt-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="sm:col-span-2 mt-4">
            {{-- タブ --}}  
            @include('users.navtabs')
            {{-- お気に入り一覧 --}}
            <div class="mt-4">
                @if (isset($favorites))
                    <ul class="list-unstyled">
                        @foreach ($favorites as $favorite)
                            <li class="flex items-start gap-x-2 mb-4">
                                <div class="avatar">
                                    <div class="w-12 rounded">
                                        <img src="{{ Gravatar::get($favorite->user->email) }}" alt="" />
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a class="link link-hover text-info" href="{{ route('users.show', $favorite->user->id) }}">{{ $favorite->user->name }}</a>
                                        <span class="text-muted text-gray-500">posted at {{ $favorite->created_at }}</span>
                                    </div>
                                    <div>
                                        <p class="mb-0">{!! nl2br(e($favorite->content)) !!}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection