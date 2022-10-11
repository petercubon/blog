<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\FrontModule\Presenters/templates/User/default.latte */
final class Templatebf4bbe55de extends Latte\Runtime\Template
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
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-2 text-center">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 6 */;
		echo '/img/avatar.svg" class="img-fluid">
            ';
		echo LR\Filters::escapeHtmlText($user->identity->name) /* line 7 */;
		echo ' ';
		echo LR\Filters::escapeHtmlText($user->identity->surname) /* line 7 */;
		echo "\n";
		if ($status == 0) /* line 8 */ {
			/* line 9 */ $_tmp = $this->global->uiControl->getComponent("emailVerificationForm");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		echo '        </div>
';
		/* line 12 */ $_tmp = $this->global->uiControl->getComponent("userComment");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '    </div>
</div>

';
	}

}
