<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Store extends Model
{
    public $table;
    public $data;
    public $error;
    public $message;

    public function __construct() {
        $this->table = (Object) [
            'top' => 'top_stores',
            'best' => 'best_stores',
            'stores' => 'stores',
            'coupons' => 'coupons',
            'properties' => 'properties',
            'categories' => 'categories'
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
                case "top":
                    $this->data = DB::select("SELECT b.id, 
                        b.name, b.logo, b.alias, b.store_url, b.affiliate_url, 
                        c.id as c_id, c.title, c.currency, c.exclusive, c.expire_date, c.comment_count, c.discount, c.cash_back, c.coupon_code as code, 
                        c.coupon_type as type, c.coupon_image as image, d.foreign_key_right as go
                        FROM ".$this->table->top." as a
                        left join ".$this->table->stores." as b
                        on a.store_id = b.id
                        left join ".$this->table->coupons." as c
                        on a.coupon_id = c.id
                        left join ".$this->table->properties."  as d
                        on c.id = d.foreign_key_left
                        ORDER BY a.order ASC
                    ");
                    break;
                case "best":
                    $this->data = DB::select("SELECT b.id, 
                        b.name, b.logo, b.alias, b.store_url, b.affiliate_url, 
                        c.id as c_id, c.title, c.currency, c.exclusive, c.expire_date, c.comment_count, c.discount, c.cash_back, c.coupon_code as code, 
                        c.coupon_type as type, c.coupon_image as image, d.foreign_key_right as go
                        FROM ".$this->table->best." as a
                        left join ".$this->table->stores." as b
                        on a.store_id = b.id
                        left join ".$this->table->coupons." as c
                        on a.coupon_id = c.id
                        left join ".$this->table->properties."  as d
                        on c.id = d.foreign_key_left
                        ORDER BY a.order ASC limit 4
                    ");
                    break;
                case "latestcoupon":
                    $this->data = DB::select("SELECT b.id, 
                        b.name, b.logo, b.alias, b.store_url, b.affiliate_url, 
                        a.id as c_id, a.title, a.currency, a.exclusive, a.expire_date, a.comment_count, a.discount, a.cash_back, a.coupon_code as code, 
                        a.coupon_type as type, a.coupon_image as image, d.foreign_key_right as go
                        FROM ".$this->table->coupons." as a
                        left join ".$this->table->stores." as b
                        on a.store_id = b.id
                        left join ".$this->table->properties."  as d
                        on a.id = d.foreign_key_left
                        where a.coupon_type = 'Coupon Code' or a.coupon_type = 'Deal Type'
                        ORDER BY a.created_at DESC limit 10
                    ");
                    break;
                case "lateststore":
                    $this->data = DB::select("SELECT b.id, 
                        b.name, b.logo, b.alias, b.store_url, b.affiliate_url
                        FROM ".$this->table->stores." as b
                        where logo != ''
                        ORDER BY b.created_at DESC limit 12
                    ");
                    break;
                case "storedetail":
                    $this->data = DB::select("SELECT *
                        FROM ".$this->table->stores." 
                        where ".$target." = '".$value."'
                    ");
                    break;
                case "storecoupons":
                    $this->data = DB::select("SELECT b.id, 
                        b.name, b.logo, b.alias, b.store_url, b.affiliate_url, 
                        a.id as c_id, a.title, a.currency, a.exclusive, a.expire_date, a.comment_count, a.discount, a.cash_back, a.coupon_code as code, 
                        a.coupon_type as type, a.coupon_image as image, d.foreign_key_right as go, a.description
                        FROM ".$this->table->coupons." as a
                        left join ".$this->table->stores." as b
                        on a.store_id = b.id
                        left join ".$this->table->properties."  as d
                        on a.id = d.foreign_key_left
                        where (a.coupon_type = 'Coupon Code' 
                        or a.coupon_type = 'Deal Type' 
                        or a.coupon_type = 'Great Offer') and b.alias = '".$value."' and a.currency != '' and a.discount != ''
                        ORDER BY a.created_at DESC
                    ");
                    break;
                case "storefaqtips":
                    $this->data = DB::select("SELECT b.id, 
                        b.name, b.logo, b.alias, b.store_url, b.affiliate_url, 
                        a.id as c_id, a.title, a.currency, a.exclusive, a.expire_date, a.comment_count, a.discount, a.cash_back, a.coupon_code as code, 
                        a.coupon_type as type, a.coupon_image as image, d.foreign_key_right as go, a.description
                        FROM ".$this->table->coupons." as a
                        left join ".$this->table->stores." as b
                        on a.store_id = b.id
                        left join ".$this->table->properties."  as d
                        on a.id = d.foreign_key_left
                        where (a.coupon_type = 'FAQ' 
                        or a.coupon_type = 'Saving Tips') and b.alias = '".$value."'
                        ORDER BY a.created_at DESC
                    ");
                    break;
                case "storerandom4fromcategory":
                    $this->data = DB::select("SELECT *
                        FROM ".$this->table->stores." 
                        where status = 'published'
                        ORDER BY RANDOM()
                        LIMIT 4
                    ");
                    break;
                case "search":
                    $this->data = DB::select("SELECT *
                        FROM ".$this->table->stores." 
                        ".$value." and status = 'published'                        
                    ");
                    break;
                case "allcategories":
                    $this->data = DB::select("SELECT *
                        FROM ".$this->table->categories." 
                        where status = 'published'
                        order by alias asc                       
                    ");
                    break;
                case "getcategory":
                    $this->data = DB::select("SELECT *
                        FROM ".$this->table->categories." 
                        where status = 'published' and alias = '".$value."'             
                    ");
                    break;
                case "storesbycategory":
                    $this->data = DB::select("SELECT b.id, 
                        b.name, b.logo, b.alias, b.store_url, b.affiliate_url
                        FROM ".$this->table->stores." as b
                        where logo != '' and categories_id like '%".$value."%'
                        ORDER BY b.created_at DESC limit 60
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
