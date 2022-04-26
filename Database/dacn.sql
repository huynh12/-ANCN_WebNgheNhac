CREATE DATABASE DACN
GO
USE DACN
GO

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE baihat (
  id int(255) PRIMARY KEY NOT NULL,
  tenbaihat varchar(200) NOT NULL,
  casy varchar(100)  NOT NULL,
  theloai varchar(20)  NOT NULL,
  duongdan varchar(200) NOT NULL,
  loibaihat varchar(99)  NOT NULL,
  luotnghe int(255) NOT NULL
) 

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `casy`, `theloai`, `duongdan`, `loibaihat`, `luotnghe`) VALUES
(1, 'Cưới thôi', 'MasewMasiu', 'Nhạc Quốc Tế', 'nhac/CuoiThoi-MasewMasiuBRayTAPVietNam-7085648.mp3', '', 4),
(57, 'Mẹ Ơi, Mẹ À', 'Annie Thu Thủy', 'Việt Nam', 'nhac/MeOiMeA.mp3', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihathot`
--

CREATE TABLE `baihathot` (
  `id` int(255) NOT NULL,
  `tenbaihat` varchar(200) CHARACTER SET utf8 NOT NULL,
  `casy` varchar(100) CHARACTER SET utf8 NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `duongdan` varchar(200) CHARACTER SET utf8 NOT NULL,
  `loibaihat` varchar(9999) CHARACTER SET utf8 NOT NULL,
  `luotnghe` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihathot`
--

INSERT INTO `baihathot` (`id`, `tenbaihat`, `casy`, `theloai`, `duongdan`, `loibaihat`, `luotnghe`) VALUES
(1, 'Không biết phải làm sao', 'Vương Tĩnh Văn Không Mập', 'Nhạc Trung', 'nhac/Khong-Biet-Phai-Lam-Sao-Vuong-Tinh-Van-Khong-Map.mp3', '', 0),
(43, 'Về Nhà Thôi', 'AvinLu', 'Việt Nam', 'nhac/VeNhaThoi-AvinLu-5838565.mp3', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihatmoi`
--

CREATE TABLE `baihatmoi` (
  `id` int(255) NOT NULL,
  `tenbaihat` varchar(200) CHARACTER SET utf8 NOT NULL,
  `casy` varchar(100) CHARACTER SET utf8 NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `duongdan` varchar(200) CHARACTER SET utf8 NOT NULL,
  `loibaihat` varchar(9999) CHARACTER SET utf8 NOT NULL,
  `luotnghe` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `casy`
--

CREATE TABLE `casy` (
  `id` int(255) NOT NULL,
  `casy` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `casy`
--

INSERT INTO `casy` (`id`, `casy`) VALUES
(1, 'Vương Tĩnh Văn Không Mập'),
(2, 'MasewMasiu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuchay`
--

CREATE TABLE `chuchay` (
  `id` int(11) NOT NULL,
  `noidung` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuchay`
--

INSERT INTO `chuchay` (`id`, `noidung`) VALUES
(1, 'Chào mừng bạn đến với website nghe nhạc trực tuyến | Online Music');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `id` int(11) NOT NULL,
  `chude` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`id`, `chude`) VALUES
(1, 'Nhạc Chờ Hot'),
(2, 'Nhạc Việt Mới'),
(3, 'Nhạc Hot Rap Việt'),
(5, 'Hôm Nay Nghe Gì? '),
(7, 'Nhạc Sàn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luot`
--

CREATE TABLE `luot` (
  `luot` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `luot`
--

INSERT INTO `luot` (`luot`) VALUES
(13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(255) NOT NULL,
  `tinhtrang` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `tinhtrang`) VALUES
(1, 'OK'),
(2, 'NO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `noidung` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `noidung`) VALUES
(16, 'Việt Nam'),
(17, 'Nhạc Quốc Tế'),
(19, 'Âu Mỹ'),
(20, 'Hàn Quốc'),
(21, 'Nhạc Trung'),
(22, 'Cách Mạng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'OK',
  `gioitinh` varchar(4) CHARACTER SET utf8 NOT NULL,
  `ngaysinh` varchar(30) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `level` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `status`, `gioitinh`, `ngaysinh`, `diachi`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'Huỳnh Cảm', 'OK', '', '', 'RAH', 'kingcherycam@gmail.com', 3),
(34, 'camp13', '123456', '', 'OK', 'Nam', '1-1-1975', '', 'kingchreycam@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(99) CHARACTER SET utf8 NOT NULL,
  `time` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('dq1m8lig92i4f5igkq8m0rkrfj', '1635445748');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baihathot`
--
ALTER TABLE `baihathot`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baihatmoi`
--
ALTER TABLE `baihatmoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `casy`
--
ALTER TABLE `casy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuchay`
--
ALTER TABLE `chuchay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `baihathot`
--
ALTER TABLE `baihathot`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `baihatmoi`
--
ALTER TABLE `baihatmoi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `casy`
--
ALTER TABLE `casy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
