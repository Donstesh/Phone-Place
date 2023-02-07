CREATE TABLE phones (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `category` VARCHAR(100) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `price` INT NOT NULL,
  `phonenumber` INT NOT NULL,
  `location` VARCHAR(100) NOT NULL,
  `image_path` VARCHAR(255) NOT NULL
);