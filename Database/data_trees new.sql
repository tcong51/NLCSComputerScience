-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 23, 2021 lúc 10:15 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data_trees`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `area`
--

CREATE TABLE `area` (
  `Code` int(10) NOT NULL,
  `Area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `area`
--

INSERT INTO `area` (`Code`, `Area`) VALUES
(1, 'ĐBSCL'),
(2, 'ĐBSH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benefit`
--

CREATE TABLE `benefit` (
  `Code` int(100) NOT NULL,
  `Benefit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `benefit`
--

INSERT INTO `benefit` (`Code`, `Benefit`) VALUES
(1, 'Cải tạo đất'),
(2, 'Che mát'),
(3, 'Cố định đất ven sông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `climate`
--

CREATE TABLE `climate` (
  `Code` int(100) NOT NULL,
  `Climate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `climate`
--

INSERT INTO `climate` (`Code`, `Climate`) VALUES
(1, 'Khô nóng'),
(2, 'Mát mẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_admin`
--

CREATE TABLE `db_admin` (
  `masoadmin` int(11) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_admin`
--

INSERT INTO `db_admin` (`masoadmin`, `tendangnhap`, `matkhau`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_trees`
--

CREATE TABLE `db_trees` (
  `Code` int(11) NOT NULL,
  `TreeName` varchar(200) NOT NULL,
  `Characteristics` text NOT NULL,
  `HowToCare` text NOT NULL,
  `Avatar` varchar(500) NOT NULL,
  `Describe` text NOT NULL,
  `NumberAccess` int(200) NOT NULL,
  `Area` int(100) NOT NULL,
  `Benefit` int(100) NOT NULL,
  `Climate` int(100) NOT NULL,
  `Growthtime` int(100) NOT NULL,
  `Humidity` int(11) NOT NULL,
  `LandType` int(10) NOT NULL,
  `Light` int(100) NOT NULL,
  `Species` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `db_trees`
--

INSERT INTO `db_trees` (`Code`, `TreeName`, `Characteristics`, `HowToCare`, `Avatar`, `Describe`, `NumberAccess`, `Area`, `Benefit`, `Climate`, `Growthtime`, `Humidity`, `LandType`, `Light`, `Species`) VALUES
(1, 'Bưởi năm roi', 'Bưởi năm roi được trồng phổ biến khắp vùng quê của ông bưởi và được nhiều người ở nơi khác đến xin giống về trồng. Ngày này, bưởi năm roi được trồng ơ rất nhiều nơi, nhưng phân bố nhiều nhất ở Phú Hữu, huyện Châu Thành, tỉnh Hậu Giang và ở Bình Minh, Vĩnh Long. Là loại cây có khả năng sinh trưởng và phát triển khá tốt, có thể thích nghi với nhiều điều kiện thời tiết khí hậu khác nhau. Sau từ 2,5 – 3 năm cây có thể cho thu hoạch được, tuổi thọ cây khá cao có thể cho thu hoạch tới 20 năm những chất lượng quả vẫn rất cao.', ' Cách chăm sóc bưởi năm roi\r\n\r\nBón phân\r\n\r\nTrong thời kỳ cây kiến thiết quả: Nên bón phân thành nhiều đợt cho bưởi, khi vừa trồng cây xong nên hòa tan phân urê 20% và DAP 40gam trong 10 lít nước, sau đó tưới trực tiếp cho cây, định kỳ 3 tháng/lần. Thời kỳ cây bắt đầu ổn định trái cần bổ sung thêm hàm lượng Kali, phân lân, và phân hữu cơ để nâng cao năng suất và chất lượng quả.\r\n\r\nTưới nước\r\n\r\nCũng như các loại bưởi khác, khi vừa mới trồng cây cần cung cấp đủ lượng nước để cây có đủ độ ẩm phát triển rễ và chồi mới. Có thể sử dụng giàn tưới nhỏ giọt để tiết kiệm thời gian cũng như công sức\r\n\r\nTỉa cành, tạo tán, vệ sinh vườn\r\n\r\nNên thường xuyên cắt, tỉa bớt những cành đã ra trái, cành khô, cành bị sâu bệnh để tạo thêm diện tích cho cây phát triển, tiêu diệt điều kiện để các mầm mống sâu bệnh gây hại sinh trưởng. Ngoài ra, cũng cần vệ sinh vườn cây thường xuyên để các loại nấm mốc, vi khuẩn sinh sôi.\r\n\r\nPhòng trừ sâu bệnh cho cây bưởi năm roi\r\n\r\nCũng giống loại cây khác, bưởi năm roi cũng rất dễ mắc phải một số loại bệnh hại thông thường như: bệnh loét, chảy mủ,… Để phòng chống những loại bệnh này cần thường xuyên thoát nước kịp thời cho cây, tránh để cây bị ngập úng.\r\n\r\nCác loại sâu gây hại như rệp, bọ xít xanh, nhện đỏ, sâu đục vỏ,… gây thiệt hại đến năng suất, hoặc có thể làm cây kém phát triển, gây chết cây. Để khắc phục những loại sâu hại này, bạn có thể bắt bằng tay hoặc sử dụng thiên địch, ngoài ra cũng nên sử dụng thêm các loại chế phẩm sinh học bảo vệ thực vật.', './img/buoinamroi.jpg', 'Ăn bưởi thường xuyên sẽ giúp bạn giảm được lượng cholesterrol trong máu, đẩy lùi được bệnh tiểu đường, tim mạch. Ngoài ra, các nhà khoa học còn chỉ ra rằng nếu kết hợp bưởi trong mỗi bữa ăn không những giúp bạn giảm cân hiệu quả mà còn có thể ngăn ngừa và làm giảm các tác hại mà nướu gây ra. Các axit có trong bưởi sẽ giúp bạn giải độc gan, tăng cường trao đổi chất cho thể, mang lại nguồn năng lượng tích cực cho bản thân.', 14, 1, 1, 2, 2, 1, 4, 1, 3),
(2, 'Cam Sành', 'Cam sành là một giống cây ăn quả thuộc chi Cam chanh có quả gần như quả cam, có nguồn gốc từ Việt Nam. Quả cam sành rất dễ nhận ra nhờ lớp vỏ dày, sần sùi giống bề mặt mảnh sành, và thường có màu lục nhạt (khi chín có sắc cam), các múi thịt có màu cam.', 'Tưới nước:\r\nSau trồng tưới ướt đẩm đất, Sau trồng hai ngày tưới 1 lần, khi cây xanh tốt trở lại 5 – 7 ngày tưới 1 lần. thời kỳ khô hạn, ít mưa nên tưới 3 – 5 ngày 1 lần. Tưới dặm nếu nắng gắt, thoát nước kịp thời khi bị úng. Tiến hành tủ gốc cam.\r\n\r\nSâu bệnh và cách phòng:\r\n- Sâu vẽ bùa (Phyllocnistis citrella ): Sâu non đục vào lá gây nên những đường ngoằn ngoèo, thường đi chung với bệnh loét gây nên.\r\nTỉa cành, bón phân hợp lý, điều khiển sự ra chồi sao cho đồng loạt để hạn chế sư lây nhiễm liên tục trong năm. Phòng trừ bằng cách phun thuốc sớm ngay từ giai đoạn cây ra lộc non . Sử dụng 1 trong các loại thuốc: Phosphomidon, Dimethoate, Trigard, Abamectin và Dimilin có hiệu qủa phòng trị tốt sâu vẽ bùa. Bên cạnh các loại thuốc hóa học thì hiệu quả của dầu khoáng đối với sâu vẽ bùa cũng đã được khẳng định.\r\n \r\n- Sâu đục thân, cành: Sâu đục rỗng thân cành gây chảy mủ, cành chết. Sâu đùn mạt cưa ra ngoài miệng hang. Phòng trừ bằng cách cắt bỏ cành bị hại nặng, chích thuốc trừ sâu vào lỗ đục (Dùng thuốc cypermap 25EC, Map permethrin 50EC…), có thể rải ít Basudin 10 H, dùng móc sắt bắt sâu.\r\n \r\n- Nhện đỏ, nhện trắng: Có thể sử dụng thuốc hoá học khi mật số Nhện đạt 3 con thành trùng /lá hoặc trái. Sử dụng các loại thuốc đặc trị Nhện, các loại thuốc trừ Sâu gốc Cúc hoặc Lân hữu cơ kết hợp với Dầu khoáng. Ðể ngăn chặn sự bộc phát tính kháng thuốc, khi sử dụng thuốc hóa học cần luân phiên các loại thuốc có gốc hóa học khác nhau. Có thể sử dụng các loại thuốc như Comite, Trebon, Pegasus, Bi 58, Kelthane, Danitol, Ortus 5SC, Selecron 500EC/ND… (theo liều lượng khuyến cáo) và Dầu khóang DC-Tron Plus (nồng độ 0,5%)…\r\n \r\nBệnh Bồ hóng: Bệnh thường xuất hiện nơi râm mát, và đây là bệnh kế phát sau khi có sự hiện diện của côn trùng họ chích hút. Nấm phát triển trên bề mặt lá, cành non, tạo thành lớp dày che kín cả mặt lá, thân, trái. Hạn chế sự phát triển của nhóm côn trùng họ chích hút, bằng các loại thuốc đặc trị cho từng nhóm côn trùng chích hút ấy. Dùng máy phun nước lên tán cây rửa trôi các chất thải của côn trùng họ chích hút thải ra. Hạn chế sử dụng phân bón qua lá, nếu phun phân bón qua lá nhiều bệnh gây hại ngày càng nặng hơn. Phun thuốc trị khi bệnh nặng: Copper B 75 WP, Derosal 60 WP, Kumulus 80 DF, Champion 77 WP với nồng độ 0,2-0,5% hoặc Chlorine 0,04%, phun 7-10 ngày/lần.\r\n\r\n', './img/camSanh.jpg', 'Cam sành từ lâu đã được coi như một loại đặc sản của người dân Hà Giang nói riêng và cả nước nói chung. Với hương vị ngon ngọt và mát dịu cùng hình dáng quả khá đặc trưng. Một khi đã thương thức giống cam này bạn sẽ bị hương vị của chúng cuốn hút nhớ mãi không quên.Khi nhắc đến vùng đất Hà Giang người ta không thể không nhắc đến đặc sản Cam Sành. Thứ quả đã trở nên nổi tiếng làm nên thương hiệu cam cả nước trong mắt bạn bè quốc tế. \r\n\r\nĐây là giống cây ăn quả thuộc chi Cam chanh. Qủa rất dễ nhận ra bởi lớp vỏ dày da hơi sần sùi giống mảnh sành. Khi xanh quả có màu lục khi chín có sắc cam khá đẹp. Bên trong cam sành có thịt cơm vàng sậm rất nhiều nước. Khi ăn có vị thanh và ngọt sắc rất đặc trưng. So với những loại cam khác thì cam sành có trọng lượng lớn hơn. Mỗi trái trung bình nặng từ 275g/trái trở lên. ', 8, 2, 2, 1, 1, 3, 3, 2, 3),
(3, 'Cây phát tài', 'Cây phát tài là loại cây có thân mềm dẻo, rỗng ruột ở bên trong và nhiều đốt. Lá của cây có màu xanh và mọc thành từng lớp, tỏa tròn cùng sự phát triển của thân.  Ngoài ra, người ta thường trồng các cây phát tài gần nhau, tỉa lá và uốn cây thành những hình dạng như mong muốn. Cụ thể như, có thể đan từng cây lại với nhau tạo thành chiếc bình hay uốn xoắn thành khung giỏ,…  Loại cây này, rất thích những nơi bóng râm và có ánh sáng thường xuyên. Vì vậy, tại văn phòng làm việc, công ty là một trong những địa điểm khá thích hợp, để cây phát tài sinh sống và phát triển.', 'Hiện nay, để nhân giống cây phát tài, người ta thường dựa vào 2 cách là giâm cành và gieo hạt. Cụ hơn hơn:  Gieo hạt: Nếu bạn chọn cách này để nhân giống, thì sẽ mất khá nhiều thời gian. Bởi vì, khi gieo hạt, cây sẽ phát triển từ ngọn và làm cho cây thuần hơn. Do đó, mọi người thường rất ít quan tâm, chú ý đến cách nhân giống bằng phương pháp gieo hạt.  Giâm cành: Đây là cách đang được áp dụng khá nhiều, vì cũng khá đơn giản và nhanh chóng. Đầu tiên, bạn chỉ cần cắt cành từ cây bố mẹ, với chiều dài từ 25 đến 50 cm. Sau đó, giâm cành vừa cắt xuống đất và chăm sóc cho đến khi cành mọc mầm mới. Bởi vậy, thời gian sẽ được rút ngắn nếu chăm sóc tốt và cung cấp nước đầy đủ, nhằm giúp duy trì nước, cành sẽ nhanh mọc rễ hơn.  Lưu ý đối với giâm cành: Bạn cần sát trùng vết cắt, bằng cách bôi vôi hoặc keo lên, nhằm hạn chế nấm, vi khuẩn,.. Ngoài ra, việc này cũng giúp cành mọc rễ nhanh hơn.', './img/Cayphattai.jpg', 'Cây phát tài còn được gọi với tên khác là cây trúc phất lộc, cây phát lộc, cây phất dụ. Ngoài ra, cây này còn có tên tiếng Anh là Lucky Bamboo và có nguồn gốc từ các nước như Nhật Bản, Việt Nam, Trung Quốc.\r\nCây phát tài có ý nghĩa là mang đến nhiều may mắn, tài lộc, tiền tài cho gia chủ. Hiện nay, có rất nhiều gia đình, văn phòng đã dùng cây phát tài để trang trí và làm cây phong thủy.\r\n\r\nCây phát tài là loại cây có khả năng sinh trưởng tốt, dễ thích nghi với môi trường bên ngoài. Mặc dù, có khắc nghiệt thế nào, thì cây vẫn đứng thẳng, hiên ngang. Do đó, cây phát tài được xem như là một nguồn năng lượng mạnh mẽ. Ngoài ra, nếu nhìn theo góc độ phong thủy, thì loại cây này sẽ mang lại sự bình yên và hạnh phúc cho gia chủ.\r\nHơn thế nữa, ý nghĩa của loại cây phát tài, còn tùy thuộc vào số lượng cây trong chậu. Vì vậy, bạn có thể dựa vào điều này, để trồng nhằm được những mong muốn của bản thân.\r\n\r\nBên cạnh đó, bạn có thể tham khảo 5 yếu tố Ngũ Hành, nhằm tận dụng tối đa những tác dụng tích cực của cây phát tài. Cụ thể:\r\n\r\nKim: Tức là, chậu được dùng để trồng cây phát tài, sẽ được làm bằng kim loại. Đối với, cây được trồng trong chậu không phải kim loại, thì bạn phải đặt vào chậu một một số đồng tiền.\r\n\r\nMộc: Đây chính là cây phát tài\r\n\r\nThủy: Nước khi tưới cây\r\n\r\nHỏa: Lúc trồng cây, người ta thường buộc ruy bang đỏ vào từng chậu cây.\r\n\r\nThổ: Nơi cây sinh trưởng, lớn lên. Hiểu cách khác, chính là đất dùng để trồng cây.', 11, 2, 2, 2, 1, 1, 1, 2, 5),
(4, 'Cây Sala', 'Sala là loại cây gắn liền với đạo Phật, nên chúng thường được trồng rất nhiều tại các đền, chùa. Thường tập trung ở các nước có tín ngưỡng về Phật giáo như Thái Lan. Hay quốc gia có nhiều lễ hội chùa chiền như Ấn Độ, và ngay cả nước ta cũng được trồng rất nhiều.  Khi bạn đến những ngôi chùa, bạn sẽ có thể bắt gặp những bông hoa Sala rất xinh đẹp. Và một mùi hương đặc biệt mang đến sự hạnh phúc cùng với cảm giác rất bình yên.', 'Nếu bạn đang có dự định chọn Sala để trồng tại các công trình đô thị hay trồng trong sân nhà. Bạn có thể yên tâm, vì thực tế Sala rất dễ trồng. Do là cây thân gỗ nên khả năng kháng bệnh của chúng rất tốt. Đồng thời, chúng còn là loại cây ưa nắng và có thể sống ở nhiều loại đất khác nhau.\r\n\r\nBên cạnh đó, cách tốt nhất để trồng loại cây này là gieo hạt hoặc giâm cành. Và sau khi cây con đã mọc lên dần, trong lúc đó, bạn cần phải thường xuyên cắt tỉa cành nhỏ, lá ở phía dưới để cây có thể cao lớn hơn.\r\n\r\nNếu bạn muốn cây phát triển tốt, bạn có thể lựa chọn bón phân cho chúng. Thời gian bón phân có thể ít nhất 2 lần/năm và nhiều nhất là 5 lần/năm. Như vậy sẽ tốt hơn.\r\n\r\nMột điều không thể bỏ qua đó là bổ sung dinh dưỡng cho cây. Nếu đã có đất tốt thì phải kèm theo chế độ chăm sóc phù hợp. Cung cấp cho cây đủ lượng nước cho cây sinh sôi nảy nở và tỏa hương cho đời.\r\n\r\nThường thì các cây công trình bộ rễ không được sâu. Đó là lý do bạn nên chú ý chăm sóc, tạo điều kiện cho chúng bén rễ. Như vậy thì dù có mưa giông cũng không làm chúng đổ ngã.', './img/CayCau.jpg', 'Ngoài mang ý nghĩa linh thiên, cây Sala còn rất nhiều công dụng khác. Không chỉ mang một ý nghĩa đặc biệt với những người theo Đạo Phật. Loại cây này còn được biết đến với một số công dụng đặc biệt.\r\n\r\nTheo một số nghiên cứu, đã cho thấy được trong cây Sala có chứa một số chất có tác dụng kháng sinh. Chống nấm và có khả năng sát khuẩn cao. Đặc biệt cây còn có thể hỗ trợ điều trị các chứng bệnh như cảm và bệnh đau dạ dày.\r\n\r\nBên cạnh đó, bạn có thể sử dụng lá Sala để điều trị các bệnh về da. Bằng cách ép thành nước và một số thông tin còn cho thấy lá non của chúng có thể giúp giảm bớt đau nhức răng.\r\n\r\nKhông chỉ vậy, bạn còn có thể sử dụng hoa Sala để là trà. Với loại trà này không chỉ có thể thanh nhiệt giải độc mà còn có tác dụng giúp bạn ngủ ngon. Làm giảm các triệu chứng lo âu và ổn định được huyết áp.\r\n\r\nThậm chí, có nhiều người còn sử dụng Sala để chữa các chứng đau bụng hay làm lành các vết thương. Và điều đặc biệt là loại cây này còn rất tốt đối với các chị em phụ nữ. Vì chúng có tác dụng điều trị rối loạn kinh nguyệt hay rong kinh.', 20, 1, 2, 1, 2, 2, 1, 1, 1),
(5, 'Chanh leo', 'Chanh leo là dạng cây thân leo phát triển khá mạnh và không mất quá nhiều công chăm sóc. Thân cây chanh leo màu sẫm tròn có lá mọc xen kẽ. Viền lá có những răng cưa nhỏ và đầu ngọn có những tua cuốn giúp cây bám vào giá thể để phát triển.\r\nQuả chanh leo có hình cầu dài khi non màu xanh nhưng khi chín sẽ chuyển sang màu tím sẫm và hơi nhăn. Khi bổ ra bên trong sẽ không chứa những tép thông thường mà có những lớp cơm nhày bao quanh màu vàng và mùi hương khá đặc trưng.', 'Bạn có thể trồng chanh leo bằng hạt hoặc dâm cành đều được. Tuy nhiên trồng bằng phương pháp dâm cành sẽ cho cây nhanh thu hoạch quả hơn là gieo hạt.\r\n\r\nCác bước trồng bằng hạt: Hạt chanh leo bạn có thể mua ở các cửa hàng cây giống đều có bán sẵn và cho chất lượng tốt nhất. \r\nTrước khi gieo hạt thì bạn nên ngâm hạt giống vào nước ấm trong khoảng thời gian 1 ngày để hạt nở trương dễ nảy mầm hơn.\r\n\r\nChuẩn bị giá thể gieo hạt bằng lớp đất mỏng. Gieo từng chậu một và ủ đất mỏng lên trên rồi tưới nước giữ ẩm cho giá thể. Đem đặt giá thể ở nơi có ánh sáng để kích thích hạt nảy mầm\r\n\r\nTừ khi gieo đến khi nảy mầm chỉ mất 1 tuần. Sau 4 tuần cây con có thể đạt chiều cao 15cm sẵn sàng cho việc trồng ra nơi ở mới.\r\n\r\nNếu trồng từ cây giống:\r\n\r\nNếu không có thời gian bạn có thể mua cây giống về rồi tiến hành trồng ra vườn hoặc trong chậu. Nên chọn những cây cao khỏe có chiều cao từ 15 cm trở lên.\r\n\r\nLàm giàn cho cây chanh leo:\r\nDo là loại cây thân leo nên khi cây đạt chiều cao từ 60 cm trở nên bắt buộc bạn phải làm giá thể cho cây bám và sinh trưởng tiếp. Bạn có thể tận dụng giàn mướp đã làm hoặc có thể cho chanh leo bám sát ven theo bờ rào, tường nhà bạn cũng được.\r\n\r\nChế độ chăm sóc cho chanh leo mau đậu quả:\r\nTưới nước: Do là loại cây nhiệt đới nên cây cần độ ẩm khá cao. Lượng nước đầy đủ sẽ khiến cành cây càng phát triển mạnh mẽ và vươn tán càng xa và rộng.   Định kì 2 ngày bạn tưới nước cho chanh leo một lần vào buổi sáng khi trời mát và chiều tối. Mùa khô nhiệt độ cao hơn và nhanh bốc hơi nước thì có thể tăng số lần tưới nước lên để đảm bảo cây không bị khô héo do thiếu nước.\r\nCắt tỉa, tạo tán cho chanh leo  : Một khi cây đã bám giàn thì sẽ phát triển rất nhanh. Hết ngọn này đến ngọn khác sẽ đâm chồi và lan ra tứ phía. Lúc này bạn cần tỉa cành và tạo hình cho cây vừa thẩm mỹ vừa giúp loại bỏ bớt những lá héo úa sâu bệnh giúp cây nhanh ra nụ đậu nhiều trái hơn.\r\n\r\nSâu bệnh hại của chanh leo : Giống như những loại cây dây leo thì chanh leo cũng mắc một số loại bệnh phổ biến như sâu ăn lá, đốm nâu vv. Bệnh phấn trắng hay thối quả cũng là những loại bệnh người trồng cần quan tâm lưu ý khi muốn cây chanh leo khỏe mạnh.\r\n\r\nThụ phấn cho cây : Điểm đặc biệt ở chanh leo đó chính là trên một cây có cả hoa đực và cái. Thông thường cây sẽ tự thụ phấn nhờ ong bướm. Trong một số trường hợp đặc biệt mới cần đến bạn thụ phấn bằng tay cho hoa.\r\n\r\nTừ khi trồng cho đến khoảng 7 tháng cây sẽ trổ ra những bông hoa đầu tiên. Đây có lẽ là khoảnh khắc bạn muốn ngắm nhìn nhất. Những bông hoa chanh leo nở ra đẹp lung linh dưới nắng làm bạn không thể dời mắt khỏi chúng. Hoa chanh leo đường kính khá lớn khoảng 10cm. Hoa có màu trắng và phần gốc đài màu tím cùng với những tua rua khá lạ mắt.\r\n\r\nSau khi hoa nở được khoảng 1 tuần sẽ héo và bắt đầu chuyển dần sang quá trình tạo quả. Những quả non mới nhú thường có màu xanh non. Khi trưởng thành quả sẽ dần chuyển sang màu tím đặc trưng. Qúa trình này thường mất 2 tuần.\r\n\r\nTùy thuộc cách chăm sóc của bạn và điều kiện khí hậu mà số lượng quả trên mỗi cây của bạn sẽ nhiều hay ít. Thông thường nếu trồng trong chậu thì mỗi vụ bạn có thể thu được 40 quả chanh leo.', './img/chanhleo.jpg', 'Chanh dây có nguồn gốc từ các nước Nam Mỹ (Argentina, Paraguay và Brasil) nhưng đã phổ biến ở nhiều nơi trên thế giới.\r\n\r\nNguồn gốc 2 giống lạc tiên (chanh dây) được trồng phổ biến ở Việt Nam:\r\n\r\n+ Giống lạc tiên vỏ vàng có nguồn gốc từ Sirilanca, Urganda và Hawaii có mặt ở Việt Nam với tên gọi là chanh dây.\r\n\r\n+ Giống lạc tiên vỏ đỏ có nguồn gốc từ Australia và Đài Loan, thích ứng với các vùng có khí hậu mát mẻ, nhiệt độ bình quân 18 - 20oC, cao độ trung bình từ 800 - 1.000m, có khả năng ra hoa và đậu quả quanh năm, cho năng suất rất cao.\r\n\r\nTác dụng của chanh dây\r\n+ Thảo dược: Toàn bộ thân chanh dây được phơi khô và sử dụng như một thảo dược an thần điều trị chứng mất ngủ. Ở châu Âu, lá khô và thân cây, xắt nhỏ và thường trộn với lá chè để uống.\r\n\r\n+ Thực phẩm: Người ta sử dụng chanh dây (chanh leo) để làm nước giải khát vào mùa hè, món tráng miệng, bánh kem, chế biến món ăn...\r\n\r\n+ Cây chanh dây (chanh leo) không chỉ được trồng thành giàn để thu hái quả mà còn làm bóng mát và tạo cảnh quan cho không gian sống.\r\n\r\nGiá trị dinh dưỡng trong quả chanh dây\r\n- Trong quả chanh dây có chứa nhiều phospho. 1 quả to hay 2 quả chanh dây nhỏ có thể cung cấp khoảng 10% nhu cầu phospho hàng ngày cho cơ thể, rất cần cho răng và xương.\r\n\r\n- Chanh dây có thể cung cấp năng lượng cho cơ thể. Bạn sẽ có khoảng 84 calo cho 100g quả hoặc 1 quả chanh dây 60g sẽ cho khoảng 70 calo.\r\n\r\n- Sắt cũng là chất có nhiều trong quả chanh dây. 100g quả có thể cung cấp khoảng 10% nhu cầu sắt hàng ngày cho cơ thể. Điều này giúp cơ thể chống mệt mỏi và thiếu máu.\r\n\r\n- Trong mỗi quả chứa khoảng 348mg kali cho mỗi 100g quả. Kali giúp cân bằng nồng độ natri trong cơ thể và nếu dùng vừa phải giúp giảm nguy cơ tăng huyết áp.\r\n\r\n- Chanh dây có nhiều chất xơ giúp tăng nhu động ruột. Có hơn 10g chất xơ cho 100g quả, đây là một trong những quả có nhiều chất xơ nhất chỉ sau hạnh nhân và dừa.\r\n\r\n- Trong quả chanh dây có chứa nhiều vitamine C. Chỉ cần 2 quả có thể cung cấp 30-35% nhu cầu hàng ngày cho cơ thể, ngoài ra là nguồn cung cấp vitamin A và flavonoïdes.\r\n\r\nLưu ý khi sử dụng chanh dây\r\n- Nếu dùng chanh dây quá nhiều và thường xuyên có thể gây mệt mỏi, buồn nôn, nổi mề đay… \r\n\r\n- Ăn quá nhiều hạt chanh leo mà không nhai kỹ trong thời gian dài, thường xuyên bạn sẽ dễ bị viêm ruột thừa hoặc viêm túi thừa ruột già, ảnh hưởng đến hoạt động của gan, thận\".\r\n\r\n- Bên cạnh đó, một số thành phần có trong chanh leo có thể gây phản ứng với các loại thuốc an thần và thuốc kháng histami, tăng cảm giác buồn ngủ. Riêng với thuốc chống đông, chanh leo có thể khiến chảy máu nhiều hơn. Vì vậy, phụ nữ mang thai hoặc bà mẹ đang cho con bú nên hạn chế sử dụng loại quả này.', 27, 1, 1, 1, 2, 1, 2, 1, 2),
(6, 'Chuối hột', 'Theo như nghiên cứu thì cây chuối hột được trồng chủ yếu ở các vùng nhiệt đới Châu Á và một số nước Đông Nam Á. Chuối hột là loại cây thân thảo khá lớn. Cây trung bình cao khoảng 2m. Phần thân giả do các lớp bẹ ốp vào nhau mà thành. Lá lo bản và dài với những đường gân song song nhau. Cụm hoa mọc ra từ phần thân giả. Hoa sau khi rụng sẽ lộ ra phần bắc lá và lớn dần nên tạo thành nải. Qủa chuối mập, to và bên trong có phần hạt màu đen. Tác dụng của cây chuối hột Có thể nói ít có giống chuối nào lại có tác dụng về y học nhiều như chuối hột. Từ đầu đến chân bộ phận nào của chuối hột cũng trở thành một vị thuốc tốt cho sức khỏe. Có thể liệt kê ra như sau : Quả chuối hột xanh có thể khử mùi tanh của hải sản, phòng ngừa tiêu chảy. Một quả chuối hột xanh thái mỏng và phơi rồi xay thành bột mịn uống mỗi ngày sẽ giúp bạn điều trị được bệnh loét dạ dày tá tràng cực hiệu quả Củ cây chuối hột được dùng để chữa bệnh sốt cao, cảm nóng và mê sảng. Thân cây chuối hột được dùng để điều trị bệnh nhức răng, cầm máu khá hiệu quả. Lá cây chuối hột được dùng để điều trị bệnh nôn ra máu và băng huyết cực hiệu quả. Hạt chuối hột được dùng pha trà uống giúp trị bệnh sỏi thận khá hiệu quả. Vỏ chuối hột được sao vàng hạ thổ có thể điều trị bệnh kiết lỵ. Hoa chuối hột có thể giúp tăng tiết sữa cho phụ nữ mới sinh.', 'Thời vụ trồng cây chuối hột \r\nChuối hột có thể trồng được tất cả các mùa trong năm tuy nhiên thời vụ chính vụ tại miền Bắc rơi vào khoảng tháng 8-10 hàng nă,m. Nếu trồng vu xuân thì nên trồng vào tháng 3 vì lúc này khí hậu thuận lợi cây mau bén rễ và tỷ lệ sống cao hơn.\r\n\r\nChuẩn bị đất trồng\r\nTrước khi muốn trồng chuối hột bạn cần chuẩn bị hố trồng cẩn thận. Hố trồng cây chuối cần có kích thước tối thiểu là 60x50x50cm và cần bón lót trước cho đất phân chuông hoai mục 20kg +1kg phân Supe Lân + 1kg vôi bột để khử trùng đất diệt sạch các loại mầm bệnh. Nếu trồng nhiều chuối thì nên đặt khoảng cách giữa các hố là 3m.\r\n\r\nTiêu chuẩn chọn cây con\r\nCây con giống đem trồng phải là những cây khỏe mạnh và không bị sâu bệnh hại. Cây cao khoảng 1m và có cả búp và lá. Ngoài ra cây cũng được nhân giống bằng phương pháp nuôi cấy mô sẽ vẫn đảm bảo giống với cây mẹ và hoàn toàn sạch bệnh.\r\n\r\nXử lí cây con: Sau khi đã chon lựa được cây con giống đem trồng bạn cần làm sạch cây trước bằng việc gọt sạch củ và bẹ lá rồi ngâm vào trong dung dịch 666 – 6% pha tỉ lệ 1/50 trong một phút để loại trừ hết mầm bệnh hại cây.\r\n\r\nSau khi đã xử lý cây con giống bằng dung dịch diệt khuẩn bạn trồng cây con vào những hố đã chuẩn bị sẵn. Lấp đất phủ và lèn chặt phần gốc cho cây đứng thẳng không bị siêu vẹo. Tưới nước ngay sau đó để cung cấp độ ẩm cho rễ cây mau bén.\r\n\r\nLàm cỏ: Việc làm cỏ dại là điều tiên quyết giúp cho cây khỏe mạnh. Định kì hằng tháng làm cỏ dại một lần. Nhổ sạch cỏ đồng thời vun xới xáo đất ở gốc cây cho thoáng khí.\r\n\r\nBón phân cho cây chuối hột\r\nLiều lượng bón cho 1 cây/năm là lượng phân NPK theo tỷ lệ 1: 1,5; 1,5 và bón vào 3 thời điểm khác nhau:\r\n\r\n- Với vườn chuối cũ bạn tiến hành bón sau thời kì mùa đông lúc cây bắt đầu sinh trưởng lại.\r\n\r\n- Bón thúc cho cây: Thường sẽ rơi vào giai đoạn cây sinh trưởng mạnh mẽ nhất Thời điểm cây chuẩn bị phân hóa mầm hoa\r\n\r\n- Bón thúc cho quả: sau khi đã ra buồng.\r\n\r\nThu hoạch\r\nSau khi trồng được 9 tháng cây sẽ bắt đầu cho ra những buồng chuối to và đẹp. Chuối thường trổ buồng vào các tháng cuối hè chuẩn bị sang thu. Từ khi trổ buồng đến khi thu hoạch được khoảng 2,5 tháng. Qủa tươi khi chín sẽ chuyển dân sang màu vàng nhạt. Lúc này quả mập tròn và bên trong ruột quả màu vàng rất đẹp. Bạn tiến hành dùng dao cắt hạ nhẹ nhàng buồng chuối xuống. tách ra từng nải rửa sạch và bảo quản nơi thoáng mát sẽ giúp chuối được bảo quản lâu hơn.\r\n\r\nPhòng trừ sâu, bệnh hại cây chuối hột\r\nChuối hột có một số loại sâu bệnh hại chính như sâu vòi voi ( sâu đục thân), các loại bọ lẹt và bọ vẽ. Cách phòng trừ là bạn cần làm vệ sinh vườn thường xuyên để phát hiện kịp thời những loại sâu bệnh hại này. Có thể loại bỏ bằng tay nếu ít. Trường hợp nhiều không thể bắt bằng tay buộc lòng bạn phải sử dụng đến những chế phẩm sinh học như Furadan 3G cho bọ vòi voi,  thuốc Trebon cho bọ lẹt và Decamethirin 01- 0,15% Dipterex để diệt sâu bọ vẽ. ', './img/caychuoihot.jpg', 'Chuối hột còn có tên gọi là chuối chát là loại cây dại được biết đến từ lâu. Tuy không nhiều người thích hương vị của loại chuối này nhưng chuối hột lại có công dụng chữa bệnh thật tuyệt vời.\r\n\r\nCó lẽ khi xét đến độ thơm ngon các loại chuối thì chuối hột sẽ xếp cuối bảng tuy nhiên không phải vì hương vị kém thơm ngon mà chúng trở nên vô dung. Xét về khía cạnh y học thì chuối hột lại là một nguyên liệu thuốc cực kì tốt. Tất cả các bộ phận trên cây chuối hột đều có thể sử dụng làm thuốc chữa bệnh.', 46, 2, 1, 1, 2, 3, 2, 1, 4),
(7, 'hd', '', '', '', '', 0, 1, 2, 2, 1, 2, 2, 2, 1),
(8, 'Lan Hoàng Dương', 'Lan Hoàng Dương có tên khoa học là Petraeovitex bambusetorum. Một loài cây leo rủ rất đẹp và cuốn hút. Có nguồn gốc từ châu Mỹ, được trồng phổ biến tại nhiều vùng miền của Việt Nam.\r\n\r\nThân cây rất mềm mại có thể ôm sát, quấn quanh các hàng rào hoặc những vật chống đỡ khác. Lá chuỗi vàng hình bầu dục, hơi nhọn ở đầu, màu xanh đậm. Tạo thành chuỗi dài màu vàng mềm mại đến cả mét với chuỗi hoa lâu tàn, cho hoa quanh năm. Hoa màu vàng tươi mới, mọc theo san sát theo chùm, dây,  rủ xuống trông rất bắt mắt.\r\n\r\nLan Hoàng Dương không chỉ được yêu thích bởi vẻ đẹp hình thái độc đáo. Mà còn được yêu thích vì sự thích ứng nhanh chóng với môi trường sống. Cùng với đó là khả năng sinh trưởng và phát triển nhanh chóng Ngoài ra Lan Hoàng Dương còn mang rất nhiều ý nghĩa tuyệt vời khác. Chúng là biểu tượng cho cuộc sống vương giả, giàu sang, phú quý và may mắn cho gia chủ.', 'Cách trồng Hoàng Dương\r\n\r\nKhi trồng cây cần chú ý trồng ở chỗ đất thịt, đất có nhiều dinh dưỡng và không đọng nước.  Đào hố với kích thước khoảng 60 cm x 65cm x 55cm. Sau đó bón phân đã hoai mục vào hố và lấp một lớp đất mỏng lên. Rồi cho cây giống vào trồng. Cây giống trồng cần đảm bảo trồng chắc chắn bằng cách nén chặt đất. Để hạn chế bị lốc gốc khi mưa gió, tốt nhất nên cắm cọc và tưới nước luôn cho cây.\r\n\r\nMột vấn đề cực kì quan trọng khi trồng lan hoàng dương đó là làm giàn cho hoa leo. Bạn có thể làm giàn bằng các que tre, gỗ. Nhưng để chắc chắn và dùng lâu dài thì nên mua những dây thép nhỏ. Đóng những chiếc cột bê tông rồi giăng, giàn vừa đẹp lại vừa chắc chắn.\r\nÁnh sáng\r\n\r\nLan hoàng dương là loài hoa phong lan ưa sáng hoàn toàn nhưng cũng chịu được một phần bóng râm, càng nhiều nắng cây càng sai hoa với sắc hoa rực rỡ đậm đà. Lan Hoàng Dương phát triển tốt nhất khi dùng lưới che nắng. Ánh nắng hợp lí cho cây mới trồng khoảng 20%  khi nhiệt độ ở >300 c. Và 40% ánh nắng khi nhiệt độ ở <200.Khi cây đã bám rễ thì cây rất khỏe, chỉ cần để ở chế độ khoảng 30% ánh nắng. Thì cây có thể phát triển khỏe mạnh quanh năm.\r\nNhiệt độ\r\n\r\nLan hoàng dương ưa ấm, chịu lạnh kém nên đến mùa đông cây thường rụng lá. Trông có vẻ xơ xác, đến mùa xuân ấm áp cây lại đâm chồi nảy lộc. Nhiệt độ thích hợp với cây từ 18-35oC.\r\nĐộ ẩm\r\n\r\nLan Hoàng Dương ưa độ ẩm trung bình. Thường sống trong vùng có độ ẩm cao và thoáng gió. Cây sống và phát triển tốt độ ẩm ở trong không khí là 70%-80%.\r\nĐất trồng\r\n\r\ncây lan hoàng dương có thể sống ở nhiều loại đất. Tuy nhiên để lá mướt xanh, hoa nhiều thì nên trồng vào loại đất tơi xốp, giàu dinh dưỡng, thoát nước tốt, nhiều mùn. Nếu trồng cây vào chậu treo thì nên trồng với công thức đất nhẹ: 5 xơ dừa, trấu hun + 2 xỉ than + 1 phân hữu cơ + 2 đất thịt sạch.\r\nTưới nước\r\n\r\nTưới nước là một vấn đề có thể ảnh hưởng trực tiếp đến sự sinh trưởng, phát triển của lan. Vấn đề tưới nước thế nào cho lan là phù hợp nhất được đặt lên hàng đầu. Khi tưới nước cho lan phải chú ý đến các vấn đề như mưa, nắng nhiệt độ. Đặc điểm giá thể , loài lan, chu kỳ sinh trưởng,…\r\n\r\nLan hoàng dương ưa nước trung bình, nên tưới khi đất trên mặt chậu se khô. Lượng nước tưới khoảng 2-3 ngày/lần, mỗi lần 300-500ml nước tùy kích thước chậu. Loại cây này chịu hạn khá tốt nhưng chịu úng kém.\r\nBón phân\r\n\r\nCách tốt nhất để bón phân là hòa loãng, cho phân tan hoàn toàn vào nước. Phân bón lỏng dễ sử dụng và phân tán khắp chậu, mau thấm đến rễ. Nếu có dính vào lá thì cũng được hấp thu. Có 2 vấn đề đặt ra khi tưới phân. Là tưới làm sao cho cây hấp thụ được nhiều và tinh tế nhất\r\n\r\nHàng tháng nên bổ sung dinh dưỡng cho cây điều độ, luân phiên bằng các loại phân nhả chậm, phân vi sinh, trùn quế, NPK. Nếu cây xấu yếu có thể hòa tan NPK 30-10-10 thật loãng rồi tưới vào gốc khoảng 7-10 ngày để cây phục hồi.\r\nPhòng ngừa sâu bệnh cho Hoàng Dương\r\n\r\nKhi trồng, không ít thì nhiều bạn sẽ gặp phải các trường hợp lan đang bị sâu bệnh. Nhẹ thì Hoàng Dương của bạn sẽ bị còi cọc, tuột lá, èo uột, trở nên xấu xí… Nặng thì có thể dẫn đến chết cây, thậm chí làm lây bệnh cho cả vườn lan. Nếu bạn chậm trễ trong việc phòng và điều trị vườn phong lan đang bị sâu bệnh. Bạn nên tìm hiểu các loại sâu bệnh gây hại cho cây hoa lan và cách phòng trừ chúng\r\n\r\nKhi mua về trồng cần phải kiểm tra kỹ lưỡng. Nếu cây khoẻ mạnh không bị sâu bệnh thì mới tiến hành trồng chung với những cây khác. Dọn vệ sinh vườn lan sạch sẽ, thông thoáng. Khi giá thể trồng đã hư mục thì tiến hành thay kịp thời, tránh động nước, ẩm thấp. Quan sát vườn lan thường xuyên để phát hiện những cây bị sâu bệnh kịp thời cách ly, xử lý. Phun thuốc phòng trừ sâu bệnh định kỳ cho lan.\r\n\r\nTrên đây là những kinh nghiệm được đúc rút rất nhiều năm của các chuyên gia trồng lan. Chúng tôi hy vọng, bạn đã nắm chắc trong tay bí quyết trồng. Chúc các bạn thành công!', './img/lanhoangduong.jpg', 'Ý nghĩa hoa lan hoàng dương\r\nSắc vàng rực rỡ cùng màu xanh mướt đầy sức sống của lan hoàng dương đem đến sự may mắn, thịnh vượng, tài lộc cho chủ nhân trồng nó.\r\n\r\nỨng dụng và trang trí cây lan hoàng dương\r\nLan hoàng dương thuộc loại cây leo rủ, tốc độ leo chậm, độ buông rủ nhẹ nhàng nên rất thích hợp trồng chậu treo hoặc trồng bồn để thân lá , chuỗi hoa đổ xuống từ ban công tạo nên cảnh tượng thơ mộng.\r\nLan hoàng dương có chuỗi hoa mọc từ nách lá rất dày nên trồng giàn leo để hoa buông thõng xuống tạo nên vẻ đẹp lãng mạn. Lan hoàng dương trồng dầy vào giàn leo dạng vòm sẽ tạo nên khung cảnh tuyệt đẹp giống như hoa tử đằng. Ai lạc vào giàn hoa ấy chắc chắn sẽ như lạc vào chốn thần tiên, làm mê mẩn bước chân của bao người.\r\nVới khả năng buông rủ tự nhiên lan hoàng dương còn được trồng phối hợp với các loại hoa cây cảnh khác tạo thành chậu hoa ngẫu hứng rất duyên dáng và lạ mắt, vừa sinh động.\r\n\r\n\r\n', 3, 2, 3, 1, 2, 3, 3, 2, 2),
(14, 'Khế', 'sà', 'ầ', './img/Screenshot (1).png', 'sadasdas', 2, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `growthtime`
--

CREATE TABLE `growthtime` (
  `Code` int(100) NOT NULL,
  `Growthtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `growthtime`
--

INSERT INTO `growthtime` (`Code`, `Growthtime`) VALUES
(1, 'Ngắn ngày'),
(2, 'Dài ngày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `humidity`
--

CREATE TABLE `humidity` (
  `Code` int(11) NOT NULL,
  `Humidity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `humidity`
--

INSERT INTO `humidity` (`Code`, `Humidity`) VALUES
(1, 'Cao'),
(2, 'Thấp'),
(3, 'Trung bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `landtype`
--

CREATE TABLE `landtype` (
  `Code` int(100) NOT NULL,
  `Landtype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `landtype`
--

INSERT INTO `landtype` (`Code`, `Landtype`) VALUES
(1, 'Đất mùn'),
(2, 'Đất phù sa'),
(3, 'Đất phèn'),
(4, 'Đất cát');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `light`
--

CREATE TABLE `light` (
  `Code` int(100) NOT NULL,
  `Light` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `light`
--

INSERT INTO `light` (`Code`, `Light`) VALUES
(1, 'Nắng nhiều'),
(2, 'Bóng râm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `species`
--

CREATE TABLE `species` (
  `Code` int(11) NOT NULL,
  `Species` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `species`
--

INSERT INTO `species` (`Code`, `Species`) VALUES
(1, 'Thân gỗ'),
(2, 'Dây leo'),
(3, 'Ăn quả'),
(4, 'Thảo dược'),
(5, 'Kiểng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Code`);

--
-- Chỉ mục cho bảng `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`Code`);

--
-- Chỉ mục cho bảng `climate`
--
ALTER TABLE `climate`
  ADD PRIMARY KEY (`Code`);

--
-- Chỉ mục cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`masoadmin`);

--
-- Chỉ mục cho bảng `db_trees`
--
ALTER TABLE `db_trees`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `Growthtime` (`Growthtime`),
  ADD KEY `Humidity` (`Humidity`),
  ADD KEY `LandType` (`LandType`),
  ADD KEY `Light` (`Light`),
  ADD KEY `Species` (`Species`),
  ADD KEY `area` (`Area`),
  ADD KEY `benefit` (`Benefit`),
  ADD KEY `climate` (`Climate`);

--
-- Chỉ mục cho bảng `growthtime`
--
ALTER TABLE `growthtime`
  ADD PRIMARY KEY (`Code`);

--
-- Chỉ mục cho bảng `humidity`
--
ALTER TABLE `humidity`
  ADD PRIMARY KEY (`Code`);

--
-- Chỉ mục cho bảng `landtype`
--
ALTER TABLE `landtype`
  ADD PRIMARY KEY (`Code`);

--
-- Chỉ mục cho bảng `light`
--
ALTER TABLE `light`
  ADD PRIMARY KEY (`Code`);

--
-- Chỉ mục cho bảng `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `masoadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `db_trees`
--
ALTER TABLE `db_trees`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `species`
--
ALTER TABLE `species`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_trees`
--
ALTER TABLE `db_trees`
  ADD CONSTRAINT `area` FOREIGN KEY (`Area`) REFERENCES `area` (`Code`),
  ADD CONSTRAINT `benefit` FOREIGN KEY (`Benefit`) REFERENCES `benefit` (`Code`),
  ADD CONSTRAINT `climate` FOREIGN KEY (`Climate`) REFERENCES `climate` (`Code`),
  ADD CONSTRAINT `growthtime` FOREIGN KEY (`Growthtime`) REFERENCES `growthtime` (`Code`),
  ADD CONSTRAINT `humidity` FOREIGN KEY (`Humidity`) REFERENCES `humidity` (`Code`),
  ADD CONSTRAINT `landtype` FOREIGN KEY (`LandType`) REFERENCES `landtype` (`Code`),
  ADD CONSTRAINT `light` FOREIGN KEY (`Light`) REFERENCES `light` (`Code`),
  ADD CONSTRAINT `species` FOREIGN KEY (`Species`) REFERENCES `species` (`Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
