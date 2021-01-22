# Readme Description

1- composer install
2- set .env file
    QUEUE_CONNECTION=database
    
    MAIL_MAILER=smtp
    MAIL_HOST=mail.dsielab.net
    MAIL_PORT=465
    MAIL_USERNAME=info@dsielab.net
    MAIL_PASSWORD=(h8ZvHWM~$Nj
    MAIL_ENCRYPTION=ssl
    MAIL_FROM_ADDRESS=info@icollege.cl
    MAIL_FROM_NAME=iCollege

3- php artisan migrate
4- php artisan passport:install
5- set up supervisor de Colas

#endpoint tagDomicilio
    url: http://nombreDominio/api/email
    method: post
    Input:      
        $data = array(
            'cliente' => 'Alberto Fonseca Quintanell',
            'rut' => '18.168.926-9',
            'ticket' => 676,
            'autopista' => 'Costanera Norte',
            'servicio' => 'Devuelve tu Ticket',
            'url_abbr' => 'CN',
            'existe_cod_descuento' => false
        );

        $parameters = [
            'subject' => 'Tag a domicilio',
            'from' => 'alberto.fonsecaq@gmail.com',
            'email' => 'alberto.fonsecaq@gmail.com',
            'data' => $data
        ]
    Note: send $parameters
    Output: procesa el email como un job, y lo envia a una cola de nombre "email"
    
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
      