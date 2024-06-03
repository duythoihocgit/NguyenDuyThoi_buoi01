<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.min.css')}}" />
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/slider.css"/>
    @yield('header')
  </head>
  <body>
    <section class="ndt-header">
      <div class="container py-2">
        <div class="row">
          <div class="col-md-2">
            <a href="#">
              <img class="img-fluid w-100" src="{{asset('images/logo.jpg')}}" alt="logo" />
            </a>
          </div>
          <div class="col-md-5 pt-3 pl-3">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Tìm kiếm món ăn..."
                aria-label="Recipient's username"
                aria-describedby="basic-addon2"
              />
              <span class="input-group-text" id="basic-addon2">
                <i class="fa-solid fa-magnifying-glass"></i>
              </span>
            </div>
          </div>
          <div class="col-md-2 d-none d-md-block">
            <div class="row">
              <div class="col-sm-2 fs-2 pt-2 pl-3">
                <i class="fa-solid fa-mobile-screen-button"></i>
              </div>
              <div class="col-sm-10">
                <p class="pt-2 m-0">Tư vấn hỗ trợ</p>
                <p><strong class="text-danger">1900 6750</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 pt-2 text center">
            <div class="row">
              <div class="col-4">
                <a href="#">
                  <p class="p-0 m-0 fs-4"><i class="fa-regular fa-user"></i></p>
                  <p class="p-0 m-0">Sign in</p>
                </a>
              </div>
              <div class="col-4">
                <a href="#">
                  <p class="p-0 m-0 fs-4">
                    <i class="fa-regular fa-heart"></i>
                  </p>
                  <p class="p-0 m-0">Yêu thích</p>
                </a>
              </div>
              <div class="col-4">
                <a href="#">
                  <p class="p-0 m-0 fs-4">
                    <i class="fa-solid fa-cart-shopping"></i>
                  </p>
                  <p class="p-0 m-0">Giỏ hàng</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Menu -->
    <section class="ndt-menu bg-body-tertiary">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#" d-block d-md-none
              ><strong>Trang chủ</strong></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <strong>Món ăn nhanh</strong>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Pizza</a></li>
                    <li><a class="dropdown-item" href="#">Bánh mì kẹp</a></li>
                    <li><a class="dropdown-item" href="#">Bánh mì Ý</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Bánh mì Việt Nam</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <strong>Món ăn nước</strong>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Dĩa mì hấp</a></li>
                    <li><a class="dropdown-item" href="#">Phở bò</a></li>
                    <li><a class="dropdown-item" href="#">Phở gà</a></li>
                    <li><a class="dropdown-item" href="#">Bún bò Huế</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <strong>Nước uống</strong>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Coca</a></li>
                    <li><a class="dropdown-item" href="#">Pepsi</a></li>
                    <li><a class="dropdown-item" href="#">7Up</a></li>

                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#">Tất cả</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <strong>Topping thêm</strong>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Nem chua</a></li>
                    <li><a class="dropdown-item" href="#">Chả giò</a></li>
                    <li><a class="dropdown-item" href="#">Top mỡ</a></li>
                    <li><a class="dropdown-item" href="#">Heo quay</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#">Topping khác</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <strong>Tin tức</strong>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Tin xu hướng</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Tin khuyến mãi</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Tin quà tặng</a></li>
                    <li><a class="dropdown-item" href="#">Tin mẹo vặt</a></li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true"
                    ><strong>Câu hỏi</strong></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true"
                    ><strong>Liên hệ</strong></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>
    <main>
        @yield('content')
    </main>

      <!-- Footer -->

      <footer>
        <div class="footer-main">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-top-box">
                  <h3>Thời gian hoạt động</h3>
                  <ul class="list-time">
                    <li>Thứ 2 - Thứ 6: 08.00am to 05.00pm</li>
                    <li>Thứ 7: 10.00am to 08.00pm</li>
                    <li>Chủ nhật: <span>Closed</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-top-box">
                  <h3>Đánh giá</h3>
                  <form class="newsletter-box">
                    <div class="form-group">
                      <input
                        class=""
                        type="email"
                        name="Email"
                        placeholder="Email Address*"
                      />
                      <i class="fa fa-envelope"></i>
                    </div>
                    <button class="btn hvr-hover" type="submit">Submit</button>
                  </form>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-top-box">
                  <h3>Fanpage</h3>
                  <p></p>
                  <ul>
                    <li>
                      <a href="#"
                        ><i class="fab fa-facebook" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-twitter" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-linkedin" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-google-plus" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-pinterest-p" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-whatsapp" aria-hidden="true"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-widget">
                  <h4>Giới thiệu</h4>
                  <p>
                
          DuyThoi Food - Nơi Hội Tụ Hương Vị Đậm Đà
  
            Chào mừng bạn đến với DuyThoi Food, điểm đến lý tưởng cho những ai đam mê ẩm thực và muốn khám phá những hương vị đặc trưng của vùng miền. Tại đây, chúng tôi tự hào mang đến cho quý khách hàng những món ăn đa dạng, tươi ngon và được chế biến từ những nguyên liệu tươi sạch nhất. Với sứ mệnh làm hài lòng mọi khẩu vị, DuyThoi Food cam kết tạo ra những trải nghiệm ẩm thực độc đáo và không thể quên. Hãy đến và khám phá thế giới ẩm thực tinh tế tại DuyThoi Food ngay hôm nay!
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-link">
                  <h4>Thông tin</h4>
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">Our Sitemap</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Delivery Information</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-link-contact">
                  <h4>Liên hệ</h4>
                  <ul>
                    <li>
                      <p>
                        <i class="fas fa-map-marker-alt"></i>Địa chỉ: 20 Tăng Nhơn
                        Phú <br />Phước Long B,<br />
                        TP.HCM
                      </p>
                    </li>
                    <li>
                      <p>
                        <i class="fas fa-phone-square"></i>Điện thoại:
                        <a href="tel:+1-888705770">-0987654321</a>
                      </p>
                    </li>
                    <li>
                      <p>
                        <i class="fas fa-envelope"></i>Email:
                        <a href="mailto:contactinfo@gmail.com"
                          >Duythoifood@gmail.com</a
                        >
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer  -->
  
      <!-- Start copyright  -->
      <div class="footer-copyright">
        <p class="footer-company">
          All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
          <a href="https://html.design/">NGuyenDuyThoi design</a>
        </p>
      </div>
      @yield('footer')
      <!-- End copyright  -->
  </body>
</html>