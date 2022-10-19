<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleDriveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //$client = new \Google_Client;
       //dd($client);

      /* \Storage::extend("google",function($app, $config){

            $client =new \Google_Client;
            $client->setClientId($config['clientId']);
            $client->setClientSecret($config['clientSecret']);
            $client->refreshToken($config['refreshToken']);
            $service = new \Google_Service_Drive($client);
            $adapter = new GoogleDriveAdapter($service, $config['folderId']);
            
            return new Filesystem($adapter);


       });

       \Storage::extend('google', function ($app, $config) {
        $client = new \Google_Client();
        $client->setClientId($config['clientId']);
        $client->setClientSecret($config['clientSecret']);
        $client->refreshToken($config['refreshToken']);
        $service = new \Google_Service_Drive($client);
        $adapter = new Flysystem\GoogleDrive\GoogleDriveAdapter($service, $config['folderId']);

        return new \League\Flysystem\Filesystem($adapter);
    });*/

    \Storage::extend("google", function($app, $config) {
        $client = new \Google_Client();
        $client->setClientId($config['clientId']);
        $client->setClientSecret($config['clientSecret']);
        
        $client->refreshToken($config['refreshToken']);
        
      /*  if ($request->has('code')) {   
            $fullToken = $client->fetchAccessTokenWithAuthCode($code);
            $client->setAccessToken($fullToken); 
        }*/
        $tokenPath = 'token.json';
        if (file_exists($tokenPath)) {
          $accessToken = json_decode(file_get_contents($tokenPath), true);
          $client->setAccessToken($config['accessToken']);// $client->setAccessToken($accessToken);
        }
        
        $service = new \Google_Service_Drive($client);

     /* $options = [];
        if(isset($config['teamDriveId'])) {
            $options['teamDriveId'] = $config['teamDriveId'];
        }*/
        $adapter = new \Masbug\Flysystem\GoogleDriveAdapter($service, $config['folderId']);
       // return new \League\Flysystem\Filesystem($adapter);
        $driver = new \League\Flysystem\Filesystem($adapter);
        return new \Illuminate\Filesystem\FilesystemAdapter($driver, $adapter);
    });
    }
}
