<?php


namespace Controllers;

use Slim\Container;
use PDO;
USE PDOExeption;


class MoviesController

{
    private $request;
    private $response;
    private $db;

    public function __construct(Container $container)

    {
        $this->request=$container->get('request');
        $this->response= $container->get('response');
        $this->db =$container->get('db');
        
    }
    public function index()
    {
        try{
            
                //PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            
            $sql = 'select * from movies';

            $stmt = $this->db->prepare($sql);
            
            $stmt->execute();

            return $this->response->withJson($stmt->fetchAll(PDO::FETCH_ASSOC));


        } catch (PDOException $e) {
            return $this->response->withJson(['error' => $e->getMessage()]);
 
    }
    }
    public function show()
    {
        
        

        try{
           
                //PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            
            $sql = 'select * from movies where id= ? limit 1';
            //consulta preparada
            

            $stmt = $this->db->prepare($sql);
            
            $stmt->bindValue(1, 10);
            

            $stmt->execute();

            return $this->response->withJson($stmt->fetch(PDO::FETCH_ORI_FIRST));


        } catch (PDOException $e) {
            return $this->response->withJson(['error' => $e->getMessage()]);
 
    }
    }
    
    public function post ()
    {
        return $this->response->withJson (['Titulo'=>$args['id']]);
    

    }
    
    public function edit()
    {
        return $this->response->withJson (['Titulo'=>$args['id']]);

    }
    
    public function replace()
    {
        return $this->response->withJson (['Titulo'=>$args['id']]);

    }
    
    public function delete()
    {
        return $this->response->withJson (['Titulo'=>$args['id']]);

    }
    public function create()
    {
        return $this->response->withJson (['Titulo'=>$args['id']]);

    }
    

}