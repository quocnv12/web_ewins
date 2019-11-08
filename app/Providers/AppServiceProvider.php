<?php

namespace App\Providers;
use App\models\{support,cate_new,cate_service,talentwins,inforcompany,product};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        if(! $this->app->runningInConsole()) {
            // View::share('partner', DB::table('partner')->where('status', 1)->get());
            // View::share('follow',DB::table('follow')->where('status',1)->get());
            // $mess = DB::table('contacts')->count();
            // view()->share('mess', $mess);
            // $contact = DB::table('contacts')->orderBy('id', 'DESC')->get();
            // view()->share('contact', $contact);
            // $contacts = DB::table('change_contacts')->orderBy('id', 'DESC')->limit(1)->get();
            // view()->share('contacts', $contacts);
            // view()->share('cate_products', DB::table('cate_products_lv1')->orderBy('id', 'DESC')->get());
            // view()->share('cate_product_lv2', DB::table('cate_products_lv2')->orderBy('id', 'DESC')->get());
            // $cate_news = DB::table('cate_news')->orderBy('id', 'DESC')->get();
            // view()->share('cate_news', $cate_news);
            // $cate_menu = DB::table('cate_menu')->orderBy('id', 'DESC')->get();
            // view()->share('cate_menu', $cate_menu);
            // view()->share('introduces', DB::table('introduces')->orderBy('id', 'desc')->first());
            // $data['support']=support::all();
            view()->share('support', support::all());
            view()->share('cate_new', cate_new::all());
            view()->share('cate_service', cate_service::all());
            view()->share('talentwins', talentwins::all());
            view()->share('infocompany', inforcompany::all());
            view()->share('product', product::all());


        }
    }
}
