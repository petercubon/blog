<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Post\Manipulate/default.latte */
final class Template9cf3c7a3bb extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$form = $this->global->formsStack[] = $this->global->uiControl["postForm"] /* line 7 */;
		echo '<form class="ajax"';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), ['class' => null], false);
		echo '>

    <div class="mb-3">
        <label for="title" class="form-label">Názov článku</label>
        <input type="text" class="form-control" id="title" aria-describedby="title" required';
		$ʟ_input = $_input = end($this->global->formsStack)["title"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'aria-describedby' => null, 'required' => null])->attributes() /* line 11 */;
		echo '>
    </div>

    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 250px" required';
		$ʟ_input = $_input = end($this->global->formsStack)["content"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'placeholder' => null, 'id' => null, 'style' => null, 'required' => null])->attributes() /* line 15 */;
		echo '>';
		echo $ʟ_input->getControl()->getHtml() /* line 15 */;
		echo '</textarea>
        <label for="floatingTextarea2">Text noveho článku</label>
    </div>

    <legend class="small"><span class="fw-bold"> stav článku </span> (návrh / rozpracovaný / na uverejnenie)

    </legend>
    <div class="my-3">
        <select class="form-select" aria-label="Default select example"';
		$ʟ_input = $_input = end($this->global->formsStack)["status"];
		echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'aria-label' => null])->attributes() /* line 28 */;
		echo '>
';
		echo $ʟ_input->getControl()->getHtml() /* line 28 */;
		echo '        </select>
    </div>

    <button type="submit" class="btn btn-primary my-3"';
		$ʟ_input = $_input = end($this->global->formsStack)["send"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null])->attributes() /* line 32 */;
		echo '> Uložiť článok </button>

';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 7 */;
		echo '</form>


';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
