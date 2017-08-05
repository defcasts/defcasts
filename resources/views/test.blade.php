<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bulma Sandbox</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<div class="container">
		{{-- Headings --}}
		<div class="block">
			<h1 class="title">Hello World</h1>
			<h2 class="subtitle">Hello World</h2>
			{{-- Sizes --}}
			<h1 class="title is-1">Hello World</h1>
			<h2 class="title is-2">Hello World</h2>
			<h3 class="title is-3">Hello World</h3>
			<h4 class="title is-4">Hello World</h4>
			<h5 class="title is-5">Hello World</h5>
			<h5 class="title is-6">Hello World</h5>
		</div>

		{{-- CONTENT --}}
		<div class="block">
			<p class="content is-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, est.</p>
			<p class="content is-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, est.</p>
			<p class="content is-large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, est.</p>
		</div>

		{{-- BUTTONS --}}
		<div class="block">
			<button class="button">Button</button>
			<button class="button is-white">Button</button>
			<button class="button is-light">Button</button>
			<button class="button is-dark">Button</button>
			<button class="button is-black">Button</button>
			<button class="button is-link">Button</button>
		</div>
		<div class="block">
			<a href="" class="button is-primary">Primary</a>
			<a href="" class="button is-info">Info</a>
			<a href="" class="button is-success">Success</a>
			<a href="" class="button is-warning">Warning</a>
			<a href="" class="button is-danger">Danger</a>
		</div>
		<div class="block">
			<a href="" class="button is-primary is-small">Primary  Small</a>
			<a href="" class="button is-info is-medium">Info Medium</a>
			<a href="" class="button is-success is-large">Success Large</a>
		</div>
		<div class="block">
			<a href="" class="button is-primary is-outlined">Primary</a>
			<a href="" class="button is-info is-outlined">Info</a>
			<a href="" class="button is-success is-outlined">Success</a>
			<a href="" class="button is-warning is-outlined">Warning</a>
			<a href="" class="button is-danger is-outlined">Danger</a>
		</div>
		<div class="block">
			<a href="" class="button is-primary is-inverted">Primary</a>
			<a href="" class="button is-info is-inverted">Info</a>
			<a href="" class="button is-success is-inverted">Success</a>
			<a href="" class="button is-warning is-inverted">Warning</a>
			<a href="" class="button is-danger is-inverted">Danger</a>
		</div>
		<div class="block">
			<a href="" class="button is-hovered">Hovered</a>
			<a href="" class="button is-focused">Focused</a>
			<a href="" class="button is-active">Active</a>
			<a href="" class="button is-loading">Loading</a>
			<a href="" class="button" disabled>Disabled</a>
		</div>
	</div>

	{{-- BOX --}}
	<div class="block">
		<div class="box">
			<h1 class="title">Hello World</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, fugiat!</p>
		</div>
	</div>

	{{-- NOTIFICATIONS --}}
	<div class="block">
		<div class="notification">
			<button class="delete"></button>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, dolorem!
		</div>
		<div class="notification is-primary">
			<button class="delete"></button>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, dolorem!
		</div>
		<div class="notification is-info">
			<button class="delete"></button>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, dolorem!
		</div>
		<div class="notification is-success">
			<button class="delete"></button>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, dolorem!
		</div>
		<div class="notification is-warning">
			<button class="delete"></button>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, dolorem!
		</div>
		<div class="notification is-danger">
			<button class="delete"></button>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, dolorem!
		</div>
	</div>

	{{-- TAGS --}}
	<div class="block">
		<span class="ta">Hello</span>
		<span class="tag is-black">Black</span>
		<span class="tag is-info">Info</span>
		<span class="tag is-primary">Primary</span>
		<span class="tag is-warning">Warning</span>
		<span class="tag is-danger is-pulled-right">Danger <button class="delete is-small"></button></span>
	</div>

	<div id="test" style="height: 400px; position: relative; " class="is-fullwidth">
		<div class="is-overlay" style="background: gray;"></div>
	</div>

	<div class="container">
	 	<div class="field">
	 		<p class="control has-icons-left has-icons-right">
	 			<input type="text" class="input">
	 			<span class="icon is-small is-left">
	 				<i class="fa fa-envelope"></i>
	 			</span>
	 			<span class="icon is-small is-right">
	 				<i class="fa fa-check"></i>
	 			</span>
	 		</p>
	 		</p>
	 	</div>
	</div>

	<div style="margin-top: 500px;"></div>

</body> 
</html>