<?php

declare(strict_types=1);

namespace App\Presenters;


use Nette\Application\UI\Presenter;
use Nette\Mail\Mailer;
use Nette\Mail\Message;


final class HomepagePresenter extends Presenter
{

	/**
	 * @inject
	 * @var Mailer
	 */
	public $mailer;

	public function actionDefault()
	{

		$this->mailer->send(
			(new Message())
				->addTo('email@emai.com')
				->setFrom('email@email.com')
				->setHtmlBody('<p>hello [[there]] obi wan</p>', __DIR__)
		);
		$this->terminate();

	}
}
