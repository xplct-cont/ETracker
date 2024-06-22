<?php

namespace Database\Seeders;

use App\Models\Expense;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    public $expenses = [

        // August
        [
            'title' => 'Pay apartment',
            'date' => '2023-08-2',
            'description' => '',
            'category' => 11,
            'amount' => 500,
        ],
    ];

    public function run(): void
    {
        $today = Carbon::now();
        $firstDayOfMonth = Carbon::now()->firstOfMonth();
        $count = 0;
        foreach ($this->expenses as $item) {
            $item['date'] = $firstDayOfMonth->copy()->addDays($count += 1);
            $expense = Expense::create($item);
            $expense->categories()->attach($item['category']);

        }

        $expense = Expense::create([
            'title' => 'Savings',
            'date' => $today,
            'description' => '',
            'category' => 22,
            'amount' => 2800,
        ]);
        $expense->categories()->attach(22);
    }
}
