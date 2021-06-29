<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'name' => 'Đồ chơi siêu nhân',
                'Price' => '10000'
            ],

            [
                'name' => 'Đồ chơi máy bay',
                'Price' => '12000'
            ],

            [
                'name' => 'Đồ chơi bút vẽ',
                'Price' => '14000'
            ],

            [
                'name' => 'Đồ chơi bảng chữ cái',
                'Price' => '15000'
            ],

            [
                'name' => 'Đồ chơi trí tuệ',
                'Price' => '13000'
            ],

            [
                'name' => 'Đồ chơi xếp hình',
                'Price' => '12000'
            ],

            [
                'name' => 'Đồ chơi máy bong bóng',
                'Price' => '1000'
            ],

            [
                'name' => 'Đồ chơi máy xúc ',
                'Price' => '17000'
            ],

            [
                'name' => 'Đồ chơi ô tô',
                'Price' => '18000'
            ],
            [
                'name' => 'Đồ chơi điều khiển',
                'Price' => '20000'
            ],

        ]);
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [

                'name' => 'Đặng Văn Long',
                'Address' => 'Thanh Hóa'
            ],

            [
                'name' => 'Đặng Văn Tuấn',
                'Address' => 'Thanh Hóa'
            ],

            [
                'name' => 'Đặng Văn Tình',
                'Address' => 'Thanh Hóa'
            ],

            [
                'name' => 'Đặng Văn Anh',
                'Address' => 'Thanh Hóa'
            ],

            [
                'name' => 'Đặng Văn Thắng',
                'Address' => 'Thanh Hóa'
            ],
        ]);
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'createdAt' => '29/06/2021',
                'customerId' => '0'
            ],
            [
                'createdAt' => '28/06/2021',
                'customerId' => '1'
            ],
            [
                'createdAt' => '27/06/2021',
                'customerId' => '2'
            ],
            [
                'createdAt' => '26/06/2021',
                'customerId' => '3'
            ],
            [
                'createdAt' => '25/06/2021',
                'customerId' => '4'
            ],
            [
                'createdAt' => '24/06/2021',
                'customerId' => '5'
            ],
            [
                'createdAt' => '23/06/2021',
                'customerId' => '6'
            ],
            [
                'createdAt' => '22/06/2021',
                'customerId' => '7'
            ],
            [
                'createdAt' => '21/06/2021',
                'customerId' => '8'
            ],
            [
                'createdAt' => '20/06/2021',
                'customerId' => '9'
            ],


            ]);
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'orderId' => '0',
                'productId' => '10',
                'amount' => '10',
                'quantity' => '2',

            ],
            [
                'orderId' => '1',
                'productId' => '9',
                'amount' => '10',
                'quantity' => '1',

            ],
            [
                'orderId' => '2',
                'productId' => '8',
                'amount' => '10',
                'quantity' => '1',

            ],
            [
                'orderId' => '3',
                'productId' => '7',
                'amount' => '10',
                'quantity' => '3',

            ],
            [
                'orderId' => '4',
                'productId' => '6',
                'amount' => '9',
                'quantity' => '2',

            ],
            [
                'orderId' => '5',
                'productId' => '5',
                'amount' => '4',
                'quantity' => '3',

            ],
            [
                'orderId' => '6',
                'productId' => '4',
                'amount' => '2',
                'quantity' => '1',

            ],
            [
                'orderId' => '7',
                'productId' => '3',
                'amount' => '2',
                'quantity' => '3',

            ],
            [
                'orderId' => '8',
                'productId' => '2',
                'amount' => '2',
                'quantity' => '3',

            ],
            [
                'orderId' => '9',
                'productId' => '1',
                'amount' => '1',
                'quantity' => '3',

            ],
            [
                'orderId' => '0',
                'productId' => '9',
                'amount' => '10',
                'quantity' => '10',

            ],
            [
                'orderId' => '1',
                'productId' => '8',
                'amount' => '20',
                'quantity' => '30',

            ],
            [
                'orderId' => '2',
                'productId' => '7',
                'amount' => '3',
                'quantity' => '4',

            ],
            [
                'orderId' => '3',
                'productId' => '6',
                'amount' => '2',
                'quantity' => '3',

            ],
            [
                'orderId' => '4',
                'productId' => '5',
                'amount' => '10',
                'quantity' => '10',

            ],
            [
                'orderId' => '5',
                'productId' => '4',
                'amount' => '2',
                'quantity' => '2',

            ],
            [
                'orderId' => '6',
                'productId' => '3',
                'amount' => '10',
                'quantity' => '10',

            ],
            [
                'orderId' => '7',
                'productId' => '2',
                'amount' => '10',
                'quantity' => '10',

            ],
            [
                'orderId' => '8',
                'productId' => '1',
                'amount' => '10',
                'quantity' => '10',

            ],
            [
                'orderId' => '9',
                'productId' => '1',
                'amount' => '10',
                'quantity' => '30',

            ],
            [
                'orderId' => '7',
                'productId' => '2',
                'amount' => '10',
                'quantity' => '10',

            ],
            [
                'orderId' => '2',
                'productId' => '1',
                'amount' => '10',
                'quantity' => '30',

            ],
            [
                'orderId' => '2',
                'productId' => '3',
                'amount' => '10',
                'quantity' => '30',

            ],
            [
                'orderId' => '9',
                'productId' => '3',
                'amount' => '10',
                'quantity' => '30',

            ],
            [
                'orderId' => '6',
                'productId' => '4',
                'amount' => '20',
                'quantity' => '40',

            ],
            [
                'orderId' => '4',
                'productId' => '1',
                'amount' => '10',
                'quantity' => '10',

            ],
            [
                'orderId' => '8',
                'productId' => '3',
                'amount' => '10',
                'quantity' => '30',

            ],
            [
                'orderId' => '8',
                'productId' => '9',
                'amount' => '20',
                'quantity' => '40',

            ],
            [
                'orderId' => '6',
                'productId' => '2',
                'amount' => '20',
                'quantity' => '30',

            ],
            [
                'orderId' => '6',
                'productId' => '5',
                'amount' => '10',
                'quantity' => '30',

            ],
        ]);
    }
}
