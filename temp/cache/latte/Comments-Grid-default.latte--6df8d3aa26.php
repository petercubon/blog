<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Comments\Grid/default.latte */
final class Template6df8d3aa26 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['flashes' => 'blockFlashes', 'comments' => 'blockComments'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('flashes'));
		echo '">';
		$this->renderBlock('flashes', [], null, 'snippet') /* line 1 */;
		echo '</div>

<div data-ajax-prepend="true" class="col-12 border-bottom border-secondary mb-3 py-3"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('comments')) . '"';
		echo '>
';
		$this->renderBlock('comments', [], null, 'snippet');
		echo '</div>

<section id="postCommentPaginator">
    <div class="container ps-0 pt-3">
        <a class="nav-link text-primary ajax" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("loadMore!")) /* line 18 */;
		echo '">
            <i class="bi bi-chat-right-dots"></i> Nacitat dalsie komentare
        </a>
    </div>
</section>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '2', 'comment' => '10'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {snippet flashes} on line 1 */
	public function blockFlashes(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("flashes", 'static');
		try {
			$iterations = 0;
			foreach ($flashes as $flash) /* line 2 */ {
				echo '    <div class="alert alert-warning alert-dismissible fade show m-3" role="alert">
        <strong> ';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 3 */;
				echo ' </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
';
				$iterations++;
			}
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}


	/** {snippet comments} on line 8 */
	public function blockComments(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("comments", 'static');
		try {
			$iterations = 0;
			foreach ($comments as $comment) /* line 10 */ {
				/* line 11 */ $_tmp = $this->global->uiControl->getComponent("postCommentGridItemMultiple-$comment->id");
				if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
				$_tmp->render();
				$iterations++;
			}
			echo "\n";
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
