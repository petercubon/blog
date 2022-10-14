<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Comments\Grid\Item/default.latte */
final class Templatec3b43809f0 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['flashes' => 'blockFlashes', 'comments' => 'blockComments'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '
<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('flashes'));
		echo '">';
		$this->renderBlock('flashes', [], null, 'snippet') /* line 2 */;
		echo '</div>

<div class="row border-start border-secondary border-5 mb-5" style="text-align: justify"';
		echo ' id="' . htmlspecialchars($this->global->snippetDriver->getHtmlId('comments')) . '"';
		echo '>
';
		$this->renderBlock('comments', [], null, 'snippet');
		echo '</div>


';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '3'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {snippet flashes} on line 2 */
	public function blockFlashes(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("flashes", 'static');
		try {
			$iterations = 0;
			foreach ($flashes as $flash) /* line 3 */ {
				echo '    <div class="alert alert-danger" role="alert">
        ';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 4 */;
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


	/** {snippet comments} on line 8 */
	public function blockComments(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("comments", 'static');
		try {
			echo '    <div class="col">
        <p class="fw-bold">
            <i class="bi bi-chat-right-text me-2"></i>';
			echo LR\Filters::escapeHtmlText($item->name) /* line 11 */;
			echo '
        </p>
    </div>
    <div class="col text-end fw-bold text-secondary">
        <small>
            <i class="bi bi-envelope-open me-1"></i>';
			echo LR\Filters::escapeHtmlText($item->email) /* line 16 */;
			echo '
        </small>
        <small>
            <i class="bi bi-clock ms-2 me-1"></i> ';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($item->created_at, 'd.m.Y, H:i')) /* line 19 */;
			echo '
        </small>
        <small>
        <!-- Button trigger modal -->
        <button class="btn btn-sm btn-outline-danger border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash"></i> zmazať komentár
        </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-start">
                            Natrvalo zmazať komentár?
                        </div>
                        <div class="modal-footer">
';
			if ($user->isAllowed($item, 'delete')) /* line 34 */ {
				echo '                            <a class="nav-link text-danger ajax" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete!")) /* line 34 */;
				echo '">
                                <i class="bi bi-trash text-danger"></i> zmazať komentár
                            </a>
';
			}
			echo '                        </div>
                    </div>
                </div>
            </div>
        </small>
    </div>
    <div class="row">
        <div class="col">
            ';
			echo LR\Filters::escapeHtmlText($item->content) /* line 45 */;
			echo '
        </div>
    </div>
';
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
