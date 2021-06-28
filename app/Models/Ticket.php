<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';//dont know why parent isnt set this value

    public function save(array $options = [])
    {
        $uidPrefix = mb_substr(Auth::user()->name, 0, 3) . '-';
        $count = DB::table($this->table)->where('uid', 'like', $uidPrefix . '%')->count();
        $this->uid = $uidPrefix . ($count + 1);
        $this->adminId = Auth::user()->id;
        return parent::save($options);
    }
}
