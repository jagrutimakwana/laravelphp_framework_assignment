<!-- product section -->
@foreach($data as $d)
  <section class="product_section">
    <div class="container">
      <div class="product_heading">
       
      </div>
	  
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="{{url('gallery/upload/'.$d->file)}}" width="200" class="rounded-circle" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h3>
                  Name: {{$d->name}}<br>
				  Description: {{$d->description}}
                </h3>
                
              </div>
			  @endforeach
              <div class="like">
                
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            
          </div>
		  <div class="profile mt-5">
		           <button class="profile_button px-5">View Profile</button>
		  </div>	   
        </div>
        
</body>

</html>

 