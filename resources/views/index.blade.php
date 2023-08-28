@extends('layouts.app')
   
@section('content')

<br><br>

<div class="section-header text-center">
<img src="{{asset('assets/images/forum2.png')}}" class="d-block-center " style="width: 100%; ;height: auto;" alt="...">
</div>
    <!-- category section start here -->
    <div class="category-section ">
        <div class="container">
        <div class="section-header text-center">
                <span class="subtitle"><h2><strong>Objectif</strong></h2></span>
                <p style="color: black;">L'objectif du forum D-CLIC PRO est de faciliter l’insertion professionnelle des apprénants 
du Projet D-CLIC à l’issue des formations déployées.Etant donné que le réseautage représente un puissant instrument de communication et de création de liens, l'OIF ne l'a pas négligé dans le but d'accompagner ses bénéficiaires à entrer en contact avec des entreprises.
 </p>
            </div>
        </div>
    </div>
    <!-- category section start here -->


    <!-- course section start here -->
    <div class="course-section  section-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title"><strong>Les différentes cohortes</strong></h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/kdg.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price">30p</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#"> Cohorte de KOUDOUGOU</a>
                                        </div>
                                        
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <P class="ca-name">FORMATEUR: Hugue MIHIN</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/bobo.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price bg-success">25p</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#"> Cohorte de BOBO-DIOULASSO</a>
                                        </div>
                                       
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <P class="ca-name">FORMATEUR: Hamed OUATTARA </P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/ouaga.jpg" alt="course">
                                </div>
                                <div class="course-content">
                                    <div class="course-price" style="background-color: #eec93d;">+100</div>
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#"> Cohorte de OUAGADOUGOU</a>
                                        </div>
                                       
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <P class="ca-name">FORMATEUR: Xavier MINOUNGOU </P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="section-header text-center">
    <h2 class="title">Passion/Numérique</h2>
<img src="{{asset('assets/images/ap1.png')}}" class="d-block-center " style="width: 90%;;height: auto;" alt="...">
</div>

    <!-- Instructors Section Start Here -->
    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">FORUM D-CLIC PRO</span>
                <h2 class="title">Quelques avis</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5">
                    
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/01.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>BANSE Ousseni</h4></a>
                                    <p>Ce forum pourrait etre un cadre idéal pour elargir non seulement mon reseau mais surtout apprendre des meilleurs </p>
                                    
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/06.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>KONKOBO Sabine</h4></a>
                                    <p>Ce forum est sans doute l'un des moyen pour nous de se demarquer et creer des relations</p>
                                    
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/05.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>MAIGA Samira</h4></a>
                                    <p>Une opportunité en or pour apprendre davantage et tisser des liens avec des personnes plus experimentés</p>
                                    
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/01.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>OUEDRAOGO Daouda</h4></a>
                                    <p>Je suis anthousiasmé à l'idée de rencontrer d'autres acteurs avec la meme passion que moi</p>
                                    
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="assets/images/instructor/03.jpg" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="team-single.html"><h4>GAGRE Martine</h4></a>
                                    <p>J'espere juste que je pourrais discuter avec plein de personne et elargir mon cercle</p>
                                    
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center footer-btn">
                    <p>Les bénéficiaires sont tous impatiants</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructors Section Ending Here -->
@endsection