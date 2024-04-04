use Illuminate\Support\Facades\DB;//クエリビルダ

//省略

 public function index()
    {
        //エロクワント ORマッパー
        //$contacts = contactForm::all();

        //クエリビルダ
       $contacts =  DB::table('contact_forms')->select('id','your_name')->get();
        dd($contacts);

        return view('contact.index',compact('contacts'));
    }