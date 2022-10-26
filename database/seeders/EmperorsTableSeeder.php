<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmperorsTableSeeder extends Seeder
{
    public function generateRandomEmperors() {
        $positions = ['秦始皇 秦王政','秦二世 胡亥','秦三世 子嬰','漢高祖 劉邦','漢惠帝 劉盈','漢文帝 劉恆',
        '漢景帝 劉啟','漢武帝 劉徹','漢昭帝 劉弗陵','昌邑王 劉賀','漢宣帝 劉詢','漢元帝 劉奭','漢成帝 劉驁',
        '漢哀帝 劉欣','漢平帝 劉箕子','孺子嬰 劉嬰','新朝 王莽','漢光武帝 劉秀','漢明帝 劉莊','漢章帝 劉炟',
        '漢和帝 劉肇','漢殤帝 劉隆','漢安帝 劉祜','漢順帝 劉保','漢沖帝 劉炳','漢質帝 劉纘','漢桓帝 劉志',
        '漢靈帝 劉宏','漢少帝 劉辯','漢獻帝 劉協','漢昭烈帝 劉備','蜀漢後主 劉禪','魏文帝 曹丕','魏明帝 曹叡',
        '曹魏齊王 曹芳','曹魏高貴鄉公 曹髦','魏元帝 曹奐','吳大帝 孫權','吳廢帝 孫亮','吳景帝 孫休','吳末帝 孫皓',
        '晉武帝 司馬炎','晉惠帝 司馬衷','晉懷帝 司馬熾','晉愍帝 司馬鄴','晉元帝 司馬睿','晉明帝 司馬紹',
        '晉成帝 司馬衍','晉康帝 司馬岳','晉穆帝 司馬聃','晉哀帝 司馬丕','晉廢帝 司馬奕','晉簡文帝 司馬昱',
        '晉孝武帝 司馬曜','晉安帝 司馬德宗','晉恭帝 司馬德文','楚武悼帝 桓玄','成武帝 李雄','成戾太子 李班',
        '成幽公 李期','漢昭文帝 李壽','後趙明帝 石勒','後趙海陽王 石弘','後趙武帝 石虎','後趙譙王 石世',
        '前燕文明帝 慕容皝','前燕景昭帝 慕容儁','前燕幽帝 慕容暐','西燕威帝 慕容沖','後燕成武帝 慕容垂',
        '後燕惠愍帝 慕容寶','後燕昭武帝 慕容盛','後燕昭文帝 慕容熙','南燕獻武帝 慕容德','南燕末主 慕容超',
        '後涼懿武帝 呂光','前秦明帝 苻健','前秦厲王 苻生','前秦宣昭帝 苻堅','前秦高帝 苻登','後秦武昭帝 姚萇',
        '後秦文桓帝 姚興','後秦末主 姚泓','夏武烈帝 赫連勃勃','宋武帝 劉裕','宋少帝 劉義符','宋文帝 劉義隆',
        '宋元兇 劉劭','宋孝武帝 劉駿','宋前廢帝 劉子業','宋明帝 劉彧','宋後廢帝 劉昱','宋順帝 劉准',
        '齊高帝 蕭道成','齊武帝 蕭賾','齊鬱林王 蕭昭業','齊海陵王 蕭昭文','齊明帝 蕭鸞','齊東昏侯 蕭寶卷',
        '齊和帝 蕭寶融','梁武帝 蕭衍','梁簡文帝 蕭綱','梁元帝 蕭繹','梁敬帝 蕭方智','梁武陵貞獻王 蕭紀',
        '梁永嘉王 蕭莊','梁宣帝 蕭詧','梁明帝 蕭巋','陳武帝 陳霸先','陳文帝 陳蒨','陳廢帝 陳伯宗','陳宣帝 陳頊',
        '陳後主 陳叔寶'];
        return $positions[rand(0, count($positions)-1)];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<100; $i++)
        {
            $Emperors=$this->generateRandomEmperors();
            DB::table('emperors')->insert([
                'emperor_name' => $Emperors,
                'dynasty_id' => rand(1,9),
                'emperor_life' => rand(1,100),
                'emperor_start_year' => rand(221,320),
                'emperor_end_year' => rand(328,589),
            ]);   
        }
        
    }
}
