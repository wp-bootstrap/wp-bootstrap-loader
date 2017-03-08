<?php
/**
 * Class WP_Test_BootstrapLoader
 *
 * @package Wp_Bootstrap_Loader
 */


class WP_Test_BootstrapLoader extends WP_UnitTestCase {

	// Test jQuery is Loaded.
	function testjQueryIsLoaded() {
 
    		$this->assertFalse( wp_script_is( 'jquery' ) );
 
    		do_action( 'wp_enqueue_scripts' );
    		$this->assertTrue( wp_script_is( 'jquery' ) );
 
 	} 
	
	// Test Bootstrap is Loaded.
	function testjQueryIsLoaded() {
 
    		$this->assertFalse( wp_script_is( 'bootstrap' ) );
 
    		do_action( 'wp_enqueue_scripts' );
    		$this->assertTrue( wp_script_is( 'bootstrap' ) );
 
 	} 
	
	// Test WebFont is Loaded.
	function testjQueryIsLoaded() {
 
    		$this->assertFalse( wp_script_is( 'webfont' ) );
 
    		do_action( 'wp_enqueue_scripts' );
    		$this->assertTrue( wp_script_is( 'webfont' ) );
 
 	} 
	
}

