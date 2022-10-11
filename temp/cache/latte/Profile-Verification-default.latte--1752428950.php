<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\User\Profile\Verification/default.latte */
final class Template1752428950 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '
<p class="text-danger">
    Vaša emailová adresa nebola overená.
</p>

';
		$form = $this->global->formsStack[] = $this->global->uiControl["form"] /* line 6 */;
		echo '<form';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false);
		echo '>
    <button type="submit" class="btn btn-success"';
		$ʟ_input = $_input = end($this->global->formsStack)["send"];
		echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null])->attributes() /* line 7 */;
		echo '>odoslať overovací e-mail</button>
';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 6 */;
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
