CREATE TABLE orders (  
id              SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,  
name            VARCHAR(10) NOT NULL,  
pnumber         VARCHAR(10) NOT NULL, 
nic             VARCHAR(20) NOT NULL,  
ddate           DATE NOT NULL,  
ptype           VARCHAR(20) NOT NULL,   
psize           VARCHAR(10) NOT NULL,  
quantity        integer ,
PRIMARY KEY (id));  
          
INSERT INTO  orders VALUES( 1,"kumar","077123456","971298331V",'2020-06-27',"classic","medium",3);
INSERT INTO  orders VALUES( 2,"malini","077123431","992781728V",'2020-06-30',"signature","small",5);

