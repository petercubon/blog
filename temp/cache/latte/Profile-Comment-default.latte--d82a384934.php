<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\User\Profile\Comment/default.latte */
final class Templated82a384934 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<div class="col-12 col-sm-10 py-3">
    <p class="fw-bold">
        Moje komentáre
    </p>
    <ul class="list-group list-group-flush">
';
		$iterations = 0;
		foreach ($comment as $myComment) /* line 6 */ {
			echo '        <li class="list-group-item">
            ';
			/* line 7 */ $_tmp = $this->global->uiControl->getComponent("userComment-$myComment->id");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
			echo '
        </li>
';
			$iterations++;
		}
		echo '    </ul>
</div>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['myComment' => '6'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
