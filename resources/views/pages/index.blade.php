@extends('layouts.app')

@section('content')
     <!-- header section -->
     <div class="container-fluid">
         <div class="row ">
             <div class="reverse-wrapp">
                <div class="col-sm-4">
                    <h1 class="font-weight-bold text-fourth">KURAFRICA</h1>
                    <p class="text-sm py-4">KURAFRICA is a social enterprise that provides professional coaching and mentorship to ensure a bright future and well being of our communities through identifying, guiding  and supporting the unnoticed talents and dreams of children and adolescents.
                    </p>
                    <h1 class="text-first">" Every child is special! "  
                       </h1>
                       <P> Through your support, their personal power discovery is guaranteed. 
                    </P>
                    <div class=" bg-seventh  rounded-oposite">

                        <a href="/donate/create" class="text-dec nav-link">
                            <h1 class="font-art text-fith text-center">DONATE</h1>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 curved-border">
                    <img src="/storage/images/e-library.jpg" class="cover-image" alt="home" title="home">
                </div>
            </div>
         </div>
     </div>

     
     {{-- //carousel slider --}}
     <div class="container-fluid pt-3">
         <h1 class="text-center font-weight-bold text-fourth">ACROSS AFRICA</h1>

         <div class="row">
             <div class="col">
                <div class="owl-carousel owl-theme mt-3">
                    <div class="item card">
                        <div class="card-header">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_YNcILshzhaaGGGFZUqgO3V8D_JnkJWD-Ug&usqp=CAU" alt="" class="img-thumbnail " style="height: 100px">
                    </div>
                        {{-- <div class="card"> --}}
                           <div class="card-footer">
                                <h1>RWANDA</h1>
                           </div>
                        {{-- </div>  --}}
                    </div>
                    <div class="item"><img src="/storage/images/scholarship.jpg" alt="" class="img-thumbnail" height="50"></div>
                    <div class="item"><img src="/storage/images/ethics.jpg" alt="" class="img-thumbnail" height="50"></div>
                    <div class="item"><img src="/storage/images/mentoring.jpg" alt="" class="img-thumbnail" height="50"></div>
                    <div class="item"><img src="/storage/images/violin.jpg" alt="" class="img-thumbnail" height="50"></div>
                    <div class="item"><img src="/storage/images/lendingbook_1.jpg" alt="" class="img-thumbnail" height="50"></div>
                   
                </div>
             </div>
           
         </div>
         <div class="row font-second">
                <div class="col-sm-5 ">
                    <div class="row ">
                        <div class="col-sm-2">
                            <img src="/storage/images/mentoring.jpg" alt="MTHY" class="img-thumbnail" >
                        </div>
                        <div class="col-sm-10">
                            <p>We are full of empathy, great listeners, advisors with effective communication which is why children who have passed through our mentorship program become smart, tremendous and wise decision makers</p>
                        </div>     
                    </div>
                </div>
            
             <div class="col-sm-7">
                 <h2 class="text-center card-title">What we believe</h2>
                <blockquote class="blockquote text-main">
                    <p class="mb-0 ">
                        Mentoring is a brain to pick, an ear to listen, and a push in the right direction” John Crosby,  “Children must be taught how to think, not what to think.” Margaret Mead.
                    </p>
                    <footer class="blockquote-footer">“Tell me and I forget, teach me and I may remember, involve me and I learn” <cite title="Source Title">Benjamin Franklin </cite></footer>
                  </blockquote>
             </div>
         </div>
     
    </div>
    <div class="container-fluid  ">
        <h1 class="text-center font-weight-bold text-fourth">SERVICES</h1>

        <div class="row py-3 ">
            <div class="col col-sm-4 ">
              <div class="card mb-1">
                <a href="/hoc" class="nav-link">
                  <div class="card-body">
                      
                          <img src="/storage/images/violin.jpg" alt="" class="img-thumbnail" style="width:100%;height:200px;object-fit:cover;">
                      
                  </div>
                  <div class="card-footer bg-third">
                   <h5 class="text-center text-fith">Professional Coaching</h5>
                  </div>
                </a>
              </div>
            </div>
            <div class="col col-sm-4">
                <div class="card">
                    <a href="/lendbook" class="nav-link">
                      <div class="card-body">
                          
                              <img src="/storage/images/lendingbook_2.jpg" alt="" class="img-thumbnail" style="width:100%;height:200px;object-fit:cover;">
                          
                      </div>
                      <div class="card-footer bg-third">
                       <h5 class="text-center text-fith">Lending Books</h5>
                      </div>
                    </a>
                  </div>
            </div>
            
        </div>
    
   </div>
   <script>
    Swal.fire({
    icon: 'info',
    title: 'Mentee Application ',
    text: 'Now Open',
    footer: '<a href="https://www.kurafrica.com/mentee_application/create">Click Here to Apply</a>'
    })
</script>
@endsection
