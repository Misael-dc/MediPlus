ALTER TABLE clasificacion
DROP COLUMN cod_clas;

ALTER TABLE `farmacia`.`producto` 
CHANGE COLUMN `precio_venta` `costo_venta` DECIMAL(12,2) NOT NULL ;


hugo@example.com
luz@example.com
sara@example.com
helena@example.com
ale@example.com
manu@example.com
marti@example.com



78451132
64216355
78452132
65212341
75423126
65421231
74512121



La Paz
Oruro
Potosi
Chuquisaca
Cochabamba
Tarija
Beni
Pando

SET FOREIGN_KEY_CHECKS=0;
SET FOREIGN_KEY_CHECKS=1;

ALTER TABLE cargos
CHANGE COLUMN id_cargo id_cargo INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE vehicles 
MODIFY note VARCHAR(100) NOT NULL;

ALTER TABLE vehicles 
MODIFY note VARCHAR(100) NOT NULL;

ALTER TABLE `farmacia`.`roles` 
CHANGE COLUMN `id_rol` `id_rol` INT(11) NOT NULL AUTO_INCREMENT ;