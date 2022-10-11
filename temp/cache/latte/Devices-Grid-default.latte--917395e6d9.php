<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Device\Homepage\Devices\Grid/default.latte */
final class Template917395e6d9 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		'snippet' => ['flashes' => 'blockFlashes', 'devices' => 'blockDevices'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('flashes'));
		echo '">';
		$this->renderBlock('flashes', [], null, 'snippet') /* line 7 */;
		echo '</div>

<div id="';
		echo htmlspecialchars($this->global->snippetDriver->getHtmlId('devices'));
		echo '">';
		$this->renderBlock('devices', [], null, 'snippet') /* line 18 */;
		echo '</div>

';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '10', 'device' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {snippet flashes} on line 7 */
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
			foreach ($flashes as $flash) /* line 10 */ {
				echo '            <div class="alert alert-success alert-dismissible fade show" role="alert">
                ';
				echo LR\Filters::escapeHtmlText($flash->message) /* line 11 */;
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


	/** {snippet devices} on line 18 */
	public function blockDevices(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("devices", 'static');
		try {
			echo '
<div class="row d-flex flex-row flex-nowrap overflow-auto my-3 py-3">

';
			$iterations = 0;
			foreach ($devices as $device) /* line 22 */ {
				echo '        <div class="col-3 me-3">

';
				/* line 25 */ $_tmp = $this->global->uiControl->getComponent("devicesGridItemMultiple-$device->id");
				if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
				$_tmp->render();
				echo '
        </div>
';
				$iterations++;
			}
			echo '</div>

';
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
