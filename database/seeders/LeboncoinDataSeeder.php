<?php

namespace Database\Seeders;

use App\Models\LeboncoinData;
use App\Models\PriceRangeData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LeboncoinDataSeeder extends Seeder
{
    public function run()
    {
        // Get all JSON files from the directory
        $jsonFiles = File::allFiles(database_path('data/real/PEUGEOT'));

        foreach ($jsonFiles as $file) {
            if ($file->getExtension() === 'json') {
                $json = File::get($file);
                $data = json_decode($json, true);

                // Remove duplicates
                $uniqueData = $this->removeDuplicatesByListId($data);

                // Process each unique car data item
                foreach ($uniqueData as $item) {
                    $carData = $this->buildLeboncoinDataArrayCars($item);
                    LeboncoinData::updateOrCreate(['list_id' => $carData['list_id']], $carData);

                    // Update or create a PriceRangeData record
                    PriceRangeData::updateOrCreate(
                        ['model-slug' => $carData['model-slug']],
                        [
                            'min-price' => 100,
                            'max-price' => 1000000,
                        ],
                    );
                }
            }
        }
    }

    private function removeDuplicatesByListId(array $data): array
    {
        $uniqueData = [];
        $listIds = [];

        foreach ($data as $item) {
            if (!in_array($item['list_id'], $listIds)) {
                $uniqueData[] = $item;
                $listIds[] = $item['list_id'];
            }
        }

        return $uniqueData;
    }

    // private function buildLeboncoinDataArrayCars($item)
    // {
    //     return [
    //         'list_id' => (int) $item['list_id'],
    //         'subject' => $item['subject'],
    //         'price' => (int) $item['price'][0],
    //         'u_car_brand' => $this->getAttributeValue($item, 'u_car_brand'),
    //         'u_car_model' => $this->getAttributeValue($item, 'u_car_model'),
    //         'model-slug' => $this->getAttributeValue($item, 'u_car_model', 'value'),
    //         'regdate' => $this->getAttributeValue($item, 'regdate', 'value'),
    //         'vehicle_type' => $this->getAttributeValue($item, 'vehicle_type'), // this one is not found in itilitaire
    //         'fuel' => $this->getAttributeValue($item, 'fuel'),
    //         'gearbox' => $this->getAttributeValue($item, 'gearbox'),
    //         'mileage' => $this->getAttributeValue($item, 'mileage', 'value'),
    //         'horse_power_din' => $this->getAttributeValue($item, 'horse_power_din', 'value'),
    //         'vehicle_damage' => $this->getAttributeValue($item, 'vehicle_damage'), // this one is not found in itilitaire
    //         'horsepower' => $this->getAttributeValue($item, 'horsepower', 'value'),
    //         'doors' => $this->getAttributeValue($item, 'doors'),
    //         'seats' => $this->getAttributeValue($item, 'seats'),
    //         'vehicule_color' => $this->getAttributeValue($item, 'vehicule_color'),
    //         'vehicle_vsp' => $this->getAttributeValue($item, 'vehicle_vsp'),
    //         'ownerType' => $item['owner']['type'],
    //         'ownerName' => $item['owner']['name'],
    //         'url' => $item['url'],
    //         'city' => $item['location']['city'],
    //         'zipcode' => (int) $item['location']['zipcode'],
    //     ];
    // }

    private function buildLeboncoinDataArrayCars($item)
    {
        // Initialize the data array
        $data = [
            'list_id' => (int) $item['list_id'],
            'subject' => $item['subject'],
            'price' => (int) $item['price'][0],
            'u_car_brand' => $this->getAttributeValue($item, 'u_car_brand'),
            'u_car_model' => $this->getAttributeValue($item, 'u_car_model'),
            'model-slug' => $this->getAttributeValue($item, 'u_car_model', 'value'),
            'regdate' => $this->getAttributeValue($item, 'regdate', 'value'),
            'vehicle_type' => $this->getAttributeValue($item, 'vehicle_type'), // this one is not found in itilitaire
            'fuel' => $this->getAttributeValue($item, 'fuel'),
            'gearbox' => $this->getAttributeValue($item, 'gearbox'),
            'mileage' => $this->getAttributeValue($item, 'mileage', 'value'),
            'horse_power_din' => $this->getAttributeValue($item, 'horse_power_din', 'value'),
            'horsepower' => $this->getAttributeValue($item, 'horsepower', 'value'),
            'doors' => $this->getAttributeValue($item, 'doors'),
            'seats' => $this->getAttributeValue($item, 'seats'),
            'vehicule_color' => $this->getAttributeValue($item, 'vehicule_color'),
            'vehicle_vsp' => $this->getAttributeValue($item, 'vehicle_vsp'),
            'ownerType' => $item['owner']['type'],
            'ownerName' => $item['owner']['name'],
            'url' => $item['url'],
            'city' => $item['location']['city'],
            'zipcode' => (int) $item['location']['zipcode'],
        ];

        // Conditionally add 'vehicle_damage' if it is not 'Endommagé'
        $vehicleDamage = $this->getAttributeValue($item, 'vehicle_damage');
        if ($vehicleDamage !== 'Endommagé') {
            $data['vehicle_damage'] = $vehicleDamage;
        }

        return $data;
    }

    private function buildLeboncoinDataArrayUtility($item)
    {
        return [
            'list_id' => (int) $item['list_id'],
            'subject' => $item['subject'],
            'price' => (int) $item['price'][0],
            'u_car_brand' => $this->getAttributeValue($item, 'u_utility_brand'),
            'u_car_model' => $this->getAttributeValue($item, 'u_utility_model'),
            'model-slug' => $this->getAttributeValue($item, 'u_utility_model', 'value'),
            'regdate' => $this->getAttributeValue($item, 'regdate', 'value'),
            'fuel' => $this->getAttributeValue($item, 'fuel'),
            'gearbox' => $this->getAttributeValue($item, 'gearbox'),
            'mileage' => $this->getAttributeValue($item, 'mileage', 'value'),
            'horse_power_din' => $this->getAttributeValue($item, 'horse_power_din', 'value'),
            'horsepower' => $this->getAttributeValue($item, 'horsepower', 'value'),
            'doors' => $this->getAttributeValue($item, 'doors'),
            'seats' => $this->getAttributeValue($item, 'seats'),
            'vehicule_color' => $this->getAttributeValue($item, 'vehicule_color'),
            'vehicle_vsp' => $this->getAttributeValue($item, 'vehicle_vsp'),
            'ownerType' => $item['owner']['type'],
            'ownerName' => $item['owner']['name'],
            'url' => $item['url'],
            'city' => $item['location']['city'],
            'zipcode' => (int) $item['location']['zipcode'],
        ];
    }

    private function getAttributeValue($item, $key, $valueKey = 'value_label')
    {
        $attributes = array_filter($item['attributes'] ?? [], function ($attribute) use ($key) {
            return $attribute['key'] === $key;
        });

        $value = null;
        if (!empty($attributes)) {
            $value = array_values($attributes)[0][$valueKey];
        }

        return $value;
    }
}
