<?php

namespace Database\Seeders;

use App\Models\Income;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    public $incomes = [

        [
            'title' => 'Salary',
            'date' => '2023-08-03',
            'description' => 'Salary collected from account section',
            'category' => 1,
            'amount' => 10000,
        ],
    ];

    public function run(): void
    {
        $today = Carbon::now();
        $firstDayOfMonth = Carbon::now()->firstOfMonth();
        $count = 0;
        foreach ($this->incomes as $item) {
            $item['date'] = $firstDayOfMonth->copy()->addDays($count += 1);
            $income = Income::create($item);
            $income->categories()->attach($item['category']);

        }

        $income = Income::create([
            'title' => 'Web development  fee',
            'date' => $today,
            'description' => '',
            'category' => 7,
            'amount' => 7351,
        ]);
        $income->categories()->attach(7);
    }
}
