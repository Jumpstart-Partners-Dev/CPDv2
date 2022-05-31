<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    public $table;
    public $data;
    public $error;
    public $message;

    public function __construct() {
        $this->table = (Object) [
            'blogs' => 'blogs',
        ];
    }

    public function C($data) {
        try {
            //code

            $this->error = false;
        } catch (Throwable $th) {
            $this->error = true;
            $this->message = $th;
        }
        echo $this->message;
        return $this;
    }

    public function R($type, $target = null, $value = null) {
        try {
            switch ($type) {
                case "blogs":
                    $this->data = DB::select("select * from ".$this->table->blogs." where status = 'published' order by created_at desc
                    ");
                    break;
                case "blog":
                    $this->data = DB::select("select * from ".$this->table->blogs." where ".$target." = '".$value."'
                    ");
                    break;
            }

            $this->error = false;
        } catch (Throwable $th) {
            $this->error = true;
            $this->message = $th;
        }

        return $this;
    }

    public function U($id, $data) {
        try {
            //code
        
            $this->error = false;
        } catch (Throwable $th) {
            $this->error = true;
            $this->message = $th;
        }

        return $this;
    }

    public function D($id) {
        try {
            //code

            $this->error = false;
        } catch (Throwable $th) {
            $this->error = true;
            $this->message = $th;
        }
    }

    public function get () {
        return $this->data;
    }

    public function first() {
        return $this->data[0];
    }
}
