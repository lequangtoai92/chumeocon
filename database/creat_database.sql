

-- THÔNG TIN TÀI KHOẢN
CREATE TABLE IF NOT EXISTS `account`(
    `id_account` INT(11) NOT NULL AUTO_INCREMENT,
    `full_name` VARCHAR(255), -- ho va ten
    `email` VARCHAR(255), -- email
    `address` TEXT(0), -- dia chi
    `sex` INT(1), -- gioi tinh
    `phone` INT(13), -- so dt
    `nick_name` VARCHAR(255), -- biet danh
    `time_creat` TIMESTAMP(0), -- thoi gian tao tai khoan
    `birthday` TIMESTAMP(0), -- nam sinh
    `authorities` INT(1), -- quyen
    `time_change` TIMESTAMP(0), -- thoi gian chinh sua
    `time_log` TIMESTAMP(0), -- thoi gian log
PRIMARY KEY(`id_account`))


-- ĐĂNG NHẬP
CREATE TABLE IF NOT EXISTS `login`(
    `id_login` INT(11) NOT NULL AUTO_INCREMENT,
    `id_account` INT(11) NOT NULL, -- id tai khoan
    `user_name` VARCHAR(255), -- ten dang nhap
    `pass_word` VARCHAR(255), -- mat khau
    `authorities` INT(1), -- quyen
    `time_log` TIMESTAMP(0), -- thoi gian log
PRIMARY KEY(`id_login`))

CREATE TABLE IF NOT EXISTS `account_info`(
    `id_info` INT(11) NOT NULL AUTO_INCREMENT,
    `id_account` INT(11) NOT NULL, -- id tai khoan
    `power` INT(11), -- cap bac
    `be_like` INT(11), -- duoc like
    `likes` INT(11), -- like cho nguoi khac
    `bonus_score` INT(11), -- diem thuong
    `total_score` INT(11), -- tong diem
    `ranking` INT(1), -- danh gia
PRIMARY KEY(`id_info`))

--  TÍNH CÁCH

CREATE TABLE IF NOT EXISTS `personality`(
    `id_personality` INT(11) NOT NULL AUTO_INCREMENT,
    `name_personality` VARCHAR(255) NOT NULL, -- ten tinh cach
    `rank_personality` INT(2), -- xep hang
PRIMARY KEY(`id_personality`))

-- BÌNH LUẬN

CREATE TABLE IF NOT EXISTS `comment`(
    `id_comment` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_account` INT(11) NOT NULL,
    `content` TEXT(0), -- noi dung
    `comment_parent` VARCHAR(255), -- comment cha
    `time_creat` TIMESTAMP(0), -- thoi gian tao
    `driver` VARCHAR(255), -- thiet bi
    `browser` VARCHAR(255), -- trinh duyet
    `version` VARCHAR(255), -- phien ban
    `status` INT(1), -- trang thai
PRIMARY KEY(`id_comment`))

-- BÀI VIẾT

CREATE TABLE IF NOT EXISTS `posts`(
    `id_post` INT(11) NOT NULL AUTO_INCREMENT,
    `id_account` INT(11) NOT NULL,
    `id_personality` INT(11) NOT NULL,
    `title` VARCHAR(255), -- tieu de
    `summary` VARCHAR(255), -- tom tat
    `content` TEXT(0), -- noi dung
    `source` VARCHAR(255), -- nguon
    `categories` INT(2), -- nhom danh muc
    `age` INT(1), -- do tuoi
    `time_creat` TIMESTAMP(0), -- ngay tao
    `tiem_update` TIMESTAMP(0), -- ngay update
    `num_like` INT(11), -- so luot thich
    `num_dislike` INT(11), -- so luot khong thich
    `num_view` INT(11), -- so luot view
    `driver` VARCHAR(255), -- thiet bi
    `browser` VARCHAR(255), -- trinh duyet
    `version` VARCHAR(255), -- phien ban
    `ranking` INT(1), -- danh gia
    `status_post` INT(1), -- trang thai
    PRIMARY KEY(`id_post`))

-- TÌM KIẾM

CREATE TABLE IF NOT EXISTS `search`(
    `id_search` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_account` INT(11) NOT NULL,
    `post_summary` VARCHAR(255), -- tom tat bai viet
    `post_name` VARCHAR(255), -- ten bai viet
    `author_name` VARCHAR(255), -- ten tac gia
PRIMARY KEY(`id_search`))

-- CÂU HỎI

CREATE TABLE IF NOT EXISTS `question`(
    `id_question` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_account` INT(11) NOT NULL,
    `question` VARCHAR(255), -- cau hoi
    `content` VARCHAR(255), -- noi dung
    `answer` TEXT(0), -- cau tra loi
    `num_like` INT(11), -- so luot thic
    `num_dislike` INT(11), -- so luot khong thich
    `status` INT(1), -- trang thai
PRIMARY KEY(`id_question`))

-- GÓP Ý

CREATE TABLE IF NOT EXISTS `feedback`(
    `id_feedback` INT(11) NOT NULL AUTO_INCREMENT,
    `id_account` INT(11) NOT NULL,
    `content` TEXT(0), -- noi dung
    `name_author` VARCHAR(255), -- ten nguoi gop y
    `time_creat` TIMESTAMP(0), -- thoi gian tao
    `driver` VARCHAR(255), -- ten thiet bi
    `browser` VARCHAR(255),-- trinh duyet
    `version` VARCHAR(255), -- phien ban
    `status` INT(1), -- trang thai
PRIMARY KEY(`id_feedback`))

-- TIN NHẮN

CREATE TABLE IF NOT EXISTS `messeger`(
    `id_messeger` INT(11) NOT NULL AUTO_INCREMENT,
    `id_sender` INT(11) NOT NULL,
    `id_receiver` INT(11) NOT NULL,
    `content` TEXT(0),
    `time_creat` TIMESTAMP(0),
    `status` INT(1),
PRIMARY KEY(`id_messeger`))

CREATE TABLE IF NOT EXISTS `notification`(
    `id_notification` INT(11) NOT NULL AUTO_INCREMENT,
    `id_sender` INT(11) NOT NULL,
    `id_receiver` INT(11) NOT NULL,
    `content` TEXT(0),
    `time_creat` TIMESTAMP(0),
    `status` INT(1),
PRIMARY KEY(`id_notification`))