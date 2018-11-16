cartomak-product-import
==========================

##Doctrine-Basics:

####Create a Database in Doctrine:
    php bin/console doctrine:database:create
    
 ####Generate an Entity:
    php bin/console doctrine:generate:entity
 
 ####Create a Table for every Entity
    php bin/console doctrine:schema:update --force
 
##Tables:
####cartomak_product
+ ID
+ Nr
+ EAN
+ HerstellerArtikelNr
+ Created
+ Updated
     
####cartomak_product_data
+ ID
+ cartomak_ID
+ name 
+ value
+ updated
+ created
