-- Hippie Host bootstrap table for consultation leads
-- Import via phpMyAdmin if terminal access is unavailable.

CREATE TABLE IF NOT EXISTS `lead_inquiries` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NOT NULL,
  `email` VARCHAR(190) NOT NULL,
  `business_name` VARCHAR(180) NULL,
  `phone` VARCHAR(30) NULL,
  `website` VARCHAR(190) NULL,
  `service_interest` VARCHAR(120) NULL,
  `details` TEXT NULL,
  `status` VARCHAR(40) NOT NULL DEFAULT 'new',
  `source` VARCHAR(120) NOT NULL DEFAULT 'homepage_consultation',
  `ip_address` VARCHAR(45) NULL,
  `user_agent` TEXT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lead_inquiries_status_index` (`status`),
  KEY `lead_inquiries_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;