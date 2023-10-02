<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = [
            ['login'=> 'admin', 'password' => 'admin'],
        ];

        $products = array(
            array('id' => '1','productName' => 'ring111','productDescription' => 'rthjn jytk','productCount'=>5, 'productPrice' => '450.00','category_id' => '8','productCode' => 'product_23-09-27 13:47:13','created_at' => '2023-09-27 13:13:47','updated_at' => '2023-09-27 13:13:47'),
            array('id' => '2','productName' => 'ring222','productDescription' => 'tfkumfyu','productCount'=>24,'productPrice' => '890.00','category_id' => '8','productCode' => 'product_23-09-27 13:48:14','created_at' => '2023-09-27 13:14:48','updated_at' => '2023-09-27 13:14:48'),
            array('id' => '3','productName' => 'ring333444','productDescription' => 'ftjnty','productCount'=>7,'productPrice' => '900.00','category_id' => '8','productCode' => 'product_23-09-27 13:18:15','created_at' => '2023-09-27 13:15:18','updated_at' => '2023-09-27 13:15:18'),
            array('id' => '4','productName' => 'ring555','productDescription' => 'trhdx grfxnh','productCount'=>2,'productPrice' => '860.00','category_id' => '8','productCode' => 'product_23-09-27 13:42:15','created_at' => '2023-09-27 13:15:42','updated_at' => '2023-09-27 13:15:42'),
            array('id' => '5','productName' => 'caff1122','productDescription' => 'htjnr fgn','productCount'=>150,'productPrice' => '500.00','category_id' => '9','productCode' => 'product_23-09-27 13:52:16','created_at' => '2023-09-27 13:16:52','updated_at' => '2023-09-27 13:16:52'),
            array('id' => '6','productName' => 'caff33','productDescription' => 'rhtnj','productCount'=>59,'productPrice' => '830.00','category_id' => '9','productCode' => 'product_23-09-27 13:22:17','created_at' => '2023-09-27 13:17:22','updated_at' => '2023-09-27 13:17:22'),
            array('id' => '7','productName' => 'necklace111222','productDescription' => 'ergh','productCount'=>10,'productPrice' => '900.00','category_id' => '7','productCode' => 'product_23-09-27 13:04:18','created_at' => '2023-09-27 13:18:04','updated_at' => '2023-09-27 13:18:04'),
            array('id' => '8','productName' => 'necklace333444','productDescription' => 'jy','productCount'=>2,'productPrice' => '810.00','category_id' => '7','productCode' => 'product_23-09-27 13:51:18','created_at' => '2023-09-27 13:18:51','updated_at' => '2023-09-27 13:18:51'),
            array('id' => '9','productName' => 'earring 7','productDescription' => 'dfgsdg sdg','productCount'=>1,'productPrice' => '1000.00','category_id' => '5','productCode' => 'product_23-09-29 10:41:24','created_at' => '2023-09-29 10:24:41','updated_at' => '2023-09-29 10:24:41')
        );

        $product_images = array(
            array('id' => '1','productImage' => '26b5c17ea5dc8e47e1ec78b3afce9e2d.jpg','product_id' => '1','created_at' => '2023-09-27 13:13:47','updated_at' => '2023-09-27 13:13:47'),
            array('id' => '2','productImage' => '3c33859502174f55be302b3e10edce25.jpg','product_id' => '2','created_at' => '2023-09-27 13:14:48','updated_at' => '2023-09-27 13:14:48'),
            array('id' => '3','productImage' => '78eda08253b5ef1311a448e022949f2e.jpg','product_id' => '3','created_at' => '2023-09-27 13:15:18','updated_at' => '2023-09-27 13:15:18'),
            array('id' => '4','productImage' => '27efc59f02765ef06275fc1dbdb0b0e2.jpg','product_id' => '4','created_at' => '2023-09-27 13:15:42','updated_at' => '2023-09-27 13:15:42'),
            array('id' => '5','productImage' => 'fac22f8d02787f6345e6ddc14db24e04.jpg','product_id' => '5','created_at' => '2023-09-27 13:16:52','updated_at' => '2023-09-27 13:16:52'),
            array('id' => '6','productImage' => 'e71d3ac62e1b5ccf5a6433120125f706.jpg','product_id' => '6','created_at' => '2023-09-27 13:17:22','updated_at' => '2023-09-27 13:17:22'),
            array('id' => '7','productImage' => 'cb4ef942cf1159ba156553356c723223.jpg','product_id' => '7','created_at' => '2023-09-27 13:18:04','updated_at' => '2023-09-27 13:18:04'),
            array('id' => '8','productImage' => 'a49c630dd0a001bd06a441f6dee33ce6.jpg','product_id' => '8','created_at' => '2023-09-27 13:18:51','updated_at' => '2023-09-27 13:18:51'),
            array('id' => '9','productImage' => '05cd346e52045809ea7d1b6386d77ca2.jpg','product_id' => '9','created_at' => '2023-09-29 10:24:41','updated_at' => '2023-09-29 10:24:41'),
            array('id' => '10','productImage' => '697263d2bbc58321091f5f7ff6a66d5c.jpg','product_id' => '9','created_at' => '2023-09-29 10:24:42','updated_at' => '2023-09-29 10:24:42'),
            array('id' => '11','productImage' => 'b528caee0680a61292d1ab4f613e7b7f.jpg','product_id' => '9','created_at' => '2023-09-29 10:24:43','updated_at' => '2023-09-29 10:24:43')
        );

        $users = array(
            array('id' => '3','firstName' => 'Miqayel','lastName' => 'Gabrielyan','email' => 'miq@gmail.com','password' => '$2y$10$nk6cd3ug1qen8nFpiUkRpOn/utZRsJuLNnCkG1y.dBpdtpgUb5CWy','gender' => 'male','avatar' => '664e2c6c3e74bde67bde23afa3381aa2.jpg','dateOfBirth' => '2002-05-08','created_at' => '2023-09-29 13:27:22','updated_at' => '2023-09-30 12:27:29'),
            array('id' => '4','firstName' => 'Qristine','lastName' => 'Avetisyan','email' => 'qis@mail.ru','password' => '$2y$10$WmzlMFhzmyU0P9x14seQnuYA/iWgLvIR.0CredDx6TVoxvACcH86W','gender' => 'female','avatar' => '4bc01d27177594273401dde75d638b7d.jpg','dateOfBirth' => '2001-01-23','created_at' => '2023-09-30 08:27:10','updated_at' => '2023-09-30 11:28:05')
        );

        $categories = array(
            array('id' => '5','categoryName' => 'Earrings','categoryImage' => '89fca257585fa42ca1d2f32dd4491621.jpg','created_at' => '2023-09-27 12:02:16','updated_at' => '2023-09-27 12:02:16'),
            array('id' => '6','categoryName' => 'Braslet','categoryImage' => 'a72f6537fa9731a54357877568f7445f.jpg','created_at' => '2023-09-27 12:03:12','updated_at' => '2023-09-27 12:03:12'),
            array('id' => '7','categoryName' => 'Necklace','categoryImage' => 'cb053a9a489492089357fee3216bb36f.jpg','created_at' => '2023-09-27 12:04:18','updated_at' => '2023-09-27 12:04:18'),
            array('id' => '8','categoryName' => 'Ring','categoryImage' => 'b6c1c0ca6688a368c72b053f58c73f26.jpg','created_at' => '2023-09-27 12:04:38','updated_at' => '2023-09-27 12:04:38'),
            array('id' => '9','categoryName' => 'Caff','categoryImage' => 'afedf324a2da9d8ebf6691d077adc65f.jpg','created_at' => '2023-09-27 12:05:04','updated_at' => '2023-09-27 12:05:04'),
            array('id' => '10','categoryName' => 'Watch','categoryImage' => 'dbe0259da874109b5716b6e8f01532d1.jpg','created_at' => '2023-09-27 12:05:20','updated_at' => '2023-09-27 12:05:20'),
            array('id' => '11','categoryName' => 'Crown','categoryImage' => 'a6084303635e7796456994a9e4dcd155.jpg','created_at' => '2023-09-27 12:05:44','updated_at' => '2023-09-27 12:05:44'),
            array('id' => '12','categoryName' => 'Glasses','categoryImage' => '71fa22bf6680e41c5a8364ca48b61347.jpg','created_at' => '2023-09-27 12:06:07','updated_at' => '2023-09-27 12:06:07'),
            array('id' => '13','categoryName' => 'Jewel','categoryImage' => '1dd54eaeb70b2b307de74e89e6184f3b.jpg','created_at' => '2023-09-27 12:06:52','updated_at' => '2023-09-27 12:06:52'),
            array('id' => '14','categoryName' => 'Other','categoryImage' => 'dd443870ecac5255eb26778ed10508d9.jpg','created_at' => '2023-09-27 12:07:11','updated_at' => '2023-09-27 12:07:11')
        );


        DB::table('admins')->insert($admin);
        DB::table('users')->insert($users);
        DB::table('categories')->insert($categories);
        DB::table('products')->insert($products);
        DB::table('product_images')->insert($product_images);

    }
}
