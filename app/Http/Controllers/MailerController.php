<?php

namespace App\Http\Controllers;

use App\Models\Mailer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param  protected
     * 
     */
    public function __construct(protected Mailer $mailer){}

    public function sendMail(Request $request): JsonResponse
    {
        return new JsonResponse(['mailer' => $this->mailer->sendMail($request)], 200);
    }
}
