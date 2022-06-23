<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis eius mollitia culpa incidunt nam ab laudantium ipsam laborum provident quas?'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis eius mollitia culpa incidunt nam ab laudantium ipsam laborum provident quas?'
            ],
        ];
    }

    public static function find($id)
    {
        $listings = self::all();
        foreach ($listings as $l) {
            if ($l['id'] == $id) {
                return $l;
            }
        }
    }
}
