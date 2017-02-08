<?php

use Illuminate\Database\Seeder;

use App\TokenFirebase;
class TokenFirebaseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'token' 		=> 'cV4PvkJwDqg:APA91bFhXffvluEcFXJLDrJbFUPvbotatIcH8BMyQWX3Cq_9Q-sdzR5OMCMECQXsKZ2hJeUD-g3ARi_ophvPl_oyX9MmiiHDTRFyiIaYcTYiPrZCtm8AxL7PeUVAuQqx9-Ni28x0JRwr', 
			],

		);

		TokenFirebase::insert($data);
    }
}
