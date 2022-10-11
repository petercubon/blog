<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Post\Grid/default.latte */
final class Template5ef8e7b0b4 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$iterations = 0;
		foreach ($posts as $post) /* line 1 */ {
			echo '<div>

';
			/* line 3 */ $_tmp = $this->global->uiControl->getComponent("postGridItemMultiple-$post->id");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
			echo '
</div>
';
			$iterations++;
		}
		echo '
<div class="container-fluid pt-3">
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm justify-content-center">

            <li class="page-item">
                <a
                        class="page-link"
                        aria-label="Previous" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("page!", [1])) /* line 14 */;
		echo '">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

';
		for ($i = max(1, $page - 3);
		$i <= min($numOfPages, $page + 3);
		$i++) /* line 22 */ {
			echo '            <li';
			echo ($ʟ_tmp = array_filter(['page-item', $page == $i ? 'active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 22 */;
			echo '>
                <a class="page-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("page!", [$i])) /* line 24 */;
			echo '">
                    ';
			echo LR\Filters::escapeHtmlText($i) /* line 25 */;
			echo '
                </a>
            </li>
';
		}
		echo '
            <li class="page-item">
                <a class="page-link" aria-label="Next" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("page!", [$numOfPages])) /* line 32 */;
		echo '">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>

        </ul>
    </nav>
</div>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['post' => '1'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
