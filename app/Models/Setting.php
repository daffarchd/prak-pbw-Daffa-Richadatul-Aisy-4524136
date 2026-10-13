<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Cache;

class Setting extends Model

{

    protected $fillable = ['key', 'value', 'type', 'description'];

    public static function get(string $key, $default = null)

    {

        return Cache::remember("setting.{$key}", 3600, function () use ($key, $default) {

            $setting = self::where('key', $key)->first();

            return $setting ? $setting->value : $default;

        });

    }

    public static function set(string $key, $value): bool

    {

        $setting = self::updateOrCreate(

            ['key' => $key],

            ['value' => $value]

        );

        

        Cache::forget("setting.{$key}");

        return $setting->exists;

    }

    public static function clearCache(): void

    {

        $settings = self::all();

        foreach ($settings as $setting) {

            Cache::forget("setting.{$setting->key}");

        }

    }

}
