<?php

namespace App\Http\Controllers\Frontend\Auth;

use Illuminate\Http\Request;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Helpers\Auth\SocialiteHelper;
use Laravel\Socialite\Facades\Socialite;
use App\Events\Frontend\Auth\UserLoggedIn;
use App\Repositories\Frontend\Auth\UserRepository;

class SocialLoginController extends Controller
{
    protected $userRepository;

    protected $socialiteHelper;

    public function __construct(UserRepository $userRepository, SocialiteHelper $socialiteHelper)
    {
        $this->userRepository = $userRepository;
        $this->socialiteHelper = $socialiteHelper;
    }

    public function login(Request $request, $provider)
    {
        $user = null;


        if (! in_array($provider, $this->socialiteHelper->getAcceptedProviders(), true)) {
            return redirect()->route(home_route())->withFlashDanger(__('auth.socialite.unacceptable', ['provider' => e($provider)]));
        }

        if (! $request->all()) {
            return $this->getAuthorizationFirst($provider);
        }


        try {
            $user = $this->userRepository->findOrCreateProvider($this->getProviderUser($provider), $provider);
        } catch (GeneralException $e) {
            return redirect()->route(home_route())->withFlashDanger($e->getMessage());
        }

        if ($user === null) {
            return redirect()->route(home_route())->withFlashDanger(__('exceptions.frontend.auth.unknown'));
        }


        if (! $user->isActive()) {
            throw new GeneralException(__('exceptions.frontend.auth.deactivated'));
        }


        if ($user->isPending()) {
            throw new GeneralException(__('exceptions.frontend.auth.confirmation.pending'));
        }

        auth()->login($user, true);

        session([config('access.socialite_session_name') => $provider]);

        event(new UserLoggedIn(auth()->user()));

        return redirect()->intended(route(home_route()));
    }

    protected function getAuthorizationFirst($provider)
    {
        $socialite = Socialite::driver($provider);
        $scopes = empty(config("services.{$provider}.scopes")) ? false : config("services.{$provider}.scopes");
        $with = empty(config("services.{$provider}.with")) ? false : config("services.{$provider}.with");
        $fields = empty(config("services.{$provider}.fields")) ? false : config("services.{$provider}.fields");

        if ($scopes) {
            $socialite->scopes($scopes);
        }

        if ($with) {
            $socialite->with($with);
        }

        if ($fields) {
            $socialite->fields($fields);
        }

        return $socialite->redirect();
    }

    protected function getProviderUser($provider)
    {
        return Socialite::driver($provider)->user();
    }
}
