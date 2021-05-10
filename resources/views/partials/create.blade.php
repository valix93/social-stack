<div class="card">
    <header class="card-header has-background-info-dark">
        <p class="card-header-title has-text-white">
            A cosa stai pensando?
        </p>
        <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
        </a>
    </header>
    <div class="card-content">
        <div class="content">
            <form method="post" action="{{ route('posts.store') }}">

                @csrf
                @include('partials.errors')

                <div class="field">
                    <label class="label">Titolo</label>
                    <div class="control">
                        <input type="text" name="title" value="{{ old('title') }}" class="input" placeholder="Titolo" minlength="5" maxlength="100" required />
                        <input type="hidden" name="user_id" value="1"/>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Descrizione</label>
                    <div class="control">
                        <textarea name="content" class="textarea" placeholder="Aggiungi una descrizione...">{{ old('content') }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link is-outlined is-fullwidth">Pubblica</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
