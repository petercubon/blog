<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\User\Profile\Comment\item/default.latte */
final class Templatebb5b0ee999 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '
<p>
    Článok:
    <span class="fw-bold d-inline">
        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Post:show", [$myComment->post_id])) /* line 5 */;
		echo '" class="nav-link d-inline text-primary">
            ';
		echo LR\Filters::escapeHtmlText($myComment->ref('post_id')->title) /* line 6 */;
		echo '
        </a>
    </span>
</p>
<small class="ms-3">
    <span class="fw-bold">môj komentár:</span> ';
		echo LR\Filters::escapeHtmlText($myComment->content) /* line 11 */;
		echo '
</small>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
