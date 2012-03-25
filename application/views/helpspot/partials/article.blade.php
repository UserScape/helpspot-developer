@layout(Config::get('kudos.theme').'.layout')


@section('content')

	@if (isset($draft) and $draft)
		<div class="draft">
		This article is a <strong>draft</strong>. Do not link to this URL.
		</div>
	@endif

	<article class="article">

		<h2>{{ $title }}</h2>

		<p class="meta">by: {{ $author }}</p>

		{{ $body }}

		@if (Config::get('kudos.disqus_shortname'))
			{{View::make('partials.disqus')}}
		@endif
	</article>

@endsection