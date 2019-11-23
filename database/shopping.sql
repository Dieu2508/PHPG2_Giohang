-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2019 lúc 02:10 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `IDIMG` int(11) NOT NULL,
  `UrlImg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IDSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`IDIMG`, `UrlImg`, `IDSP`) VALUES
(1, 'DX9305_21_model.jpg', 1),
(2, 'DX9305_22_model.jpg', 1),
(3, 'DX9305_23_hover_model.jpg', 1),
(4, 'DX9305_25_model.jpg', 1),
(5, 'DX9305_01_laydown.jpg', 1),
(6, 'DX9303_21_model.jpg', 2),
(7, 'DX9303_22_model.jpg', 2),
(8, 'DX9303_23_hover_model.jpg', 2),
(9, 'DX9303_25_model.jpg', 2),
(10, 'DX9303_01_laydown.jpg', 2),
(11, 'EB3710_21_model.jpg', 3),
(12, 'EB3710_22_model.jpg', 3),
(13, 'EB3710_23_hover_model.jpg', 3),
(14, 'EB3710_25_model.jpg', 3),
(15, 'EB3710_02_laydown.jpg', 3),
(16, 'FS7590_21_model.jpg', 4),
(17, 'FS7590_22_model.jpg', 4),
(18, 'FS7590_23_hover_model.jpg', 4),
(19, 'FS7590_01_laydown.jpg', 4),
(20, 'FS7590_25_model.jpg', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro`
--

CREATE TABLE `pro` (
  `IDSP` int(11) NOT NULL,
  `TenSP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GiaAo` int(11) NOT NULL,
  `GiaThuc` int(11) NOT NULL,
  `Mota` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `anhDemo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pro`
--

INSERT INTO `pro` (`IDSP`, `TenSP`, `GiaAo`, `GiaThuc`, `Mota`, `anhDemo`, `GioiTinh`) VALUES
(1, 'QUẦN BÓ PRIMEKNIT FLW BELIEVE THIS', 210, 105, 'Hãy trải thảm yoga ra và chuẩn bị tập luyện. Chiếc quần tập này giúp bạn luôn thoải mái khi thay đổi tư thế. Chất vải dệt kim mềm mại có tích hợp các vùng co giãn và nâng đỡ, ôm lấy cơ thể như làn da thứ hai. Cạp cao gọn gàng và cố định.', 'DX9305_21_model.jpg', 'women'),
(2, 'ÁO NGỰC PRIMEKNIT ALL ME', 100, 50, 'Hãy trải thảm và hòa mình vào bài tập. Chiếc áo ngực có độ nâng đỡ nhẹ này là lựa chọn hoàn hảo cho các bài tập tác động nhẹ. Dễ dàng chuyển từ tư thế Downward Dog sang Chaturanga mà không bị sao lãng. Dù là tập yoga ở phòng tập gần nhà hay tăng cấp với bài tập pilates hoặc lớp barre, chiếc áo ngực Primeknit All Me sẽ luôn che chắn tốt cho bạn.​ Bạn cần thay đổi nhịp độ? Chất vải dệt kim mềm mại của chúng tôi được thiết kế để chuyển động – và hít thở – cùng bạn. Duy trì cảm giác khô ráo và thoải mái khi tập nhóm cơ liên sườn. Tự tin tập động tác vươn tay cho thật thành thục', 'DX9303_21_model.jpg', 'women'),
(3, 'DÒNG SẢN PHẨM BELIEVE THIS 3-STRIPES TIGHTS', 100, 50, 'Mẫu quần tập này là món đồ có thể mặc trong bất kỳ bài tập nào. Được may bằng vải dệt kim co giãn, quần được thiết kế vừa vặn với cơ thể, với cạp lửng và thân dài', 'EB3710_21_model.jpg', 'women'),
(4, 'QUẦN THI ĐẤU TRÊN SÂN NHÀ ĐỘI ĐỨC', 72, 36, 'Họa tiết trẻ trung hai bên được lấy cảm hứng từ nhiều thập kỷ thành công của đội tuyển. Đội tuyển Đức mặc một phiên bản của chiếc quần thi đấu này cùng với chiếc áo được lấy cảm hứng từ quốc kỳ. Chất liệu mềm mại nhanh khô, giúp bạn luôn cảm thấy thoải mái trong mọi thử thách. Một huy hiệu dệt với họa tiết bốn ngôi sao.', 'FS7590_21_model.jpg', 'Men');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`IDIMG`),
  ADD KEY `IDGiay` (`IDSP`);

--
-- Chỉ mục cho bảng `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`IDSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `IDIMG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `pro`
--
ALTER TABLE `pro`
  MODIFY `IDSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`IDSP`) REFERENCES `pro` (`IDSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
