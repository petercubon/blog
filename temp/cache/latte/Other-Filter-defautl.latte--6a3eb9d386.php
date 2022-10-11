<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Post\Other\Filter/defautl.latte */
final class Template6a3eb9d386 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['OtherPost' => 'blockOtherPost'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '
<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('OtherPost'));
		echo '">';
		$this->renderBlock('OtherPost', [], null, 'snippet') /* line 2 */;
		echo '</div>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {snippet OtherPost} on line 2 */
	public function blockOtherPost(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("OtherPost", 'static');
		try {
			echo "\n";
			$form = $this->global->formsStack[] = $this->global->uiControl["form"] /* line 4 */;
			echo '    <form class="ajax"';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), ['class' => null], false);
			echo '>
        <div class="col-3">
            <label for="exampleInputEmail1" class="form-label">Kategória</label>
            <select class="form-select" aria-label="Default select example"';
			$ʟ_input = $_input = end($this->global->formsStack)["category"];
			echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'aria-label' => null])->attributes() /* line 7 */;
			echo '>
';
			echo $ʟ_input->getControl()->getHtml() /* line 7 */;
			echo '            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-success mt-3">
            <i class="bi bi-search"></i> Zobraziť
        </button>
';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 4 */;
			echo '    </form>

';
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
