<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Device\Add\Device/default.latte */
final class Templatebb7d20998c extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['flashes' => 'blockFlashes', 'addDeviceForm' => 'blockAddDeviceForm'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('flashes'));
		echo '">';
		$this->renderBlock('flashes', [], null, 'snippet') /* line 1 */;
		echo '</div>

<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('addDeviceForm'));
		echo '">';
		$this->renderBlock('addDeviceForm', [], null, 'snippet') /* line 12 */;
		echo '</div>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '4'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {snippet flashes} on line 1 */
	public function blockFlashes(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("flashes", 'static');
		try {
			echo '    <div class="row">
        <div class="col-12">
';
			$iterations = 0;
			foreach ($flashes as $flash) /* line 4 */ {
				echo '            <div class="alert alert-success alert-dismissible fade show" role="alert">
                ';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 5 */;
				echo '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
';
				$iterations++;
			}
			echo '        </div>
    </div>
';
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}


	/** {snippet addDeviceForm} on line 12 */
	public function blockAddDeviceForm(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("addDeviceForm", 'static');
		try {
			$form = $this->global->formsStack[] = $this->global->uiControl["form"] /* line 13 */;
			echo '    <form';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false);
			echo '>

        <div class="mb-3">
            <label for="name" class="form-label">Názov zariadenia</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" required';
			$ʟ_input = $_input = end($this->global->formsStack)["name"];
			echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'aria-describedby' => null, 'required' => null])->attributes() /* line 17 */;
			echo '>
        </div>

        <div class="mb-3">
            <label for="room" class="form-label">Miestnosť</label>
            <input type="text" class="form-control" id="room" required';
			$ʟ_input = $_input = end($this->global->formsStack)["room"];
			echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null, 'id' => null, 'required' => null])->attributes() /* line 22 */;
			echo '>
        </div>

        <labe class="form-label">Vyberte ikonu zariadenia</labe>
        <select class="form-select" aria-label="Default select example"';
			$ʟ_input = $_input = end($this->global->formsStack)["select_devices_image"];
			echo $ʟ_input->getControlPart()->addAttributes(['class' => null, 'aria-label' => null])->attributes() /* line 26 */;
			echo '>
';
			echo $ʟ_input->getControl()->getHtml() /* line 26 */;
			echo '        </select>

        <button type="submit" class="btn btn-sm btn-primary mt-3"';
			$ʟ_input = $_input = end($this->global->formsStack)["send"];
			echo $ʟ_input->getControlPart()->addAttributes(['type' => null, 'class' => null])->attributes() /* line 29 */;
			echo '>
            <i class="bi bi-check2"></i> Pridať  zariadenie
        </button>

';
			echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false) /* line 13 */;
			echo '    </form>
';
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
