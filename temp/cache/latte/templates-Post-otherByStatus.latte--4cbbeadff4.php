<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\AdminModule\Presenters/templates/Post/otherByStatus.latte */
final class Template4cbbeadff4 extends Latte\Runtime\Template
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
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['post' => '14'], $this->params) as $ʟ_v => $ʟ_l) {
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
    <p class="fw-bold">
        Články od ostatných používateľov
    </p>
';
		/* line 6 */ $_tmp = $this->global->uiControl->getComponent("filterPostForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo '    <hr>
    <p class="fw-bold">
        Články zoradené podľa statusu
    </p>
    <div class="row">
        <div class="col-12 mb-3" >
            <ul class="list-group list-group-flush">
';
		$iterations = 0;
		foreach ($posts as $post) /* line 14 */ {
			echo '                <li class="list-group-item my-1">
                   <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Post:show", [$post->id])) /* line 15 */;
			echo '" class="nav-link d-inline">
                       ';
			echo LR\Filters::escapeHtmlText($post->title) /* line 16 */;
			echo '
                   </a>
                    <span class="badge text-bg-light border border-success float-center d-inline">
                        ';
			echo LR\Filters::escapeHtmlText(match($post->status){
				0 => 'návrh',
				1 => 'rozpracovaný',
				2 => 'uverejnený',}) /* line 19 */;
			echo '
                    </span>
                    <span class="float-end">
                        ';
			echo LR\Filters::escapeHtmlText($post->created_at) /* line 25 */;
			echo '
                    </span>
                </li>
';
			$iterations++;
		}
		echo '            </ul>
        </div>
    </div>

';
	}

}
