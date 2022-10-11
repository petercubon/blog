<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\AdminModule\Presenters/templates/@layout.latte */
final class Template1d47ccdff1 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!doctype html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 13 */;
		echo '/css/dark-mode.css">

    </head>

    <body class="admin-bg">

        <section id="flashMessage">
';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 20 */ {
			echo '            <div class="alert alert-danger alert-dismissible fade show rounded-0 mb-3" role="alert">
                <strong>
                    <i class="bi bi-exclamation-triangle me-1"></i> ';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 22 */;
			echo '
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
';
			$iterations++;
		}
		echo '        </section>

        <section id="adminNavbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 31 */;
		echo '">
                    <i class="bi bi-journal"></i> Administračné rozhranie
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-link form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="darkMode">
                            <label for="darkMode" class="form-check-label">
                                <i class="bi bi-lightbulb-off"></i>
                            </label>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 48 */;
		echo '">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Clanky
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Post:add")) /* line 57 */;
		echo '">
                                        <i class="bi bi-plus-circle"></i> Pridat novy
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Post:other")) /* line 65 */;
		echo '"> Ostatné články </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 71 */;
		echo '" class="nav-link">
                                Front Module
                            </a>
                        </li>

                        <li class="nav-item">
';
		if ($user->isAllowed('front', 'logout')) /* line 77 */ {
			echo '                                <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) /* line 78 */;
			echo '">
                                    <i class="bi bi-box-arrow-right"></i> Odhlasit
                                </a>
';
		}
		echo '                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>

        <section id="content">
        <div class="container p-3" style="min-height: 90vh;">
';
		$this->renderBlock('content', [], 'html') /* line 92 */;
		echo '        </div>
    </section>

        <section id="adminFooter">
            <div class="container-fluid mt-5 bg-primary">
                <div class="row text-center py-5">
                    <div class="col">
                        <a href="#" class="nav-link">
                            Link
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="nav-link">
                            Link
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="nav-link">
                            Link
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 120 */;
		echo '/js/darkMode.js"></script>

    </body>

</html>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '20'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
