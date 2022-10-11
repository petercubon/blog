<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\FrontModule\Presenters/templates/@layout.latte */
final class Template51955f35f9 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>';
		if ($this->hasBlock("title")) /* line 7 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striphtml', $ʟ_fi, $s));
			}) /* line 7 */;
			echo ' | ';
		}
		echo 'Nette Web</title>

	<!-- Customize Post style -->
	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 10 */;
		echo '/css/style.css" rel="stylesheet">
	<link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 11 */;
		echo '/css/post.css" rel="stylesheet">

	<!-- Bootstrap 5.2 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 23 */ {
			echo '	<div class="alert alert-warning alert-dismissible fade show m-3" role="alert">
		<strong> ';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 24 */;
			echo ' </strong>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
';
			$iterations++;
		}
		echo '
	<section id="navbar">
		<div class="container-xxl">
			<nav class="navbar navbar-expand-lg navbar-light border-bottom">
				<p class="logo-title">
					<!-- <a class="navbar-brand" n:href="Homepage:default"> -->
					<a class="text-decoration-none text-dark" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 33 */;
		echo '">
						Blog
					</a>
				</p>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">

						<a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Device:default")) /* line 45 */;
		echo '">
							<i class="bi bi-app text-primary"></i> Spotreniče
						</a>

						<a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 49 */;
		echo '">
							<i class="bi bi-journal-text text-warning"></i> Blog
						</a>

';
		if ($user->isAllowed('post', 'add')) /* line 53 */ {
			echo '						<a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Post:add")) /* line 53 */;
			echo '">
							<i class="bi bi-plus-circle me-1 text-success"></i> Pridať nový článok
						</a>
';
		}
		echo "\n";
		if ($user->isAllowed('front', 'logout')) /* line 57 */ {
			echo '							<a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) /* line 58 */;
			echo '">
								<i class="bi bi-box-arrow-right me-1 text-danger"></i> Odhlasit
							</a>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-person"></i>';
			echo LR\Filters::escapeHtmlText($user->identity->name) /* line 63 */;
			echo ' ';
			echo LR\Filters::escapeHtmlText($user->identity->surname) /* line 63 */;
			echo '
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:default")) /* line 66 */;
			echo '">Môj profil</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
';
		}
		else /* line 71 */ {
			echo '							<a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Register:default")) /* line 72 */;
			echo '">
								<i class="bi bi-person-plus text-info"></i> Registrácia
							</a>
							<a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:default")) /* line 75 */;
			echo '">
								<i class="bi bi-box-arrow-in-right text-success"></i> Prihlasit
							</a>
';
		}
		echo '






';
		if ($user->isAllowed('admin', 'view')) /* line 86 */ {
			echo '						<a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 86 */;
			echo '/admin/" class="nav-link">
							Admin panel
						</a>
';
		}
		echo '
					</div>
				</div>
			</div>
		</nav>
	</section>
';
		$this->renderBlock('content', [], 'html') /* line 104 */;
		echo '
	<section id="footer">
		<div class="container-fluid mt-4 py-4 bg-primary bg-opacity-50 position-relative bottom-0 end-0">
			<div class="row">
				<div class="col">
					<i class="bi bi-laptop"></i> Footer of this example page
				</div>
			</div>
		</div>
	</section>

';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('scripts', get_defined_vars()) /* line 116 */;
		echo '
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '23'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block scripts} on line 116 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '		<script
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
				integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
				crossorigin="anonymous"
				referrerpolicy="no-referrer">
		</script>

		<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>

		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

		<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 130 */;
		echo '/js/plugins/ajax/nette.ajax.js"></script>
		<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 131 */;
		echo '/js/main.js"></script>
';
	}

}
