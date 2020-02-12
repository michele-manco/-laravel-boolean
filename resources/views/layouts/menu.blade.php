<nav class="navbar navbar-expand-lg navbar-light bg-light">

  {{-- <div class="left-nav col-lg-4">
    <div class="row">



      <a class="navbar-brand" href="{{route('homepage')}}">
        <img src="https://www.boolean.careers/images/common/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

      </a>
    </div>
  </div>
    <div class="right-nav col-lg-8">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pagina-faq')}}">Faq</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">

          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>

    </div> --}}
  {{-- </div>

</div> --}}


 <div class="container-fluid">
  <div class="row">
      <div class="col-lg-5"></div>
      <a class="logo" href="{{route('homepage')}}">
        <img id="bool" src="https://www.boolean.careers/images/common/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

      </a>
     </div>
     <div class="col-lg-7">
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('pagina-faq')}}">Faq</a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Corso
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Dopo Corso</a>
               <a class="dropdown-item" href="#">Lezione Gratuita</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Something else here</a>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('pagina-lezionegratis')}}" tabindex="-1" aria-disabled="true">Lezione Gratuita</a>
           </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">

           <button id="ser" class="btn btn-outline-success my-2 my-sm-0" type="submit">CANDIDATI ORA</button>
         </form>
       </div>

     </div>
 </div>



</nav>
