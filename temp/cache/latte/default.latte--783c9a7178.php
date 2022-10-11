<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\User\Sign\In/default.latte */
final class Template783c9a7178 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['form' => 'blockForm'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '
<div class="container">
    <div class="row justify-content-center" style="height: 90vh">
        <div class="col-lg-4 align-self-center">
            <div class="card">
                <div class="card-body my-3">
                    <h3 class="mb-5 text-center">Prihlasenie</h3>

<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('form'));
		echo '">';
		$this->renderBlock('form', [], null, 'snippet') /* line 11 */;
		echo '</div>

                </div>
            </div>
        </div>
    </div>
</div>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {snippet form} on line 11 */
	public function blockForm(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("form", 'static');
		try {
			echo "\n";
			$form = $this->global->formsStack[] = $this->global->uiControl["form"] /* line 13 */;
			echo '                        <form';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false);
			echo '>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Emailova adresa</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required';
			$ʟ_input = $_input = end($this->global->formsStack)["email"];
			echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'aria-describedby' => null, 'required' => null])->attributes() /* line 16 */;
			echo '>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" required';
			$ʟ_input = $_input = end($this->global->formsStack)["password"];
			echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'required' => null])->attributes() /* line 20 */;
			echo '>
                            </div>
                            <div class="mb-3 form-check">
                            </div>
                            <button type="submit" class="btn btn-outline-success w-100">Prihlasit</button>
';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 13 */;
			echo '                        </form>

';
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
