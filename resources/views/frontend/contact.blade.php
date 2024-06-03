@extends('layouts.site')
@section('content')

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p>Sự góp ý của quý khách sẽ giúp chúng tôi hoàn thiện hơn. Cảm ơn rất nhiều.</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name" placeholder="Subject" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p>
                            Chúng tôi xin chân thành cảm ơn sự ủng hộ và tin tưởng của Quý khách hàng dành cho DuyThoi Food. Sự hài lòng của bạn là nguồn động viên lớn lao và là động lực quan trọng giúp chúng tôi không ngừng hoàn thiện và phát triển. Chúng tôi hứa sẽ tiếp tục nỗ lực không ngừng, mang đến những trải nghiệm ẩm thực đáng nhớ và dịch vụ tốt nhất cho mỗi khách hàng. Xin chân thành cảm ơn bạn đã luôn đồng hành cùng DuyThoi Food! </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: 20 Tăng Nhơn Phú <br>Phước Long B,<br> TP.Hồ Chí Minh </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
     @endsection
     @section('title', 'Chi tiet san pham')