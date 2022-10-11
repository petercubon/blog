<?php
// source: C:\laragon\www\nette\nette_bw\web_nette_bw/config/common.neon
// source: C:\laragon\www\nette\nette_bw\web_nette_bw/config/services.neon
// source: C:\laragon\www\nette\nette_bw\web_nette_bw/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_c112abe23c extends Nette\DI\Container
{
	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.context',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.context']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nextras\Migrations\IDbal' => [['migrations.dbal']],
		'Nextras\Migrations\IDriver' => [['migrations.driver']],
		'Nextras\Migrations\Entities\Group' => [
			2 => ['migrations.group.structures', 'migrations.group.basicData', 'migrations.group.dummyData'],
		],
		'Nextras\Migrations\IExtensionHandler' => [
			2 => ['migrations.extensionHandler.sql', 'migrations.extensionHandler.php'],
		],
		'Nextras\Migrations\Extensions\SqlHandler' => [2 => ['migrations.extensionHandler.sql']],
		'Nextras\Migrations\Extensions\PhpHandler' => [2 => ['migrations.extensionHandler.php']],
		'Nextras\Migrations\IConfiguration' => [['migrations.configuration']],
		'Nextras\Migrations\Bridges\SymfonyConsole\BaseCommand' => [
			2 => ['migrations.continueCommand', 'migrations.createCommand', 'migrations.resetCommand'],
		],
		'Symfony\Component\Console\Command\Command' => [
			2 => ['migrations.continueCommand', 'migrations.createCommand', 'migrations.resetCommand'],
		],
		'Nextras\Migrations\Bridges\SymfonyConsole\ContinueCommand' => [['migrations.continueCommand']],
		'Nextras\Migrations\Bridges\SymfonyConsole\CreateCommand' => [['migrations.createCommand']],
		'Nextras\Migrations\Bridges\SymfonyConsole\ResetCommand' => [['migrations.resetCommand']],
		'App\Model\API\SklonovanieMien' => [['01']],
		'App\Model\MailSenderUserRegister' => [['02']],
		'Nette\Security\Authenticator' => [['03']],
		'Nette\Security\IdentityHandler' => [['03']],
		'Nette\Security\IAuthenticator' => [['03']],
		'App\Model\Authenticator' => [['03']],
		'App\Dashboard\Article\Edit\FormFactory' => [['04']],
		'App\Model\MailSender' => [['05']],
		'Nette\Security\Authorizator' => [['06']],
		'Nette\Security\Permission' => [['06']],
		'Nette\Localization\Translator' => [['myTranslator']],
		'App\Model\MyTranslator' => [['myTranslator']],
		'Nette\Routing\RouteList' => [['07']],
		'Nette\Routing\Router' => [['07']],
		'ArrayAccess' => [
			2 => [
				'07',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Countable' => [2 => ['07']],
		'IteratorAggregate' => [2 => ['07']],
		'Traversable' => [2 => ['07']],
		'Nette\Application\Routers\RouteList' => [['07']],
		'App\AdminModule\Presenters\BasePresenter' => [2 => ['application.1']],
		'App\Presenters\Presenter' => [
			2 => ['application.1', 'application.2', 'application.5', 'application.6', 'application.12'],
		],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.12',
			],
		],
		'App\AdminModule\Presenters\HomepagePresenter' => [2 => ['application.1']],
		'App\Presenters\PostPresenter' => [2 => ['application.2', 'application.6']],
		'App\AdminModule\Presenters\PostPresenter' => [2 => ['application.2']],
		'App\Presenters\SignPresenter' => [2 => ['application.3', 'application.7', 'application.8']],
		'App\AdminModule\Presenters\SignPresenter' => [2 => ['application.3']],
		'App\FrontModule\Presenters\DevicePresenter' => [2 => ['application.4']],
		'App\FrontModule\Presenters\BasePresenter' => [2 => ['application.5']],
		'App\FrontModule\Presenters\HomepagePresenter' => [2 => ['application.5']],
		'App\FrontModule\Presenters\PostPresenter' => [2 => ['application.6']],
		'App\FrontModule\Presenters\RegisterPresenter' => [2 => ['application.7']],
		'App\FrontModule\Presenters\SignPresenter' => [2 => ['application.8']],
		'App\FrontModule\Presenters\UserPresenter' => [2 => ['application.9']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.10']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.11']],
		'NetteModule\ErrorPresenter' => [2 => ['application.13']],
		'NetteModule\MicroPresenter' => [2 => ['application.14']],
		'App\Model\BaseManager' => [['08', '09', '010', '011', '012', '013', '014', '015']],
		'App\Model\CommentManager' => [['08']],
		'App\Model\ConsumptionManager' => [['09']],
		'App\Model\DashboardManager' => [['010']],
		'App\Model\DeviceManager' => [['011']],
		'App\Model\PostManager' => [['012']],
		'App\Model\RoleManager' => [['013']],
		'App\Model\SettingManager' => [['014']],
		'App\Model\UserManager' => [['015']],
		'App\Components\Clanok\Mriezka\ControlFactory' => [['016']],
		'App\Components\Clanok\Mriezka\Polozka\ControlFactory' => [['017']],
		'App\Components\Comments\Add\ControlFactory' => [['018']],
		'App\Components\Comments\Add\FormFactory' => [['019']],
		'App\Components\Comments\DeleteComment\FormFactory' => [['020']],
		'App\components\Comments\FormFactory' => [['021']],
		'App\Components\Comments\Grid\ControlFactory' => [['022']],
		'App\Components\Comments\Grid\Item\ControlFactory' => [['023']],
		'App\Components\Device\Add\Device\ControlFactory' => [['024']],
		'App\Components\Device\Add\Device\FormFactory' => [['025']],
		'App\Components\Device\Add\Measurement\ControlFactory' => [['026']],
		'App\Components\Device\Add\Measurement\FormFactory' => [['027']],
		'App\Components\Device\Homepage\Devices\Grid\ControlFactory' => [['028']],
		'App\Components\Device\Homepage\Devices\Grid\Item\ControlFactory' => [['029']],
		'App\Components\Device\Manipulate\FormFactory' => [['030']],
		'App\Components\Device\Show\Measurement\Grid\ControlFactory' => [['031']],
		'App\Components\Device\Show\Measurement\Grid\Item\ControlFactory' => [['032']],
		'App\Components\Post\Detail\ControlFactory' => [['033']],
		'App\Components\Post\Detail\OtherPosts\ControlFactory' => [['034']],
		'App\Components\Post\Grid\ControlFactory' => [['035']],
		'App\Components\Post\Grid\Item\ControlFactory' => [['036']],
		'App\Components\Post\Manipulate\ControlFactory' => [['037']],
		'App\Components\Post\Manipulate\FormFactory' => [['038']],
		'App\Components\Post\Other\Filter\ControlFactory' => [['039']],
		'App\Components\Post\Other\Filter\FormFactory' => [['040']],
		'App\Components\Post\Other\Grid\ControlFactory' => [['041']],
		'App\Components\Post\Other\Grid\Item\ControlFactory' => [['042']],
		'App\Components\User\Profile\ControlFactory' => [['043']],
		'App\Components\User\Profile\Comment\item\ControlFactory' => [['044']],
		'App\Components\User\Profile\Verification\ControlFactory' => [['045']],
		'App\Components\User\Profile\Verification\FormFactory' => [['046']],
		'App\Components\User\Register\ControlFactory' => [['047']],
		'App\Components\User\Register\FormFactory' => [['048']],
		'App\components\User\Sign\In\ControlFactory' => [['049']],
		'App\components\User\Sign\In\FormFactory' => [['050']],
		'App\Core\FormFactory' => [['051']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [];
	}


	public function createService01(): App\Model\API\SklonovanieMien
	{
		return new App\Model\API\SklonovanieMien('1234asdf54321fdsa');
	}


	public function createService02(): App\Model\MailSenderUserRegister
	{
		return new App\Model\MailSenderUserRegister(
			$this->getService('application.linkGenerator'),
			$this->getService('latte.templateFactory'),
			'C:\laragon\www\nette\nette_bw\web_nette_bw\app\Presenters\Templates\Components\Emails\\'
		);
	}


	public function createService03(): App\Model\Authenticator
	{
		return new App\Model\Authenticator($this->getService('015'), $this->getService('security.passwords'), $this->getService('013'));
	}


	public function createService04(): App\Dashboard\Article\Edit\FormFactory
	{
		return new App\Dashboard\Article\Edit\FormFactory($this->getService('security.user'), $this->getService('010'));
	}


	public function createService05(): App\Model\MailSender
	{
		return new App\Model\MailSender(
			$this->getService('latte.templateFactory'),
			$this->getService('application.linkGenerator'),
			'C:\laragon\www\nette\nette_bw\web_nette_bw\app\Presenters\templates\components\emails\\',
			$this->getService('014')
		);
	}


	public function createService06(): Nette\Security\Permission
	{
		return App\Model\AuthorizatorFactory::create();
	}


	public function createService07(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createService08(): App\Model\CommentManager
	{
		return new App\Model\CommentManager($this->getService('database.default.context'));
	}


	public function createService09(): App\Model\ConsumptionManager
	{
		return new App\Model\ConsumptionManager($this->getService('database.default.context'));
	}


	public function createService010(): App\Model\DashboardManager
	{
		return new App\Model\DashboardManager($this->getService('database.default.context'), $this->getService('05'));
	}


	public function createService011(): App\Model\DeviceManager
	{
		return new App\Model\DeviceManager($this->getService('database.default.context'));
	}


	public function createService012(): App\Model\PostManager
	{
		return new App\Model\PostManager($this->getService('database.default.context'));
	}


	public function createService013(): App\Model\RoleManager
	{
		return new App\Model\RoleManager($this->getService('database.default.context'));
	}


	public function createService014(): App\Model\SettingManager
	{
		return new App\Model\SettingManager($this->getService('database.default.context'), $this->getService('cache.storage'));
	}


	public function createService015(): App\Model\UserManager
	{
		return new App\Model\UserManager($this->getService('database.default.context'));
	}


	public function createService016(): App\Components\Clanok\Mriezka\ControlFactory
	{
		return new class ($this) implements App\Components\Clanok\Mriezka\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(): App\Components\Clanok\Mriezka\Control
			{
				return new App\Components\Clanok\Mriezka\Control($this->container->getService('012'), $this->container->getService('017'));
			}
		};
	}


	public function createService017(): App\Components\Clanok\Mriezka\Polozka\ControlFactory
	{
		return new class ($this) implements App\Components\Clanok\Mriezka\Polozka\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(Nette\Database\Table\ActiveRow $polozka): App\Components\Clanok\Mriezka\Polozka\Control
			{
				return new App\Components\Clanok\Mriezka\Polozka\Control($polozka);
			}
		};
	}


	public function createService018(): App\Components\Comments\Add\ControlFactory
	{
		return new class ($this) implements App\Components\Comments\Add\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(callable $onSuccess, ?int $postId = null): App\Components\Comments\Add\Control
			{
				return new App\Components\Comments\Add\Control($this->container->getService('019'), $onSuccess, $postId);
			}
		};
	}


	public function createService019(): App\Components\Comments\Add\FormFactory
	{
		return new App\Components\Comments\Add\FormFactory(
			$this->getService('08'),
			$this->getService('051'),
			$this->getService('security.user')
		);
	}


	public function createService020(): App\Components\Comments\DeleteComment\FormFactory
	{
		return new App\Components\Comments\DeleteComment\FormFactory($this->getService('08'), $this->getService('051'));
	}


	public function createService021(): App\components\Comments\FormFactory
	{
		return new App\components\Comments\FormFactory($this->getService('08'), $this->getService('051'));
	}


	public function createService022(): App\Components\Comments\Grid\ControlFactory
	{
		return new class ($this) implements App\Components\Comments\Grid\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(?int $postId = null): App\Components\Comments\Grid\Control
			{
				return new App\Components\Comments\Grid\Control($this->container->getService('08'), $postId, $this->container->getService('023'));
			}
		};
	}


	public function createService023(): App\Components\Comments\Grid\Item\ControlFactory
	{
		return new class ($this) implements App\Components\Comments\Grid\Item\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(
				App\Model\Entity\CommentResource $item,
				Closure $onDelete
			): App\Components\Comments\Grid\Item\Control {
				return new App\Components\Comments\Grid\Item\Control(
					$item,
					$onDelete,
					$this->container->getService('08'),
					$this->container->getService('security.user')
				);
			}
		};
	}


	public function createService024(): App\Components\Device\Add\Device\ControlFactory
	{
		return new class ($this) implements App\Components\Device\Add\Device\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(callable $onSuccess, ?int $authorId = null): App\Components\Device\Add\Device\Control
			{
				return new App\Components\Device\Add\Device\Control(
					$this->container->getService('025'),
					$onSuccess,
					$authorId,
					$this->container->getService('security.user')
				);
			}
		};
	}


	public function createService025(): App\Components\Device\Add\Device\FormFactory
	{
		return new App\Components\Device\Add\Device\FormFactory($this->getService('011'), $this->getService('051'));
	}


	public function createService026(): App\Components\Device\Add\Measurement\ControlFactory
	{
		return new class ($this) implements App\Components\Device\Add\Measurement\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(
				callable $onSuccess,
				int $measurementId,
				int $deviceId,
				string $deviceName
			): App\Components\Device\Add\Measurement\Control {
				return new App\Components\Device\Add\Measurement\Control(
					$this->container->getService('027'),
					$onSuccess,
					$measurementId,
					$deviceId,
					$deviceName
				);
			}
		};
	}


	public function createService027(): App\Components\Device\Add\Measurement\FormFactory
	{
		return new App\Components\Device\Add\Measurement\FormFactory($this->getService('09'), $this->getService('security.user'));
	}


	public function createService028(): App\Components\Device\Homepage\Devices\Grid\ControlFactory
	{
		return new class ($this) implements App\Components\Device\Homepage\Devices\Grid\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(?int $authorId): App\Components\Device\Homepage\Devices\Grid\Control
			{
				return new App\Components\Device\Homepage\Devices\Grid\Control($this->container->getService('011'), $this->container->getService('029'), $authorId);
			}
		};
	}


	public function createService029(): App\Components\Device\Homepage\Devices\Grid\Item\ControlFactory
	{
		return new class ($this) implements App\Components\Device\Homepage\Devices\Grid\Item\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(
				App\Model\Entity\DeviceResource $item,
				Closure $onDelete
			): App\Components\Device\Homepage\Devices\Grid\Item\Control {
				return new App\Components\Device\Homepage\Devices\Grid\Item\Control(
					$item,
					$onDelete,
					$this->container->getService('011'),
					$this->container->getService('security.user')
				);
			}
		};
	}


	public function createService030(): App\Components\Device\Manipulate\FormFactory
	{
		return new App\Components\Device\Manipulate\FormFactory;
	}


	public function createService031(): App\Components\Device\Show\Measurement\Grid\ControlFactory
	{
		return new class ($this) implements App\Components\Device\Show\Measurement\Grid\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(int $deviceId): App\Components\Device\Show\Measurement\Grid\Control
			{
				return new App\Components\Device\Show\Measurement\Grid\Control($this->container->getService('09'), $deviceId, $this->container->getService('032'));
			}
		};
	}


	public function createService032(): App\Components\Device\Show\Measurement\Grid\Item\ControlFactory
	{
		return new class ($this) implements App\Components\Device\Show\Measurement\Grid\Item\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(
				App\Model\Entity\ConsumptionResource $item,
				Closure $onDelete
			): App\Components\Device\Show\Measurement\Grid\Item\Control {
				return new App\Components\Device\Show\Measurement\Grid\Item\Control(
					$item,
					$onDelete,
					$this->container->getService('09'),
					$this->container->getService('security.user')
				);
			}
		};
	}


	public function createService033(): App\Components\Post\Detail\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Detail\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(App\Model\Entity\PostResource $item, Closure $onDelete): App\Components\Post\Detail\Control
			{
				return new App\Components\Post\Detail\Control($item, $onDelete, $this->container->getService('012'), $this->container->getService('security.user'));
			}
		};
	}


	public function createService034(): App\Components\Post\Detail\OtherPosts\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Detail\OtherPosts\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(?int $postId, ?int $authorId): App\Components\Post\Detail\OtherPosts\Control
			{
				return new App\Components\Post\Detail\OtherPosts\Control(
					$this->container->getService('012'),
					$postId,
					$authorId,
					$this->container->getService('security.user')
				);
			}
		};
	}


	public function createService035(): App\Components\Post\Grid\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Grid\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(?int $authorId): App\Components\Post\Grid\Control
			{
				return new App\Components\Post\Grid\Control(
					$this->container->getService('012'),
					$this->container->getService('036'),
					$authorId,
					$this->container->getService('security.user')
				);
			}
		};
	}


	public function createService036(): App\Components\Post\Grid\Item\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Grid\Item\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(Nette\Database\Table\ActiveRow $item): App\Components\Post\Grid\Item\Control
			{
				return new App\Components\Post\Grid\Item\Control($item);
			}
		};
	}


	public function createService037(): App\Components\Post\Manipulate\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Manipulate\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(callable $onSuccess, array $entity): App\Components\Post\Manipulate\Control
			{
				return new App\Components\Post\Manipulate\Control($this->container->getService('038'), $onSuccess, $entity);
			}
		};
	}


	public function createService038(): App\Components\Post\Manipulate\FormFactory
	{
		return new App\Components\Post\Manipulate\FormFactory(
			$this->getService('010'),
			$this->getService('051'),
			$this->getService('security.user')
		);
	}


	public function createService039(): App\Components\Post\Other\Filter\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Other\Filter\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(callable $onSuccess): App\Components\Post\Other\Filter\Control
			{
				return new App\Components\Post\Other\Filter\Control($this->container->getService('040'), $onSuccess);
			}
		};
	}


	public function createService040(): App\Components\Post\Other\Filter\FormFactory
	{
		return new App\Components\Post\Other\Filter\FormFactory;
	}


	public function createService041(): App\Components\Post\Other\Grid\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Other\Grid\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(): App\Components\Post\Other\Grid\Control
			{
				return new App\Components\Post\Other\Grid\Control(
					$this->container->getService('012'),
					$this->container->getService('042'),
					null,
					null,
					$this->container->getService('security.user')
				);
			}
		};
	}


	public function createService042(): App\Components\Post\Other\Grid\Item\ControlFactory
	{
		return new class ($this) implements App\Components\Post\Other\Grid\Item\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(Nette\Database\Table\ActiveRow $item): App\Components\Post\Other\Grid\Item\Control
			{
				return new App\Components\Post\Other\Grid\Item\Control($item, $this->container->getService('012'));
			}
		};
	}


	public function createService043(): App\Components\User\Profile\ControlFactory
	{
		return new class ($this) implements App\Components\User\Profile\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(): App\Components\User\Profile\Control
			{
				return new App\Components\User\Profile\Control(
					$this->container->getService('08'),
					$this->container->getService('security.user'),
					$this->container->getService('044')
				);
			}
		};
	}


	public function createService044(): App\Components\User\Profile\Comment\item\ControlFactory
	{
		return new class ($this) implements App\Components\User\Profile\Comment\item\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(Nette\Database\Table\ActiveRow $item): App\Components\User\Profile\Comment\item\Control
			{
				return new App\Components\User\Profile\Comment\item\Control($this->container->getService('08'), $this->container->getService('security.user'), $item);
			}
		};
	}


	public function createService045(): App\Components\User\Profile\Verification\ControlFactory
	{
		return new class ($this) implements App\Components\User\Profile\Verification\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(callable $onSuccess): App\Components\User\Profile\Verification\Control
			{
				return new App\Components\User\Profile\Verification\Control($this->container->getService('046'), $onSuccess);
			}
		};
	}


	public function createService046(): App\Components\User\Profile\Verification\FormFactory
	{
		return new App\Components\User\Profile\Verification\FormFactory($this->getService('security.user'), $this->getService('03'));
	}


	public function createService047(): App\Components\User\Register\ControlFactory
	{
		return new class ($this) implements App\Components\User\Register\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(callable $onSuccess): App\Components\User\Register\Control
			{
				return new App\Components\User\Register\Control($onSuccess, $this->container->getService('048'));
			}
		};
	}


	public function createService048(): App\Components\User\Register\FormFactory
	{
		return new App\Components\User\Register\FormFactory($this->getService('03'), $this->getService('02'));
	}


	public function createService049(): App\components\User\Sign\In\ControlFactory
	{
		return new class ($this) implements App\components\User\Sign\In\ControlFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(callable $onSuccess): App\components\User\Sign\In\Control
			{
				return new App\components\User\Sign\In\Control($this->container->getService('050'), $onSuccess);
			}
		};
	}


	public function createService050(): App\components\User\Sign\In\FormFactory
	{
		return new App\components\User\Sign\In\FormFactory($this->getService('security.user'), $this->getService('051'));
	}


	public function createService051(): App\Core\FormFactory
	{
		return new App\Core\FormFactory($this->getService('myTranslator'));
	}


	public function createServiceApplication__1(): App\AdminModule\Presenters\HomepagePresenter
	{
		$service = new App\AdminModule\Presenters\HomepagePresenter(
			$this->getService('012'),
			$this->getService('security.user'),
			$this->getService('database.default.context'),
			$this->getService('03')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->inject($this->getService('035'));
		$service->translator = $this->getService('myTranslator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__10(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__11(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__12(): App\Presenters\Presenter
	{
		$service = new App\Presenters\Presenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->translator = $this->getService('myTranslator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__13(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__14(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('07'));
	}


	public function createServiceApplication__2(): App\AdminModule\Presenters\PostPresenter
	{
		$service = new App\AdminModule\Presenters\PostPresenter(
			$this->getService('08'),
			$this->getService('012'),
			$this->getService('038'),
			$this->getService('010'),
			$this->getService('033'),
			$this->getService('database.default.context')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectCommentAddControlFactory($this->getService('018'));
		$service->injectCommentsGridControlFactory($this->getService('022'));
		$service->injectPostManipulateControlFactory($this->getService('037'));
		$service->injectPostDetailControlFactory($this->getService('033'));
		$service->injectOtherPostFactory($this->getService('034'));
		$service->inject($this->getService('041'), $this->getService('012'));
		$service->injectFilterPostForm($this->getService('039'), $this->getService('012'));
		$service->translator = $this->getService('myTranslator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\AdminModule\Presenters\SignPresenter
	{
		$service = new App\AdminModule\Presenters\SignPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectUserSignInControlFactory($this->getService('049'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): App\FrontModule\Presenters\DevicePresenter
	{
		$service = new App\FrontModule\Presenters\DevicePresenter(
			$this->getService('011'),
			$this->getService('024'),
			$this->getService('026'),
			$this->getService('09')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectDeviceAddControlFactory($this->getService('024'));
		$service->injectdeviceAddMeasurementControlFactory($this->getService('026'));
		$service->injectDeviceShowMeasurementGrid($this->getService('031'));
		$service->injectHomepageDevices($this->getService('028'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\FrontModule\Presenters\HomepagePresenter
	{
		$service = new App\FrontModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->inject($this->getService('035'));
		$service->translator = $this->getService('myTranslator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): App\FrontModule\Presenters\PostPresenter
	{
		$service = new App\FrontModule\Presenters\PostPresenter(
			$this->getService('08'),
			$this->getService('012'),
			$this->getService('038'),
			$this->getService('010'),
			$this->getService('033'),
			$this->getService('database.default.context')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectCommentAddControlFactory($this->getService('018'));
		$service->injectCommentsGridControlFactory($this->getService('022'));
		$service->injectPostManipulateControlFactory($this->getService('037'));
		$service->injectPostDetailControlFactory($this->getService('033'));
		$service->injectOtherPostFactory($this->getService('034'));
		$service->translator = $this->getService('myTranslator');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__7(): App\FrontModule\Presenters\RegisterPresenter
	{
		$service = new App\FrontModule\Presenters\RegisterPresenter(
			$this->getService('03'),
			$this->getService('security.passwords'),
			$this->getService('02'),
			$this->getService('015')
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectUserSignInControlFactory($this->getService('049'));
		$service->injectControlFactory($this->getService('047'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__8(): App\FrontModule\Presenters\SignPresenter
	{
		$service = new App\FrontModule\Presenters\SignPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->injectUserSignInControlFactory($this->getService('049'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__9(): App\FrontModule\Presenters\UserPresenter
	{
		$service = new App\FrontModule\Presenters\UserPresenter($this->getService('08'), $this->getService('012'), $this->getService('043'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->inject($this->getService('045'), $this->getService('02'), $this->getService('015'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('07'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('07'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'C:\laragon\www\nette\nette_bw\web_nette_bw/temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('C:\laragon\www\nette\nette_bw\web_nette_bw/temp/cache');
	}


	public function createServiceContainer(): Container_c112abe23c
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=mysql80.r1.websupport.sk;dbname=tpq59446', 'tpq59446', 'Vr517ockKt', []);
		Nette\Database\Helpers::initializeTracy(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen')
		);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_c112abe23c $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('C:\laragon\www\nette\nette_bw\web_nette_bw/temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				$service->addfilter('translate', [$this->container->getService('myTranslator'), 'translate']);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'), false);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SmtpMailer([
			'smtp' => true,
			'host' => 'smtp.websupport.sk',
			'port' => 465,
			'username' => 'info@petercubon.sk',
			'password' => 'By23#S#/xr',
			'secure' => 'ssl',
			'timeout' => null,
			'context' => [],
			'clientHost' => null,
			'persistent' => false,
			'dkim' => null,
		]);
	}


	public function createServiceMigrations__configuration(): Nextras\Migrations\IConfiguration
	{
		return new Nextras\Migrations\Configurations\Configuration(
			[
				$this->getService('migrations.group.structures'),
				$this->getService('migrations.group.basicData'),
				$this->getService('migrations.group.dummyData'),
			],
			[
				'sql' => $this->getService('migrations.extensionHandler.sql'),
				'php' => $this->getService('migrations.extensionHandler.php'),
			]
		);
	}


	public function createServiceMigrations__continueCommand(): Nextras\Migrations\Bridges\SymfonyConsole\ContinueCommand
	{
		return new Nextras\Migrations\Bridges\SymfonyConsole\ContinueCommand(
			$this->getService('migrations.driver'),
			$this->getService('migrations.configuration')
		);
	}


	public function createServiceMigrations__createCommand(): Nextras\Migrations\Bridges\SymfonyConsole\CreateCommand
	{
		return new Nextras\Migrations\Bridges\SymfonyConsole\CreateCommand(
			$this->getService('migrations.driver'),
			$this->getService('migrations.configuration')
		);
	}


	public function createServiceMigrations__dbal(): Nextras\Migrations\IDbal
	{
		return new Nextras\Migrations\Bridges\NetteDatabase\NetteAdapter($this->getService('database.default.connection'));
	}


	public function createServiceMigrations__driver(): Nextras\Migrations\IDriver
	{
		return new Nextras\Migrations\Drivers\MySqlDriver($this->getService('migrations.dbal'));
	}


	public function createServiceMigrations__extensionHandler__php(): Nextras\Migrations\Extensions\PhpHandler
	{
		return new Nextras\Migrations\Extensions\PhpHandler([]);
	}


	public function createServiceMigrations__extensionHandler__sql(): Nextras\Migrations\Extensions\SqlHandler
	{
		return new Nextras\Migrations\Extensions\SqlHandler($this->getService('migrations.driver'));
	}


	public function createServiceMigrations__group__basicData(): Nextras\Migrations\Entities\Group
	{
		$service = new Nextras\Migrations\Entities\Group;
		$service->name = 'basic-data';
		$service->enabled = true;
		$service->directory = 'C:\laragon\www\nette\nette_bw\web_nette_bw\app/migrations/basic-data';
		$service->dependencies = ['structures'];
		$service->generator = null;
		return $service;
	}


	public function createServiceMigrations__group__dummyData(): Nextras\Migrations\Entities\Group
	{
		$service = new Nextras\Migrations\Entities\Group;
		$service->name = 'dummy-data';
		$service->enabled = true;
		$service->directory = 'C:\laragon\www\nette\nette_bw\web_nette_bw\app/migrations/dummy-data';
		$service->dependencies = ['structures', 'basic-data'];
		$service->generator = null;
		return $service;
	}


	public function createServiceMigrations__group__structures(): Nextras\Migrations\Entities\Group
	{
		$service = new Nextras\Migrations\Entities\Group;
		$service->name = 'structures';
		$service->enabled = true;
		$service->directory = 'C:\laragon\www\nette\nette_bw\web_nette_bw\app/migrations/structures';
		$service->dependencies = [];
		$service->generator = null;
		return $service;
	}


	public function createServiceMigrations__resetCommand(): Nextras\Migrations\Bridges\SymfonyConsole\ResetCommand
	{
		return new Nextras\Migrations\Bridges\SymfonyConsole\ResetCommand(
			$this->getService('migrations.driver'),
			$this->getService('migrations.configuration')
		);
	}


	public function createServiceMyTranslator(): App\Model\MyTranslator
	{
		return new App\Model\MyTranslator('sk');
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords('2y', ['cost' => 12]);
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			$this->getService('03'),
			$this->getService('06'),
			$this->getService('security.userStorage')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['readAndClose' => null, 'cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [
				new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer'), null),
				'send',
			];
		})();
	}
}
