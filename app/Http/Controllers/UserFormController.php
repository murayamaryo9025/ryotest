public function store(Request $request)
    {
        $name = $request->input('name');
        //nameはフォームに登録されている値
        $title = $request->input('title');
        $email = $request->input('email');

        //$input = $request->all();
        //全てのデータを取ってくる場合
    }

    use App\Models\UserForm; //useで呼び込む

public function store(Request $request)
    {

        $user = new UserForm; // インスタンス化

        $user->name = $request->input('name');
        //your_nameはフォームに登録されている値
        $user->email = $request->input('email');

        $contact->save(); 保存

        return redirect('contact/index'); //最初の画面に戻す
    }
