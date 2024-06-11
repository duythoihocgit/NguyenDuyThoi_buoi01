@extends('layouts.site')
@section('content')

    <!-- Slide -->
    <x-slider/>
    </div> -->
    <!-- Start Categories  -->
    <div class="categories-shop">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-cat-box">
              <img class="img-fluid" src="images/nhanh.jpg" alt="" />
              <a class="btn hvr-hover" href="#">Món ăn nhanh</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-cat-box">
              <img class="img-fluid" src="images/nuoc.jpg" alt="" />
              <a class="btn hvr-hover" href="#">Món nước</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="shop-cat-box">
              <img class="img-fluid" src="images/nuocuong.jpg" alt="" />
              <a class="btn hvr-hover" href="#">Nước uống</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Categories -->
    <div class="products-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-all text-center">
              <h1>Sản phẩm mới nhất</h1>
            </div>
          </div>
        </div>
       

        <div class="row special-list">
          <x-product-new/>
          <x-product-new/>
          <x-product-new/>
          <x-product-new/>

        </div>
      </div>
    </div>

    <!-- Sale product -->
    <div class="products-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-all text-center">
              <h1>Sản phẩm khuyến mãi</h1>
            </div>
          </div>
        </div>

        <div class="row special-list">
          <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="new">New</p>
                </div>
                <img src="images/food1.webp" class="img-fluid" alt="Image" />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                  </ul>
                  <a class="cart" href="#">Add to Cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Bánh mì Bình Định</h4>
                <h5>$7.79</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 special-grid top-featured">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="sale">Sale</p>
                </div>
                <img src="images/food2.jpg" class="img-fluid" alt="Image" />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                  </ul>
                  <a class="cart" href="#">Add to Cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Bún bò + giò heo</h4>
                <h5>$9.79</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 special-grid top-featured">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="new">New</p>
                </div>
                <img src="images/food3.png" class="img-fluid" alt="Image" />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                  </ul>
                  <a class="cart" href="#">Add to Cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Khoai tây chiên lắc phô mai</h4>
                <h5>$10.79</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 special-grid best-seller">
            <div class="products-single fix">
              <div class="box-img-hover">
                <div class="type-lb">
                  <p class="sale">Sale</p>
                </div>
                <img src="images/drink1.webp" class="img-fluid" alt="Image" />
                <div class="mask-icon">
                  <ul>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View"
                        ><i class="fas fa-eye"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Compare"
                        ><i class="fas fa-sync-alt"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="#"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Add to Wishlist"
                        ><i class="far fa-heart"></i
                      ></a>
                    </li>
                  </ul>
                  <a class="cart" href="#">Add to Cart</a>
                </div>
              </div>
              <div class="why-text">
                <h4>Nước giải khát 7Up</h4>
                <h5>$1</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog -->
    <div class="latest-blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-all text-center">
              <h1>Blog</h1>
              <p>Bài viết về một số món ăn của quán</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
              <div class="blog-img">
                <img class="img-fluid" src="images/blog1.jpg" alt="" />
              </div>
              <div class="blog-content">
                <div class="title-blog">
                  <h3>Khám phá vẻ đa dạng và hấp dẫn của pizza</h3>
                  <p>
                    Pizza là một món ăn ngon và phổ biến trên toàn thế giới,
                    được làm từ bột mỳ, sốt cà chua và phô mai.
                  </p>
                </div>
                <ul class="option-blog">
                  <li>
                    <a href="#"><i class="far fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="far fa-comments"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
              <div class="blog-img">
                <img class="img-fluid" src="images/blog2.jpg" alt="" />
              </div>
              <div class="blog-content">
                <div class="title-blog">
                  <h3>Hương vị đậm đà của thịt heo quay</h3>
                  <p>
                    Thịt heo quay là một món ăn phổ biến được nướng hoặc chiên
                    giòn, mang lại hương vị độc đáo và thơm ngon. Đây là một lựa
                    chọn ưa thích trong các bữa tiệc và dịp họp mặt.
                  </p>
                </div>
                <ul class="option-blog">
                  <li>
                    <a href="#"><i class="far fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="far fa-comments"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
              <div class="blog-img">
                <img class="img-fluid" src="images/blog3.png" alt="" />
              </div>
              <div class="blog-content">
                <div class="title-blog">
                  <h3>Hòa quyện hương vị trong phở thịt gà</h3>
                  <p>
                    Phở thịt gà là một món ăn truyền thống của Việt Nam, kết hợp
                    giữa nước dùng đậm đà, thịt gà thơm ngon và các loại gia vị
                    tinh tế.
                  </p>
                </div>
                <ul class="option-blog">
                  <li>
                    <a href="#"><i class="far fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-eye"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="far fa-comments"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('title', 'Trang chu')
