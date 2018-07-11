<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Low_Dash
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="style-guide-section">
				<h3>Colors</h3>

				<div class="row">
					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-primary">Primary</div>
					</div>

					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-secondary">Secondary</div>
					</div>

					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-success">Success</div>
					</div>

					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-danger">Danger</div>
					</div>

					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-warning">Warning</div>
					</div>

					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-info">Info</div>
					</div>

					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-light">Light</div>
					</div>

					<div class="col-md-4">
						<div class="p-3 mb-3 swatch-dark">Dark</div>
					</div>
				</div>
			</section>

			<section class="style-guide-section">
				<h3>Base nav</h3>

				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="#">Active</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>

				<br><br>

				<h4>Pills</h4>

				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link active" href="#">Active</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
			</section>

			<section class="style-guide-section">
				<h3>Navbar</h3>

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#">Navbar</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav>

				<br><br>

				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">Navbar</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav>
			</section>

			<section class="style-guide-section">
				<h3>Buttons</h3>

				<button type="button" class="btn btn-primary">Primary</button>
				<button type="button" class="btn btn-secondary">Secondary</button>
				<button type="button" class="btn btn-success">Success</button>
				<button type="button" class="btn btn-danger">Danger</button>
				<button type="button" class="btn btn-warning">Warning</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-light">Light</button>
				<button type="button" class="btn btn-dark">Dark</button>

				<button type="button" class="btn btn-link">Link</button>
			</section> <!-- .style-guide-section -->

			<section class="style-guide-section">
				<h3>Button tags</h3>

				<a class="btn btn-primary" href="#" role="button">Link</a>
				<button class="btn btn-primary" type="submit">Button</button>
				<input class="btn btn-primary" type="button" value="Input">
				<input class="btn btn-primary" type="submit" value="Submit">
				<input class="btn btn-primary" type="reset" value="Reset">
			</section> <!-- .style-guide-section -->

			<section class="style-guide-section">
				<h3>Outline buttons</h3>

				<button type="button" class="btn btn-outline-primary">Primary</button>
				<button type="button" class="btn btn-outline-secondary">Secondary</button>
				<button type="button" class="btn btn-outline-success">Success</button>
				<button type="button" class="btn btn-outline-danger">Danger</button>
				<button type="button" class="btn btn-outline-warning">Warning</button>
				<button type="button" class="btn btn-outline-info">Info</button>
				<button type="button" class="btn btn-outline-light">Light</button>
				<button type="button" class="btn btn-outline-dark">Dark</button>
			</section>

			<section class="style-guide-section">
				<h3>Checkbox and radio buttons</h3>

				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-secondary active">
						<input type="checkbox" checked autocomplete="off"> Checkbox 1 (pre-checked)
					</label>
					<label class="btn btn-secondary">
						<input type="checkbox" autocomplete="off"> Checkbox 2
					</label>
					<label class="btn btn-secondary">
						<input type="checkbox" autocomplete="off"> Checkbox 3
					</label>
				</div>

				<br><br>

				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-secondary active">
						<input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
					</label>
				</div>
			</section>

			<section class="style-guide-section">
				<h3>Button group</h3>

				<div class="btn-group" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-secondary">Left</button>
					<button type="button" class="btn btn-secondary">Middle</button>
					<button type="button" class="btn btn-secondary">Right</button>
				</div>
			</section>

			<section class="style-guide-section">
				<h3>Dropdown</h3>

				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown button
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</section>

			<section class="style-guide-section">
				<h3>Alerts</h3>

				<div class="alert alert-primary" role="alert">
				This is a primary alert—check it out!
				</div>
				<div class="alert alert-secondary" role="alert">
				This is a secondary alert—check it out!
				</div>
				<div class="alert alert-success" role="alert">
				This is a success alert—check it out!
				</div>
				<div class="alert alert-danger" role="alert">
				This is a danger alert—check it out!
				</div>
				<div class="alert alert-warning" role="alert">
				This is a warning alert—check it out!
				</div>
				<div class="alert alert-info" role="alert">
				This is a info alert—check it out!
				</div>
				<div class="alert alert-light" role="alert">
				This is a light alert—check it out!
				</div>
				<div class="alert alert-dark" role="alert">
				This is a dark alert—check it out!
				</div>
			</section>

			<section class="style-guide-section">
				<h3>Badges</h3>

				<span class="badge badge-primary">Primary</span>
				<span class="badge badge-secondary">Secondary</span>
				<span class="badge badge-success">Success</span>
				<span class="badge badge-danger">Danger</span>
				<span class="badge badge-warning">Warning</span>
				<span class="badge badge-info">Info</span>
				<span class="badge badge-light">Light</span>
				<span class="badge badge-dark">Dark</span>
			</section>

			<section class="style-guide-section">
				<h3>Breadcrumb</h3>

				<nav class="breadcrumb">
					<a class="breadcrumb-item" href="#">Home</a>
					<a class="breadcrumb-item" href="#">Library</a>
					<a class="breadcrumb-item" href="#">Data</a>
					<span class="breadcrumb-item active">Bootstrap</span>
				</nav>
			</section>

			<section class="style-guide-section">
				<h3>Forms</h3>

				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-check">
						<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
						Check me out
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</section>

			<section class="style-guide-section">
				<h3>Jumbotron</h3>

				<div class="jumbotron">
					<h1 class="display-3">Hello, world!</h1>
					<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<hr class="my-4">
					<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
					<p class="lead">
						<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
					</p>
				</div>
			</section>

			<section class="style-guide-section">
				<h3>Modal</h3>

				<div class="modal" style="display: block !important; position: relative !important;">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Save changes</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						</div>
					</div>
				</div>
			</section>

			<section class="style-guide-section">
				<h3>Pagination</h3>

				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</nav>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
