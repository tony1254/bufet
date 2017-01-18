<?php
/**
 *
 */
class ExampleTest extends FeaturesTestCase {
    // use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample() {

        $name = 'tony Garcia';
        $email = 'tony@tony.com';
        $password = bcrypt('tonytony');
        $user = factory(\App\User::class)->create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see($name)
            ->see($email);
    }
}
