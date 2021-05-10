<div class="card" id="post-card">
    <header class="card-header has-background-info-dark">
        <a href="{{ route('posts.index', [$post->id]) }}">
            <p class="card-header-title has-text-white">
                {{ $post->title }}
            </p>
        </a>
        <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
        </a>
    </header>
    <div class="card-content">

    <div class="content">
        <p>{!! nl2br(e($post->content)) !!}</p>
        <small><b>Pubblicato:</b> {{ $post->created_at->diffForHumans() }} <b>dall'utente </b> {{\App\Models\User::where('id', '=', $post->user_id)->first()->email}}</small>
    </div>
    </div>
    <footer class="card-footer">
    <form class="card-footer-item" method="post" action="{{ route('posts.destroy', [$post->id]) }}">
        @csrf @method('delete')
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-small is-fullwidth is-outlined is-danger">
                    Cancella il post
                </button>
            </div>
        </div>
    </form>
    </footer>
</div>

