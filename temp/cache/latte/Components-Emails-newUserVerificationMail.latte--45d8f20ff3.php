<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\nette\nette_bw\web_nette_bw\app\Presenters\Templates\Components\Emails\newUserVerificationMail.latte */
final class Template45d8f20ff3 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Potvrdenie e-mailovej adresy zadanej pri registrácií.
    </title>
</head>
<body>

    <h3>Dobrý deň ';
		echo LR\Filters::escapeHtmlText($firstName) /* line 14 */;
		echo ',</h3>
    <p>
        táto správa je  zaslaná na základe registrácie na stránke Blog za účelom overenia mailovej adresy ';
		echo LR\Filters::escapeHtmlText($email) /* line 16 */;
		echo '
    </p>
    <p>
        Pre overenie zadanej e-mailovej adresy klikni na nasladujúci odkaz:
        <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseUrl)) /* line 20 */;
		echo '/register/verification/verificationToken=';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($verificationCode)) /* line 20 */;
		echo '&id=';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($id)) /* line 20 */;
		echo '">
            <strong>Overiť email</strong>
        </a>.
    </p>

    <p>
        S pozdravom Blog
    </p>

</body>
</html>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
