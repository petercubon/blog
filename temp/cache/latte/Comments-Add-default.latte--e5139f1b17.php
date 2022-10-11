<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Comments\Add/default.latte */
final class Templatee5139f1b17 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['form' => 'blockForm'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '

<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('form'));
		echo '">';
		$this->renderBlock('form', [], null, 'snippet') /* line 3 */;
		echo '</div>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {snippet form} on line 3 */
	public function blockForm(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("form", 'static');
		try {
			echo "\n";
			$form = $this->global->formsStack[] = $this->global->uiControl["addCommentForm"] /* line 7 */;
			echo '    <form';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false);
			echo '>
        <div class="row">
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Meno (prezyvka)</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required';
			$ʟ_input = $_input = end($this->global->formsStack)["name"];
			echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'value' => null, 'required' => null])->attributes() /* line 11 */;
			echo '>
                <div class="invalid-feedback">
                  Meno / prezyvka je povinne pole
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustom02" value="" placeholder="@"';
			$ʟ_input = $_input = end($this->global->formsStack)["email"];
			echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'value' => null, 'placeholder' => null])->attributes() /* line 19 */;
			echo '>
                <div class="invalid-feedback">
                  Emailova adresa nema spravny format
                </div>
            </div>

            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <textarea
                          rows="3"
                          class="form-control"
                          id="validationCustomUsername"
                          aria-describedby="inputGroupPrepend"
                          required';
			$ʟ_input = $_input = end($this->global->formsStack)["content"];
			echo $ʟ_input->getControlPart()->addAttributes(['rows' => null, 'class' => null, 'id' => null, 'aria-describedby' => null, 'required' => null])->attributes() /* line 28 */;
			echo '>
';
			echo $ʟ_input->getControl()->getHtml() /* line 28 */;
			echo '                  </textarea>
                      <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
            </div>

            <div class="col-12 mt-3">
                <button class="btn btn-primary" type="submit"';
			$ʟ_input = $_input = end($this->global->formsStack)["send"];
			echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'type' => null])->attributes() /* line 43 */;
			echo '>Pridať komentár</button>
            </div>
        </div>
';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 7 */;
			echo '    </form>

';
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
