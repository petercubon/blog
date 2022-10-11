<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\FrontModule\Presenters/templates/Register/emailFalse.latte */
final class Template74561ceffb extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		echo "\n";
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
		echo '    <div class="container" style="height: 100vh;">
        <div class="row h-100">
            <div class="col-12 h-50">

                <h3 class="fw-bold my-5 text-danger">
                    Overenie vašej e-mailovej adresy bolo neúspešné.
                </h3>

            </div>
        </div>
    </div>

';
	}

}
