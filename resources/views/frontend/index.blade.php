@extends('layouts.frontend')
@section('content')
<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 latest-news">
        <div class="slick_slider">
      @foreach($artikel as $data)
          <div class="single_iteam"> <a href="{{ route('single-post', $data->slug) }}"> 
           <img src="{{ asset('assets/img/artikel/'.$data->foto) }}"></a>
            <div class="slider_article">
            <iframe src="{{ $data->map }}" width="200px" height="200px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
               <h2><a class="slider_tittle" href="{{ route('single-post', $data->slug) }}">{{ $data->judul }}</a></h2>
              <p>{!! substr($data->konten,0,100) !!}.....</p>
            </div>
          </div>
          @endforeach
          {{-- <div class="single_iteam"> <a href="pages/single_page.html"> <img src="frontend/images/slider_img2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div> --}}
          {{-- <div class="single_iteam"> <a href="pages/single_page.html"> <img src="frontend/images/slider_img3.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="frontend/images/slider_img1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
            @foreach ($artikel as $data )
             <li>
                <div class="media"> <a href="{{ route('single-post', $data->slug) }}" class="media-left"> <img alt="" src="{{ asset('assets/img/artikel/'.$data->foto) }}"> </a>
                  <div class="media-body"> <a href="{{ route('single-post', $data->slug) }}" class="catg_title">{{ $data->judul }}</a> </div>
                </div>
              </li>
            </ul>
            @endforeach
            {{-- <div id="next-button"><i class="fa  fa-chevron-down"></img></div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Post</span></h2>
            @foreach($artikel as $data)
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                   <figure class="bsbig_fig"> <a href="{{ route('single-post', $data->slug) }}" class="featured_img"> <img src="{{ asset('assets/img/artikel/'.$data->foto) }}" alt="" height="200px" width="300px"> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{ route('single-post', $data->slug) }}">{{ $data->judul }}</a> </figcaption>
                    <p>{!! substr($data->konten,0,100) !!}....</p>
                  </figure>
                </li>
              </ul>
            </div>
            @endforeach
            <div class="single_post_content_right">
              <ul class="spost_nav">
               
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                
                <ul class="business_catgnav wow fadeInDown">
                  
                </ul>
                <ul class="spost_nav">
                 
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
            
                <ul class="business_catgnav">
                 
                </ul>
                <ul class="spost_nav">
                
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
           
            <ul class="photograph_nav  wow fadeInDown">
             
            </ul>
          </div>
          <div class="single_post_content">
            
            <div class="single_post_content_left">
              <ul class="business_catgnav">
            
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Tags</span></h2>
            <ul class="spost_nav populerpost">
             
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              
            </ul>
            <div class="tab-content ">
              <div role="tabpanel" class="tab-pane active tag" id="category">
                
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  @endsection
  @push('script')
   {{-- <script>
  

    var url ='api/json'
            $.ajax({
                  url: url + '/singlepost',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".singlepost").append(
                         `
                         <li>
                <div class="media"> <a href="{{ route('single-post', $data->slug) }}" class="media-left"> <img alt="" src="assets/img/artikel/${value.foto}"> </a>
                  <div class="media-body"> <a href="{{ route('single-post', $data->slug) }}" class="catg_title">${value.judul}</a> </div>
                </div>
              </li>
                        `
                        )
               })
          },
         error:function (gagal){
         console.log(gagal)
      }
})

     </script> --}}
      <script>
  

    var url ='api/json'
            $.ajax({
                  url: url + '/tag',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".tag").append(
                         `
              <ul>
                  <li class="cat-item"><a href="${value.slug}">${value.name}</a></li>
                </ul>
                        `
                        )
               })
          },
         error:function (gagal){
         console.log(gagal)
      }
})

     </script>
          {{-- <script>

    var url ='api/json'
            $.ajax({
                  url: url + '/populerpost',
                  datatype : 'json',
                  success:function(berhasil){
                       $.each(berhasil.data,function(key,value){
                       $(".populerpost").append(
                         `
             <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="frontend/images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
                        `
                        )
               })
          },
         error:function (gagal){
         console.log(gagal)
      }
})

     </script>  --}}
@endpush
 