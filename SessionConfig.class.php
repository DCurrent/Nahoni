<?php

namespace dc\nahoni;

// Structure of parameters used for database connection attempt.
interface iSessionConfig
{	
	function get_database();		// Return database object.
	function get_life();			// Return lifespan of session data.
	function set_database($value);	// Return database object.
	function set_life($value);		// Return lifespan of session data.	
}

class SessionConfig implements iSessionConfig
{
	private
		$database	= NULL,
		$life		= NULL;
	
	public function __construct()
	{
		$this->life = DEFAULTS::LIFE;
	}
	
	// Accessors
	public function get_database()
	{
		return $this->database;
	}
	
	public function get_life()
	{
		return $this->life;
	}
	
	// Mutators
	public function set_database($value)
	{
		$this->database = $value;
	}
	
	public function set_life($value)
	{
		$this->life = $value;
	}		
}

?>