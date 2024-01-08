@extends('front.master')

@section('title','Category Courses')

@section('body')
<div class="site-breadcrumb">
    <div class="hero-shape-area">
      <img class="hero-shape-1" src="{{ asset('/')}}front/assets/img/shape/shape-1.png" alt />
      <img class="hero-shape-2" src="{{ asset('/')}}front/assets/img/shape/shape-3.png" alt />
      <img class="hero-shape-3" src="{{ asset('/')}}front/assets/img/shape/shape-6.png" alt />
      <img class="hero-shape-4" src="{{ asset('/')}}front/assets/img/shape/shape-4.png" alt />
    </div>
    <div class="container">
      <h2 class="breadcrumb-title">Courses</h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.html">Home</a></li>
        <li class="active">Courses</li>
      </ul>
    </div>
  </div>

  <div class="course-area course-area-list py-120">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-12">
          <div class="course-item">
            <div class="row">
              <div class="col-lg-6 col-xl-4">
                <span class="course-tag course-tag-1">Beginer</span>
                <div class="course-img">
                  <a href="#"><img src="{{ asset('/')}}front/assets/img/course/01.jpg" alt /></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-8">
                <div class="course-content">
                  <div class="course-meta">
                    <span class="course-category course-category-1"
                      >Development</span
                    >
                    <div class="course-rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span>(40)</span>
                    </div>
                  </div>
                  <a href="{{ route('course-details')}}">
                    <h4 class="course-title">
                      Advance PHP Knowledge and learn Laravel framework
                    </h4>
                  </a>
                  <p>
                    There are many variations of passages available but the
                    majority have suffered alteration in some.
                  </p>
                  <div class="course-info">
                    <ul>
                      <li class="course-lecture">
                        <i class="fad fa-book-open"></i>64 Lectures
                      </li>
                      <li class="course-duration">
                        <i class="fad fa-clock"></i>30 Hours
                      </li>
                      <li class="course-enrolled">
                        <i class="fad fa-user-friends"></i>40.7k Enrolled
                      </li>
                    </ul>
                  </div>
                  <div class="course-bottom">
                    <a href="#">
                      <div class="course-instructor">
                        <img src="{{ asset('/')}}front/assets/img/course/ins-1.jpg" alt />
                        <h6>Sara Wood</h6>
                      </div>
                    </a>
                    <div class="course-price">
                      <span>$69</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-12">
          <div class="course-item">
            <div class="row">
              <div class="col-lg-6 col-xl-4">
                <span class="course-tag course-tag-2">Advance</span>
                <div class="course-img">
                  <a href="#"><img src="{{ asset('/')}}front/assets/img/course/02.jpg" alt /></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-8">
                <div class="course-content">
                  <div class="course-meta">
                    <span class="course-category course-category-2"
                      >Art & Design</span
                    >
                    <div class="course-rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span>(40)</span>
                    </div>
                  </div>
                  <a href="#">
                    <h4 class="course-title">
                      Full Web Designing Course With 20 Web Template
                      Designing
                    </h4>
                  </a>
                  <p>
                    There are many variations of passages available but the
                    majority have suffered alteration in some.
                  </p>
                  <div class="course-info">
                    <ul>
                      <li class="course-lecture">
                        <i class="fad fa-book-open"></i>64 Lectures
                      </li>
                      <li class="course-duration">
                        <i class="fad fa-clock"></i>30 Hours
                      </li>
                      <li class="course-enrolled">
                        <i class="fad fa-user-friends"></i>40.7k Enrolled
                      </li>
                    </ul>
                  </div>
                  <div class="course-bottom">
                    <a href="#">
                      <div class="course-instructor">
                        <img src="{{ asset('/')}}front/assets/img/course/ins-2.jpg" alt />
                        <h6>Johnny Michell</h6>
                      </div>
                    </a>
                    <div class="course-price">
                      <del>$180</del> <span>$150</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-12">
          <div class="course-item">
            <div class="row">
              <div class="col-lg-6 col-xl-4">
                <span class="course-tag course-tag-1">Beginer</span>
                <div class="course-img">
                  <a href="#"><img src="{{ asset('/')}}front/assets/img/course/03.jpg" alt /></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-8">
                <div class="course-content">
                  <div class="course-meta">
                    <span class="course-category course-category-3"
                      >Business</span
                    >
                    <div class="course-rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span>(40)</span>
                    </div>
                  </div>
                  <a href="#">
                    <h4 class="course-title">
                      Basic Knowledge About the UI/UX Design Pattern
                    </h4>
                  </a>
                  <p>
                    There are many variations of passages available but the
                    majority have suffered alteration in some.
                  </p>
                  <div class="course-info">
                    <ul>
                      <li class="course-lecture">
                        <i class="fad fa-book-open"></i>64 Lectures
                      </li>
                      <li class="course-duration">
                        <i class="fad fa-clock"></i>30 Hours
                      </li>
                      <li class="course-enrolled">
                        <i class="fad fa-user-friends"></i>40.7k Enrolled
                      </li>
                    </ul>
                  </div>
                  <div class="course-bottom">
                    <a href="#">
                      <div class="course-instructor">
                        <img src="{{ asset('/')}}front/assets/img/course/ins-3.jpg" alt />
                        <h6>Joey D. Glines</h6>
                      </div>
                    </a>
                    <div class="course-price">
                      <span>$179</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-12">
          <div class="course-item">
            <div class="row">
              <div class="col-lg-6 col-xl-4">
                <span class="course-tag course-tag-2">Advance</span>
                <div class="course-img">
                  <a href="#"><img src="{{ asset('/')}}front/assets/img/course/04.jpg" alt /></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-8">
                <div class="course-content">
                  <div class="course-meta">
                    <span class="course-category course-category-4"
                      >IT & Software</span
                    >
                    <div class="course-rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span>(40)</span>
                    </div>
                  </div>
                  <a href="#">
                    <h4 class="course-title">
                      The Complete Business Plan Course Includes 50
                      Templates
                    </h4>
                  </a>
                  <p>
                    There are many variations of passages available but the
                    majority have suffered alteration in some.
                  </p>
                  <div class="course-info">
                    <ul>
                      <li class="course-lecture">
                        <i class="fad fa-book-open"></i>64 Lectures
                      </li>
                      <li class="course-duration">
                        <i class="fad fa-clock"></i>30 Hours
                      </li>
                      <li class="course-enrolled">
                        <i class="fad fa-user-friends"></i>40.7k Enrolled
                      </li>
                    </ul>
                  </div>
                  <div class="course-bottom">
                    <a href="#">
                      <div class="course-instructor">
                        <img src="{{ asset('/')}}front/assets/img/course/ins-4.jpg" alt />
                        <h6>Nancy Alarcon</h6>
                      </div>
                    </a>
                    <div class="course-price">
                      <del>$210</del> <span>$150</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-12">
          <div class="course-item">
            <div class="row">
              <div class="col-lg-6 col-xl-4">
                <span class="course-tag course-tag-1">Beginer</span>
                <div class="course-img">
                  <a href="#"><img src="{{ asset('/')}}front/assets/img/course/05.jpg" alt /></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-8">
                <div class="course-content">
                  <div class="course-meta">
                    <span class="course-category course-category-5"
                      >Lifestyle</span
                    >
                    <div class="course-rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span>(40)</span>
                    </div>
                  </div>
                  <a href="#">
                    <h4 class="course-title">
                      Become a product Manager learn the skills & job
                    </h4>
                  </a>
                  <p>
                    There are many variations of passages available but the
                    majority have suffered alteration in some.
                  </p>
                  <div class="course-info">
                    <ul>
                      <li class="course-lecture">
                        <i class="fad fa-book-open"></i>64 Lectures
                      </li>
                      <li class="course-duration">
                        <i class="fad fa-clock"></i>30 Hours
                      </li>
                      <li class="course-enrolled">
                        <i class="fad fa-user-friends"></i>40.7k Enrolled
                      </li>
                    </ul>
                  </div>
                  <div class="course-bottom">
                    <a href="#">
                      <div class="course-instructor">
                        <img src="{{ asset('/')}}front/assets/img/course/ins-5.jpg" alt />
                        <h6>Tina L. Heiner</h6>
                      </div>
                    </a>
                    <div class="course-price">
                      <span>$159</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-12">
          <div class="course-item">
            <div class="row">
              <div class="col-lg-6 col-xl-4">
                <span class="course-tag course-tag-2">Advance</span>
                <div class="course-img">
                  <a href="#"><img src="{{ asset('/')}}front/assets/img/course/06.jpg" alt /></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-8">
                <div class="course-content">
                  <div class="course-meta">
                    <span class="course-category course-category-6"
                      >Marketing</span
                    >
                    <div class="course-rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span>(40)</span>
                    </div>
                  </div>
                  <a href="#">
                    <h4 class="course-title">
                      The Complete Digital Marketing Course - 12 Courses in
                      1
                    </h4>
                  </a>
                  <p>
                    There are many variations of passages available but the
                    majority have suffered alteration in some.
                  </p>
                  <div class="course-info">
                    <ul>
                      <li class="course-lecture">
                        <i class="fad fa-book-open"></i>64 Lectures
                      </li>
                      <li class="course-duration">
                        <i class="fad fa-clock"></i>30 Hours
                      </li>
                      <li class="course-enrolled">
                        <i class="fad fa-user-friends"></i>40.7k Enrolled
                      </li>
                    </ul>
                  </div>
                  <div class="course-bottom">
                    <a href="#">
                      <div class="course-instructor">
                        <img src="{{ asset('/')}}front/assets/img/course/ins-6.jpg" alt />
                        <h6>Leo Hender</h6>
                      </div>
                    </a>
                    <div class="course-price">
                      <span>Free</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="#" class="theme-btn mt-5"
          ><span class="fad fa-sync-alt"></span> Load More Courses</a
        >
      </div>
    </div>
  </div>

@endsection