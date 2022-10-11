<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Post\Other\Grid/default.latte */
final class Template17112c62dc extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['post' => '4'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
    <div class="row"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('OtherPost')) . '"';
		echo '>
';
		$this->renderBlock('OtherPost', [], null, 'snippet');
		echo '    </div>

';
	}


	/** {snippet OtherPost} on line 3 */
	public function blockOtherPost(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("OtherPost", 'static');
		try {
			$iterations = 0;
			foreach ($getOtherPosts as $post) /* line 4 */ {
				echo '        <div class="col-12 my-3">

';
				/* line 6 */ $_tmp = $this->global->uiControl->getComponent("item-$post->id");
				if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
				$_tmp->render();
				echo '
        </div>
';
				$iterations++;
			}
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
