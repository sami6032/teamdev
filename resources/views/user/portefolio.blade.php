@extends('layouts.app')
   
@section('content')
    <!-- category section start here -->
    <div class="category-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Popular Category</span>
                <h2 class="title">Popular Category For Learn</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/01.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Computer Science</h6></a>
                                    <span>24 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/02.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Civil Engineering</h6></a>
                                    <span>40 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/03.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Business Analysis</h6></a>
                                    <span>27 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/04.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Data Science Analytics</h6></a>
                                    <span>28 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/05.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Learning Management</h6></a>
                                    <span>78 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/icon/06.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="course.html"><h6>Computer Engineering</h6></a>
                                    <span>38 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="course.html" class="lab-btn"><span>Browse All Categories</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- category section start here -->
    @endsection