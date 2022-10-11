<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Components\Post\Detail/default.latte */
final class Template62974da6eb extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '
<div class="card-body">
    <p class="small text-mutted text-end">
        Photo by
        <a href="https://unsplash.com/@evgeniasterg?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">
            Evgenia Stergioula
        </a>
        on
        <a href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">
            Unsplash
        </a>
    </p>

    <h1 class="text-uppercase text-center fw-bold mt-5">
        ';
		echo LR\Filters::escapeHtmlText($item->title) /* line 15 */;
		echo '
    </h1>

    <div class="row">
        <div class="col-12 text-end">
            <p class="small text-end text-success">
';
		if ($user->isAllowed($item, 'edit')) /* line 21 */ {
			echo '                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("Post:edit", [$item->id])) /* line 21 */;
			echo '" class="nav-link">
                    <i class="bi bi-pen"></i> Upravit clanok
                </a>
';
		}
		echo '            </p>
        </div>
';
		if ($user->isAllowed($item, 'delete')) /* line 26 */ {
			echo '        <div class="col-12">
            <section id="removePost">
                <!-- Button modal -->
                <button type="button" class="btn btn-sm btn-outline-danger border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">
                    <i class="bi bi-trash"></i> Odstranit clanok
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> <i class="bi bi-trash text-danger"></i> Odstranenie clanku</h5>
                                <button type="button" class="btn btn-outline-danger border-0" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                Chete natrvalo odstranit clanok s nazvom "<strong> ';
			echo LR\Filters::escapeHtmlText($item->title) /* line 44 */;
			echo ' </strong>"?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">zavriet</button>
';
			if ($user->isAllowed($item, 'delete')) /* line 48 */ {
				echo '                                <a class="btn btn-danger" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("delete!")) /* line 48 */;
				echo '">
                                    <i class="bi bi-trash"></i> Odstranit clanok
                                </a>
';
			}
			echo '                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
';
		}
		echo '    </div>

';
		if (($item->status != 2)) /* line 65 */ {
			echo '        <span class="badge rounded-pill text-bg-warning">
            Článok ešte nie je euverejnený
        </span>
';
		}
		echo '
    <p class="small text-mutted text-center mb-5 d-inline">
        <strong> Meno Autora  ';
		echo LR\Filters::escapeHtmlText($item->id) /* line 72 */;
		echo '</strong>, ';
		echo LR\Filters::escapeHtmlText(($this->filters->date)($item->created_at, 'd.m.Y, H:i')) /* line 72 */;
		echo ' | ID clanku: ';
		echo LR\Filters::escapeHtmlText($item->id) /* line 72 */;
		echo '
    </p>
    <p class="card-text mt-3" style="text-align: justify;">
        ';
		echo LR\Filters::escapeHtmlText($item->content) /* line 75 */;
		echo '
    </p>
</div>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
