<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\FrontModule\Presenters/templates/Device/default.latte */
final class Template10fd8fff22 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		0 => ['content' => 'blockContent'],
		'snippet' => ['addDeviceForm' => 'blockAddDeviceForm', 'devices' => 'blockDevices'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <section id="addDevice">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 6 */;
		echo '/img/spotrebice.svg" class="img-fluid">
                </div>
                <div class="col-6">
                    <p class="text-primary h5 py-2">
                        <i class="bi bi-plus-circle"></i> Pridat nove zariadenie
                    </p>
';
		if (($user->isAllowed('addNewDevice', 'view'))) /* line 12 */ {
			echo '<div id="';
			echo htmlspecialchars($this->global->snippetDriver->getHtmlId('addDeviceForm'));
			echo '">';
			$this->renderBlock('addDeviceForm', [], null, 'snippet') /* line 13 */;
			echo '</div>
';
		}
		else /* line 16 */ {
			echo '                        <div class="alert alert-primary w-100" role="alert">
                            Pre pridanie spotrebiča je nutné
                            <a class="nav-link d-inline fw-bold" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:in")) /* line 19 */;
			echo '"> prihlásenie </a>.
                        </div>
';
		}
		echo '                </div>
            </div>
        </div>
    </section>

    <section id="showDevices">
        <div class="container py-5 border-top">

            <div class="row">
                <div class="col-12">
                    <h3> Prehľad pridaných zariadení </h3>
                </div>
            </div>

';
		if (($user->isAllowed('showDevices', 'view'))) /* line 36 */ {
			echo '
<div id="';
			echo htmlspecialchars($this->global->snippetDriver->getHtmlId('devices'));
			echo '">';
			$this->renderBlock('devices', [], null, 'snippet') /* line 38 */;
			echo '</div>

';
		}
		else /* line 44 */ {
			echo '                        <div class="alert alert-primary w-100" role="alert">
                            Pridané spotrebiče je možné zobraziť po
                            <a class="nav-link d-inline fw-bold" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:in")) /* line 47 */;
			echo '">
                                prihlásení
                            </a>.
                        </div>
';
		}
		echo '
                </div>
            </div>

        </div>
    </section>

';
	}


	/** {snippet addDeviceForm} on line 13 */
	public function blockAddDeviceForm(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("addDeviceForm", 'static');
		try {
			/* line 14 */ $_tmp = $this->global->uiControl->getComponent("addDevice");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}


	/** {snippet devices} on line 38 */
	public function blockDevices(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		$this->global->snippetDriver->enter("devices", 'static');
		try {
			echo "\n";
			/* line 40 */ $_tmp = $this->global->uiControl->getComponent("devices");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
			echo "\n";
		}
		finally {
			$this->global->snippetDriver->leave();
		}
		
	}

}
