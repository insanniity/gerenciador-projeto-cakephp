<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => '$10$AbzJaFslnOGUnqzNM2NYj.1AkgyU41a8xctXaUOmf6ZrgzuLLbQSe',
                'status' => true,
                'created' => '2021-06-24 11:07:27',
                'modified' => '2021-06-24 11:07:27',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
