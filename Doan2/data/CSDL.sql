CREATE TABLE khachhang(
    ID INT NOT NULL AUTO_INCREMENT,
    HoTen VARCHAR(255) NOT NULL,
    DiaChi VARCHAR(255) NOT NULL,
    SDT VARCHAR(11) NOT NULL,
    NgaySinh DATE NOT NULL,
    TenDangNhap VARCHAR(255) NOT NULL,
    MatKhau VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE nhanvien(
    ID INT NOT NULL AUTO_INCREMENT,
    ChucVu INT NOT NULL,
    HoTen VARCHAR(255) NOT NULL,
    DiaChi VARCHAR(255) NOT NULL,
    SDT VARCHAR(11) NOT NULL,
    NgaySinh VARCHAR(255) NOT NULL,
    Phai VARCHAR(255) NOT NULL,
    TenDangNhap VARCHAR(255) NOT NULL,
    MatKhau VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE loaive(
    ID INT  NOT NULL AUTO_INCREMENT,
    TenLV VARCHAR(255) NOT NULL,
    DonGia VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE phongchieuphim(
    ID INT  NOT NULL AUTO_INCREMENT,
    TenPhong VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE ve(
    ID INT  NOT NULL AUTO_INCREMENT,
    LoaiVe_ID INT NOT NULL,
    NhanVien_ID INT NOT NULL,
    KhachHang_ID INT NOT NULL,
    Ghe INT NOT NULL,
    NgayBanVe DATETIME NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (LoaiVe_ID) REFERENCES loaive(ID),
    FOREIGN KEY (NhanVien_ID) REFERENCES nhanvien(ID),
    FOREIGN KEY (KhachHang_ID) REFERENCES khachhang(ID)
);
CREATE TABLE dangphim(
    ID INT NOT NULL AUTO_INCREMENT,
    DangPhim VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);

CREATE TABLE loaiphim(
    ID INT NOT NULL AUTO_INCREMENT,
    LoaiPhim VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE phim (
    ID INT  NOT NULL AUTO_INCREMENT,
    LoaiPhim_ID INT NOT NULL,
    DangPhim_ID INT NOT NULL,
    TenPhim VARCHAR(255) NOT NULL,
    ThoiGian INT NOT NULL,
    TomTat TEXT NULL,
    LuotXem INT NOT NULL,
    DienVien VARCHAR(255) NOT NULL,
    QuocGia VARCHAR(255) NOT NULL,
    DaoDien VARCHAR(255) NOT NULL,
    NSX DATETIME NOT NULL,
    HinhAnh VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (LoaiPhim_ID) REFERENCES loaiphim(ID),
    FOREIGN KEY (DangPhim_ID) REFERENCES dangphim(ID)
);
CREATE TABLE binhluan(
    ID INT NOT NULL AUTO_INCREMENT,
    Phim_ID INT NOT NULL,
    KhachHang_ID INT NOT NULL,
    NoiDung TEXT NULL,
    NgayDang DATETIME NOT NULL,
    KiemDuyet TINYINT NOT NULL, 
    PRIMARY KEY (ID),
    FOREIGN KEY (Phim_ID) REFERENCES phim(ID),
    FOREIGN KEY (KhachHang_ID) REFERENCES khachhang(ID)
);
CREATE TABLE chitietchieuphim(
    ID INT  NOT NULL AUTO_INCREMENT,
    Ve_ID INT NOT NULL,
    PhongCP_ID INT NOT NULL,
    Phim_ID INT NOT NULL,
    XuatChieu DATETIME NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (Ve_ID) REFERENCES ve(ID),
    FOREIGN KEY (PhongCP_ID) REFERENCES phongchieuphim(ID),
    FOREIGN KEY (Phim_ID) REFERENCES phim(ID)
);
