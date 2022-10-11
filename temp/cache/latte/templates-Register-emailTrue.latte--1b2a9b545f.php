<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\FrontModule\Presenters/templates/Register/emailTrue.latte */
final class Template1b2a9b545f extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
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
		echo '
    <div class="container" style="height: 100vh;">
        <div class="row h-100">
            <div class="col-12 h-50">

                <h3 class="fw-bold my-5 text-success">
                    Overenie vašej e-mailovej adresy bolo úspešné.
                </h3>

                <div class="alert alert-info" role="alert">
                    Môžte sa prihlásiť na nasledujúcom odkaze
                    <a class="nav-link fw-bold d-inline" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:in")) /* line 13 */;
		echo '">
                        <i class="bi bi-box-arrow-in-right"></i> Prihlásiť
                    </a>.
                </div>

            </div>
        </div>
    </div>

';
	}

}
