<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Register extends Model
{
    //
    protected $table="users";
    protected $primaryKey="id";
    public $timestamps = false;
    public static function sendUserEmail($user)
    {
        # code...
        $viewData['link_zoom'] = $user->link_zoom;
        $viewData['link_zoom'] = $user->email;
        Mail::send('email_templates.email_user_detail',$viewData, function ($m) use($user)
        {
            # code...
            $m->from('dimasqy.fahriz@gmail.com', env('APP_NAME'));
            $m->to($user->email)->subject($user->link_zoom);
        });
    }
}
