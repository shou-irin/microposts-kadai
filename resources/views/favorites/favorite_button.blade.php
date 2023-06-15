@if (Auth::user()->is_favorite($micropost->id))
    {{-- お気に入り解除ボタンのフォーム --}}
    <form action="{{ route('favorites.unfavorite', $micropost->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-error btn-block normal-case" 
        onclick="return confirm('お気に入りを解除します。よろしいですか？')">お気に入り解除</button>
        </form>
@else
    {{-- お気に入りボタンのフォーム --}}
    <form action="{{ route('favorites.favorite', $micropost->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary btn-block normal-case">お気に入り</button>
    </form>
@endif
