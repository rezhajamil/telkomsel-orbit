<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tap extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class, 'tap_id');
    }

    public static function getTapInDistance($latitude, $longitude, $unit = 'kilometers')
    {

        $all_tap = Tap::orderBy('nama')->get();
        // $tap = Campus::find('slug', $slug);
        $tap = [];

        foreach ($all_tap as $key => $data) {
            $theta = $data->longitude - $longitude;
            $distance = (sin(deg2rad($data->latitude)) * sin(deg2rad($latitude))) + (cos(deg2rad($data->latitude)) * cos(deg2rad($latitude)) * cos(deg2rad($theta)));
            $distance = acos($distance);
            $distance = rad2deg($distance);
            $distance = $distance * 60 * 1.1515;
            switch ($unit) {
                case 'miles':
                    break;
                case 'kilometers':
                    $distance = $distance * 1.609344;
            }
            $jarak = (round($distance, 2));

            // $data->distance = $jarak;
            // array_push($tap, $data);

            if ($jarak <= 15.0) {
                $data->distance = $jarak;
                array_push($tap, $data);
            }
        }

        if (count($tap) <= 0) {
            foreach ($all_tap as $key => $data) {
                $theta = $data->longitude - $longitude;
                $distance = (sin(deg2rad($data->latitude)) * sin(deg2rad($latitude))) + (cos(deg2rad($data->latitude)) * cos(deg2rad($latitude)) * cos(deg2rad($theta)));
                $distance = acos($distance);
                $distance = rad2deg($distance);
                $distance = $distance * 60 * 1.1515;
                switch ($unit) {
                    case 'miles':
                        break;
                    case 'kilometers':
                        $distance = $distance * 1.609344;
                }
                $jarak = (round($distance, 2));

                $data->distance = $jarak;
                array_push($tap, $data);

                if (count($tap) >= 3) {
                    break;
                }
            }

            asort($tap);
        }

        return $tap;
    }
}
