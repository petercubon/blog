<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\User\Register/default.latte */
final class Template14378660be extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo "\n";
		$form = $this->global->formsStack[] = $this->global->uiControl["form"] /* line 4 */;
		echo '<form class="my-3"';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), ['class' => null], false);
		echo '>
    <label for="firstName" class="form-label">Meno</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
        <input type="text" class="form-control" placeholder="Meno" id="name" aria-describedby="emailHelp" required';
		$ʟ_input = $_input = end($this->global->formsStack)["name"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'placeholder' => null, 'id' => null, 'aria-describedby' => null, 'required' => null])->attributes() /* line 8 */;
		echo '>
    </div>
    <label for="lastName" class="form-label">Priezvisko</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
        <input type="text" class="form-control" placeholder="Priezvisko" id="lastName" aria-describedby="emailHelp" required';
		$ʟ_input = $_input = end($this->global->formsStack)["surname"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'placeholder' => null, 'id' => null, 'aria-describedby' => null, 'required' => null])->attributes() /* line 13 */;
		echo '>
    </div>
    <label for="email" class="form-label">Email</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-paper"></i></span>
        <input type="email" class="form-control" placeholder="@" id="email" aria-describedby="emailHelp" required';
		$ʟ_input = $_input = end($this->global->formsStack)["email"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'placeholder' => null, 'id' => null, 'aria-describedby' => null, 'required' => null])->attributes() /* line 18 */;
		echo '>
    </div>
    <label for="password" class="form-label">Heslo</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-shield"></i></span>
        <input type="password"class="form-control" id="password" placeholder="********" required';
		$ʟ_input = $_input = end($this->global->formsStack)["password"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'placeholder' => null, 'required' => null])->attributes() /* line 23 */;
		echo '>
    </div>
    <label for="passwordRepeat" class="form-label">Zopakovanie hesla</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="repeatPassword"><i class="bi bi-shield"></i></span>
        <input type="password"class="form-control" id="passwordRepeat" placeholder="********" required';
		$ʟ_input = $_input = end($this->global->formsStack)["passwordRepeat"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'placeholder' => null, 'required' => null])->attributes() /* line 28 */;
		echo '>
    </div>

    <div class="my-4 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required';
		$ʟ_input = $_input = end($this->global->formsStack)["checkbox"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'required' => null])->attributes() /* line 32 */;
		echo '>
        <label class="form-check-label" for="exampleCheck1">
            Súhlasím s podmienkami registrácie v súlade s dokumentom
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Homepage:gdpr")) /* line 35 */;
		echo '" class="nav-link d-inline">
                Podmienky registrácie
            </a>.
        </label>
    </div>

    <button type="submit" class="btn btn-success"';
		$ʟ_input = $_input = end($this->global->formsStack)["send"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null])->attributes() /* line 41 */;
		echo '>
        <i class="bi bi-check2 me-2"></i> Registruj
    </button>

';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 4 */;
		echo '</form>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
