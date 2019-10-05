<?php

use Illuminate\Database\Seeder;

class Qltv_ThuthuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create('vi_VN'); //location ISO
        $list = [];
        $dsNganh = DB::table('qltv_nganh')->pluck('id'); //SELECT id From qltv_nganh
        $types = ["Hiếu", "Khang", "Hùng", "Tuấn", "Giang", "Anh", "Hà", "Kiều", "Phượng"];
        $types1 = ["Anh", "Văn", "Hải", "Ngọc", "Thị", "Kim", "Bảo", "Gia", "Hoàng"];
        $types2 = ["Phạm", "Nguyễn", "Lê", "Trịnh", "Trần", "Huỳnh", "Phan", "Trương", "Dương"];
        $types3 = ["Nam", "Nữ"];
        $types4 = ["Giảng Viên", "Sinh Viên"];
        sort($types);
        for ($i=1; $i <= 10; $i++) {
            array_push($list, [
                'id'                => $i,
                'mathuthu'          => $faker->numerify('TT_######'),
                'tenthuthu'         => $faker->randomElement($types1),
                'chucvu'            => $faker->randomElement($types4),
                'gioitinh'          => $faker->randomElement($types3),
                'namsinh'           => $faker->year($max = 'now'),
                'diachi'            => $faker->address(),
                'sdt'               => $faker->PhoneNumber(),
                'email'             => $faker->email(),
                'quequan'           => $faker->country(),
                'anh'               => $faker->imageUrl(300, 300),

                //khoas ngoai
                'nganh_id'       => $faker->randomElement($dsNganh)
                
            ]);
        }
        DB::table('Qltv_thuthu')->insert($list);
    }
}
