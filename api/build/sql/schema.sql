
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(128),
    `last_name` VARCHAR(128),
    `email` VARCHAR(128) NOT NULL,
    `password` VARCHAR(128) NOT NULL,
    `permissions` TEXT(65000),
    `last_login` VARCHAR(128),
    `activation_code` VARCHAR(128),
    `activated_at` VARCHAR(128),
    `persist_code` VARCHAR(128),
    `reset_password_code` VARCHAR(128),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- communities
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `communities`;

CREATE TABLE `communities`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(128) NOT NULL,
    `city` VARCHAR(128),
    `state_id` INTEGER,
    `isActive` INTEGER,
    `time_zone_id` INTEGER,
    `contactName` VARCHAR(128),
    `contactPhone` VARCHAR(128),
    `contactEmail` VARCHAR(128),
    PRIMARY KEY (`id`),
    INDEX `communities_FI_1` (`state_id`),
    INDEX `communities_FI_2` (`time_zone_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- contacts
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(128),
    `phone` VARCHAR(128),
    `contactName` VARCHAR(128),
    `address1` VARCHAR(128),
    `address2` VARCHAR(128),
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- states
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `code` VARCHAR(128) NOT NULL,
    `name` VARCHAR(128) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- time_zones
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `time_zones`;

CREATE TABLE `time_zones`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `timeZoneValue` INTEGER NOT NULL,
    `timeZoneName` VARCHAR(128) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- sponsors
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sponsors`;

CREATE TABLE `sponsors`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `contact_id` INTEGER NOT NULL,
    `state_id` INTEGER NOT NULL,
    `sponsorLogo` VARCHAR(128),
    `sponsorName` VARCHAR(128),
    `sponsorMessage` VARCHAR(128),
    `sponsorTextMessage` VARCHAR(128),
    `maketingContact` VARCHAR(128),
    `maketingPhone` VARCHAR(128),
    `maketingEmail` VARCHAR(128),
    `website` VARCHAR(128),
    `note` VARCHAR(128),
    `city` VARCHAR(128),
    `zipcode` VARCHAR(128),
    `created` VARCHAR(128),
    `modified` VARCHAR(128),
    PRIMARY KEY (`id`),
    INDEX `sponsors_FI_1` (`contact_id`),
    INDEX `sponsors_FI_2` (`state_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- schools
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `schools`;

CREATE TABLE `schools`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER NOT NULL,
    `sponsor_id` INTEGER NOT NULL,
    `state_id` INTEGER NOT NULL,
    `time_zone_id` INTEGER NOT NULL,
    `contact_id` INTEGER NOT NULL,
    `community_id` INTEGER NOT NULL,
    `serviceNumber` VARCHAR(128),
    `schoolName` VARCHAR(128),
    `schoolLogo` VARCHAR(128),
    `note` VARCHAR(128),
    `city` VARCHAR(128),
    `zipcode` VARCHAR(128),
    `website` VARCHAR(128),
    PRIMARY KEY (`id`),
    INDEX `schools_FI_1` (`user_id`),
    INDEX `schools_FI_2` (`sponsor_id`),
    INDEX `schools_FI_3` (`state_id`),
    INDEX `schools_FI_4` (`time_zone_id`),
    INDEX `schools_FI_5` (`contact_id`),
    INDEX `schools_FI_6` (`community_id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
