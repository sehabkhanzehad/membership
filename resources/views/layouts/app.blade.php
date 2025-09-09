<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@yield('title', 'Dashboard')</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<style>
		.transition-transform {
			transition: transform .2s ease, opacity .2s ease;
		}
	</style>
	@stack('head')
</head>
<body class="bg-gray-50">
	<div class="min-h-screen flex">
		@include('components.sidebar')
		<div class="flex-1 lg:pl-72">
			@include('components.topbar')
			<main class="px-4 py-6">
				@yield('content')
			</main>
			{{-- @include('components.footer') --}}
		</div>
	</div>
	@include('components.scripts')
	@stack('scripts')
</body>
</html>
