<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    // protected $table= "posts"; ده مثلا لو انت عامل جدول باسم عن اسم  موديل عاوزه موديل يتعرف عليه

    protected $fillable =['fname','lname'];
    //لازم تعرف حقول الادخال ال عندك داخل الموديل
    //protected $fillable =['fname','lname']; == protected $guarded=[];


    use SoftDeletes;
    //علشان يبقى عندك سجل بالحاجه ال اتمسحت من الداتا بيز


}
