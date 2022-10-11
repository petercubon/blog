<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Post\Grid\Item/default.latte */
final class Templateaaab6f2d8a extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '
<div class="card h-100 border-0 mb-3">
    <div class="card-body border-bottom rounded-0 border-info">
            <p class="fw-bold">
';
		if ($ʟ_if[3] = ($user->isAllowed('post', 'view'))) /* line 5 */ {
			echo '                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Post:show", [$post->id])) /* line 5 */;
			echo '" class="nav-link">
';
		}
		echo '                    ';
		echo LR\Filters::escapeHtmlText($post->title) /* line 6 */;
		echo "\n";
		if ($ʟ_if[3]) /* line 5 */ {
			echo '                </a>
';
		}
		echo '            </p>
        <p class="mt-3">
            ';
		echo LR\Filters::escapeHtmlText(($this->filters->truncate)($post->content, 150)) /* line 10 */;
		echo '
        </p>
        <p>
            <i class="bi bi-person-circle"></i> ';
		echo LR\Filters::escapeHtmlText($post->ref('author_id')->name) /* line 13 */;
		echo ' ';
		echo LR\Filters::escapeHtmlText($post->ref('author_id')->surname) /* line 13 */;
		echo '
        </p>
';
		if ($user->isAllowed('post', 'view')) /* line 15 */ {
			echo '        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Post:show", [$post->id])) /* line 15 */;
			echo '" class="btn btn-outline-primary border-0 btn-sm fw-bold">
            <i class="bi bi-blockquote-left"></i>
            zobrazit clanok
        </a>
';
		}
		echo '    </div>
</div>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
