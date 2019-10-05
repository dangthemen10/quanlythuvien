<?php

use Illuminate\Database\Seeder;

class Qltv_NganhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mượn thư viện faker để tạo dữ liệu ảo
        $faker =Faker\Factory::create('vi_VN'); //location ISO
        $list = [];
        $dsKhoa = DB::table('qltv_khoa')->pluck('id'); //SELECT id From qltv_khoa
        $types = ["Khoa học máy tính", "Mạng máy tính và truyền thông dữ liệu", "Kỹ thuật phần mềm", "Hệ thống thông tin", "Công nghệ thông tin", "Tin học ứng dụng", "Công nghệ thông tin - HA", "Công nghệ thông tin - CLC", "Sư phạm Sinh học", "Sư phạm Hóa học", "Sư phạm Địa lý", "Sư phạm Ngữ văn", "Sư phạm Lịch sử", "Giáo dục Tiểu học", "Giáo dục thể chất", "Giáo dục công dân", "Kế toán", "Kiểm toán", "Kinh doanh nông nghiệp", "Kinh doanh quốc tế", "Kinh tế", "Kinh doanh thương mại", "Marketing", "Quản trị dịch vụ DL và lữ hành", "Quản trị kinh doanh", "Công nghệ kỹ thuật hóa học", "Cơ khí chế biến", "Cơ khí chế tạo máy", "Kỹ thuật điện", "Kỹ thuật cơ - điện tử", "Cơ khí ôtô", "Kỹ thuật điện tử - viễn thông", "KT điều khiển và tự động hóa", "Kỹ thuật máy tính", "Kỹ thuật Vật liệu", "Kỹ thuật xây dựng", "KTXD công trình giao thông", "Quản lý công nghiệp", "KT xây dựng công trình thủy", "QL tài nguyên và môi trường", "Khoa học môi trường", "Kỹ thuật môi trường", "Kỹ thuật tài nguyên nước", "Quản lý đất đai", "Chính trị học", "Triết học", "Luật Hành chính", "Luật Thương mại", "Luật Tư pháp", "Ngôn ngữ Anh", "Ngôn ngữ Pháp", "Phiên dịch-Biên dịch tiếng Anh", "Việt Nam học", "Văn học", "Thông tin - Thư viện", "Bảo vệ thực vật", "Chăn nuôi", "Công nghệ giống cây trồng", "Công nghệ sau thu hoạch", "Dược Thú y", "CN rau hoa quả và cảnh quan", "Công nghệ thực phẩm", "Khoa học cây trồng", "Nông học", "Nông nghiệp công nghệ cao", "Phát triển nông thôn", "Quản lý đất và CN phân bón", "Sinh học ứng dụng", "Thú y", "Công nghệ sinh học", "Công nghệ Sinh học - CTTT", "Hóa dược", "Hóa học", "Vi sinh vật học", "Vật lý kỹ thuật", "Toán ứng dụng", "Sinh học", "Quản lý thủy sản", "Nuôi trồng thủy sản", "Công nghệ chế biến thủy sản", "Bệnh học thủy sản"];
        $today = new DateTime('2019-01-01 08:00:00');
        for ($i=1; $i <= 81; $i++) {
            array_push($list, [
                'id'        => $i,
                'manganh'     => 'Nganh'.$i,
                'tennganh'    => $types[$i-1],
                
                //khoas ngoai
                'khoa_id'       => $faker->randomElement($dsKhoa)
            ]);
        }
        DB::table('qltv_nganh')->insert($list);
    }
}
