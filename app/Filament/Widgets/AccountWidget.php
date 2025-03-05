<?php
namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;


class AccountWidget extends Widget
{
    protected static string $view = 'filament.widgets.account-widget';


    public $localeEn;
    public $localId;

    public function mount()
    {
        $locale = App::getLocale();
        if($locale == 'id') {$this->localId = 'id';
        } else $this->localeEn = 'en';
    }
    public function switchLocale($locale)
    {
        if($locale == 'id') {$this->localId = '';
        } else $this->localeEn = '';
        

        

        $validLocales = ['en', 'id'];
        if(in_array($locale, $validLocales)) {
            Session::put('locale', $validLocales);
            App::setLocale($locale);
    }
}
}

