--  LI SHUFANG - 19039480 --------------------------------

-- Database: `c273_assignment`
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `user` 
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(3)  NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `height` DECIMAL(3,2) NOT NULL,
  `weight` DECIMAL(5,2) NOT NULL,
  `dob` DATE NOT NULL,
  `physical_active_level` VARCHAR(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

-- Table structure for table `exercise_entry` 
CREATE TABLE IF NOT EXISTS `exercise_entry` (
  `id` INT(3)  NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `exercise_type` VARCHAR(45) NOT NULL,
  `exercise_duration` INT(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

-- Inserting data for table `user`
INSERT INTO `user` (`id`, `username`, `password`, `height`, `weight`, `dob`, `physical_active_level`) VALUES
(1, 'Messi', '5350e64049c15138f5cbe1d7b2c6d9dac9588f3f', 1.70, 72, '1987-06-24', 'Active');
-- ------------------------------------------------------------------------------------------------------------

-- Indexes for table `exercise_entry`
ALTER TABLE `exercise_entry`
  ADD PRIMARY KEY (`id`);
-- --------------------------------------------------------

-- Indexes for table `user`
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
-- --------------------------------------------------------

-- AUTO_INCREMENT for table `exercise_entry`
ALTER TABLE `exercise_entry`
  MODIFY `id` INT(3) NOT NULL AUTO_INCREMENT;
-- --------------------------------------------------------

-- AUTO_INCREMENT for table `user`
ALTER TABLE `user`
  MODIFY `id` INT(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;
COMMIT;
-- --------------------------------------------------------

--  LI SHUFANG - 19039480 --------------------------------
