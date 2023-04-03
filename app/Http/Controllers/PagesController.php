<?php



namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;



class PagesController extends Controller

{

    public function index(){

        $locale = \App::currentLocale();
        $sliders = \App\Slider::with('translations')->orderby('priority','asc')->get();
       
        return view('home.index')->with(compact('sliders','locale'));

    }


    public function about(){

        $locale = \App::currentLocale();

        $about = \TCG\Voyager\Models\Page::with('translations')->where('slug','hakkimizda')->first();
        $mission = \TCG\Voyager\Models\Page::with('translations')->where('slug','vizyon-misyon')->first();

        return view('about.index')->with(compact('about','mission','locale'));

    }

    public function management(){

        $locale = \App::currentLocale();

        $managements = \App\Management::with('translations')->orderby('sort','asc')->get();

        return view('about.management')->with(compact('managements','locale'));

    }


    public function projects($slug){

        $locale = \App::currentLocale();

        $category = \TCG\Voyager\Models\Category::with('translations')->where('slug',$slug)->first();
        $projects = \App\Project::with('translations')->where('category_id',$category->slug)->orderby('priority','asc')->get();

        return view('projects.index')->with(compact('projects','category','locale'));

    }

    public function projectDetail($slug){

        $locale = \App::currentLocale();

        $project = \App\Project::with('translations','images')->where('slug',$slug)->first();

        return view('projects.detail')->with(compact('project','locale'));

    }

    public function presidentMessage(){

        $locale = \App::currentLocale();

        $president = \TCG\Voyager\Models\Page::with('translations')->where('slug','baskanin-mesaji')->first();

        return view('about.president-message')->with(compact('president','locale'));

    }

     public function managementDetail($slug){

        $locale = \App::currentLocale();

        $management = \App\Management::with('translations')->where('slug',$slug)->first();

        return view('about.management-detail')->with(compact('management','locale'));

    }

    public function press(){

        $locale = \App::currentLocale();
        $video = \App\Video::orderby('date','desc')->where('category','haber')->get();
        $press = \App\Press::orderby('date','desc')->get();
        $links = \App\Link::orderby('date','desc')->get();

        return view('media.press')->with(compact('press','links','video','locale'));

    }

    public function news(){

        $locale = \App::currentLocale();

        $news = \TCG\Voyager\Models\Post::with('translations')->orderby('date','desc')->get();

        return view('media.news')->with(compact('news','locale'));

    }

    public function newsDetail($slug){

        $locale = \App::currentLocale();

        $news = \TCG\Voyager\Models\Post::with('translations')->where('slug',$slug)->first();

        return view('media.news-detail')->with(compact('news','locale'));

    }

    public function video(){

        $locale = \App::currentLocale();

        $video = \App\Video::orderby('date','desc')->where('category','reklam')->get();

        return view('media.video')->with(compact('video','locale'));

    }


    public function aydinlatma(){

        $locale = \App::currentLocale();

        $kvkk = \TCG\Voyager\Models\Page::with('translations')->where('slug','kisisel-verilere-iliskin-aydinlatma-metni')->first();

        return view('about.kvkk')->with(compact('kvkk','locale'));

    }

    public function gizlilik(){

        $locale = \App::currentLocale();

        $gizlilik = \TCG\Voyager\Models\Page::with('translations')->where('slug','gizlilik-politikasi')->first();

        return view('about.gizlilik')->with(compact('gizlilik','locale'));

    }

    public function insanKaynaklari(){

        $locale = \App::currentLocale();

        $insan = \TCG\Voyager\Models\Page::with('translations')->where('slug','insan-kaynaklari-politikamiz')->first();

        return view('carrier.index')->with(compact('insan','locale'));

    }



    public function contact(){



        return view('contact.index');

    }



    public function contactSend(Request $request){

			

        $input = $request->except('_method', '_token');

        

        $this->validate($request,[

            'name' => 'required:min3',

            'phone' => 'required:min3',

            'email' => 'required'

            ]);



        \App\Contact::create($request->all());



       

         Mail::send('emails.contact', $input, function($message) use ($input)

       {

           $message->from('info@boss4.com.tr', "İletişim Formu");

           $message->subject("İletişim Talep Formu");

           $message->to('duygu@boss4.com.tr');
           $message->cc(['deniz@boss4.com.tr','huseyin@boss4.com.tr','nour@boss4.com.tr']);

       });

       

    return redirect('iletisim')->with('status', 'Mesajınız Gönderildi! En Kısa Sürede Tarafınıza Dönüş Sağlanacaktır.');



    }



    public function tesekkurler(){



        return view('landing-page.tesekkurler');

    }

}