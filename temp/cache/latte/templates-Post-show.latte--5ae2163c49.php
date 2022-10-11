<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\AdminModule\Presenters/templates/Post/show.latte */
final class Template5ae2163c49 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		echo "\n";
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
		echo "\n";
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo '    <div class="row">
        <div class="col-12 col-lg-8">
            <p>
                <a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 9 */;
		echo '">
                    <i class="bi bi-arrow-left"></i> na zoznam clankov
                </a>
            </p>
            <hr class="border border-primary opacity-50">
';
		/* line 14 */ $_tmp = $this->global->uiControl->getComponent("postDetailControl");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '            <hr class="border border-primary opacity-50 my-5">
';
		if ($user->isAllowed('comment', 'add')) /* line 16 */ {
			echo '                    <p class="text-primary fw-bold">
                        Pridat novy komentár
                    </p>
';
			/* line 20 */ $_tmp = $this->global->uiControl->getComponent("addNewCommentForm");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		echo '            <hr class="border border-primary opacity-50 my-5">
            <p class="text-primary fw-bold">
                    Komentáre k článku
            </p>
';
		if ($user->isAllowed('commentGrid', 'view')) /* line 26 */ {
			/* line 27 */ $_tmp = $this->global->uiControl->getComponent("commentsGrid");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		echo '        </div>
        <div class="col-12 col-lg-4">
            <!-- Other Posts -->
';
		if (($user->isAllowed('otherPosts', 'view'))) /* line 32 */ {
			/* line 33 */ $_tmp = $this->global->uiControl->getComponent("otherPosts");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		echo '        </div>
    </div>

';
	}


	/** {block title} on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <h5 class="fw-normal text-primary">
        Detail prispevku
    </h5>
';
	}

}
