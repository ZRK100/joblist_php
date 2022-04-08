<?php 

    class Job {
        private $db;

        public function __construct()
        {
            $this->db = new Database;

        }

        //Get All jobs

        public function getAllJobs(){
            $this->db->query("SELECT jobs.*, 
            categories.name AS cname 
            FROM jobs INNER JOIN categories 
            ON jobs.category_id = categories.cat_id ORDER BY post_date DESC ");


            //assign result set

            $results = $this->db->resultSet();
            return $results;


        }

        //Get Categories 
        public function getCategories(){
            $this->db->query("SELECT * FROM categories");

            //assign result set

            $results = $this->db->resultSet();
            return $results;
        }

        //Get By Category
        public function getByCategory($category){
            $this->db->query("SELECT jobs.*, 
            categories.name AS cname 
            FROM jobs INNER JOIN categories 
            ON jobs.category_id = categories.cat_id WHERE jobs.category_id= $category ORDER BY post_date DESC ");


            //assign result set

            $results = $this->db->resultSet();
            return $results;
        }
        //Get Category

        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE cat_id = :category_id ");
            $this->db->bind(":category_id", $category_id);

            //assign ROw
            $row = $this->db->single();
            
            return $row;
        }


        public function getJob($id){

            $this->db->query("SELECT * FROM jobs WHERE job_id = :id ");
            $this->db->bind(":id", $id);

            //assign ROw
            $row = $this->db->single();
            
            return $row;

        }

        public function create($data){
            $this->db->query("INSERT INTO jobs (
             category_id,
             job_title, company, description, location, 
             salary, contact_user,
             contact_email) VALUES 
             (:category_id,
             :job_title, :company, :description, :location, 
             :salary, :contact_user,
             :contact_email)
             ");

             //bind Data 
             $this->db->bind(':category_id', $data['category_id']);
             $this->db->bind(':job_title', $data['job_title']);
             $this->db->bind(':company', $data['company']);
             $this->db->bind(':salary', $data['salary']);
             $this->db->bind(':location', $data['location']);
             $this->db->bind(':contact_user', $data['contact_user']);
             $this->db->bind(':contact_email', $data['contact_email']);
             $this->db->bind(':description', $data['description']);


             if($this->db->execute()){
                 return true;
             }else{
                 return false;
             }

        }

        public function delete($id){
            $this->db->query("DELETE FROM jobs WHERE job_id = $id");
            //use placeholder method later

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function update($id, $data){
            $this->db->query("UPDATE jobs 
                    SET
                    category_id = :category_id,
                    job_title = :job_title,
                    company   = :company,
                    description = :description,
                    location =:location,
                    salary  =:salary,
                    contact_email =:contact_email,
                    contact_user =:contact_user
                    WHERE job_id = $id");
   
                //bind Data 
                $this->db->bind(':category_id', $data['category_id']);
                $this->db->bind(':job_title', $data['job_title']);
                $this->db->bind(':company', $data['company']);
                $this->db->bind(':salary', $data['salary']);
                $this->db->bind(':location', $data['location']);
                $this->db->bind(':contact_user', $data['contact_user']);
                $this->db->bind(':contact_email', $data['contact_email']);
                $this->db->bind(':description', $data['description']);
   
   
                if($this->db->execute()){
                    return true;
                }else{
                    return false;
                }
   
           }

    } //Class Paranthesis 
?>