<?php

namespace Tests\Unit;

use Illuminate\Support\Env;
use Tests\TestCase;
use Illuminate\Support\Facades\DB as DB;

class EnvTest extends TestCase
{

    /**
     * Teste de conexão com o banco de dados.
     *
     * @return void
     */
    public function test_database_connection()
    {
        try {
            $connection = DB::connection();
            $databaseName = $connection->getDatabaseName();
            $envDatabaseName = Env::get('DB_DATABASE');
            $this->assertEquals($databaseName, $envDatabaseName);
        } catch (\Throwable $th) {
            $this->fail('The database connection failed. Verify your .env file' . $envDatabaseName);
        }
    }
}
