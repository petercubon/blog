<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\FrontModule\Presenters/templates/Homepage/default.latte */
final class Template6290a8fa9c extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		0 => ['content' => 'blockContent'],
		'snippet' => ['form' => 'blockForm'],
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
<section id="main_content">
    <div class="container">

        <div class="row my-3 g-3"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('form')) . '"';
		echo '>
';
		$this->renderBlock('form', [], null, 'snippet');
		echo '        </div>
    </div>
</section>

';
	}


	/** {snippet form} on line 6 */
	public function blockForm(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("form", 'static');
		try {
			if ($user->isAllowed('postGrid', 'view')) /* line 8 */ {
				/* line 9 */ $_tmp = $this->global->uiControl->getComponent("postGrid");
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
