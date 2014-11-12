<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mailers\AdminMailer;

class PagesController extends Controller {

	/**
	 * Show homepage
	 * @Get("/")
	 * @return \Illuminate\View\View
     */
	public function showHome()
	{
		return view('pages.home');
	}

	/**
	 * Show about page
	 * @Get("about")
	 * @return \Illuminate\View\View
	 */
	public function showAbout()
	{
		return view('pages.about');
	}

	/**
	 * Show delivery page
	 * @Get("delivery")
	 * @return \Illuminate\View\View
	 */
	public function showDelivery()
	{
		return view('pages.delivery');
	}

	/**
	 * Show contact page
	 * @Get("contact")
	 * @return \Illuminate\View\View
	 */
	public function showContact()
	{
		return view('pages.contact');
	}

	/**
	 * @Post("contact", as="contact_path")
	 * @Middleware("csrf")
	 * @param ContactFormRequest $request
	 * @param AdminMailer $mailer
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function postContactMessage(ContactFormRequest $request, AdminMailer $mailer)
	{
		$message = $request->message;
		$sender = $request->name;
		$from = ['address' =>$request->email, 'name' => $request->name];
		$phone = $request->get('phone', 'not given');
		if($phone == "")
		{
			$phone = 'Not given';
		}

		$mailer->contactMessage($message, $sender, $phone, $from);

		return redirect("/");
	}

}
