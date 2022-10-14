<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Post\Detail\OtherPosts/default.latte */
final class Template2f91f045ca extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo "\n";
		$iterations = 0;
		foreach ($otherPosts as $otherPost) /* line 2 */ {
			echo '<div class="card border-0 mb-3 position-relative bg-primary bg-opacity-25 rounded-0">
    <div class="row">
        <div class="col-12 py-2">
            <div class="card-body">
                <p class="fw-bold">
                    <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Post:show", [$otherPost->id])) /* line 7 */;
			echo '" class="nav-link">
                        ';
			echo LR\Filters::escapeHtmlText($otherPost->title) /* line 8 */;
			echo '
                    </a>
                </p>
                <p class="small text-secondary">
                   Autor: ';
			echo LR\Filters::escapeHtmlText($otherPost->ref('author_id')->name) /* line 12 */;
			echo ' ';
			echo LR\Filters::escapeHtmlText($otherPost->ref('author_id')->surname) /* line 12 */;
			echo '
                </p>
                <p class="mt-3 d-inline small text-secondary">
                    <i class="bi bi-calendar-event"></i> ';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($otherPost->created_at, ("d.m.Y, H:i"))) /* line 15 */;
			echo '
                </p>
            </div>
        </div>
    </div>
</div>
';
			$iterations++;
		}
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['otherPost' => '2'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
