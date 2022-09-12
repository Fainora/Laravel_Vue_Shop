<?php
namespace App\Actions;

class CsvArrayAction
{
    public function handle(): array
    {
        $data = [];

        if(($handle = fopen('test.csv', 'r')) !== false) {
            while (($line = fgetcsv($handle)) !== false) {
                $data[] = $line;
            }
            fclose($handle);
        }

        return $data;
    }
}
