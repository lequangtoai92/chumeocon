

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
    `time_creat` TIMESTAMP, -- thoi gian tao tai khoan
    `birthday` TIMESTAMP, -- nam sinh
    `authorities` INT(1), -- quyen 1-admin 2-sub-admin 3-sub-admin 4-subadmin 5-user 6-subuser
    `user_name` VARCHAR(255), -- ten dang nhap
    `password` VARCHAR(255), -- mat khau
    `status` INT(2), -- trang thai 9-tamkhoa 8-canhbao, 7-canhbao, 6-binhthuong 
    `remember_token` VARCHAR(100),
    `time_change` TIMESTAMP, -- thoi gian chinh sua
    `time_log` TIMESTAMP, -- thoi gian log
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
    `time_creat` TIMESTAMP, -- thoi gian tao tai khoan
    `birthday` TIMESTAMP, -- nam sinh
    `authorities` INT(1), -- quyen 1-admin 2-sub-admin 3-sub-admin 4-subadmin 5-user 6-subuser
    `user_name` VARCHAR(255), -- ten dang nhap
    `pass_word` VARCHAR(255), -- mat khau
    `status` INT(2), -- trang thai 9-tamkhoa 8-canhbao, 7-canhbao, 6-binhthuong 
    `time_change` TIMESTAMP, -- thoi gian chinh sua
    `time_log` TIMESTAMP, -- thoi gian log
PRIMARY KEY(`id`))


-- ĐĂNG NHẬP
CREATE TABLE IF NOT EXISTS `login`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_name` VARCHAR(255), -- ten dang nhap
    `pass_word` VARCHAR(255), -- mat khau
    `authorities` INT(1), -- quyen
    `time_log` TIMESTAMP, -- thoi gian log
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
PRIMARY KEY(`id`))

--  TÍNH CÁCH

CREATE TABLE IF NOT EXISTS `personality`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name_personality` VARCHAR(255) NOT NULL, -- ten tinh cach
    `rank_personality` INT(2), -- xep hang
    `status` INT(2), -- trang thai
PRIMARY KEY(`id`))

-- BÌNH LUẬN

CREATE TABLE IF NOT EXISTS `comment`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_account` INT(11) NOT NULL,
    `content` TEXT(0), -- noi dung
    `comment_parent` VARCHAR(255), -- comment cha
    `time_creat` TIMESTAMP, -- thoi gian tao
    `driver` VARCHAR(255), -- thiet bi
    `browser` VARCHAR(255), -- trinh duyet
    `version` VARCHAR(255), -- phien ban
    `status` INT(2), -- trang thai
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
    `age` INT(2), -- do tuoi
    `image` VARCHAR(255), -- do tuoi
    `author` VARCHAR(255), -- tac gia
    `slug`
    `description`
    `time_creat` TIMESTAMP, -- ngay tao
    `tiem_update` TIMESTAMP, -- ngay update
    `num_like` INT(11), -- so luot thich
    `num_dislike` INT(11), -- so luot khong thich
    `num_view` INT(11), -- so luot view
    `driver` VARCHAR(255), -- thiet bi
    `browser` VARCHAR(255), -- trinh duyet
    `version` VARCHAR(255), -- phien ban
    `ranking` INT(20), -- danh gia
    `status` INT(2), -- trang thai
    PRIMARY KEY(`id`))

-- TÌM KIẾM

CREATE TABLE IF NOT EXISTS `search`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_account` INT(11) NOT NULL,
    `post_summary` VARCHAR(255), -- tom tat bai viet
    `post_name` VARCHAR(255), -- ten bai viet
    `author_name` VARCHAR(255), -- ten tac gia
PRIMARY KEY(`id`))

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
    `status` INT(2), -- trang thai
PRIMARY KEY(`id_question`))

-- GÓP Ý

CREATE TABLE IF NOT EXISTS `feedback`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_account` INT(11) NOT NULL,
    `content` TEXT(0), -- noi dung
    `name_author` VARCHAR(255), -- ten nguoi gop y
    `time_creat` TIMESTAMP, -- thoi gian tao
    `driver` VARCHAR(255), -- ten thiet bi
    `browser` VARCHAR(255),-- trinh duyet
    `version` VARCHAR(255), -- phien ban
    `status` INT(2), -- trang thai
PRIMARY KEY(`id`))

-- TIN NHẮN

CREATE TABLE IF NOT EXISTS `messeger`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_sender` INT(11) NOT NULL,
    `id_receiver` INT(11) NOT NULL,
    `content` TEXT(0),
    `time_creat` TIMESTAMP,
    `status` INT(2),
PRIMARY KEY(`id_messeger`))

CREATE TABLE IF NOT EXISTS `notification`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_sender` INT(11) NOT NULL,
    `id_receiver` INT(11) NOT NULL,
    `content` TEXT(0),
    `time_creat` TIMESTAMP,
    `status` INT(2),
PRIMARY KEY(`id_notification`))
-- danh muc
CREATE TABLE IF NOT EXISTS `categories`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name_categories` VARCHAR(255),
    `categories` VARCHAR(255),
    `group` INT(2),
    `status` INT(2),
PRIMARY KEY(`id`))


INSERT INTO categories
VALUES 
(1, 'Truyện mới', 'truyen-moi', 1, 1),
(2, 'Cổ tích Việt Nam', 'co-tich-viet-nam', 1, 1),
(3, 'Cổ tích Nhật Bản', 'co-tich-nhat-ban', 1, 1),
(4, 'Truyện cổ Grimms', 'truyen-co-grimms', 1, 1),
(5, 'Thần thoại Hi Lạp', 'than-thoai-hi-lap', 1, 1),
(6, 'Cao dao tục ngữ', 'ca-dao-tuc-ngu', 1, 1),
(7, 'Lời hay ý đẹp', 'loi-hay-y-dep', 1, 9),
(8, 'Truyện cười', 'truyen-cuoi', 1, 1),
(9, 'Thơ', 'tho', 1, 1),
(10, 'Phim hoạt hình', 'phim-hoat-hinh', 9, 1),
(11, 'Đô rê mon', 'do-re-mon', 9, 1),
(12, 'Tom and Jerry', 'tom-and-jerry', 9, 1),
(13, 'vè', 've', 1, 1),
(14, 'Câu đố', 'cau-do', 1, 1),
(15, 'Bài hát', 'bai-hat', 1, 1),
(16, 'Tin tức', 'tin-tuc', 1, 1)


INSERT INTO personality
VALUES 
(1, 'Thật thà', 1, 1),
(2, 'Tốt bụng', 1, 1),
(3, 'Dũng cảm', 1, 1),
(4, 'Khiêm tốn', 1, 1),
(5, 'Siêng năng', 1, 1),
(6, 'Kiên nhẫn', 1, 1),
(7, 'Lể phép', 1, 1),
(8, 'Trách nhiệm', 1, 1);


CREATE TABLE IF NOT EXISTS `status`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name_status` VARCHAR(255),
    `status` INT(2),
PRIMARY KEY(`id`))

INSERT INTO status
VALUES 
(1, 'Lưu nháp', 1),
(6, 'Đăng bài', 1);

CREATE TABLE IF NOT EXISTS `intro`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `content` TEXT(0),
    `id_author` INT(11),
    `group` INT(2),
    `status` INT(2),
PRIMARY KEY(`id`))

CREATE TABLE IF NOT EXISTS `ranking`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11) NOT NULL,
    `id_author` INT(11),
    `id_categories` INT(11) NOT NULL,
    `time` TIMESTAMP,
PRIMARY KEY(`id`))

CREATE TABLE IF NOT EXISTS `rate`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_post` INT(11),
    `id_author` INT(11),
    `group` INT(11),
    `rate` INT(11),
    `total_rate` INT(11),
    `view` INT(11),
    `like` INT(11),
    `dis_like` INT(11),
    `report` INT(11),
PRIMARY KEY(`id`))

user:
1: admin cao nhất
2: admin cao xếp thứ 2 - có quyền duyệt user
3: admin cao xếp thứ 5 - có quyền duyệt bài viết
4:
5: user có chức năng bình thường
6: user đăng ký bằng đăng ký nhanh
7: user bị cảnh cáo
8: user tạm khóa
9: user bị ban vĩnh viễn

post:
1:
2:
3:
4:
5: bài viết được đăng
6: bài viết đang chờ xét duyệt
7: bài viết nháp
8: bài viết tạm xóa
9: bài viết bị xóa vĩnh viễn

feedback:
1:
2:
3:
4:
5:
6:Đã duyệt
7:Chờ duyệt
8:Đã sửa xong
9:Xóa vĩnh viển