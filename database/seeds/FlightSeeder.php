<?php

use App\Models\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flights = [
            [
                'location' => 'Nicaragua',
                'leave_date'=> '2022-01-18',
                'return_date' => '2022-01-26',
                'package_name' => 'Surf in Nicaragua',
                'price' => '21500.99',
                'image' => 'https://www.ft.com/__origami/service/image/v2/images/raw/http%3A%2F%2Fcom.ft.imagepublish.upp-prod-eu.s3.amazonaws.com%2F5c9e3656-4715-11e8-8c77-ff51caedcde6?fit=scale-down&source=next&width=700'
            ],

            [
                'location' => 'Lastra a Signa',
                'leave_date'=> '2022-02-10',
                'return_date' => '2022-02-17',
                'package_name' => 'Una magnifica settimana a Lastra a Signa!',
                'price' => '50000.99',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Mura_lastra_asigna.jpg/1920px-Mura_lastra_asigna.jpg'
            ],

            [
                'location' => 'Bettolle',
                'leave_date'=> '2022-01-26',
                'return_date' => '2022-01-31',
                'package_name' => 'Andiamo a sciare a Bettolle',
                'price' => '23250.18',
                'image' => 'https://www.agriturismo.net/images/navigazione/province/toscana-siena.jpg'
            ],

            [
                'location' => 'Zimbabwe',
                'leave_date'=> '2022-03-16',
                'return_date' => '2022-03-29',
                'package_name' => 'Safari in Zimbabwe',
                'price' => '35.00',
                'image' => 'https://d2lxis1uiqe6st.cloudfront.net/wp-content/uploads/2020/02/Zimbabwe.png'
            ],

            [
                'location' => 'Canada',
                'leave_date'=> '2022-05-09',
                'return_date' => '2022-05-12',
                'package_name' => 'un weekend di riposo in Canada',
                'price' => '3250.66',
                'image' => 'https://a.cdn-hotels.com/gdcs/production159/d204/01ae3fa0-c55c-11e8-9739-0242ac110006.jpg'
            ],

            [
                'location' => 'Borgo a Buggiano',
                'leave_date'=> '2022-04-12',
                'return_date' => '2022-04-19',
                'package_name' => 'Settimana nello storico Borgo a Buggiano',
                'price' => '420.69',
                'image' => 'http://www.vivipistoia.it/wp-content/uploads/2018/10/buggiano-castello-1-800x445.jpg'
            ],
            
        ];
        
        foreach ($flights as $flight) {
            
            $new_flight = new Flight();
            $new_flight->location = $flight['location'];
            $new_flight->leave_date = $flight['leave_date'];
            $new_flight->return_date = $flight['return_date'];
            $new_flight->package_name = $flight['package_name'];
            $new_flight->price = $flight['price'];
            $new_flight->image = $flight['image'];
            $new_flight->save();
            
        }
    }
}
