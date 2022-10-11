<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\FrontModule\Presenters/templates/Post/show.latte */
final class Templatedada01ede1 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
    <div class="container-xxl post-container my-4 py-4">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="card border border-secondary border-0 rounded-0">
                    <img src="http://localhost/nette/nette-bw/www/img/02.jpg" class="card-img-top rounded-0" alt="image with a caravan">
';
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("postDetailControl");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '                    <!-- Pridanie noveho komentaru -->
                    <div class="row p-3">
                        <div class="col-12 mb-3 py-3 border-bottom border-secondary">
';
		if ($user->isAllowed('comment', 'add')) /* line 12 */ {
			/* line 13 */ $_tmp = $this->global->uiControl->getComponent("addNewCommentForm");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		else /* line 14 */ {
			echo '                                <div class="alert alert-primary d-flex align-items-center rounded-0" role="alert">
                                    <i class="bi bi-info-circle me-2"></i>
                                    <div>
                                        Pre pridanie komentaru je potrebne sa
                                        <a class="d-inline nav-link text-primary fw-bold" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:")) /* line 19 */;
			echo '">
                                            <i class="bi bi-box-arrow-in-right"></i> prihlasit
                                        </a>
                                    </div>
                                </div>
';
		}
		echo '                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="h4 pb-2 border-bottom border-secondary">
                            Komentáre k článku
                        </div>
';
		if ($user->isAllowed('commentGrid', 'view')) /* line 32 */ {
			/* line 33 */ $_tmp = $this->global->uiControl->getComponent("commentsGrid");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		echo '                    </div>
                </div>
            </div>
            <!-- Dalsie clanky -->
             <div class="col-12 col-md-5">
';
		if (($user->isAllowed('otherPosts', 'view'))) /* line 40 */ {
			/* line 41 */ $_tmp = $this->global->uiControl->getComponent("otherPosts");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		echo '             </div>
        </div>
    </div>

';
	}

}
