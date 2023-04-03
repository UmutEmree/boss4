<?php



namespace App;



use Illuminate\Database\Eloquent\Model;





class Contact extends Model

{

    protected $fillable = ['name', 'email','phone','mesaj','utm_source','utm_medium','kvkk'];

}

