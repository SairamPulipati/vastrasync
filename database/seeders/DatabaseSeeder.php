<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 1. Branches
        DB::table('branches')->insert([
            [
                'id' => 1,
                'name' => 'Hyderabad Flagship Studio',
                'mobile' => '9876543210',
                'address' => 'Road No. 36, Jubilee Hills, Hyderabad, Telangana',
                'email' => 'hyderabad@weddingstudio.com',
                'image' => null,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Vijayawada Branch',
                'mobile' => '9876543211',
                'address' => 'MG Road, Benz Circle, Vijayawada, Andhra Pradesh',
                'email' => 'vijayawada@weddingstudio.com',
                'image' => null,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Visakhapatnam Coastal Branch',
                'mobile' => '9876543212',
                'address' => 'Dwaraka Nagar, Visakhapatnam, Andhra Pradesh',
                'email' => 'vizag@weddingstudio.com',
                'image' => null,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        // 2. Users (Admin: role 1, Manager: role 2, Salesman: role 5)
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Sairam Pulipati (Admin)',
                'email' => 'admin@weddingstudio.com',
                'mobile' => '9876543210',
                'address' => 'Hyderabad Studio HQ',
                'password' => Hash::make('password123'),
                'role' => 1,
                'branch' => 1,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Kiran Kumar (Branch Manager)',
                'email' => 'manager@weddingstudio.com',
                'mobile' => '9876543211',
                'address' => 'Vijayawada Studio',
                'password' => Hash::make('password123'),
                'role' => 2,
                'branch' => 2,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Ramesh Naidu (Sales Executive)',
                'email' => 'sales@weddingstudio.com',
                'mobile' => '9876543212',
                'address' => 'Hyderabad Studio',
                'password' => Hash::make('password123'),
                'role' => 5,
                'branch' => 1,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        // 3. Categories
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Wedding Photo Albums', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'Acrylic & Canvas Frames', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'Pre-Wedding Shoot Packages', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'name' => 'Cinematic 4K Video Production', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'name' => 'Lighting & Studio Accessories', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // 4. Brands
        DB::table('brands')->insert([
            ['id' => 1, 'name' => 'Sony Alpha Pro', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'Canon EOS Cinema', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'Godox Professional', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'name' => 'PrintCraft Premium', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'name' => 'StudioElite Master', 'image' => null, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // 5. Suppliers
        DB::table('suppliers')->insert([
            ['id' => 1, 'name' => 'Sony India Imaging Dist.', 'number' => '9848011223', 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'PrintCraft Album Solutions', 'number' => '9848022334', 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'Godox Lighting Depot India', 'number' => '9848033445', 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // 6. Purchases by Admin (Inventory procurement)
        DB::table('purchasebyadmin')->insert([
            [
                'id' => 1,
                'date' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'supiler' => 2,
                'price' => 15000.00,
                'item' => 'Velvet Touch Album Sheets 12x36 (Bundle of 100)',
                'invoiceNumber' => 'INV-PC-8910',
                'quantity' => 10,
                'units' => 'Bundles',
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(10),
            ],
            [
                'id' => 2,
                'date' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'supiler' => 3,
                'price' => 45000.00,
                'item' => 'Godox AD600 Pro Outdoor Strobe Kit',
                'invoiceNumber' => 'INV-GD-3321',
                'quantity' => 2,
                'units' => 'Kits',
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
        ]);

        // 7. Products
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Royal Heritage Wedding Album 12x36',
                'unit' => '50',
                'alert' => 5,
                'category' => 1,
                'brand' => 4,
                'barcode' => '8901234567890',
                'tax' => 18.00,
                'purchases' => 1,
                'type' => 'readymade',
                'price' => 18500.00,
                'image' => null,
                'branch' => 1,
                'productSize' => '12x36 Inches',
                'description' => 'Ultra HD gloss metallic pages with wooden brief-case packaging.',
                'customizeid' => null,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Premium Floating Canvas Frame 24x36',
                'unit' => '30',
                'alert' => 3,
                'category' => 2,
                'brand' => 5,
                'barcode' => '8901234567891',
                'tax' => 12.00,
                'purchases' => 1,
                'type' => 'readymade',
                'price' => 6500.00,
                'image' => null,
                'branch' => 1,
                'productSize' => '24x36 Inches',
                'description' => 'Archival cotton canvas mounted in a contemporary teak wood frame.',
                'customizeid' => null,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Crystal Acrylic Desk Portrait 8x12',
                'unit' => '80',
                'alert' => 10,
                'category' => 2,
                'brand' => 5,
                'barcode' => '8901234567892',
                'tax' => 12.00,
                'purchases' => 1,
                'type' => 'readymade',
                'price' => 1800.00,
                'image' => null,
                'branch' => 1,
                'productSize' => '8x12 Inches',
                'description' => 'Edge-polished diamond acrylic block with UV back-printing.',
                'customizeid' => null,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'name' => 'Godox Softbox Lighting Diffuser',
                'unit' => '20',
                'alert' => 2,
                'category' => 5,
                'brand' => 3,
                'barcode' => '8901234567893',
                'tax' => 18.00,
                'purchases' => 2,
                'type' => 'readymade',
                'price' => 3200.00,
                'image' => null,
                'branch' => 1,
                'productSize' => 'Standard Octa',
                'description' => 'Quick setup parabolic softbox with honeycomb grid.',
                'customizeid' => null,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Customized Studio Packages
            [
                'id' => 5,
                'name' => 'Destination Pre-Wedding Shoot Package',
                'unit' => '10',
                'alert' => 1,
                'category' => 3,
                'brand' => 5,
                'barcode' => '8901234567894',
                'tax' => 18.00,
                'purchases' => null,
                'type' => 'customized',
                'price' => 65000.00,
                'image' => null,
                'branch' => 1,
                'productSize' => '2 Days',
                'description' => 'Includes 2 candid photographers, 1 drone operator, teaser reel & raw footage.',
                'customizeid' => 1,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'name' => 'Complete Royal Wedding Cinematic Coverage',
                'unit' => '10',
                'alert' => 1,
                'category' => 4,
                'brand' => 5,
                'barcode' => '8901234567895',
                'tax' => 18.00,
                'purchases' => null,
                'type' => 'customized',
                'price' => 125000.00,
                'image' => null,
                'branch' => 1,
                'productSize' => '3 Days',
                'description' => 'Sangeet, Haldi & Reception full 4K film, candid albums, and live streaming.',
                'customizeid' => 2,
                'isactive' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        // 8. Branch Products Mapping
        DB::table('branchproducts')->insert([
            ['id' => 1, 'branchid' => 1, 'productid' => 1, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'branchid' => 1, 'productid' => 2, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'branchid' => 1, 'productid' => 3, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'branchid' => 1, 'productid' => 4, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'branchid' => 2, 'productid' => 1, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'branchid' => 2, 'productid' => 2, 'isactive' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        // 9. Sample Sales & Invoices
        $transId = 'MWS' . date('dmy') . '0001';
        DB::table('purchases')->insert([
            [
                'id' => 1,
                'transcationid' => $transId,
                'salesman' => 3,
                'branch' => 1,
                'trns' => 'POS-SALE',
                'pos' => 1,
                'totalpurchase' => 25000.00,
                'discount' => 1500.00,
                'partialpay' => 23500.00,
                'ispartiallypay' => 0,
                'payment2' => null,
                'sessionid' => 'sample-session-101',
                'created_at' => Carbon::now()->subHours(2),
                'updated_at' => Carbon::now()->subHours(2),
            ],
        ]);

        DB::table('purchasedata')->insert([
            [
                'id' => 1,
                'purchaseid' => 1,
                'product_id' => 1,
                'purchasedprice' => 18500.00,
                'quantity' => 1,
                'paymentmode' => 'UPI',
                'created_at' => Carbon::now()->subHours(2),
                'updated_at' => Carbon::now()->subHours(2),
            ],
            [
                'id' => 2,
                'purchaseid' => 1,
                'product_id' => 2,
                'purchasedprice' => 6500.00,
                'quantity' => 1,
                'paymentmode' => 'UPI',
                'created_at' => Carbon::now()->subHours(2),
                'updated_at' => Carbon::now()->subHours(2),
            ],
        ]);

        DB::table('purchaseuserdetails')->insert([
            [
                'id' => 1,
                'purchaseid' => 1,
                'name' => 'Vikram & Ananya Sharma',
                'branch' => 1,
                'number' => '9876500001',
                'created_at' => Carbon::now()->subHours(2),
                'updated_at' => Carbon::now()->subHours(2),
            ],
        ]);
    }
}
