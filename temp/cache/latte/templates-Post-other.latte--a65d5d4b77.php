<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\AdminModule\Presenters/templates/Post/other.latte */
final class Templatea65d5d4b77 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		0 => ['content' => 'blockContent'],
		'snippet' => ['OtherPost' => 'blockOtherPost'],
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
    <div class="row">
        <div class="col">
            <p class="fw-bold">
                Články od ostatných používateľov
            </p>
';
		/* line 8 */ $_tmp = $this->global->uiControl->getComponent("filterPostForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '
            <div>

<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('OtherPost'));
		echo '">';
		$this->renderBlock('OtherPost', [], null, 'snippet') /* line 12 */;
		echo '</div>

            </div>
        </div>
    </div>

';
	}


	/** {snippet OtherPost} on line 12 */
	public function blockOtherPost(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("OtherPost", 'static');
		try {
			echo "\n";
			if (($user->isAllowed('otherPosts', 'view'))) /* line 14 */ {
				/* line 15 */ $_tmp = $this->global->uiControl->getComponent("otherPostGrid");
				if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
				$_tmp->render();
			}
			echo "\n";
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
