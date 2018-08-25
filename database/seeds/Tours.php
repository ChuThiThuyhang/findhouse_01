<?php

use Illuminate\Database\Seeder;

class Tours extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tours')->insert([
            'name' => 'Đà Nẵng - Bà Nà - Hội An - La Vang - Động Phong Nha - Huế',
            'start_at' => '2018/08/10',
            'stay_date_number' => '10',
            'price' => '20000',
            'rate_id' => '2',
            'description' => 'Quý khách tập trung tại Ga đi Trong Nước, sân bay Tân Sơn Nhất, Hướng dẫn viên làm thủ tục cho Quý khách đáp chuyến bay đi Đà Nẵng tham quan:- Ngũ Hành Sơn - Động Tàng Chơn, Động Hoa Nghiêm, Chùa Non Nước,...- Bán đảo Sơn Trà và Chùa Linh Ứng 3 - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam.- Bãi biển Mỹ Khê – Quý khách tự do tắm và dạo biển tại một trong những bãi biển quyến rũ nhất hành tinh- Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…Tự do Thưởng thức trà & bánh cookie Reaching Out Tea House quán trà đặc biệt của hội những người khuyết tật, thả đèn hoa đăng cầu phúc lộc trên dòng sông Hoài…. (chi phí tự túc). Đoàn quay về và nghỉ đêm tại Đà Nẵng.',
            'image' => 'my-khe-sunrise-Hai-Nguyen-768x511.jpg',
            'slot' => '10',
            'transport' => 'oto',
            'priceKid' => '10000',
            'type' => 'tour tiết kiệm',
        ]);

}
}
