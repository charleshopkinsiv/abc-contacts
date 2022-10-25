
CREATE TABLE contacts (
    INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL DEFAULT "",
    last_name VARCHAR(50) NOT NULL DEFAULT "",
    middle_name VARCHAR(50) NOT NULL DEFAULT "",
    email VARCHAR(255) NOT NULL UNIQUE,
    prefix ENUM('Mr.','Mrs.','Ms.','Miss'),
    suffix ENUM('Jr.','Sr.','I','II','III'),
    title VARCHAR(50) NOT NULL DEFAULT "",
    date_created DATETIME DEFAULT NOW()
);

CREATE TABLE phone_numbers (
    number VARCHAR(12) UNIQUE,
    contact INT NOT NULL DEFAULT 0,
    type ENUM('Home','Office','Mobile','Fax'),
    default_number ENUM('Y','N')
);
