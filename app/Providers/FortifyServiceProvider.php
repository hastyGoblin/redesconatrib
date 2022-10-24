<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\cat_redesconatrib; 
use App\Models\entidadfederativa;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    } 

    /**
     * Bootstrap any application services.
     *
     * @return void 
     */ 
    public function boot()
    {
        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::registerView(function(){
            $redes = cat_redesconatrib::where('activo','=','1')->get();
            $entidad = entidadfederativa::where('activo','=','1')->get();
            return view('auth.register')->with('rconatrib', $redes)->with('entidades', $entidad);
        });


        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.passwords.email');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('auth.passwords.reset', ['request' => $request]);
        });
        
        $this->app->singleton(
            \Laravel\Fortify\Contracts\LoginResponse::class,
            \App\Http\Responses\LoginResponse::class,
        );

        $this->app->singleton(
            \Laravel\Fortify\Contracts\RegisterResponse::class,
            \App\Http\Responses\RegisterResponse::class,
        );

        $this->app->singleton(
            \Laravel\Fortify\Contracts\LogoutResponse::class,
            \App\Http\Responses\LogoutResponse::class,
        );

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)-> where ('activo','=','1')-> first();

            if ($user &&
                Hash::check($request->password, $user->password)) {
                    return $user;
            }
        });

        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
