<?php

use Illuminate\Database\Seeder;
use App\title_new;
class News extends Seeder
{
    public function insert($img,$title)
    {
        $new = New title_new([
            'img_src' => $img,
            'title' => $title
        ]);      
        $new->save();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_img = ['img/New1.jpg','img/New2.jpg','img/New3.jpg','img/New4.jpg'];
        $arr_title = ['外交官打臉口譯哥，暴月薪28萬','驚!巴黎市區恐怖爆炸，傳多人受傷','外送車撞車，10人傷亡','酒店裸照曝？童仲彥貼「大肌肌」澄清'];

        for($i=0;$i<count($arr_img);$i++)
        {
            $this->insert($arr_img[$i],$arr_title[$i]);
        }
    }


}
