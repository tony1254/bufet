<?php
/**
 *
 */
class ShowHomeTest extends FeaturesTestCase {

    public function testSeeSesionVar() {
        $this->visit(route('home'));

        // $this->actingAs($this->defaultUser());
        $name = 'tony Garcia';
        $email = 'tony@tony.com';
        $password = 'tonytony';
        $this->specificUser($name, $email, $password);
        $this->visit(route('home'))
            ->type($email, 'email')
            ->type($password, 'password')
            ->press(trans('validation.attributes.login'))
        ;
        // $this->see($this->defaultUser()->name);
        $this->see('variable de session');

        // $this->see(trans('validation.attributes.login'));
    }
}
