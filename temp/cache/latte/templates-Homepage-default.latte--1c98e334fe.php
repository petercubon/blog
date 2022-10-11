<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\AdminModule\Presenters/templates/Homepage/default.latte */
final class Template1c98e334fe extends Latte\Runtime\Template
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
    <div class="container-xxl rounded p-1">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card text-center">
                   <div class="text-center pt-3">
                       <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 8 */;
		echo '/img/avatar.webp" class="w-75" alt="profile image">
                   </div>
                    <div class="card-body">
                        <h4 class="fw-light">
                            ';
		echo LR\Filters::escapeHtmlText($user->getIdentity()->name) /* line 12 */;
		echo ' ';
		echo LR\Filters::escapeHtmlText($user->getIdentity()->surname) /* line 12 */;
		echo '
                        </h4>
                        <p>
                             ';
		echo LR\Filters::escapeHtmlText($user->getIdentity()->email) /* line 15 */;
		echo '
                        </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body text-start">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a class="nav-link d-inline" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Post:OtherByStatus", [2])) /* line 24 */;
		echo '">
                                    Uverejnené články
                                </a>
                                <span class="badge text-bg-success d-inline  float-end">
                                    ';
		echo LR\Filters::escapeHtmlText($numOfPublicPosts) /* line 28 */;
		echo '
                                </span>
                            </li>
                            <li class="list-group-item">
                                <a class="nav-link d-inline" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Post:OtherByStatus", [1])) /* line 32 */;
		echo '">
                                    Rozpracované články
                                </a>
                                <span class="badge text-bg-warning d-inline float-end">
                                    ';
		echo LR\Filters::escapeHtmlText($numOfConceptPosts) /* line 36 */;
		echo '
                                </span>
                            </li>
                            <li class="list-group-item">
                                <a class="nav-link d-inline" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Post:OtherByStatus", [0])) /* line 40 */;
		echo '">
                                    Návrhy na článok
                                </a>
                                <span class="badge text-bg-danger d-inline  float-end">
                                    ';
		echo LR\Filters::escapeHtmlText($numOfIdeaPosts) /* line 44 */;
		echo '
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-9">
                <p class="fw-bold">
                    Moje články
                </p>
';
		/* line 56 */ $_tmp = $this->global->uiControl->getComponent("postGrid");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '            </div>
        </div>
    </div>

';
	}

}
