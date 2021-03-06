

-- THÔNG TIN TÀI KHOẢN
CREATE TABLE IF NOT EXISTS `users`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `full_name` VARCHAR(255), -- ho va ten
    `email` VARCHAR(255), -- email
    `address` TEXT(0), -- dia chi
    `sex` INT(1), -- gioi tinh
    `phone` INT(13), -- so dt
    `nick_name` VARCHAR(255), -- biet danh
    `avartar` VARCHAR(255), -- avartar
    `time_creat` TIMESTAMP(0), -- thoi gian tao tai khoan
    `birthday` TIMESTAMP(0), -- nam sinh
    `authorities` INT(1), -- quyen 1-admin 2-sub-admin 3-sub-admin 4-subadmin 5-user 6-subuser
    `user_name` VARCHAR(255), -- ten dang nhap
    `password` VARCHAR(255), -- mat khau
    `status` INT(2), -- trang thai 9-tamkhoa 8-canhbao, 7-canhbao, 6-binhthuong 
    `remember_token` VARCHAR(100),
    `time_change` TIMESTAMP(0), -- thoi gian chinh sua
    `time_log` TIMESTAMP(0), -- thoi gian log
    `created_at` TIMESTAMP,
    `updated_at` TIMESTAMP,
PRIMARY KEY(`id`))

-- THÔNG TIN TÀI KHOẢN
CREATE TABLE IF NOT EXISTS `account`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `full_name` VARCHAR(255), -- ho va ten
    `email` VARCHAR(255), -- email
    `address` TEXT(0), -- dia chi
    `sex` INT(1), -- gioi tinh
    `phone` INT(13), -- so dt
    `nick_name` VARCHAR(255), -- biet danh
    `time_creat` TIMESTAMP(0), -- thoi gian tao tai khoan
    `birthday` TIMESTAMP(0), -- nam sinh
    `authorities` INT(1), -- quyen 1-admin 2-sub-admin 3-sub-admin 4-subadmin 5-user 6-subuser
    `user_name` VARCHAR(255), -- ten dang nhap
    `pass_word` VARCHAR(255), -- mat khau
    `status` INT(2), -- trang thai 9-tamkhoa 8-canhbao, 7-canhbao, 6-binhthuong 
    `time_change` TIMESTAMP(0), -- thoi gian chinh sua
    `time_log` TIMESTAMP(0), -- thoi gian log
PRIMARY KEY(`id`))


-- ĐĂNG NHẬP
CREATE TABLE IF NOT EXISTS `login`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_name` VARCHAR(255), -- ten dang nhap
    `pass_word` VARCHAR(255), -- mat khau
    `authorities` INT(1), -- quyen
    `time_log` TIMESTAMP(0), -- thoi gian log
PRIMARY KEY(`id_login`))

CREATE TABLE IF NOT EXISTS `account_info`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
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
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name_personality` VARCHAR(255) NOT NULL, -- ten tinh cach
    `rank_personality` INT(2), -- xep hang
    `status` INT(1), -- trang thai
PRIMARY KEY(`id_personality`))

-- BÌNH LUẬN

CREATE TABLE IF NOT EXISTS `comment`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
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
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_account` INT(11) NOT NULL,
    `id_personality` INT(11) NOT NULL,
    `title` VARCHAR(255), -- tieu de
    `summary` VARCHAR(255), -- tom tat
    `content` TEXT(0), -- noi dung
    `source` VARCHAR(255), -- nguon
    `categories` INT(2), -- nhom danh muc
    `age` INT(1), -- do tuoi
    `image` VARCHAR(255), -- do tuoi
    `author` VARCHAR(255), -- tac gia
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
    PRIMARY KEY(`id`))

-- TÌM KIẾM

CREATE TABLE IF NOT EXISTS `search`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_account` INT(11) NOT NULL,
    `post_summary` VARCHAR(255), -- tom tat bai viet
    `post_name` VARCHAR(255), -- ten bai viet
    `author_name` VARCHAR(255), -- ten tac gia
PRIMARY KEY(`id_search`))

-- CÂU HỎI

CREATE TABLE IF NOT EXISTS `question`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
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
    `id` INT(11) NOT NULL AUTO_INCREMENT,
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
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_sender` INT(11) NOT NULL,
    `id_receiver` INT(11) NOT NULL,
    `content` TEXT(0),
    `time_creat` TIMESTAMP(0),
    `status` INT(1),
PRIMARY KEY(`id_messeger`))

CREATE TABLE IF NOT EXISTS `notification`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_sender` INT(11) NOT NULL,
    `id_receiver` INT(11) NOT NULL,
    `content` TEXT(0),
    `time_creat` TIMESTAMP(0),
    `status` INT(1),
PRIMARY KEY(`id_notification`))
-- danh muc
CREATE TABLE IF NOT EXISTS `categories`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name_categories` VARCHAR(255),
    `categories` VARCHAR(255),
    `group` INT(2),
    `status` INT(1),
PRIMARY KEY(`id`))


INSERT INTO categories
VALUES 
(9, 'Thơ', 'tho', 1, 1),
(10, 'Phim hoạt hình', 'phim-hoat-hinh', 1, 1),
(11, 'Đô rê mon', 'do-re-mon', 1, 1),
(12, 'Tom and Jerry', 'tom-and-jerry', 1, 1);
(13, 'Phim hoạt hình', 'phim-hoat-hinh', 1, 1);


INSERT INTO personality
VALUES 
(3, 'Dũng cảm', 1, 1),
(4, 'Khiêm tốn', 1, 1),
(5, 'Siêng năng', 1, 1),
(6, 'Kiên nhẫn', 1, 1),
(7, 'Lể phép', 1, 1),
(8, 'Trách nhiệm', 1, 1);


CREATE TABLE IF NOT EXISTS `status`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name_status` VARCHAR(255),
    `status` INT(1),
PRIMARY KEY(`id`))

INSERT INTO status
VALUES 
(1, 'Lưu nháp', 1),
(6, 'Đăng bài', 1);

CREATE TABLE IF NOT EXISTS `intro`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `content` TEXT(0),,
    `id_author` INT(11),
    `group` INT(2),
    `status` INT(1),
PRIMARY KEY(`id`))

CREATE TABLE IF NOT EXISTS `ranking`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_author` INT(11),
    `id_categories` NT(11) NOT NULL,
    `time` TIMESTAMP,
PRIMARY KEY(`id`))

INSERT INTO status
VALUES 
(1, '', '<p style="text-align: center;"><span style="font-size: 18pt;"><strong>MẮT BÃO</strong></span></p>
<p style="text-align: left;"><span style="font-size: 12pt;">&nbsp; Xin chào mọi người, mình t&ecirc;n là Bin, bi&ecirc;̣t danh của mình là Mắt Bão,&nbsp;bi&ecirc;̣t danh&nbsp;th&acirc;̣t là ng&acirc;̀u đúng kh&ocirc;ng nào.</span></p>
<p style="text-align: left;"><span style="font-size: 12pt;">&nbsp; Ở đ&acirc;y mình sẽ giới thi&ecirc;̣u th&ocirc;ng tin cơ bản của mình cho mọi người bi&ecirc;́t nhé.<br /></span></p>
<p style="text-align: left;"><span style="font-size: 12pt;">&nbsp; Mình sinh ra và lớn l&ecirc;n ở Hu&ecirc;́, m&ocirc;̣t mảnh đ&acirc;́t mi&ecirc;̀n trung đ&acirc;̀y nắng và gió, nhưng cũng may thay mình được mang trong mình dòng máu lảng mạng của m&ocirc;̣t người con xứ Hu&ecirc;́ đ&acirc;̀y thơ mọng. Với ni&ecirc;̀m đang m&ecirc; vi&ecirc;́t lách từ nhỏ, mình r&acirc;́t vui khi được bi&ecirc;́t đ&ecirc;́n m&ocirc;̣t địa chỉ chia sẻ tài năng như th&ecirc;́ này, đ&ocirc;̀ng thời cũng là m&ocirc;̣t nơi đ&ecirc;̉ chắp cánh cho những m&acirc;̀m non mới bước vào đời.</span></p>
<p style="text-align: left;"><span style="font-size: 12pt;">&nbsp; Mình thì kh&ocirc;ng có gì hơn, chỉ c&ocirc;́ gắng vi&ecirc;́t th&acirc;̣t nhi&ecirc;̀u chuy&ecirc;̣n đ&ecirc;̉ cho b&ocirc;́ mẹ các bé có th&ecirc;̉ k&ecirc;̉ cho con mình nghe hằng đ&ecirc;m, đ&ecirc;̉ mang con đ&ecirc;́n với những gi&acirc;́c mơ và tri thức m&ocirc;̣t cách v&ocirc; cùng đơn giản.</span></p>
<p style="text-align: left;"><span style="font-size: 12pt;">&nbsp; Cảm ơn các bạn đã đọc bài giới thi&ecirc;̣u của mình, hãy đ&ocirc;̀ng hành cùng mình nhé.</span></p>
<p style="text-align: left;"><span style="font-size: 12pt;">&nbsp; Mãi y&ecirc;u ^^.</span></p>', 5, 1, 1);