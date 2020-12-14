use nerdygadgets;

ALTER TABLE stockitems
ADD ClickedON INT(14)
NOT NULL
DEFAULT (0)

UPDATE `specialdeals` SET `StockItemID` = '46' WHERE `specialdeals`.`SpecialDealID` = 2;
UPDATE `specialdeals` SET `StockItemID` = '2' WHERE `specialdeals`.`SpecialDealID` = 1;

CREATE TABLE `nerdygadgets`.`peopleaddress` 
(
    `addresid` INT(14) NOT NULL AUTO_INCREMENT,
    `peopleid` INT(14) NOT NULL,
    `zipcode` VARCHAR(20) NOT NULL,
    `housenmr` VARCHAR(8) NOT NULL,
    PRIMARY KEY (`addresid`),
    INDEX (`peopleid`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS discount_codes;

CREATE TABLE discount_codes (
    discount_code varchar(25) NOT NULL,
    discount int NOT NULL,
    expire date NOT NULL,
    primary key (discount_code)
); 

INSERT INTO `discount_codes` (`discount_code`, `discount`, `expire`) VALUES ('50off', '50', '2021-12-31');

ALTER TABLE customers DROP CONSTRAINT FK_Sales_Customers_BillToCustomerID_Sales_Customers
ALTER TABLE orders DROP CONSTRAINT FK_Sales_Orders_CustomerID_Sales_Customers