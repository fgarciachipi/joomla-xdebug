#
#<?php die('Forbidden.'); ?>
#Date: 2021-07-27 10:19:58 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2021-07-27T10:19:58+00:00	INFO 172.20.0.1	update	Update started by user Super User (234). Old version is 3.9.5.
2021-07-27T10:20:00+00:00	INFO 172.20.0.1	update	Downloading update file from https://downloads.joomla.org/cms/joomla3/3-9-28/Joomla_3.9.28-Stable-Update_Package.zip.
2021-07-27T10:20:06+00:00	INFO 172.20.0.1	update	File Joomla_3.9.28-Stable-Update_Package.zip downloaded.
2021-07-27T10:20:06+00:00	INFO 172.20.0.1	update	Starting installation of new version.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Finalising installation.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.7-2019-04-23. Query text: ALTER TABLE `#__session` ADD INDEX `client_id_guest` (`client_id`, `guest`);.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.7-2019-04-26. Query text: UPDATE `#__content_types` SET `content_history_options` = REPLACE(`content_histo.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.8-2019-06-11. Query text: UPDATE #__users SET params = REPLACE(params, '",,"', '","');.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` DROP INDEX `idx_home`;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id` (`client_id`);.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.8-2019-06-15. Query text: ALTER TABLE `#__template_styles` ADD INDEX `idx_client_id_home` (`client_id`, `h.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.10-2019-07-09. Query text: ALTER TABLE `#__template_styles` MODIFY `home` char(7) NOT NULL DEFAULT '0';.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__categories` MODIFY `description` mediumtext;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__categories` MODIFY `params` text;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__fields` MODIFY `default_value` text;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__fields_values` MODIFY `value` text;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__finder_links` MODIFY `description` text;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__modules` MODIFY `content` text;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_params` text;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_images` text;.
2021-07-27T10:20:18+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_urls` text;.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text;.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-02-15. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text;.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-03-04. Query text: ALTER TABLE `#__users` DROP INDEX `username`;.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.16-2020-03-04. Query text: ALTER TABLE `#__users` ADD UNIQUE INDEX `idx_username` (`username`);.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.19-2020-05-16. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.19-2020-06-01. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.21-2020-08-02. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.22-2020-09-16. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.26-2021-04-07. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Ran query from file 3.9.27-2021-04-20. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2021-07-27T10:20:19+00:00	INFO 172.20.0.1	update	Deleting removed files and folders.
2021-07-27T10:20:21+00:00	INFO 172.20.0.1	update	Cleaning up after installation.
2021-07-27T10:20:21+00:00	INFO 172.20.0.1	update	Update to version 3.9.28 is complete.
