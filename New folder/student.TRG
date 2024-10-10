TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER before_insert_student\nBEFORE INSERT ON student\nFOR EACH ROW\nBEGIN\n    IF NEW.email NOT LIKE \'%@%\' THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Invalid email format. Email must contain an @ symbol.\';\n    END IF;\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER before_pnum_student_insert\nBEFORE INSERT ON student\nFOR EACH ROW\nBEGIN\n    IF NEW.PNum NOT LIKE \'-_\' THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Invalid PNum format. PNum must match the pattern "-X".\';\n    END IF;\nEND'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=1725179227227364 1725179421938239
