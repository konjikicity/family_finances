<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseTruncation;

final class DatabaseSeeder extends Seeder
{
    use DatabaseTruncation;

    public function __construct(protected readonly Application $app)
    {
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->truncateTablesForAllConnections();
        $this->call(UserSeeder::class);
    }
}
